<?php
if (array_key_exists('send', $_POST)) {
  // mail processing script
  
  $to = 'Josh@JoshPro.com'; // use your own email address
  $subject = 'Comments from JoshPro Website';
  
  // list expected fieldsRemodeling
  $expected = array('name', 'email', 'comments');
  // set required fields
  $required = array('name', 'email', 'comments');
  // create empty array for any missing fields
  $missing = array();
  // set default values for variables that might not exist
  if (!isset($_POST['project_Type'])) {
    $_POST['project_Type'] = array();
  }
  // create additional headers
  $headers = "From: JoshPro Website Contact Form<Webmaster@JoshPro.com>\r\n";
  $headers .= 'Content-Type: text/plain; charset=utf-8';
  $process = 'includes/process_mail.inc.php';
  if (file_exists($process) && is_readable($process)) {
    include($process);
  } else {
    $mailSent = false;
	mail($to, 'Server problem', "$process cannot be read", $headers);
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JoshPro - Contact Form</title>
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/main.css" rel="stylesheet" type="text/css" />
<link href="css/contact.css" rel="stylesheet" type="text/css" />
<link rel="Shortcut Icon" href="/favicon.ico">
<link rel="icon" href="/favicon.ico" type="image/x-icon">

</head>
<body id="contact">

<div class="container">
<?php require_once('header.php'); ?>

	<div class="bigcontactbox greygradientcontact boxtype">
			<div class="corner TL"></div>
			<div class="corner TR"></div>
			<div class="corner BL"></div>
			<div class="corner BR"></div>
			
<H1>Contact Us!</H1>

<?php
if ($_POST && isset($missing) && !empty($missing)) {
?>
  <p class="warning">Please complete the missing item(s) indicated.</p>
<?php
} elseif ($_POST && !$mailSent) {
?>
  <p class="warning">Sorry, there was a problem sending your message.&nbsp; Please try again.</p>
<?php
} elseif ($_POST && $mailSent) {
?>
  <p id="success"><strong>Your message has been sent.&nbsp; Thanks for your feedback.&nbsp;  If required, I will get back with you soon.</strong></p>
<?php } ?>
<form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
  <fieldset>
    <p><br />
      <label for="name">Name: <?php
      if (isset($missing) && in_array('name', $missing)) { ?>
      <span class="warning">Please enter your name</span><?php } ?>
      </label>
      <input name="name" type="text" class="textInput" id="name" 
      <?php if (isset($missing)) {
		echo 'value="' . htmlentities($_POST['name'], ENT_COMPAT, 'UTF-8') . '"';
	  } ?>
      />
    </p>
    <p>
      <label for="email">Email: <?php
      if (isset($missing) && in_array('email', $missing)) { ?>
      <span class="warning">Please enter your email address</span><?php } ?>
      </label>
      <input name="email" type="text" class="textInput" id="email"
      <?php if (isset($missing)) {
		echo 'value="' . htmlentities($_POST['email'], ENT_COMPAT, 'UTF-8') . '"';
	  } ?>
      />
    </p>    
    <p>
      <label for="comments">Details of Inquiry: <?php
      if (isset($missing) && in_array('comments', $missing)) { ?>
      <span class="warning">Please enter your comments</span><?php } ?>
      </label>
      <textarea name="comments" id="comments" cols="45" rows="5"><?php 
	  if (isset($missing)) {
		echo htmlentities($_POST['comments'], ENT_COMPAT, 'UTF-8');
	  } ?></textarea>
    </p>
    <p class="clearIt">
      <input name="send" type="submit" id="send" value="Send comments" />
    </p>
  </fieldset>
</form>     
  </div>
	
<!--End container div--></div>

</body>
</html>