<?php


function check_user_pass($conn, $n_user,$n_password){
	
	$n_user = htmlentities(trim($_POST['n_user']));
	$n_password = htmlentities(trim($_POST['n_password']));
	$n_password = md5($n_password);

	$query = mysqli_query($conn, "SELECT n_user,n_password FROM users WHERE n_user='$n_user' AND n_password='$n_password'");
	
	$rows = mysqli_num_rows($query);
	return $rows;

	
}



?>