<?php

if(isset($_POST['login'])){
	$n_user = htmlentities(trim($_POST['n_user']));
	$n_password = htmlentities(trim($_POST['n_password']));
	
	if(empty($n_user)){
		$error[] = "المرجو إدخال اسم المستخدم";
	}
	if(empty($n_password)){
		$error[] = "المرجو إدخال الباسوورد";
	}
	if(!empty($error))
	{
		
		foreach($error as $er)
		{
			
			echo"<div class='error'>".$er."</div>";
		}
	}
	else{
		
		if(check_user_pass($conn, $n_user,$n_password) == 0){
			
			echo"<div class='error'>المعلومات خاطئة</div>";
		}
		else{
			$_SESSION['n_user'] = $_POST['n_user'];
			Header("Location:index.php?page=member");
		}
	}
	
	
}

?>

<div class="re">
<form action="" method="POST">
<h2>تسجيل الدخول</h2>
			<div class="form_group">
            <input type="text" name="n_user" placeholder="اسم المستخدم">
            </div>
            <div class="form_group">
            <input type="password" name="n_password" placeholder="كلمة المرور">
            </div>
            <input type="submit" name="login" value="دخول">
</form>

</div>