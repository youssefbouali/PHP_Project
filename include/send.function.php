<?php


function save_invit($conn){
	
	$query = mysqli_query($conn, "INSERT INTO ashab(id_invit, n_sender, n_recipient, date_send, date_confirm, date_seen, active)
	VALUES 
	('','{$_SESSION['n_user']}', '{$_GET['n_user']}', NOW(),NOW(), NOW(),0)
	");
	
}


?>