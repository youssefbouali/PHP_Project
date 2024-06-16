<?php

$data = member_connected($conn); 

foreach($data  as $info_u){   
	
	echo"<div class='succ'>مرحبا بك ".$info_u['n_user']."</div>";
}

if(!isset($_SESSION['n_user'])){
	Header('location:index.php?page=login');
}

?>

<div class="info">

<?php
foreach($data  as $info_u){
	}
?>
<div class="menuinfo">

<img class="avatarimg" src="avatar/<?php echo $info_u['n_avatar']?>"/> 
<a class="avtup" href="index.php?page=update">تغيير صورتك</a>
<li><p><strong>اسم المستخدم : </strong><?php echo $info_u['n_user']?></p></li>
<li><p><strong>الايميل : </strong><?php echo $info_u['n_email']?></p></li>
<li><p><strong>الدولة : </strong><?php echo $info_u['n_city']?></p></li>
</div>

</div>