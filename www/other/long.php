<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// Set session variables
$_SESSION["device1"] = "busy";
echo "Session Dev1 set.\n";
ob_end_flush();
flush();
session_write_close();
sleep(20);
session_start();
$_SESSION["device1"] = "";
echo "Session Dev1 freed.\n";
?>
</body>
</html>