<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="robots" content="noarchive" />

<!-- GeoURL stuff -->
<meta name="ICBM" content="38.856547, -77.059228" />
<meta name="DC.title" content="Joe Grossberg and Salem Pearce" />
<meta name="author" content="Joe Grossberg" />

<title>Joe and Salem.com</title>

<link rel="stylesheet" href="/reset.css" type="text/css" />
<link rel="stylesheet" href="/styles.css" type="text/css" />
<link rel="Shortcut Icon" type="image/ico" href="http://www.joeandsalem.com/favicon.ico" />
<script type="text/javascript" src="rsvp.js"></script>

</head>

<body>

  <div id="header"></div>
  <div id="content">

    <h1><a href="/">Wedding Website of Joe Grossberg and Salem Pearce</a></h1>

<p>Thank you for your reply.</p>

<p>
<?php 
$output = '';
if ($_POST['yes_no'] == 'yes') {
  $output .= "We are happy ";
} else {
  $output .= "We are sorry ";
}

$output .= "to hear that the following people ";

if ($_POST['yes_no'] == 'yes') {
  $output .= "will ";
} else {
  $output .= "will not ";
}
$output .= "be attending:";
?>
</p>
<p>
<ul>
<?php
for ($i=0; $i<7; $i++) {
  if ($_POST['people'][$i]) {
    $output .= ("<li>" . $_POST['people'][$i] . "</li>");
  }
}
?>
</ul>

<?php echo $output ?>
<br />
</p>

<?php 
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$to = 'salem@joeandsalem.com, josephgrossberg+wedding@gmail.com';
$subject = 'Wedding RSVP received';
mail($to, $subject, $output, $headers);
?>

<p>Please contact the bride at <a href="mailto:salem@joeandsalem.com">salem@joeandsalem.com</a> or at <strong>(202) 361-3880</strong> if you have any questions.</p>

<p><br /><br /><br /></p>

<p>[ <a href="/">Home</a> ]</p>

</div>

  <div id="footer"></div>

</body>
</html>
