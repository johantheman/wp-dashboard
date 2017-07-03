<?php
/** chartdata.php */
function query($sql){
	global $conn;
	$result = $conn->query($sql);
	$temp = mysqli_fetch_assoc($result);
	return $temp['Total'];
}
