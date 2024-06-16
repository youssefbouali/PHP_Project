<?php
function nuser_not_found($conn){
	
	$query = mysqli_query($conn, "SELECT id FROM users WHERE n_user='{$_GET['n_user']}' AND n_user !='{$_SESSION['n_user']}'");
	return mysqli_num_rows($query);
}


function creat_cov($conn, $sujet,$message){
	mysqli_query($conn, "
	INSERT INTO inbox (id_cov,sujet_cov) VALUES('','{$sujet}')
	");
	
	$id_cov = mysqli_insert_id($conn);
	mysqli_query($conn, "
	INSERT INTO message (id_cov,n_recipient) VALUES('$id_cov','{$_GET['n_user']}')
	");
	
	mysqli_query($conn, "
	INSERT INTO mes(id_cov,n_sender,message,date_message) VALUES('$id_cov','{$_SESSION['n_user']}','{$message}',NOW())
	");
	
}

?>