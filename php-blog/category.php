<?php
	include 'files/header.php';
	
	$id = intval($_GET['id']);
	
#==========================================show posts  dependeg on show category by id and show msg if no posts===================================================#
$selectpost = mysql_query("SELECT * FROM posts WHERE category = '$id' ORDER BY p_id DESC") or die(mysql_error());
if(mysql_num_rows($selectpost) > 0){
while($fetchpost = mysql_fetch_object($selectpost)){
		$selectuserP = mysql_query("SELECT * FROM user WHERE u_id = '".$fetchpost->p_user."' ") or die(mysql_error());
		$fetchAu = mysql_fetch_assoc($selectuserP);
		$selectcat = mysql_query("SELECT * FROM category WHERE c_id = '".$fetchpost->category."' ") or die(mysql_error());
		$fetchcat = mysql_fetch_assoc($selectcat);

echo '<div class="rightco">
<div class="b_t_in">
<div class="title_b"><a href="topics.php?id='.$fetchpost->p_id.'"><h3>'.$fetchpost->p_title.'</h3></a></div>
<div class="info">
بواسطة:'.$fetchAu['u_name'].' 
التاريخ:30/06/2017
التصنيف:'.$fetchcat['c_title'].'

</div>
</div>
<div class=""></div>

<table class="tb" width="100%" border="0">
<tr>
<td width="20%"><div class="pic"><img src="'.$fetchpost->p_pic.'" alt="" /></div></td>
<td width="80%">
<p>'.mb_substr($fetchpost->p_sub,0,300,'UTF-8').'</p>
</td>
</tr>
</table>
<div class="more"><a href="topics.php?id='.$fetchpost->p_id.'">إقرأ المزيد</a></div>

</div>
';	
	
	
	
}
}else{
	
	echo'<div class="error">لا يوجد أي موضوع في هذا التصنيف</div><br />';
	
}

echo'<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />';
	include 'files/block.php';
	include 'files/footer.php';
?>