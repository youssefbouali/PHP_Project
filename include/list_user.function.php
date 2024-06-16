<?php

function recover_users($conn){
	
	$results = array();
	$query = mysqli_query($conn, "SELECT n_user,n_avatar FROM users WHERE n_user!='{$_SESSION['n_user']}'");
	
	while($rows = mysqli_fetch_assoc($query)){
		
		$results[] = $rows;
	}
	return $results;
	
}

?>