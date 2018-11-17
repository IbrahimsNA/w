<?php
ob_start();
?>
<?php include"include/config.php"; ?>
<?php include "include/functions.php";

define("uid",$_COOKIE['uid']);
define("login",$_COOKIE['login']);
$QuerySelectU = mysql_query("SELECT * FROM user WHERE u_id = '".uid."' ");
$FetchobjectU = mysql_fetch_object($QuerySelectU);
#===============================[Fetch and Define Ads Data ]=========================#
$selectads = mysql_query("SELECT * FROM ads");
$FetchAds = mysql_fetch_assoc($selectads);
#===============================[User Info]===========================================#
define("uid",$FetchobjectU->u_id);
define("uemail",$FetchobjectU->u_email);
define("uname",$FetchobjectU->u_name);
define("ulv",$FetchobjectU->u_ulv);
define("u_img",$FetchobjectU->u_img);
define("type",$_GET['type']);
#===============================[User Info]===========================================#
?>

<!DOCTYPE html>
<html>
<head>
<title><?php echo s_name;?></title>
<meta charset="UTF-8" />
<link rel="stylesheet" href="css/style.css" type="text/css">
<meta content='<?php echo s_desc; ?>' name='description' />
<meta content='<?php echo s_key; ?>' name='keywords' />
<script src="../blog/ckeditor/ckeditor.js"></script>
</head>
<body>
<? 
if(s_close == 1){
	if(ulv<3){
	echo"<div class='error'>".s_close_text."</div>";
	exit; // اي نفذ هذا الكود فقط ولا تكمل للباقي
} // كود اغلاق الموقع اتثناء الادمن
}
?>
<!-- Header -->
<div class="header_b">

<div class="navtop">
<div class="container">
<ul>
<?php
$selectcat =mysql_query("SELECT * FROM category");

while($fetchcategory = mysql_fetch_assoc($selectcat)){
	
	echo'<li><a href="category.php?id='.$fetchcategory['c_id'].'">'.$fetchcategory['c_title'].'</a></li>';
	
}

?>
</ul><div class="clear"></div>
</div>
</div>
<div class="head container">
<div class="logo">
<a href="#"><img src="images/1.png" alt="" width="150" /> </a>
</div>

<div class="ads">
<?
if($FetchAds['active1'] == 0){
	echo $FetchAds['code1'];
	
}
?>
</div>
<div class="clear"></div>
</div>
<div class="navbar">
<div class="container">
<ul>
<li><a href="index.php">الرئيسية</a></li>
<?php

if(login != 1){
	echo'<li><a href="register.php">التسجيل</a></li>';
}else{
	echo'<li><a href="logout.php">خروج</a></li>';
	if(ulv == 3){echo'<li><a href="admincp.php">الإدارة</a></li>';}
	

}
	if(ulv >0){
		
		echo'<li><a href="profile.php?type=edit">بياناتي الشخصية</a></li>';
	}
?>

<li><a href="#">رابط الصفحه</a></li>
</ul><div class="clear"></div>
</div>
</div>
</div>
<br /><br />
<!-- // Header -->

<!-- Content -->
<div class="container">
<div style="float:right;width:600px;">