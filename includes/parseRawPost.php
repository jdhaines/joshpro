<?php
// File: parseRawPost.php
// Desc: Parse the raw post into an array
// Created: 06/14/2008
// Last Modified: 06/14/2008
// Author: Patrick Eisenmann

 
include_once("strip_punctuation.php");

function parseRawPost($textFromFile)
{
	$_default['TITLE'] = "My New Post";
	$_default['DATE'] = "0000-00-00";
	$_default['TIME'] = "00:00:00";
	$_default['TITLE_SHORT'] = strip_punctuation($_default['TITLE']);
	$_default['TEXT'] = "Blah blah blah";


	$post = array();
	// This line removes every /* Comment */ from the file
	$cleaned = preg_replace("/\/\*(.*?)\*\//is","",$textFromFile);
	//$post['clean'] = $cleaned;
	
	
	foreach ($_default as $key => $value)
	{
		$post[$key] = $value;
	}
	
	$lines = str_replace("\r\n","\n",$cleaned);
	$lines = str_replace("\r","\n",$lines);
	
	$post['TEXT'] = preg_replace("/(?:.*?)<POST>(.*?)<\/POST>(?:.*?)/is","\\1", $lines);
	$post['TEXT'] = str_replace("\n", "<br />", $post['TEXT']);
	$lines = preg_replace("/<POST>(?:.*?)<\/POST>/is","", $lines);
	
	
	$lines = explode("\n",$lines);
	
	//print_r($lines);
	
	foreach ($lines as $line)
	{
		$temp = strip_punctuation($line);
		if ($temp != "")
		{
			// Removes // comments from the properties
			$line = preg_replace("/\/\/(.*)/is","",$line);
			
			$property = preg_replace("/(.*?)(?:\s*)=(?:\s*)(.*?)(?:\s*);(?:\s*)/is","\\1",$line);
			$value = preg_replace("/(.*?)(?:\s*)=(?:\s*)(.*?)(?:\s*);(?:\s*)/is","\\2",$line);
			if (strlen($property)>1)
			{
				$post[$property] = $value;
			}
			
			
			
			//echo $line . "\n";
		}
	}
	
	$post['TITLE_SHORT'] = strip_punctuation($post['TITLE']);
	return $post;
}

?>