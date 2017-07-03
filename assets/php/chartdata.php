<?php
require 'connection.php';
require 'metric.php';

function query($sql){
	global $conn;
	$result = $conn->query($sql);
	$temp = mysqli_fetch_assoc($result);
	return $temp['Total'];
}

$open = query($open);
$bounce = query($bounce);
$unsubscribe = query($unsubscribe);
$Open_9AM = query($Open_9AM);
$Open_10AM = query($Open_10AM);
$Open_11AM = query($Open_11AM);
$Open_12PM = query($Open_12PM);
$Open_1PM = query($Open_1PM);
$Open_2PM = query($Open_2PM);
$Open_3PM = query($Open_3PM);
$Open_4PM = query($Open_4PM);
$Click_9AM = query($Click_9AM);
$Click_10AM = query($Click_10AM);
$Click_11AM = query($Click_11AM);
$Click_12PM = query($Click_12PM);
$Click_1PM = query($Click_1PM);
$Click_2PM = query($Click_2PM);
$Click_3PM = query($Click_3PM);
$Click_4PM = query($Click_4PM);
$Uclick_9AM = query($Uclick_9AM);
$Uclick_10AM = query($Uclick_10AM);
$Uclick_11AM = query($Uclick_11AM);
$Uclick_12PM = query($Uclick_12PM);
$Uclick_1PM = query($Uclick_1PM);
$Uclick_2PM = query($Uclick_2PM);
$Uclick_3PM = query($Uclick_3PM);
$Uclick_4PM = query($Uclick_4PM);
$jan_sent_premium = query($jan_sent_premium);
$jan_sent_compact = query($jan_sent_compact);
$feb_sent_premium = query($feb_sent_premium);
$feb_sent_compact = query($feb_sent_compact);
$march_sent_premium = query($march_sent_premium);
$march_sent_compact = query($march_sent_compact);
$april_sent_premium = query($april_sent_premium);
$april_sent_compact = query($april_sent_compact);
$may_sent_premium = query($may_sent_premium);
$may_sent_compact = query($may_sent_compact);
$june_sent_premium = query($june_sent_premium);
$june_sent_compact = query($june_sent_compact);
$july_sent_premium = query($july_sent_premium);
$july_sent_compact = query($july_sent_compact);
$august_sent_premium = query($august_sent_premium);
$august_sent_compact = query($august_sent_compact);
$september_sent_premium = query($september_sent_premium);
$september_sent_compact = query($september_sent_compact);
$october_sent_premium = query($october_sent_premium);
$october_sent_compact = query($october_sent_compact);
$november_sent_premium = query($november_sent_premium);
$november_sent_compact = query($november_sent_compact);
$december_sent_premium = query($december_sent_premium);
$december_sent_compact = query($december_sent_compact);

