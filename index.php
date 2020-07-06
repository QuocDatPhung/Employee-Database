<?php
	include_once 'includes/db.inc.php';
	
	echo "Our employees: " . "</br></br>";
	$sql = "SELECT * FROM employee";
	$result = mysqli_query($conn, $sql);
	$num_row = mysqli_num_rows($result);
	if ($num_row > 0){
		while ($row = mysqli_fetch_assoc($result)){
			echo $row['name'] . "</br>";
		}
	}