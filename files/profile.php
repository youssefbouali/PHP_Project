<?php 
 
recover_info_member($conn);


?>

<div class="info">
<?php
	$infos_member = recover_info_member($conn);
	if($infos_member == true && $_GET['n_user'] !=$_SESSION['n_user']){
	foreach($infos_member as $info_member){
	
	if(request_existe($conn) == 0){
		
	?>
	<div class="error">أنت لست صديق مع <?php echo $info_member['n_user'];?>
	<br />
	<a href="index.php?page=send&n_user=<?php echo $info_member['n_user'];?>">أضف كصديق</a>
	</div>
	<?php
	
	}else if(accept_invit($conn) == 0 && send_invit($conn) == 1){
		?>
		<div class="succ">تم إرسال الدعوة ...شكرا <br />
		<a href="index.php?page=delete&n_user=<?php echo $info_member['n_user'];?>">إلغاء الدعوة </a>
		</div>
		<?php
		
	}else if(accept_invit($conn) == 0 && send_invit($conn) == 0){
		?>
		<div class="succ">تم التوصل بدعوة صداقة <br />
	المرجو التوجه الى قسم الاشعارات</div>
		<?php
		
	}else {
		
	
?>

<div class="menuinfo">

<img class="avatarimg" src="avatar/<?php echo $info_member['n_avatar'];?>"/> 

<?php
if($info_member['n_user'] == $_SESSION['n_user']){
	echo'
<a class="avtup" href="index.php?page=update">تغيير صورتك</a>
';
}
?>
<li><p><strong>اسم المستخدم : </strong><?php echo $info_member['n_user'];?></p></li>
<li><p><strong>الايميل : </strong><?php echo $info_member['n_email'];?></p></li>
<li><p><strong>الدولة : </strong><?php echo $info_member['n_city'];?></p></li>
<div class="buttondelete">
<a href="index.php?page=delete_friends&n_user=<?php echo $info_member['n_user'];?>">حذف</a>
<a href="index.php?page=inbox&n_user=<?php echo $info_member['n_user'];?>">مراسلة</a>
</div>
</div>
<?php 

}
	}

	}else{
		Header("Location:index.php?page=list_user");
		
	}
?>


</div>
