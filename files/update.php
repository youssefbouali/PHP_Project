<?php
include("include/member.function.php");
$data = member_connected($conn); 
  
 if(isset($_POST['update'])){
	$n_user = htmlentities(trim($_POST['n_user']));
	$n_email = htmlentities(trim($_POST['n_email']));
	$n_password = htmlentities(trim($_POST['n_password']));
	$n_city = htmlentities(trim($_POST['n_city']));
	update_info_member($conn, $n_user,$n_email,$n_password,$n_city);
	Header("Location:index.php?page=member");
	
 }
 
 
?>

<?php 
 if(isset($_POST['submit'])){
	$n_avatar = $_FILES['n_avatar']['name'];
	$n_avatar_tmp = $_FILES['n_avatar']['tmp_name'];
	
	if(!empty($n_avatar)){
		
		$n_avatar_ext = strtolower(end(explode('.',$n_avatar)));
		if(in_array($n_avatar_ext,array('png','jpg','jpeg','gif'))){
			update_avatar_profile($conn, $n_avatar_tmp,$n_avatar);	
			Header("Location:index.php?page=member");
		}
		else{
			echo"<div class='error'>المرجو اعادة رفع الصورة</div>";		
		}
	}
	
 }
foreach($data  as $info_u){
	
?>
<div class="re">
<form action="" method="POST">
<h2>تحديث المعلومات</h2>
			<div class="form_group">
            <input type="text" name="n_user" value='<?php echo $info_u['n_user']?>'>
            </div>
            <div class="form_group">
            <input type="email" name="n_email" value='<?php echo $info_u['n_email']?>'>
            </div>
            <div class="form_group">
            <input type="password" name="n_password" value='<?php echo $info_u['n_password']?>'>
            </div>
            <div class="form_group">
            <input type="text" name="n_city" value='<?php echo $info_u['n_city']?>'>
            </div>
            <input type="submit" name="update" value="تحديث">
</form>

<form action="" method="POST" enctype="multipart/form-data">
<img class="avatarimg" src="avatar/<?php echo $info_u['n_avatar']?>"/> 
	<input type="file" name="n_avatar"/><br /><br />
	<input type="submit" value="تحديث الصورة" name="submit"/>
</form>
</div>
<?php
}
?>