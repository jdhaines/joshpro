<?php
// File: loadText.php
// Desc: Quick function to load text from file
// Created: 05/11/2008
// Last Modified: 05/11/2008
// Author: Patrick Eisenmann


/**
 * Reads the contents of a file and returns them
 * @param $filename - String location to the file 
 * @param $s - float amount of file to get (0.0 to 1.0) or int bites to get (2 to filesize($filename))
 * @param $b - string to use binary either "b" or ""
 */
function loadText($filename,$s = 1, $b = "")
{
	$handle = fopen($filename, "r".$b);
	$contents = fread($handle, ($s <= 1)?filesize($filename)*$s:min(floor($s),filesize($filename)));
	fclose($handle);
	return $contents;
}