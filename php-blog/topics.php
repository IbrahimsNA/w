<?php
include "files/header.php"; 

$id = intval($_GET['id']); // for fetch data by id.
#======================[DB POST]============================#
$SelectTopic = mysql_query("SELECT * FROM posts WHERE p_id = '$id'"); // fetch posts by id
$FetchTopic = mysql_fetch_assoc($SelectTopic); // store fetch function in object function.
#======================[DB POST]============================#
if(mysql_num_rows($SelectTopic) > 0){
echo '
<div style="background:#fff;border:1px solid #F9F9F9;padding:5px;border-radius:2px;">
<div style="padding:6px;border-bottom:1px solid #FCFCFC;margin-bottom:6px;"><h3>'.$FetchTopic['p_title'].'</h3></div>
<div style="margin-bottom:10px;"><img style="max-width:600px;" src="'.$FetchTopic['p_pic'].'" alt="" /></div>
<div style="">
<p>'.$FetchTopic['p_sub'].'</p>
</div><br />
<center>
';
if($FetchAdss['active2'] == 0){
	echo $FetchAds['code2'];
	
}
echo'
</center>
</div><br /> <br />
';

$SelectCm = mysql_query("SELECT * FROM comments WHERE post ='$id' AND cm_active = '0' ");
echo'
 <div style="margin-bottom:6px;background:#0c93b5;padding:10px 8px;color:#fff;font-size:12px;display:inline-block;">التعليقات:'.mysql_num_rows($SelectCm).'</div>
 ';
 if(mysql_num_rows($SelectCm) > 0){
 echo'
 <div style="background:#fff;border:1px solid #F9F9F9;padding:5px;border-radius:2px;">
</div>
<table width="100%" border="0">
';

while($FetchCm = mysql_fetch_assoc($SelectCm)){
	$SelectUserCm = mysql_query("SELECT * FROM user WHERE u_id = '".$FetchCm['user']."' ")or die(mysql_error());
	$FetchUserCm = mysql_fetch_assoc($SelectUserCm) or die(mysql_error());
		
echo'
<tr>

		<td style="border-bottom:1px dotted #F9F9F9;padding:5px;background:#fafafa;">'.$FetchUserCm['u_name'].'
		
		
<div style="float:left;"><img src="'.$FetchUserCm['u_img'].'" width="30" height="30" alt="" /></div>
		
		</td> 
 
</tr>
<tr>	
		<td style="border-bottom:1px dotted #F9F9F9;padding:5px;">'.$FetchCm['comments'].'</td>
</tr>';
}
echo'
</table>
<br />
 ';}else{
	
	echo'<div class="error">لا يوجد تعليق هنا .. قم بكتابة تعليق</div><br />';
}
if(ulv>0){
	
/*
CREATE TABLE `comments` (
`cm_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`user` VARCHAR( 255 ) NOT NULL ,
`comments` TEXT NOT NULL ,
`cm_active` INT NOT NULL
) ENGINE = MYISAM ;
*/
#===================[POST VALUE]=====================#
$user = strip_tags($_POST['user']);
$comments = strip_tags($_POST['comments']);
$cm_active = strip_tags($_POST['cm_active']);
$post = strip_tags($_POST['post']);
#===================[POST VALUE]=====================#
if(isset($_POST['addcm'])){
	if(empty($comments)){
		
		echo'<div class="error">الرجاء كتابة تعليق أولاً..</div>';
	}else{
		$Addcm = mysql_query("INSERT INTO comments
		(user,comments,cm_active,post)
		VALUES
		('".uid."','$comments','1','$id')
		"); # 1 mean comments waiting for approving #
		if($Addcm){
			echo'<div class="success">تم إضافة التعليق بنجاح</div>';
			refresh("topics.php?id=".$id."",3);
		}
	}
}

 echo'
 <form action="topics.php?id='.$id.'" method="POST">
 <div style="margin-bottom:6px;background:#0c93b5;padding:10px 8px;color:#fff;font-size:12px;display:inline-block;">إضافة تعليق</div>
 <div style="background:#fff;border:1px solid #F9F9F9;padding:5px;border-radius:2px;">
 <table width="100%" border="0">
 <tr>
 <td><textarea name ="comments" style="width:99%;height:140px;"></textarea></td>
 </tr>
  <tr>
 <td><input class="bluebox" name="addcm" type="submit" value="أضف تعليق" /></td>
 </tr>
 </table>
 </div>
 </form>';
}else{
	
	echo'<div style="text-align:center;border:1px solid #2c92ab;background:#92dff2;padding:10px;color:#0f7b96:font:12px tahoma;">عزيزي الزائر .. ! للتعليق على المنشور يتوجب عليك على التسيل في الموقع أولاً..</div>';
}	
}else{
	echo'<div class="error"> لا تملك صلاحية الدخول إلى هذا الرابط</div>';

}

include "files/block.php"; 
include "files/footer.php"; 
 ?>