<?

#==========================================#
$name = strip_tags($_POST['name']);
$content = strip_tags($_POST['content']);
$ord = strip_tags($_POST['ord']);
$id = $_GET['id'];
#==============[AddBlock]=================#
if(isset($_POST['Addblock'])){
	$Addblock = mysql_query("INSERT INTO block (name,content,ord) VALUES ('$name','$content','$ord')") or die(mysql_error());
	if(isset($Addblock)){
		
		echo'<div class="success">تم إضافة القائمه بنجاح</div>';
		echo'</div>';
		refresh("admincp.php?type=block",1);
	include 'files/block.php';
	include 'files/footer.php';
	exit;
	}
}

#==========================[edit]===============================================#
if($_REQUEST['edit'] == "block"){
$SelectblockToedit = mysql_query("SELECT * FROM block WHERE id = '$id' ");
$Fetchbed = mysql_fetch_assoc($SelectblockToedit) or die(mysql_error());
if($_POST['editblock']){
$editblock = mysql_query("UPDATE block SET
name = '$name',
ord = '$ord',
content = '$content'
WHERE id = '$id'

 ") or die(mysql_error());	
	if(isset($editblock)){
		echo'<div class="success">تم تعديل القائمه بنجاح</div></div>';
	refresh("admincp.php?type=block",1);

			include "files/block.php";
		include "files/footer.php";
		exit;
	}
}

echo '
<form action="admincp.php?type=block&edit=block&id='.$Fetchbed['id'].'" method="POST">
<table width="100%" border="0" >
<tr>
<td >إسم القائمه:</td>
<td><input type="text" name="name" value="'.$Fetchbed['name'].'" /> </td>
</tr>
<tr>
<td>ترتيب القائمه:</td>
<td><input type="text" name="ord" value="'.$Fetchbed['ord'].'" /></td>
</tr>
<tr>
<td>محتوى القائمه:</td>
<td><textarea name="content" style="width:80%;height:180px;">'.$Fetchbed['content'].'</textarea></td>
</tr>
</table>
<table width="100%" border="0">
<tr>
<td><input name="editblock" type="submit" value="تعديل" /></td>
</tr>
</table>
</form></div><br />
';	

			include "files/block.php";
		include "files/footer.php";
		exit;
}
#==========================[/edit]===============================================#
#==========================[Deleteblock]===============================================#
if($_REQUEST['delete'] == "block"){
$deleteblock = mysql_query("DELETE FROM block WHERE id ='$id'");
		if(isset($deleteblock)){
	echo'<div class="success">تم حذف القائمه بنجاح</div></div>';
	refresh("admincp.php?type=block",1);

			include "files/block.php";
		include "files/footer.php";
		exit;
		}
	
	
	
}


#==========================[/Deleteblock]===============================================#

#==========================[Addblock]===============================================#
echo '
<form action="admincp.php?type=block" method="POST">
<table width="100%" border="0" >
<tr>
<td >إسم القائمه:</td>
<td><input type="text" name="name" value="" /> </td>
</tr>
<tr>
<td>ترتيب القائمه:</td>
<td><input type="text" name="ord" value="" /></td>
</tr>
<tr>
<td>محتوى القائمه:</td>
<td><textarea name="content" style="width:80%;height:180px;"></textarea></td>
</tr>
</table>
<table width="100%" border="0">
<tr>
<td><input name="Addblock" type="submit" value="إضافة" /></td>
</tr>
</table>
</form><br />
';	
echo'
<div class="admin">
<table width="100%" border="0">
';
$SelectBlockk = mysql_query("SELECT * FROM block ORDER BY ord ASC");
while($FetchB = mysql_fetch_assoc($SelectBlockk)){
echo'
<tr>
<td>'.$FetchB['id'].'</td>
<td>'.$FetchB['name'].'</td>
<td>
<a style="color:red;font:12px tahoma;" href="admincp.php?type=block&edit=block&id='.$FetchB['id'].'">تعديل </a> -
<a style="color:red;font:12px tahoma;" href="admincp.php?type=block&delete=block&id='.$FetchB['id'].'">حذف </a> 

</td>
</tr>';
}
echo'
</table>
</div>
';
#==========================[/Addblock]===============================================#
?>
