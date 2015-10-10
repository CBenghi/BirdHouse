<?php
$BirdNames = array(
	"Long-tailed Tit",
	"House Sparrow",
	"Blackbird",
	"Blue Tit",
	"Starling",
	"Woodpigeons",
	"Chaffin",
	"Great Tit",
	"Goldfinch",
	"Robin"
	);

$preferredSpeaker = array(
	array( 0, 1, 2,-1,-1,-1,-1,-1,-1,-1),
	array( 1, 0, 2, 3,-1,-1,-1,-1,-1,-1),
	array( 2, 3, 1, 4,-1,-1,-1,-1,-1,-1),
	array( 3, 4, 5, 6, 2,-1,-1,-1,-1,-1),
	array( 4, 5, 3, 6, 7,-1,-1,-1,-1,-1),
	array( 5, 4, 6, 3, 7,-1,-1,-1,-1,-1),
	array( 6, 7, 5, 3, 4,-1,-1,-1,-1,-1),
	array( 7, 6, 5, 9, 4, 3,-1,-1,-1,-1),
	array( 8, 9, 6,-1,-1,-1,-1,-1,-1,-1),
	array( 9, 8, 7, 6,-1,-1,-1,-1,-1,-1)
	);
	
$Birdcount = 10;
$BirdID = isset($_GET['Id']) ? (int) $_GET['Id'] : 5;
if ($BirdID >= $Birdcount)
	$BirdID = $Birdcount - 1;
if ($BirdID < 0)
	$BirdID = 0;
?>