<?php 
/*
CREATE TABLE `ads` (
`active1` INT NOT NULL ,
`active2` INT NOT NULL ,
`code1` TEXT NOT NULL ,
`code2` TEXT NOT NULL
) ENGINE = MYISAM ;

*/
#====================================#
$selectads = mysql_query("SELECT * FROM ads") or die(mysql_error());

$Fetchads = mysql_fetch_assoc($selectads);
$active1 = $_POST['active1'];
$active2 = $_POST['active2'];
$code1   = $_POST['code1'];
$code2   = $_POST['code2'];
if(isset($_POST['upads'])){
$upads = mysql_query("UPDATE ads SET 
active1 = '$activa1',
active2 = '$active2',
code1   = '$code1',
code2   ='$code2'
") or die(mysql_error());
if(isset($upads)){
	
	echo'<div class="success"> تم تحديث البيانات بنجاح</div>';
refresh("admincp.php?type=ads",1);
	}
}
#====================================#
?>



<form action="admincp.php?type=ads" method="POST">
<table width="100%" border="0">
<tr>
<td>اٌلإعلان الأول</td>
<td>
<select name="active1">
<?
if($Fetchads['active1'] == 0){
echo'
<option value="0">مفعل</option>
<option value="1">غير مفعل</option>';
}else{
	
echo'
<option value="1">غير مفعل</option>
<option value="0">مفعل</option>
';	
	
}
?>
</select>
</td>
</tr>
<tr>
<td>كود HTML</td>
<td><textarea name="code1" style="width:99%;height:150px;"><?php echo $Fetchads['code1'] ?></textarea></td>
</tr>
<tr>
<td>الإعلان الثاني</td>
<td>
<select name="active2">
<?
if($Fetchads['active2'] == 0){
echo'
<option value="0">مفعل</option>
<option value="1">غير مفعل</option>';
}else{
	
echo'
<option value="1">غير مفعل</option>
<option value="0">مفعل</option>
';	
	
}
?>
</select>
</td>
</tr>
<tr>
<td>كود HTML</td>
<td><textarea name="code2" style="width:99%;height:150px;"><?php echo $Fetchads['code2'] ?></textarea></td>
</tr>
<tr>
<td colspan="2"><input name="upads" value="تحديث" type="submit" /></td>
</tr>
</table>
</form>