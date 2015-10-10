<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
for($x = 0; $x < 5; $x++)
{
	$vName = "device" . $x;
	if ($_SESSION[$vName] == "busy")
	{
		echo $vName . " is busy<br>";
	}
	else
	{
		echo $vName . " is ready for use<br>";
	}
}
?>
</body>
</html>