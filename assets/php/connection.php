<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dstv_welcome_reporting";
$port = "3306";
$socket = '/tmp/mysqld.sock'; // or: /tmp/mysqld.sock

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$open = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Open';";
$result = $conn->query($open);
$temp = mysqli_fetch_assoc($result);
$open = $temp['Total'];

$bounce = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE '%bounce';";
$result = $conn->query($bounce);
$temp = mysqli_fetch_assoc($result);
$bounce = $temp['Total'];

$unsubscribe = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Opt Out';";
$result = $conn->query($unsubscribe);
$temp = mysqli_fetch_assoc($result);
$unsubscribe = $temp['Total'];

//

$click = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%';";
$result = $conn->query($click);
$temp = mysqli_fetch_assoc($result);
$click = $temp['Total'];

$uclick = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%';";
$result = $conn->query($uclick);
$temp = mysqli_fetch_assoc($result);
$uclick = $temp['Total'];

$Open_9AM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Open' AND `Event Timestamp` LIKE '%2017 09%'";
$result = $conn->query($Open_9AM);
$temp = mysqli_fetch_assoc($result);
$Open_9AM = $temp['Total'];

$Click_9AM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 09%'";
$result = $conn->query($Click_9AM);
$temp = mysqli_fetch_assoc($result);
$Click_9AM = $temp['Total'];

$Uclick_9AM = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 09%'";
$result = $conn->query($Uclick_9AM);
$temp = mysqli_fetch_assoc($result);
$Uclick_9AM = $temp['Total'];

$Open_10AM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Open' AND `Event Timestamp` LIKE '%2017 10%'";
$result = $conn->query($Open_10AM);
$temp = mysqli_fetch_assoc($result);
$Open_10AM = $temp['Total'];

$Click_10AM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 10%'";
$result = $conn->query($Click_10AM);
$temp = mysqli_fetch_assoc($result);
$Click_10AM = $temp['Total'];

$Uclick_10AM = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 10%'";
$result = $conn->query($Uclick_10AM);
$temp = mysqli_fetch_assoc($result);
$Uclick_10AM = $temp['Total'];

$Open_11AM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Open' AND `Event Timestamp` LIKE '%2017 11%'";
$result = $conn->query($Open_11AM);
$temp = mysqli_fetch_assoc($result);
$Open_11AM = $temp['Total'];

$Click_11AM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 11%'";
$result = $conn->query($Click_11AM);
$temp = mysqli_fetch_assoc($result);
$Click_11AM = $temp['Total'];

$Uclick_11AM = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 11%'";
$result = $conn->query($Uclick_11AM);
$temp = mysqli_fetch_assoc($result);
$Uclick_11AM = $temp['Total'];

$Open_12PM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Open' AND `Event Timestamp` LIKE '%2017 12%'";
$result = $conn->query($Open_12PM);
$temp = mysqli_fetch_assoc($result);
$Open_12PM = $temp['Total'];

$Click_12PM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 12%'";
$result = $conn->query($Click_12PM);
$temp = mysqli_fetch_assoc($result);
$Click_12PM = $temp['Total'];

$Uclick_12PM = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 12%'";
$result = $conn->query($Uclick_12PM);
$temp = mysqli_fetch_assoc($result);
$Uclick_12PM = $temp['Total'];

$Open_1PM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Open' AND `Event Timestamp` LIKE '%2017 13%'";
$result = $conn->query($Open_1PM);
$temp = mysqli_fetch_assoc($result);
$Open_1PM = $temp['Total'];

$Click_1PM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 13%'";
$result = $conn->query($Click_1PM);
$temp = mysqli_fetch_assoc($result);
$Click_1PM = $temp['Total'];

$Uclick_1PM = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 13%'";
$result = $conn->query($Uclick_1PM);
$temp = mysqli_fetch_assoc($result);
$Uclick_1PM = $temp['Total'];

$Open_2PM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Open' AND `Event Timestamp` LIKE '%2017 14%'";
$result = $conn->query($Open_2PM);
$temp = mysqli_fetch_assoc($result);
$Open_2PM = $temp['Total'];

$Click_2PM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 14%'";
$result = $conn->query($Click_2PM);
$temp = mysqli_fetch_assoc($result);
$Click_2PM = $temp['Total'];

$Uclick_2PM = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 14%'";
$result = $conn->query($Uclick_2PM);
$temp = mysqli_fetch_assoc($result);
$Uclick_2PM = $temp['Total'];

$Open_3PM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Open' AND `Event Timestamp` LIKE '%2017 15%'";
$result = $conn->query($Open_3PM);
$temp = mysqli_fetch_assoc($result);
$Open_3PM = $temp['Total'];


$Click_3PM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 15%'";
$result = $conn->query($Click_3PM);
$temp = mysqli_fetch_assoc($result);
$Click_3PM = $temp['Total'];

$Uclick_3PM = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 15%'";
$result = $conn->query($Uclick_3PM);
$temp = mysqli_fetch_assoc($result);
$Uclick_3PM = $temp['Total'];

$Open_4PM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Open' AND `Event Timestamp` LIKE '%2017 16%'";
$result = $conn->query($Open_4PM);
$temp = mysqli_fetch_assoc($result);
$Open_4PM = $temp['Total'];

$Click_4PM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 16%'";
$result = $conn->query($Click_4PM);
$temp = mysqli_fetch_assoc($result);
$Click_4PM = $temp['Total'];

$Uclick_4PM = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 16%'";
$result = $conn->query($Uclick_4PM);
$temp = mysqli_fetch_assoc($result);
$Uclick_4PM = $temp['Total'];

//these are to get the sent totals......................

