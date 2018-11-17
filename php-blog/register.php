<?php include"files/header.php";?>

<?php 
########################################################

                   #Define_Varible#    
$u_name = strip_tags($_POST['u_name']);
$u_pass = $_POST['u_pass'];
$u_email = strip_tags($_POST['u_email']);
#########################################################
if(login == 1){
	
		echo"
	<div class='error'>هذه الصفحه مخصصه للزوار</div>";
	refresh("index.php",3);
}else{






if(isset($_POST['registerdo'])){
	if(empty($u_name) or empty($u_pass) or empty($u_email )){
		
		echo"<div class='error'>المرجو إدخال جميع البيانات</div>";
		
	}elseif(strlen($u_name)>10){
		
		echo"<div class='error'> يجب أن يكون الاسم أصغر من 10 احرف</div>";
	}elseif(strlen($u_name) < 3){
		echo"<div class='error'> يجب أن يكون الاسم أكبر من 3 حروف</div>";
	
	}else{
		
		$Dbadduser = mysql_query("INSERT INTO user
		(u_name,u_pass,u_email,u_ulv)
		VALUES
		('$u_name','$u_pass','$u_email','1')
		") or die(mysql_error());
		if(isset($Dbadduser)){
			
			echo"<div class='success'>تم تسجيل عضويتك بنجاح ,, يمكنك الان الدخول الى النظام</div><br />";
			include"files/block.php";
            include"files/footer.php";
			exit;
		}
	}

}

?>



<div class="fregister">
<form action="register.php" method="post">
<table width="100%" border="0">
<tr>
<td>إسم العضوية</td>
<td><input style="border:1px solid #E9E4E4;padding:8px 5px;" size="30" name="u_name" type="text" /></td>
</tr>
<tr>
<td>الباسوورد</td>
<td><input style="border:1px solid #E9E4E4;padding:8px 5px;" size="30" type="password" name="u_pass" /></td>
</tr>
<tr>
<td>البريد الالكتروني </td>
<td><input style="border:1px solid #E9E4E4;padding:8px 5px;" size="30" type="email" name="u_email" /></td>
</tr>
<tr><td><input type="submit" name="registerdo" value="تسجيل" /></td></tr>
</table>
</form>
</div>

<?php } ?>
<?php include"files/block.php";?>
<?php include"files/footer.php";?>