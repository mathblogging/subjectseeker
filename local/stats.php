<?php 

include_once (dirname(__FILE__)."/../config/globals.php");
include_once (dirname(__FILE__)."/../scripts/util.php");

// Input: DB handle
// Output: Number of approved blogs
function getBlogCount($db) {
	$sql = "SELECT COUNT(BLOG_ID) FROM BLOG WHERE BLOG_STATUS_ID = 0";
	$result = mysql_query($sql, $db);
	$count = mysql_result($result, 0);
	return $count; 
}

// Input: DB handle
// Output: Number of posts
function getPostCount($db) {
	$sql = "SELECT COUNT(BLOG_POST_ID) FROM BLOG_POST WHERE BLOG_POST_STATUS_ID = 0";
	$result = mysql_query($sql, $db);
	$count = mysql_result($result, 0);
	return $count; 
}


$db = ssDbConnect();
$sourceCount = number_format(getBlogCount($db), 0, ".", ",");
$postCount = number_format(getPostCount($db), 0, ".", ",");
?>
<p>ScienceSeeker collects science articles from sources around the world, so you can find the latest science news and discussion on any topic.</p>
<p>We have <?php echo $sourceCount ?> sources and <?php echo $postCount ?> posts.</p>
<p>Are you a science blogger?<br />
<a href="submit">Submit your blog today.</a></p>
<a title="News and posts from ScienceSeeker on our Google+ page" href="https://plus.google.com/112289740262824818142?prsrc=3">Google+</a><br />
<a title="The official ScienceSeeker Facebook page" href="http://www.facebook.com/ScienceSeeker">Facebook</a><br />
<a title="The official ScienceSeeker Twitter account, with news and notes on ScienceSeeker and Science Online" href="https://twitter.com/#!/sciseeker">@SciSeeker</a><br />
<a title="A Twitter feed of just the Science Seeker Editors’ Picks" href="https://twitter.com/#!/sciseekeds">@SciSeekEds</a><br />
<a title="All the posts on ScienceSeeker in a Twitter feed" href="https://twitter.com/#!/sciseekfeed">@SciSeekFeed</a><br />
<a title="A Twitter feed collecting all notes made on ScienceSeeker" href="https://twitter.com/#!/sciseeknotes">@SciSeekNotes</a>