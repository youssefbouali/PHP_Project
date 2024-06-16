<?php

function recover_invit($conn){
	
	$query = mysqli_query($conn, "
	SELECT n_sender,date_send,active,n_avatar FROM ashab INNER JOIN users ON users.n_user = ashab.n_sender
	WHERE n_recipient='{$_SESSION['n_user']}'
	ORDER BY date_send DESC
	");
	$results = array();
	while($row = mysqli_fetch_assoc($query)){
		
		$results[] = $row;
	}
	return $results;
}

function invit_accepted($conn){
	
	$query = mysqli_query($conn, "
	SELECT n_recipient FROM ashab WHERE n_sender='{$_SESSION['n_user']}' AND active=1
	");
	$results = array();
	while($row = mysqli_fetch_assoc($query)){
		$results[] = $row;		
	}
	return $results;
}



?>