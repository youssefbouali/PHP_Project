<?php
function list_friends_sender($conn){
	
	$results = array();
	$query = mysqli_query($conn, "SELECT n_recipient, n_avatar FROM ashab INNER JOIN users ON users.n_user= ashab.n_recipient WHERE n_sender='{$_SESSION['n_user']}' AND active=1");
	
	while($row = mysqli_fetch_assoc($query)){
		$results[] = $row;
		
	}
	return $results;
}


function list_friends_recipient($conn){
	
	$results = array();
	$query = mysqli_query($conn, "SELECT n_sender, n_avatar FROM ashab INNER JOIN users ON users.n_user= ashab.n_sender WHERE n_recipient='{$_SESSION['n_user']}' AND active=1");
	
	while($row = mysqli_fetch_assoc($query)){
		$results[] = $row;
		
	}
	return $results;
}
?>