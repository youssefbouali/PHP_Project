<h3>جميع دعوات الصداقة</h3>
<?php
$invit = recover_invit($conn);
$invit_accepted = invit_accepted($conn);

if($invit == true ){
	foreach($invit as $invitation){
		if($invitation['active'] == 0)
		{
		?>
		<div class="invitation">
		<img class="avatarimg" src="avatar/<?php echo $invitation['n_avatar'];?>"/> 
		<div class="sender"><?php echo $invitation['n_sender'];?></div> 
		<div class="buttoninvit">
		<a href="index.php?page=accept&n_user=<?php echo $invitation['n_sender'];?>"><i class="fa fa-check-circle"></i></a>
		<a href="index.php?page=reject&n_user=<?php echo $invitation['n_sender'];?>"><i class="fa fa-times-circle"></i></a>
		</div>
		</div>
		<?php
		}else{
				echo '<div class="error">ليس هناك دعوات صداقة</div>';

			
		}
	}
	
}else if($invit_accepted == true){
	foreach($invit_accepted as $invitation_accepted){
		update_date_seen($conn);
		?>
		<div class="succ"><?php echo $invitation_accepted['n_recipient'];?>قد تم قبول دعوتك</div>
		<?php
	}
	
}
	
else{
	?>
	<div class="error">ليس هناك دعوات صداقة</div>
	<?php
	
	
}
?>