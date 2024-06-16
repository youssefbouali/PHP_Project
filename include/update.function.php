<?php

function update_info_member($conn, $n_user,$n_email,$n_password,$n_city){
	$query = mysqli_query($conn, "UPDATE users SET n_user='$n_user',n_email='$n_email',n_password='$n_password',n_city='$n_city' WHERE n_user='{$_SESSION['n_user']}'") or die(mysqli_error($conn));
	
	}
	

function update_avatar_profile($conn, $n_avatar_tmp,$n_avatar){
	
	move_uploaded_file($n_avatar_tmp,'avatar/'.$n_avatar);
	mysqli_query($conn, "UPDATE users SET n_avatar='{$_FILES['n_avatar']['name']}' WHERE n_user='{$_SESSION['n_user']}'") or die(mysqli_error($conn));
} 


?>