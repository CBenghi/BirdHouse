<?php
error_reporting(E_ALL);
set_time_limit(0);

// Start TIMER
// -----------
$stimer = explode( ' ', microtime() );
$stimer = $stimer[1] + $stimer[0];

echo shell_exec('whoami');

$file = '/var/www/sounds/piano2.wav';

if (file_exists($file))
{
echo "Playing... $file";
$mp3player = ("/usr/bin/aplay");
$command = "$mp3player ".escapeshellarg(stripslashes($file));
//shell_exec("sudo modprobe snd_bcm2835");
//shell_exec("sudo amixer cset numid=3 1");
$pid = shell_exec("nohup $command >/dev/null 2>&1 ");
//shell_exec("$command > /tmp/log_1 2> /tmp/dev_log_2");
//shell_exec("aplay file.wav --device=sysdefault ");

} else
{
echo "The file $file does not exist";
}

// End TIMER
// ---------
$etimer = explode( ' ', microtime() );
$etimer = $etimer[1] + $etimer[0];
echo '<p style="margin:auto; text-align:center">';
printf( "Script timer: <b>%f</b> seconds.", ($etimer-$stimer) );
echo '</p>';
?>

<html>
<body>
<a href="index.html">Back to main page!</a>
</body>
</html>