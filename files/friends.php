<?php
$list_friends_sender = list_friends_sender($conn);
$list_friends_recipient = list_friends_recipient($conn);


foreach($list_friends_sender as $list_friend_sender){
	?>
		<div class="invitation">
		<a href="index.php?page=profile&n_user=<?php echo $list_friend_sender['n_recipient'];?>"><img class="avatarimg" src="avatar/<?php echo $list_friend_sender['n_avatar'];?>"/> </a>
		<div class="sender"><a href="index.php?page=profile&n_user=<?php echo $list_friend_sender['n_recipient'];?>"><?php echo $list_friend_sender['n_recipient'];?></div> </a>
		</div>
	<?php
	
}

foreach($list_friends_recipient as $list_friend_recipient){
	?>
		<div class="invitation">
		<a href="index.php?page=profile&n_user=<?php echo $list_friend_recipient['n_sender'];?>"><img class="avatarimg" src="avatar/<?php echo $list_friend_recipient['n_avatar'];?>"/> </a>
		<div class="sender"><a href="index.php?page=profile&n_user=<?php echo $list_friend_recipient['n_sender'];?>"><?php echo $list_friend_recipient['n_sender'];?></div> </a>
		</div>
	<?php
	
}


if(empty($list_friends_sender) && empty($list_friends_recipient)){
	?>
	<div class="error">لا تتوفر على أصدقاء </div>
	<?php
	
}















?>