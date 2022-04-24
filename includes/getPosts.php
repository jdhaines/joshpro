<?php
// File: getPosts.php
// Desc: Very simple blog system
// Created: 06/14/2008
// Last Modified: 06/14/2008
// Author: Patrick Eisenmann

 
include_once("includes/loadText.php");
include_once("includes/parseRawPost.php");
include_once("includes/htmlFromArray.php");




/**
 * Reads the contents of a folder as a post list and returns html
 * @return String $html - HTML of all the posts
 */
function getPosts()
{

//$postsDir = "/" . basename(dirname(__FILE__)) . "/simpleBlog/";
$postsDir = "simpleBlog/";
$handle = opendir($postsDir);
$html = array();
while($t = readDir($handle))
{
	if (!is_dir($t) && (substr($t,-4,4) == ".txt" || substr($t,-5,5) == ".bl0g"))
	{
		$rawText = loadText($postsDir.$t);
		$itemArray = parseRawPost($rawText);
		$html[$t] = htmlFromArray($itemArray);
		
	}
	
}

return implode("<br /><br />", $html);

}
?>