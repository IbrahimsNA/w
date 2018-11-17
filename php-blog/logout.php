<?php
include"files/header.php";

if(login == 1){
setcookie("uid",time()+60*60*24) or die(mysql_error()) ;
setcookie("login",time()+60*60*24) or die(mysql_error());
echo'';
echo"<div class='success'>تم تسجيل خروجك بنجاح..نتمنى عودتك في أقرب وقت.. </div>";
refresh("index.php",4);	
}else{
echo"<div class='error'>الصفحه المطلوبه غير متواجد  </div>";
refresh("index.php",4);		
	
}


include"files/block.php";
include"files/footer.php";
  ?>