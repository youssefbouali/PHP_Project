<?php
function delete_friends($conn){
	
	mysqli_query($conn, "DELETE FROM ashab WHERE (n_sender='{$_SESSION['n_user']}' AND n_recipient='{$_GET['n_user']}')
	OR
	(n_sender='{$_GET['n_user']}' AND n_recipient='{$_SESSION['n_user']}')
	");
}

?>