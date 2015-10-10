<?php
// Start the session
session_start();
include_once("bird_array.php");
// header('Content-Type: application/json');

$chosenDevice = -1;
$chosenChannel = "";

$speakersDevice =   array( 0,  0,  1,  1,  2,  2,  3,  3,  4,  4 );
$speakersChannels = array("L","R","L","R","L","R","L","R","L","R");

$chosenDevice = -1;
$chosenChannel = "";

$preferredSequence = $preferredSpeaker[$BirdID];
for($testPref = 0; $testPref < 6; $testPref++)
{
	$testSpeakerId = $preferredSequence[$testPref];
	if ($testSpeakerId == -1)
		continue;
	
	$vName = "device" . $speakersDevice[$testSpeakerId];
	if ($_SESSION[$vName] != "busy") {
		$chosenDevice = $speakersDevice[$testSpeakerId];
		$chosenChannel = $speakersChannels[$testSpeakerId];
		break;
	}
}

echo '{ "response" : {';
if ($chosenDevice == -1)
{
	echo '"state" : "allbusy"';
}
else
{
	$command = 'aplay -Dhw:' . $chosenDevice . ',0 /var/www/sounds/' . $BirdID . $chosenChannel . '.wav';
	echo '"command" : "' . $command . '",';
	
	$vName = "device" . $chosenDevice;
	// mark the device busy
	$_SESSION[$vName] = "busy";
	
	echo '"vName" : "' . $vName . '",';
	session_write_close();
	ob_end_flush();
	flush();
	
	// play sound
	if (true)
	{
		exec($command, $output, $return_value);	
		echo '"mode" : "sound",';
	}
	else
	{
		sleep(5);
		echo '"mode" : "wait",';
	}
	session_start();
	$_SESSION[$vName] = "";
	echo '"state" : "played"';
}

echo '}}'; // closing response
?>