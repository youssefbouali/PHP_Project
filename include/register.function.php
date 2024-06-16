<?php
/*
CREATE TABLE  `users` (
 `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `n_user` VARCHAR( 255 ) NOT NULL ,
 `n_email` VARCHAR( 255 ) NOT NULL ,
 `n_password` VARCHAR( 255 ) NOT NULL ,
 `n_city` VARCHAR( 255 ) NOT NULL
) ENGINE = MYISAM ;

*/

function s_users($conn, $n_user,$n_email,$n_password,$n_city){
	
	
	$n_password = md5($n_password);
	mysqli_query($conn, "INSERT INTO users(id,n_user,n_email,n_password,n_city,n_avatar)
	VALUES('','$n_user','$n_email','$n_password','$n_city','default.png')
	");
}

function n_email_existe($conn, $n_email){
	
	$query = mysqli_query($conn, "SELECT id FROM users WHERE n_email='$n_email'");
	return mysqli_num_rows($query);
}

function n_user_existe($conn, $n_user){
	
	$query = mysqli_query($conn, "SELECT id FROM users WHERE n_user='$n_user'");
	return mysqli_num_rows($query);
}



?>