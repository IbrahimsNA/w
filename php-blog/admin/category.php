<?
/*
CREATE TABLE `category` (
`c_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`c_title` VARCHAR( 255 ) NOT NULL
) ENGINE = MYISAM ;
*/
$c_id = intval($_GET['c_id']);
$c_title = strip_tags($_POST['c_title']);
if(isset($_POST['Addcat'])){
	$addcat = mysql_query("INSERT INTO category
	(c_title)
	VALUES
	('$c_title')
	");
	if(isset($addcat)){
		echo"<div class='success'>تم إضافة التصنيف بنجاح</div>";
	refresh("admincp.php?type=category",3);
	echo'</div>';
			 include "files/block.php";
         include "files/footer.php";
	exit;
	}
}
if($_REQUEST['delete'] == "cat"){
$deletecat = mysql_query("DELETE FROM category WHERE c_id ='".$c_id."'");	
	if(isset($deletecat)){
		
		echo "<div class='success'>تم حذف التصنيف بنجاح</div>";
	refresh("admincp.php?type=category",3);
	echo'</div>';
			 include "files/block.php";
         include "files/footer.php";
	exit;
	}

}
if($_REQUEST['edit'] == "cat"){

$selectC = mysql_query("SELECT * FROM category WHERE c_id ='".$c_id."'");	
$FetchcatEg = mysql_fetch_object($selectC);
if(isset($_POST['EditCat'])){
	
	$Editcatego = mysql_query("UPDATE category SET
	c_title = '$c_title'
	WHERE c_id ='".$c_id."'
");
if(isset($Editcatego)){
	
		echo"<div class='success'>تم تعديل التصنيف بنجاح</div>";
	refresh("admincp.php?type=category",3);
	echo'</div>';
			 include "files/block.php";
         include "files/footer.php";
	exit;
}
}
	
	echo '<form action="admincp.php?type=category&edit=cat&c_id='.$FetchcatEg->c_id.'" method="post">
<table width="100%" border="0">
<tr>
<td>إسم التصنيف</td>
<td><input name="c_title" type="text" value="'.$FetchcatEg->c_title.'" /></td>
</tr>
</table>
<table width="100%" border="0">
<tr>
<td><input name="EditCat" type="submit" value="تعديل تصنيف" /></td>
</tr>
</table>
</form>
</div><br />';
	


			 include "files/block.php";
         include "files/footer.php";
	exit;
}
?>

<form action="admincp.php?type=category" method="post">
<table width="100%" border="0">
<tr>
<td>إسم التصنيف</td>
<td><input name="c_title" type="text" value="" /></td>
</tr>
</table>
<table width="100%" border="0">
<tr>
<td><input name="Addcat" type="submit" value="أضف تصنيف" /></td>
</tr>
</table>
</form>
</div><br />
<div class='adminco'>
<table width="100%" border="0">
<tr>
<td>إسم التصنيف</td>
<td>إعدادات</td>
<?php 
$selectCat = mysql_query("SELECT * FROM category");
while($fetchc = mysql_fetch_object($selectCat)){
echo'
<tr>
<td>'.$fetchc->c_title.'</td>
<td><a href="admincp.php?type=category&delete=cat&c_id='.$fetchc->c_id.'">حذف</a>-
<a href="admincp.php?type=category&edit=cat&c_id='.$fetchc->c_id.'">تعديل</a></td>
</tr>';
}
?>
</tr>
</table>
