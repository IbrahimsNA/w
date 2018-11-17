<?php
	include 'files/header.php';
	

########################################################

                   #Define_Varible#    

$id = intval($_GET['id']);
#########################################################
	if( type == ""){

	}elseif(type == "edit"){
$u_name = strip_tags($_POST['u_name']);
$u_pass = $_POST['u_pass'];
$u_email = strip_tags($_POST['u_email']);
$u_img = strip_tags($_POST['u_img']);
if(isset($_POST['updateuserinfo'])){
	$updateuser = mysql_query("UPDATE user SET
	u_name ='$u_name',
	u_pass ='$u_pass',
	u_email='$u_email',
	u_img  ='$u_img'
	WHERE u_id = '".uid."'
	"
	) or die(mysql_error());
	if($updateuser){
		echo'<div class="success">تم تحديث بيانات العضويه بنجاح</div>';
	refresh("profile.php?type=edit",1);
	}
}
echo '

<div class="fregister">
<form action="profile.php?type=edit" method="post">
<table width="100%" border="0">
<tr><td><img src="'.u_img.'" width="20%" height="50%" /></td></tr>
<tr>
<td>صورة العضويه</td>
<td><input style="border:1px solid #E9E4E4;padding:8px 5px;" size="30" name="u_img" value ="'.u_img.'" type="text" /></td>
</tr>
<tr>
<td>إسم العضوية</td>
<td><input style="border:1px solid #E9E4E4;padding:8px 5px;" size="30" name="u_name" value ="'.uname.'" type="text" /></td>
</tr>
<tr>
<td>الباسوورد</td>
<td><input style="border:1px solid #E9E4E4;padding:8px 5px;" size="30" type="password" name="u_pass" /></td>
</tr>
<tr>
<td>البريد الالكتروني </td>
<td><input style="border:1px solid #E9E4E4;padding:8px 5px;" size="30" type="email" name="u_email" value ="'.uemail.'" /></td>
</tr>
<tr><td><input type="submit" name="updateuserinfo" value="تحديث البيانات" /></td></tr>
</table>
</form>
</div>

';
	}
echo'<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />';
	include 'files/block.php';
	include 'files/footer.php';
?>