$jan_sent_premium = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '01%' AND `Mailing Name` LIKE '%Premium%';";
$result = $conn->query($jan_sent_premium);
$temp = mysqli_fetch_assoc($result);
$jan_sent_premium = $temp['Total'];
$jan_sent_compact = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '01%' AND `Mailing Name` LIKE '%Compact%';";
$result = $conn->query($jan_sent_compact);
$temp = mysqli_fetch_assoc($result);
$jan_sent_compact = $temp['Total'];

$feb_sent_premium = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '02%' AND `Mailing Name` LIKE '%Premium%';";
$result = $conn->query($feb_sent_premium);
$temp = mysqli_fetch_assoc($result);
$feb_sent_premium = $temp['Total'];
$feb_sent_compact = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '02%' AND `Mailing Name` LIKE '%Compact%';";
$result = $conn->query($feb_sent_compact);
$temp = mysqli_fetch_assoc($result);
$feb_sent_compact = $temp['Total'];

$march_sent_premium = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '03%' AND `Mailing Name` LIKE '%Premium%';";
$result = $conn->query($march_sent_premium);
$temp = mysqli_fetch_assoc($result);
$march_sent_premium = $temp['Total'];
$march_sent_compact = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '03%' AND `Mailing Name` LIKE '%Compact%';";
$result = $conn->query($march_sent_compact);
$temp = mysqli_fetch_assoc($result);
$march_sent_compact = $temp['Total'];

$april_sent_premium = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '04%' AND `Mailing Name` LIKE '%Premium%';";
$result = $conn->query($april_sent_premium);
$temp = mysqli_fetch_assoc($result);
$april_sent_premium = $temp['Total'];
$april_sent_compact = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '04%' AND `Mailing Name` LIKE '%Compact%';";
$result = $conn->query($april_sent_compact);
$temp = mysqli_fetch_assoc($result);
$april_sent_compact = $temp['Total'];

$may_sent_premium = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '05%' AND `Mailing Name` LIKE '%Premium%';";
$result = $conn->query($may_sent_premium);
$temp = mysqli_fetch_assoc($result);
$may_sent_premium = $temp['Total'];
$may_sent_compact = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '05%' AND `Mailing Name` LIKE '%Compact%';";
$result = $conn->query($may_sent_compact);
$temp = mysqli_fetch_assoc($result);
$may_sent_compact = $temp['Total'];

$june_sent_premium = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '06%' AND `Mailing Name` LIKE '%Premium%';";
$result = $conn->query($june_sent_premium);
$temp = mysqli_fetch_assoc($result);
$june_sent_premium = $temp['Total'];
$june_sent_compact = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '06%' AND `Mailing Name` LIKE '%Compact%';";
$result = $conn->query($june_sent_compact);
$temp = mysqli_fetch_assoc($result);
$june_sent_compact = $temp['Total'];

$july_sent_premium = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '07%' AND `Mailing Name` LIKE '%Premium%';";
$result = $conn->query($july_sent_premium);
$temp = mysqli_fetch_assoc($result);
$july_sent_premium = $temp['Total'];
$july_sent_compact = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '07%' AND `Mailing Name` LIKE '%Compact%';";
$result = $conn->query($july_sent_compact);
$temp = mysqli_fetch_assoc($result);
$july_sent_compact = $temp['Total'];

$august_sent_premium = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '08%' AND `Mailing Name` LIKE '%Premium%';";
$result = $conn->query($august_sent_premium);
$temp = mysqli_fetch_assoc($result);
$august_sent_premium = $temp['Total'];
$august_sent_compact = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '08%' AND `Mailing Name` LIKE '%Compact%';";
$result = $conn->query($august_sent_compact);
$temp = mysqli_fetch_assoc($result);
$august_sent_compact = $temp['Total'];

$september_sent_premium = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '09%' AND `Mailing Name` LIKE '%Premium%';";
$result = $conn->query($september_sent_premium);
$temp = mysqli_fetch_assoc($result);
$september_sent_premium = $temp['Total'];
$september_sent_compact = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '09%' AND `Mailing Name` LIKE '%Compact%';";
$result = $conn->query($september_sent_compact);
$temp = mysqli_fetch_assoc($result);
$september_sent_compact = $temp['Total'];

$october_sent_premium = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '10%' AND `Mailing Name` LIKE '%Premium%';";
$result = $conn->query($october_sent_premium);
$temp = mysqli_fetch_assoc($result);
$october_sent_premium = $temp['Total'];
$october_sent_compact = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '10%' AND `Mailing Name` LIKE '%Compact%';";
$result = $conn->query($october_sent_compact);
$temp = mysqli_fetch_assoc($result);
$october_sent_compact = $temp['Total'];

$november_sent_premium = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '11%' AND `Mailing Name` LIKE '%Premium%';";
$result = $conn->query($november_sent_premium);
$temp = mysqli_fetch_assoc($result);
$november_sent_premium = $temp['Total'];
$november_sent_compact = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '11%' AND `Mailing Name` LIKE '%Compact%';";
$result = $conn->query($november_sent_compact);
$temp = mysqli_fetch_assoc($result);
$november_sent_compact = $temp['Total'];

$december_sent_premium = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '12%' AND `Mailing Name` LIKE '%Premium%';";
$result = $conn->query($december_sent_premium);
$temp = mysqli_fetch_assoc($result);
$december_sent_premium = $temp['Total'];
$december_sent_compact = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '12%' AND `Mailing Name` LIKE '%Compact%';";
$result = $conn->query($december_sent_compact);
$temp = mysqli_fetch_assoc($result);
$december_sent_compact = $temp['Total'];
