<?php

function reject_invit($conn){
	
	mysqli_query($conn, "DELETE FROM ashab WHERE n_sender='{$_GET['n_user']}' AND n_recipient='{$_SESSION['n_user']}'");
}

?>