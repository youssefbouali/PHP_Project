<?php 

function recover_cov($conn){
	
	$results = array();
	$sql = mysqli_query($conn, "
	SELECT 
	inbox.id_cov,
	inbox.sujet_cov,
	users.n_user,
	users.n_avatar,
	mes.date_message
	
	FROM inbox
	LEFT JOIN mes ON inbox.id_cov = mes.id_cov
	INNER JOIN message ON inbox.id_cov = message.id_cov
	INNER JOIN users ON users.n_user = mes.n_sender
	WHERE n_recipient = '{$_SESSION['n_user']}'
	GROUP BY inbox.id_cov
	ORDER BY mes.date_message
	") or die(mysqli_error($conn));
	
	while($row = mysqli_fetch_assoc($sql)){
		$results[] =$row;
		
	}
	return $results;
	
	
}


?>