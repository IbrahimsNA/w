</div>
<div class="blockl">
<?php 
if(login == 1){
	echo'<div class="titleblock"><h3>معلومات العضو:'.uname.'</h3></div>
<div class="contentblock">
<table width="100%" border="0">
<tr>
<td colspan="2" align="center"><img src="'.u_img.'" alt="" width="100" /></td>
</tr>
<tr>
<td>إسم العضوية:</td>
<td>'.uname.'</td>
</tr>
<tr>
<td>البريد الالكتروني:</td>
<td>'.uemail.'</td>
</tr>
<tr>
<td>رقم العضوية:</td>
<td>'.uid.'</td>
</tr>
<tr>
<td>الرتبه:</td>
<td>';

if(ulv == 1){echo"<font color='red'>عضو</font>";}
elseif(ulv == 2){echo"<font color='red'>كاتب</font>";}
elseif(ulv == 3){echo"<font color='red'>مدير</font>";}
echo

'</td>
</tr>
</table>
</div>';
	
}else{
	echo'<div class="titleblock"><h3>تسجل الدخول</h3></div>
<div class="contentblock">
<form action="index.php" method="post">
<table width="100%" border="0">

<tr>
<td>إسم العضوية</td>
<td><input type="text" name="u_name" /></td>
</tr>
<tr>
<td>كلمة المرور</td>
<td><input type="text" name="u_pass" /></td>
</tr>
</table>
<table width="100%" border="0">
<tr>
<td><input name="login" value="دخول" type="submit" /></td>
</tr>
</table>
</form>
</div>';
	
}
$SelectBlock = mysql_query("SELECT * FROM block ORDER BY ord ASC") or die(mysql_error());

while($FetchBlock = mysql_fetch_assoc($SelectBlock)){
echo'
<div class="titleblock"><h3>'.$FetchBlock['name'].'</h3></div>
<div class="contentblock">
'.$FetchBlock['content'].'
</div>';
}
?>

</div>
<div class="clear"></div>