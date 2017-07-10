<?php

/** chartdata.php */
function query($sql){
	global $conn;
	$result = $conn->query($sql);
	$temp = mysqli_fetch_assoc($result);
	return $temp['Total'];
}

/** table.php */
$day = array();
$start = '07/01/2017';
$end = date("m/d/Y",strtotime("-0 day"));
for ($n = 0; $start <  $end ; $n++) {
	$end = date("m/d/Y",strtotime("-".$n." day"));
	$day[$n] = $end;
}
$day = array_reverse($day);

function mailer2($event,$no,$date){
	global $conn;
	global $day;
	$sql = "SELECT COUNT(`Email`) AS Metric FROM `reporting_data` WHERE `Event Type` LIKE '%"
	       ."$event"."%' AND `Mailing Name` LIKE '%(Mail "
	       ."$no".")%' AND `Opt In Date` LIKE '"."$date"."'";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			$value = $row['Metric'];
		}
	} else {
		$value = 0;
	} return $value;
}


function mailer($event,$no,$date){
	global $conn;
	global $day;
	$sql = "SELECT COUNT(DISTINCT `Email`) AS Metric FROM `reporting_data` WHERE `Event Type` LIKE '%"
	       ."$event"."%' AND `Mailing Name` LIKE '%(Mail "
	       ."$no".")%' AND `Opt In Date` LIKE '"."$date"."'";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			$value = $row['Metric'];
		}
	} else {
		$value = 0;
	} return $value;
}

/**Compact mailer functions **/
function mailer2_compact($event,$no,$date){
	global $conn;
	global $day;
	$sql = "SELECT COUNT(`Email`) AS Metric FROM `reporting_data` WHERE `Event Type` LIKE '%"."$event"."%' AND `Mailing Name` LIKE '"."%_Mail"."$no"."%' AND `Opt In Date` LIKE '"."$date"."';";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			$value = $row['Metric'];
		}
	} else {
		$value = 0;
	} return $value;
}


function mailer_compact($event,$no,$date){
	global $conn;
	global $day;
	$sql = "SELECT COUNT(DISTINCT `Email`) AS Metric FROM `reporting_data` WHERE `Event Type` LIKE '%"."$event"."%' AND `Mailing Name` LIKE '"."%_Mail"."$no"."%' AND `Opt In Date` LIKE '"."$date"."';";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			$value = $row['Metric'];
		}
	} else {
		$value = 0;
	} return $value;
}


function display_row_premium($i){
	global $day;
	echo '<table class="table table-hover table-striped">
			 <thead>
                                            <th>Date</th>
                                            <th>Sent</th>
                                            <th>Rec</th>
                                            <th>Rec %</th>
                                            <th>TOpen</th>
                                            <th>UOpen</th>
                                            <th>Open %</th>
                                            <th>TClick</th>
                                            <th>UClick</th>
                                            <th>Click %</th>
                                            <th>Bounced</th>
                                            <th>Bounced %</th>
                                            <th>Unsub</th>
                                            </thead>

        <tbody>';
	foreach($day as $value){
		$sent = mailer("Sent", $i, $value);
		$open = mailer("Open", $i, $value);
		$open2 = mailer2("Open", $i, $value);
		$click = mailer("Click_Through", $i, $value);
		$click2 = mailer2("Click_Through", $i, $value);
		$hb = mailer("Hard_Bounce", $i, $value);
		$sb = mailer("Soft_Bounce", $i, $value);
		$oo = mailer("Opt_Out", $i, $value);
		$b = $hb + $sb;
		$r = $sent - $b;
		$r_p = round(($r)/$sent*100,2);
		$o_p = round(($open)/$sent*100,2);
		$o_p2 = round(($open2)/$sent*100,2);
		$c_p = round(($click)/$open*100,2);
		$c_p2 = round(($click2)/$open*100,2);
		$b_p = round(($b)/$sent*100,2);
		echo '<tr>
               <td align="center" style="border-left: 1px;" >'.$value.'</td>
               <td align="center">'.$sent.'</td>
               <td align="center">'.$r.'</td>
                   <td align="center">'.$r_p.'</td>
                   <td align="center">'.$open2.'</td>
               <td align="center">'.$open.'</td>
                   <td align="center">'.$o_p.'</td>
                  <td align="center">'.$click2.'</td>
               <td align="center">'.$click.'</td>
                   <td align="center">'.$c_p.'</td>
               <td align="center">'.$b.'</td>
                   <td align="center">'.$b_p.'</td>
               <td align="center">'.$oo.'</td>
	               </tr>';
	}
	echo ' </tr>
                </tbody>
              </table>
             ';

}


function display_row_compact($i){
	global $day;
	echo '<table class="table table-hover table-striped">
			 <thead>
                                            <th>Date</th>
                                            <th>Sent</th>
                                            <th>Rec</th>
                                            <th>Rec %</th>
                                            <th>TOpen</th>
                                            <th>UOpen</th>
                                            <th>Open %</th>
                                            <th>TClick</th>
                                            <th>UClick</th>
                                            <th>Click %</th>
                                            <th>Bounced</th>
                                            <th>Bounced %</th>
                                            <th>Unsub</th>
                                            </thead>

        <tbody>';
	foreach($day as $value){
		$sent = mailer_compact("Sent", $i, $value);
		$open = mailer_compact("Open", $i, $value);
		$open2 = mailer2_compact("Open", $i, $value);
		$click = mailer_compact("Click_Through", $i, $value);
		$click2 = mailer2_compact("Click_Through", $i, $value);
		$hb = mailer_compact("Hard_Bounce", $i, $value);
		$sb = mailer_compact("Soft_Bounce", $i, $value);
		$oo = mailer_compact("Opt_Out", $i, $value);
		$b = $hb + $sb;
		$r = $sent - $b;
		$r_p = round(($r)/$sent*100,2);
		$o_p = round(($open)/$sent*100,2);
		$o_p2 = round(($open2)/$sent*100,2);
		$c_p = round(($click)/$open*100,2);
		$c_p2 = round(($click2)/$open*100,2);
		$b_p = round(($b)/$sent*100,2);
		echo '<tr>
               <td align="center" style="border-left: 1px;" >'.$value.'</td>
               <td align="center">'.$sent.'</td>
               <td align="center">'.$r.'</td>
                   <td align="center">'.$r_p.'</td>
                   <td align="center">'.$open2.'</td>
               <td align="center">'.$open.'</td>
                   <td align="center">'.$o_p.'</td>
                  <td align="center">'.$click2.'</td>
               <td align="center">'.$click.'</td>
                   <td align="center">'.$c_p.'</td>
               <td align="center">'.$b.'</td>
                   <td align="center">'.$b_p.'</td>
               <td align="center">'.$oo.'</td>
	               </tr>';
	}
	echo ' </tr>
                </tbody>
              </table>
             ';

}


