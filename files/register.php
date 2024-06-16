<?php


if(isset($_POST['register'])){
	
	$n_user = htmlentities(trim($_POST['n_user']));
	$n_email = htmlentities(trim($_POST['n_email']));
	$n_password = htmlentities(trim($_POST['n_password']));
	$n_city = htmlentities(trim($_POST['n_city']));
	
	if(empty($n_user)){
		$error[] = "المرجو إدخال اسم المستخدم";
	}
	if(!filter_var($n_email)){
		$error[] = " المرجو إدخال الايميل";
	}
	if(empty($n_password)){
		$error[] = "المرجو إدخال الباسوورد";
	}
	if(empty($n_city)){
		$error[] = "المرجو تحدبد الدولة";
	}
	if(n_email_existe($conn, $n_email) == 1){
		
		$error[] = "الايميل المدخل مستعمل مسبقا";
		
	}
	if(n_user_existe($conn, $n_user) == 1){
		
		$error[] = "ا سم المستخدم مستعمل مسبقا";
		
	}


	
	if(!empty($error))
	{
		
		foreach($error as $er)
		{
			
			echo"<div class='error'>".$er."</div>";
		}
	}
	else{
		
		s_users($conn, $n_user,$n_email,$n_password,$n_city)
		
		or die('مرحبا بك، يمكنك تسجيل الدخول الأن');
	}
}



?>

<div class="re">
<form action="" method="POST">
<h2>تسجل في الموقع</h2>
			<div class="form_group">
            <input type="text" name="n_user" placeholder="اسم المستخدم">
            </div>
            <div class="form_group">
            <input type="email" name="n_email" placeholder="البريد الإلكتروني">
            </div>
            <div class="form_group">
            <input type="password" name="n_password" placeholder="كلمة المرور">
            </div>
            <div class="form_group">
            <input type="text" name="n_city" placeholder="الدولة">
            </div>
            <input type="submit" name="register" value="التسجيل">
</form>

</div>

<?include "files/footer.php";?>