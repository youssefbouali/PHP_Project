<?php
function notification_invit($conn){
	
	$query = mysqli_query($conn, "SELECT id FROM ashab WHERE (n_recipient='{$_SESSION['n_user']}' AND date_send = date_confirm)
	OR 
	(n_sender='{$_SESSION['n_user']}' AND date_confirm > date_seen)
	");
	return mysqli_num_rows($query);
}

function update_date_seen($conn){
	
	mysqli_query($conn, "
	UPDATE ashab SET date_seen=NOW() WHERE n_sender='{$_SESSION['n_user']}' AND active=1
	");
}



?>