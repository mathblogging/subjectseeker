<?php

include_once (dirname(__FILE__)."/../config/globals.php");
include_once (dirname(__FILE__)."/../scripts/util.php");

$db  = ssDbConnect();

$import = fopen("math-blogs.txt", "r");
while ($row = fgetcsv($import, 0, ",", '"')) {
	$sql = "INSERT IGNORE INTO BLOG ( BLOG_STATUS_ID , BLOG_NAME , BLOG_URI , BLOG_SYNDICATION_URI , BLOG_DESCRIPTION, ADDED_DATE_TIME ) VALUES ( 0 , '".mysql_real_escape_string($row[0])."' , '".mysql_real_escape_string($row[1])."' , '".mysql_real_escape_string($row[3])."' , NULL , NOW() );";
	mysql_query($sql, $db);
	$blogId = mysql_insert_id ();
	
	$sql = "INSERT IGNORE INTO TOPIC (TOPIC_NAME, TOPIC_TOP_LEVEL_INDICATOR) VALUES ('".mysql_real_escape_string(ucfirst($row[2]))."', 1)";
  mysql_query($sql, $db);
	
	$sql = "INSERT IGNORE INTO PRIMARY_BLOG_TOPIC ( TOPIC_ID, BLOG_ID ) VALUES ( ( SELECT TOPIC_ID FROM TOPIC WHERE TOPIC_NAME = '".mysql_real_escape_string(ucfirst($row[3]))."' AND TOPIC_TOP_LEVEL_INDICATOR = 1 LIMIT 1 ) , '$blogId' );";
	mysql_query($sql, $db);
	
	print "<p>Inserted: ".$row[0]."</p>";
}

?>
