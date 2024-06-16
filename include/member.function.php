<?php

function member_connected($conn){
	
	$data = array();
	$n_user = $_SESSION['n_user'];
	$query = mysqli_query($conn, "SELECT * FROM users WHERE n_user='$n_user'");
	
	while($rows = mysqli_fetch_assoc($query)){
		$data[] = $rows;
		
	}
	return $data;
	
}

?>