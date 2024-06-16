<?php

function delete_invit($conn){
	
	mysqli_query($conn, "DELETE FROM ashab WHERE n_sender='{$_SESSION['n_user']}' AND n_recipient='{$_GET['n_user']}'");
}

?>