<?php
ob_start();
?>
<?php include"files/header.php";?>

<?php 
$u_name = $_POST['u_name'];
$u_pass = $_POST['u_pass'];
if(isset($_POST['login'])){
if(empty($u_name) or empty($u_pass)){
	echo"<div class='error'>لرجاء ملئ جميع الحقول</div>";
}else{
	$sqlquery=mysql_query("SELECT * FROM user WHERE u_name ='".$u_name."' AND u_pass ='".$u_pass."' ");
if(mysql_num_rows($sqlquery) > 0){
	
	$fetchLquery = mysql_fetch_object($sqlquery);
	$uid = $fetchLquery->u_id;
	$uname = $fetchLquery->u_name;
	$upass = $fetchLquery->u_pass;
	if($uname != $u_name AND $upass != $u_pass){
		echo"
	<div class='error'>1البيانات المدخله خاطئه</div>";
			refresh("index.php",1) or die(mysql_error()) ;
	}else{
			setcookie("uid",$uid,time()+60*60*24) or die(mysql_error()) ;
			setcookie("login",1,time()+60*60*24) or die(mysql_error());
				echo"<div class='success'>تم تسجيل دخولك بنجاح.جاري تحويلك إلى الصفحه الرئيسية..</div> <br />";
				refresh("index.php",1) or die(mysql_error()) ;
	}
}else{
		echo"<div class='error'>1البيانات المدخله خاطئ2222</div>";
			refresh("index.php",1) or die(mysql_error()) ;
		}
	}
}
$selectpost = mysql_query("SELECT * FROM posts ORDER BY p_id DESC") or die(mysql_error());

while($fetchpost = mysql_fetch_object($selectpost)){
		$selectuserP = mysql_query("SELECT * FROM user WHERE u_id = '".$fetchpost->p_user."' ") or die(mysql_error());
		$fetchAu = mysql_fetch_assoc($selectuserP);
		$selectcat = mysql_query("SELECT * FROM category WHERE c_id = '".$fetchpost->category."' ") or die(mysql_error());
		$fetchcat = mysql_fetch_assoc($selectcat);

echo '<div class="rightco">
<div class="b_t_in">
<div class="title_b"><a href="topics.php?id='.$fetchpost->p_id.'"><h3>'.$fetchpost->p_title.'</h3></a></div>
<div class="info">
بواسطة:'.$fetchAu['u_name'].' 
التاريخ:30/06/2017
التصنيف:'.$fetchcat['c_title'].'

</div>
</div>
<div class=""></div>

<table class="tb" width="100%" border="0">
<tr>
<td width="20%"><div class="pic"><img src="'.$fetchpost->p_pic.'" alt="" /></div></td>
<td width="80%">
<p>'.mb_substr($fetchpost->p_sub,0,300,'UTF-8').'</p>
</td>
</tr>
</table>
<div class="more"><a href="topics.php?id='.$fetchpost->p_id.'">إقرأ المزيد</a></div>

</div>
';	
	
	
	
}
?>


<?php include"files/block.php";?>
<?php include"files/footer.php";?>