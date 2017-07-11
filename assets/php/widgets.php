<?php

include 'connection.php';

/**
 * date last sent widget
 */
$day1 = date("m/d/Y",strtotime("-1 day"));
$day2 = date("m/d/Y",strtotime("-2 day"));
$day3 = date("m/d/Y",strtotime("-3 day"));
$day4 = date("m/d/Y",strtotime("-4 day"));
$day5 = date("m/d/Y",strtotime("-5 day"));
$day6 = date("m/d/Y",strtotime("-6 day"));
$day7 = date("m/d/Y",strtotime("-7 day"));
function get_day_last_sent($day){
	global $conn;
	$sql = "SELECT COUNT( `Opt In Date`) AS dls FROM reporting_data WHERE `Event Type` = 'Sent' AND `Opt In Date` LIKE '"."$day"."%';";
	$result = $conn->query($sql);
	$temp = mysqli_fetch_assoc($result);
	return $temp['dls'];
}
if(get_day_last_sent($day1)>0){
	$dls = "0 days";
} elseif(get_day_last_sent($day2)>0) {
	$dls = "1 days";
} elseif(get_day_last_sent($day3)>0){
	$dls = "2 days";
} elseif(get_day_last_sent($day4)>0) {
	$dls = "4 days";
} elseif(get_day_last_sent($day5)>0) {
	$dls = "5 days";
} elseif(get_day_last_sent($day6)>0) {
	$dls = "5 days";
} elseif(get_day_last_sent($day7)>0) {
	$dls = "5 days";
} else {
	$dls = "more than 7 days";
}

/**
 * current time widget
 */

$ct = date("h:i:sa");



