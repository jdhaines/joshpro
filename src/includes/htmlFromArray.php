
<?php
// File: htmlFromArray.php
// Desc: Converts a post array to html
// Created: 06/14/2008
// Last Modified: 06/14/2008
// Author: Patrick Eisenmann

/**
 * Takes in a post array and returns html of it
 * @param $postArray - Post array to convert
 * @return $html  - HTML of the array
 */
function htmlFromArray($postArray)
{

$posted = "Posted " . date("l, F jS Y \a\\t g:i a", strtotime($postArray['DATE'] . " " . $postArray['TIME']));

$html = "
<div class=\"blogPost\" id=\"" . $postArray['TITLE_SHORT'] . "\">
 <div class=\"blogTitle\">" . $postArray['TITLE'] . "</div>
 <div class=\"blogDate\">$posted</div>
 <div class=\"blogPostContent\">" . $postArray['TEXT'] . "</div>
</div>
";
return $html;

}
?>