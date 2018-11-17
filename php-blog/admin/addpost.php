<?php 
/*
 CREATE TABLE `posts` (
`p_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`p_title` VARCHAR( 255 ) NOT NULL ,
`p_sub` LONGTEXT NOT NULL ,
`p_time` VARCHAR( 255 ) NOT NULL ,
`p_user` VARCHAR( 255 ) NOT NULL
) ENGINE = MYISAM ;
*/
#================[POST VALUE]==============================#
$p_title = strip_tags($_POST['p_title']);
$p_sub   = strip_tags($_POST['p_sub']);
$p_pic   = strip_tags($_POST['p_pic']);
$category= strip_tags($_POST['category']);
#==========================================================#

if(isset($_POST['Addpost'])){
	$addpost = mysql_query("INSERT INTO posts (p_title,p_sub,p_pic,p_time,p_user,category) 
				VALUES ('$p_title','$p_sub','$p_pic','".time()."','".uid."','$category')") or die (mysql_error());
				if(isset($addpost)){
					echo"<div class='success'>تم إضافة التدوينه بنجااح</div>";
					refresh("admincp.php?type=addpost",3);
					
				}else{
					
				echo"<div class='error'>حدث خطأ ما ولم تتم اضافة التدوينه</div>";
					refresh("admincp.php?type=addpost",3);
				}
	
	}

?>
<form action="admincp.php?type=addpost" method="post">
<table width="100%" border="0">
<tr>
<td>عنوان التدوينة</td>
<td><input name="p_title" type="text" value="" /></td>
</tr>
<tr>
<td>صورة التدوينة</td>
<td><input name="p_pic" type="text" value="" /></td>
</tr>
<td>التصنيف:</td>
<td>
<select name="category">
<?
$Scate = mysql_query("SELECT * FROM category");
while($FetchCat=mysql_fetch_object($Scate)){
	echo '<option value="'.$FetchCat->c_id.'">'.$FetchCat->c_title.'</option>';
	
	
}

?>
</select>
</td>
</tr>
</table>
<table width="100%" border="0">
<tr>
<td><textarea name="p_sub" style="width:100%;height:240px;"><? echo $FetchSett->s_key; ?></textarea>
<script>
CKEDITOR.replace("p_sub");
</script>
</td>
</tr>
</table>
<table width="100%" border="0">
<tr>
<td><input name="Addpost" type="submit" value="أضف التدوينه" /></td>
</tr>
</table>
</form>
