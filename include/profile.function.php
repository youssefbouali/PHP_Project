<?php 

// الدالة التي تقوم بجلب معلومات العضو
function recover_info_member($conn){
	$results = array();
	$n_user = mysqli_real_escape_string($conn, htmlentities($_GET['n_user']));
	$query = mysqli_query($conn, "SELECT * FROM users WHERE n_user='$n_user'");
	
	while($rows = mysqli_fetch_assoc($query)){
		$results[] = $rows;
		
	}
	return $results;
}

// الدالة التي تقوم بإرسال دعوة صداقة
function request_existe($conn){
	
	$query = mysqli_query($conn, "SELECT id FROM ashab 
	WHERE (n_sender = '{$_SESSION['n_user']}' AND n_recipient = '{$_GET['n_user']}')
	OR
	(n_sender = '{$_GET['n_user']}' AND n_recipient = '{$_SESSION['n_user']}')
	");
	return mysqli_num_rows($query);
	
}

// انتظار القبول
function accept_invit($conn){
	
	
	$query = mysqli_query($conn, "SELECT active FROM ashab WHERE (n_sender = '{$_SESSION['n_user']}' AND n_recipient = '{$_GET['n_user']}')
	OR
	(n_sender = '{$_GET['n_user']}' AND n_recipient = '{$_SESSION['n_user']}')
	
	");
	
	while ($row = mysqli_fetch_assoc($query)){
		
		if($row['active'] == 0){
		return false;
}else{
	
	return true;
}
}
}

function send_invit($conn){
	
	$query = mysqli_query($conn, "SELECT id FROM ashab WHERE n_sender='{$_SESSION['n_user']}' AND n_recipient='{$_GET['n_user']}'");
	return mysqli_num_rows($query);
	}


























?>