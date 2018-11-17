<?php 
$p_id = intval($_GET['p_id']); // for impelement using this id
if($_REQUEST['delete'] == "post"){
	$deleteposts = mysql_query("DELETE FROM posts WHERE p_id= '".$p_id."' ");
if(isset($deleteposts)){
	echo".
	<div class='success'>تم حذف التدوينه بنجاح </div>
	";
	echo '</div>';
	refresh("admincp.php?type=post",3);
	include 'files/block.php';
	include 'files/footer.php';
	exit;
}
	
}

if($_REQUEST['edit'] == "post"){
	$SelectPostToEdit = mysql_query("SELECT * FROM posts WHERE p_id = '".$p_id."' ");
	$FetchPostEdit = mysql_fetch_object($SelectPostToEdit);
#================[POST VALUE]==============================#
$p_title = strip_tags($_POST['p_title']);
$p_sub   = strip_tags($_POST['p_sub']);
$p_pic   = strip_tags($_POST['p_pic']);
$category= strip_tags($_POST['category']);
#==========================================================#


if(isset($_POST['Updatepost'])){
	
	$DbUp = mysql_query("UPDATE posts SET
 p_title = '$p_title',	
 p_sub   = '$p_sub',
 p_pic   = '$p_pic',
 category= '$category' WHERE p_id = '".$p_id."'
");
	if(isset($DbUp)){
	echo '<div class="success"> تم تحديث التدوينه بنجاح</div>';
	refresh("admincp.php?type=post",3);
echo'</div>';
			 include "files/block.php";
         include "files/footer.php";
	exit;
}
}

	echo'<form action="admincp.php?type=post&edit=post&p_id='.$FetchPostEdit->p_id.'"" method="post">
<table width="100%" border="0">
<tr>
<td>عنوان التدوينة</td>
<td><input name="p_title" type="text" value="'.$FetchPostEdit->p_title.'" /></td>
</tr>
<tr>
<td>صورة التدوينة</td>
<td><input name="p_pic" type="text" value="'.$FetchPostEdit->p_pic.'" /></td>
</tr>
<td>التصنيف:</td>
<td>
<select name="category">
';
$Scate = mysql_query("SELECT * FROM category");
while($FetchCat=mysql_fetch_object($Scate)){
	echo '<option value="'.$FetchCat->p_id.'">'.$FetchCat->c_title.'</option>';
	
	
}

echo'
</select>
</td>
</tr>
</table>
<table width="100%" border="0">
<tr>
<td><textarea name="p_sub" style="width:100%;height:240px;">'.$FetchPostEdit->p_sub.'</textarea>
<script>
CKEDITOR.replace("p_sub");
</script>
</td>
</tr>
</table>
<table width="100%" border="0">
<tr>
<td><input name="Updatepost" type="submit" value="تحديث تدوينه" /></td>
</tr>
</table>
</form>';
echo'</div>';
			 include "files/block.php";
         include "files/footer.php";
	exit;

}


?>

<table width="100%" border="0">

<?php 
$selectpost = mysql_query("SELECT * FROM posts");
while($fetchp = mysql_fetch_object($selectpost)){
echo'
<tr>
<td>'.$fetchp->p_id.'</td>
<td><img src="'.$fetchp->p_pic.'" height="40" width="40" /></td>
<td>'.$fetchp->p_title.'</td>
<td><a href="admincp.php?type=post&delete=post&p_id='.$fetchp->p_id.'">حذف</a>-
<a href="admincp.php?type=post&edit=post&p_id='.$fetchp->p_id.'">تعديل</a></td>
</tr>';
}
?>
</tr>
</table>