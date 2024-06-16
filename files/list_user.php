<?php 
$n_users_avatars = recover_users($conn);


if(!empty($n_users_avatars)){
foreach($n_users_avatars as $n_avatar_user){
	
	

?>

<div class="listuser">
<a href="index.php?page=profile&n_user=<?php echo $n_avatar_user['n_user'];?>" class="usera"><?php echo $n_avatar_user['n_user'];?></a>
<a href="index.php?page=profile&n_user=<?php echo $n_avatar_user['n_user'];?>"><img class="avatarimage" src="avatar/<?php echo $n_avatar_user['n_avatar'];?>"/> </a>

</div>

<?php
}
}else{
	
		echo"<div class='error'>أنت المستخدم الوحيد</div>";

}
?>