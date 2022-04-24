<?php
// File: strip_punctuation.php
// Desc: Removes punctuation and whitespace from some text
// Created: 06/14/2008
// Last Modified: 06/14/2008
// Author: Patrick Eisenmann

 

/**
 * Strips punctuation and whitespace from some text
 * @param $text - Text to strip
 * @return $stripped - Stripped version of $text
 */
function strip_punctuation( $text )
{
	$stripped = preg_replace("/\W/is", "", $text);
	return $stripped;
}
?>