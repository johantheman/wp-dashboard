<?php
require 'connection.php';



function read(){
	global $conn;
	$read = "SELECT * FROM `notes`";
	$result = $conn->query($read);
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			echo '<tr>
                    <td>
                        <label class="checkbox">
                            <input type="checkbox" value="" data-toggle="checkbox">
                        </label>
                    </td>
                   <td>';
			echo $row['data'];
			echo '</td>
                    <td class="td-actions text-right">
                       <a href="#"> <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                            <i class="fa fa-edit"></i>
                        </button></a>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                            <i class="fa fa-times"></i>
                        </button>
                    </td>
                </tr>';

		}
	} else {
		echo 'No Rows Found';
	}


}

function write($option){
	global $conn;
	$write = "INSERT INTO `notes`(`data`) VALUES('"."$option"."')";
	if($result = $conn->query($write)){
		return 'done';
	} else {
		return 'not done';
	}

}

