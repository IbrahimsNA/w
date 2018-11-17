<?php 
$Db = array(
		"hostname"=>"localhost",
		"dbname"=>"blog",
		"dbuser"=>"root",
		"dbpass"=>"root"
			);


$Dbconnect = mysql_connect($Db['hostname'],$Db['dbuser'],$Db['dbpass']) or die(mysql_error());
$DbSelect = mysql_select_db($Db['dbname']) or die(mysql_error());
#=============[SETTING]=====================#
$sqlSelectS = mysql_query("SELECT * FROM config");
$FetchSe = mysql_fetch_object($sqlSelectS);
define("s_name",$FetchSe->s_name);
define("s_url",$FetchSe->s_url);
define("s_email",$FetchSe->s_email);
define("s_desc",$FetchSe->s_desc);
define("s_key",$FetchSe->s_key);
define("s_close",$FetchSe->s_close);
define("s_close_text",$FetchSe->s_close_text);
define("s_copy",$FetchSe->s_copy);
#=============[]=====================#

?>
