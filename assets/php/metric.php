<?php
/**
 * Chart 1 (pie chart)
 */
$open = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Open';";
$bounce = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE '%bounce';";
$unsubscribe = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Opt Out';";
/**
 * Chart 2 (line graph)
 */
$click = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%';";
$uclick = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%';";
$Open_9AM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Open' AND `Event Timestamp` LIKE '%2017 09%'";
$Click_9AM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 09%'";
$Uclick_9AM = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 09%'";
$Open_10AM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Open' AND `Event Timestamp` LIKE '%2017 10%'";
$Click_10AM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 10%'";
$Uclick_10AM = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 10%'";
$Open_11AM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Open' AND `Event Timestamp` LIKE '%2017 11%'";
$Click_11AM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 11%'";
$Uclick_11AM = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 11%'";
$Open_12PM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Open' AND `Event Timestamp` LIKE '%2017 12%'";
$Click_12PM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 12%'";
$Uclick_12PM = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 12%'";
$Open_1PM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Open' AND `Event Timestamp` LIKE '%2017 13%'";
$Click_1PM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 13%'";
$Uclick_1PM = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 13%'";
$Open_2PM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Open' AND `Event Timestamp` LIKE '%2017 14%'";
$Click_2PM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 14%'";
$Uclick_2PM = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 14%'";
$Open_3PM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Open' AND `Event Timestamp` LIKE '%2017 15%'";
$Click_3PM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 15%'";
$Uclick_3PM = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 15%'";
$Open_4PM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Open' AND `Event Timestamp` LIKE '%2017 16%'";
$Click_4PM = "SELECT COUNT(`Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 16%'";
$Uclick_4PM = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 16%'";
/**
 * Chart 3 (bar chart)
 */
$jan_sent_premium = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '01%' AND `Mailing Name` LIKE '%Premium%';";
$jan_sent_compact = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '01%' AND `Mailing Name` LIKE '%Compact%';";
$feb_sent_premium = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '02%' AND `Mailing Name` LIKE '%Premium%';";
$feb_sent_compact = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '02%' AND `Mailing Name` LIKE '%Compact%';";
$march_sent_premium = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '03%' AND `Mailing Name` LIKE '%Premium%';";
$march_sent_compact = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '03%' AND `Mailing Name` LIKE '%Compact%';";
$april_sent_premium = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '04%' AND `Mailing Name` LIKE '%Premium%';";
$april_sent_compact = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '04%' AND `Mailing Name` LIKE '%Compact%';";
$may_sent_premium = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '05%' AND `Mailing Name` LIKE '%Premium%';";
$may_sent_compact = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '05%' AND `Mailing Name` LIKE '%Compact%';";
$june_sent_premium = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '06%' AND `Mailing Name` LIKE '%Premium%';";
$june_sent_compact = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '06%' AND `Mailing Name` LIKE '%Compact%';";
$july_sent_premium = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '07%' AND `Mailing Name` LIKE '%Premium%';";
$july_sent_compact = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '07%' AND `Mailing Name` LIKE '%Compact%';";
$august_sent_premium = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '08%' AND `Mailing Name` LIKE '%Premium%';";
$august_sent_compact = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '08%' AND `Mailing Name` LIKE '%Compact%';";
$september_sent_premium = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '09%' AND `Mailing Name` LIKE '%Premium%';";
$september_sent_compact = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '09%' AND `Mailing Name` LIKE '%Compact%';";
$october_sent_premium = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '10%' AND `Mailing Name` LIKE '%Premium%';";
$october_sent_compact = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '10%' AND `Mailing Name` LIKE '%Compact%';";
$november_sent_premium = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '11%' AND `Mailing Name` LIKE '%Premium%';";
$november_sent_compact = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '11%' AND `Mailing Name` LIKE '%Compact%';";
$december_sent_premium = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '12%' AND `Mailing Name` LIKE '%Premium%';";
$december_sent_compact = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `reporting_data` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '12%' AND `Mailing Name` LIKE '%Compact%';";
