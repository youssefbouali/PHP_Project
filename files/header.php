<?php
ob_start();
?>
<?php
include("include/connectdb.php");
include("include/notif_invit.function.php");

$page = htmlentities($_GET['page']);
include("include/".$page.".function.php");

$pages = scandir('files');

if(!empty($page) && in_array($_GET['page'].".php",$pages)){
	
	$content = 'files/'.$_GET['page'].".php";
	
}else{
	
	Header('Location:index.php?page=login');
}

if(isset($_SESSION['n_user']) && $page !='member' && $page !='update' && $page !='update_avatar' && $page !='list_user' && $page !='profile' && $page !='send' && $page !='delete' && $page !='invit' && $page !='accept' && $page !='reject' && $page !='friends' && $page !='delete_friends' && $page !='message' && $page !='inbox' && $page !='mes'){
	Header('location:index.php?page=member');
}


?>




<!DOCTYPE html>

<head>
	<title>najmacode</title>
	<meta charset="UTF-8"/>
 <style>
<?php include 'styles/style.css'; ?>
<?php include 'styles/font.css'; ?>
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>


<body>

<div class="header">


	<div class="menu">
		<ul>
		<?php
		
		if(!isset($_SESSION['n_user'])){
			echo'
			<li><a href="index.php?page=register">مستخدم جديد</a></li>
			<li><a href="index.php?page=login">دخول</a></li>
			';
		}else{
			echo'<li><a href="index.php?page=logout">خروج</a></li>';
		}
		
		
		?>
		</ul>
	</div>
	
	<div class="logo">
		<a href="">Najmacode</a>
	</div>
</div>
<?php

$notif_invit = notification_invit($conn);
if($notif_invit !== '0'){
	?>
<div class="notifinvit">
<?php echo $notif_invit;?>
</div>
<?php
	
}


if(isset($_SESSION['n_user'])){
		
	echo "

<div id='menu-nav'>
  <div id='navigation-bar'>
    <ul>
      <li class='menu-sub-nav current-item'><a href='index.php?page=member'></i><span>الرئيسية</span></a></li>
      <li class='menu-sub-nav'><a href='index.php?page=update'><span>حسابي</span></a></li>
      <li class='menu-sub-nav'><a href='index.php?page=list_user'><span>مستخدم</span></a></li>
      <li class='menu-sub-nav'><a href='index.php?page=friends'><span>أصدقائي</span></a></li>
      <li class='menu-sub-nav'><a href='index.php?page=invit'><span>إشعارات</span></a></li>
      <li class='menu-sub-nav'><a href='index.php?page=mes'><span>رسائل</span></a></li>
    </ul>
  </div>
  
</div>
";
}
?>

<div id="content">
<?php include ($content);?>
</div>
 


















