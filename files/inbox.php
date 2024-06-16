<?php
include('include/member.function.php');

if(isset($_GET['n_user']) && !empty($_GET['n_user']) && nuser_not_found($conn) ==1){
	
	if(isset($_POST['submit'])){
		$sujet = mysqli_real_escape_string($conn, htmlentities(trim($_POST['sujet'])));
		$message = mysqli_real_escape_string($conn, htmlentities(trim($_POST['message'])));
	
	if(!empty($sujet) && !empty($message)){
		
		creat_cov($conn, $sujet,$message);
	}
	else{
		
		?>
		<div class="error">المرجو إدخال عنوان و محتوى الرسالة</div>
		<?php
	}
		
	}
	
}
else{
	header('Location:index.php?page=member');
	
}
?>

<h3>مراسلة </h3>
<div class="inboxuser">


<form method='POST' action=''>
<label for="n" >اسم الشخص</label>
<input type="text" name="n" id='n' class='formaa' value='<?php echo $_GET['n_user'];?>' disabled='disabled'><br />
<label for="sujet">عنوان الرسالة</label>
<input type="text" name="sujet" id="sujet" class='formaa'><br />
<label for="message">الرسالة</label>
<textarea type="text" name="message" id="message" class='formaa'></textarea>
<input type='submit' name="submit" value="إرسال"/>
</form>
</div>