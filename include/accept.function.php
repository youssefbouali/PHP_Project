<?php

function accept_invit($conn){
	mysqli_query($conn, "UPDATE ashab SET active=1,date_confirm=NOW() WHERE n_sender='{$_GET['n_user']}' AND n_recipient='{$_SESSION['n_user']}'
	
	");
	
}

?>