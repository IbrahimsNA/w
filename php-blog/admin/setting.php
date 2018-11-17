<?php
/*
CREATE TABLE `config` (
`s_name` VARCHAR( 255 ) NOT NULL ,
`s_url` VARCHAR( 255 ) NOT NULL ,
`s_email` VARCHAR( 255 ) NOT NULL ,
`s_desc` TEXT NOT NULL ,
`s_key` TEXT NOT NULL ,
`s_close` INT NOT NULL ,
`s_close_text` TEXT NOT NULL ,
`s_copy` VARCHAR( 255 ) NOT NULL
) ENGINE = MYISAM ;

*/
#=================[POST]===================#
$s_name = strip_tags($_POST['s_name']);
$s_url  = strip_tags($_POST['s_url']);
$s_email= strip_tags($_POST['s_email']);
$s_desc = strip_tags($_POST['s_desc']);
$s_key  = strip_tags($_POST['s_key']);
$s_close= strip_tags($_POST['s_close']);
$s_close_text = strip_tags($_POST['s_close_text']);
$s_copy = strip_tags($_POST['s_copy']);
#==========================================#
$sqlSelectSeet = mysql_query("SELECT * FROM config");
$FetchSett = mysql_fetch_object($sqlSelectSeet);
#=================[Update Info]============#
if(isset($_POST['savesett'])){
	$settupdate = mysql_query("UPDATE config SET
	s_name= '$s_name',
	s_url= '$s_url',
	s_email= '$s_email',
	s_desc= '$s_desc',
	s_key= '$s_key',
	s_close= '$s_close',
	s_close_text= '$s_close_text',
	s_copy= '$s_copy'
	");
	if(isset($settupdate)){
		echo'<div class="success">تم تحديث البيانات بنجاح</div>';
	refresh("admincp.php?type=setting",4);
	}else{
		echo'<div class="error">حدث خطأ لم يتم تحديث البيانات</div>';
	refresh("admincp.php?type=setting",4);
	}
	
}
#==========================================#
$sqlSelectSeet = mysql_query("SELECT * FROM config");
$FetchSett = mysql_fetch_object($sqlSelectSeet);
?>

<form action="admincp.php?type=setting" method="POST">
	<table width="100%" border="0">
	<tr>
		<td>إسم الموقع</td>
		<td><input name="s_name" type="text" value="<? echo $FetchSett->s_name;?>" /></td>
	</tr>
	<tr>
		<td>رابط الموقع</td>
		<td><input name="s_url" type="text" value="<? echo $FetchSett->s_url;?>" /></td>
	</tr>
	<tr>
		<td>بريد الموقع</td>
		<td><input name="s_email" type="text" value="<? echo $FetchSett->s_email;?>" /></td>
	</tr>	
	<tr>
		<td>وصف الموقع</td>
		<td><textarea name="s_desc" style="width:400px;height:100px;"><? echo $FetchSett->s_desc;?></textarea></td>
	</tr>	
		<tr>
		<td>كلمات مفتاحية</td>
		<td><textarea name="s_key" style="width:400px;height:100px;"><? echo $FetchSett->s_key;?></textarea></td>
	</tr>	
	<tr>
		<td>حالة الموقع</td>
		<td>
	<select name="s_close">
	<?php
	if($FetchSett->s_close == 0){
		
	
			echo'<option value="0">مفتوح</option>
			<option value="1">مغلق</option>';
			}else{
				
			echo'<option value="0">مفتوح</option>
			<option value="1">مغلق</option>';
				
			}
			?>
		</select>
		</td>
	</tr>
	<tr>
		<td>حالة الغلق</td>
		<td><textarea name="s_close_text" style="width:400px;height:100px;"><? echo $FetchSett->s_close_text;?></textarea></td>
	</tr>	
	<tr>
		<td>حقوق الموقع</td>
		<td><input name="s_copy" type="text" value="<? echo $FetchSett->s_copy;?>" style="width:400px;" /></td>
	</tr>			
		
	</table>

	<table width="100%" border="0">
	<tr>
	<td><input name="savesett" type="submit" value="حفظ البيانات" /></td>
	<td></td>
	</tr>
	</table>


