<?php include "files/header.php";

if(ulv == 3){
$SelectCm = mysql_query("SELECT * FROM comments WHERE cm_active = '1' ");
echo"
<a href='admincp.php?type=setting'><button class='sett'>إعدادات الموقع</button></a>
<a href='admincp.php?type=category'><button class='sett'>تصنيفات</button></a>
<a href='admincp.php?type=post'><button class='sett'>التدوينات</button></a>
<a href='admincp.php?type=addpost'><button class='sett'>إضافة تدوينة</button></a>
<a href='admincp.php?type=comments'><button class='sett'>تعليقات تنتظر (".mysql_num_rows($SelectCm).")</button></a> 
<a href='admincp.php?type=block'><button class='sett'>القوائم </button></a>
<a href='admincp.php?type=ads'><button class='sett'>التحكم بالإعلانات</button></a>

<br />
<div class='adminco'>";	
	
if(type ==""){
		
	echo '
	<table width="100%" border="0">
	<tr>
	<td>إسم السكريبت</td>
		<td>::Ibrahim Nahnoush | Blog::</td>
	</tr>
<tr>
<td>::الإصدار::</td>

<td>0.1<td>
</tr>
<tr>
<td>::مبرمج السكريبت::</td>

<td>Ibrahim Saadi Nahnoush<td>
</tr>
	</table>
	';
}	
	if(type == "setting"){include "admin/setting.php";}
	elseif(type == "addpost"){include "admin/addpost.php";}
	elseif(type == "category"){include "admin/category.php";}
	elseif(type == "post"){include "admin/post.php";}
	elseif(type == "comments"){include "admin/comments.php";}
	elseif(type == "block"){include "admin/blocks.php";}
	elseif(type == "ads"){include "admin/ads.php";}
	echo '</div>';
	
}else{
	
	header("loaction:index.php");
}


 include "files/block.php";
 include "files/footer.php";
?>