<?php
if (!isset($description)){
	$description = "Someone forgot to set the description variable.  Please write to web admin and complain!";	
}
if (!isset($title)){
	$title = "LAZY PAGE | fUnzOne";	
}
if (!isset($page_style)) {
    $page_style = "blank.css";
}
?>


<!doctype html>   
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title><?php echo $title; ?></title>
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="author" content="AKiO">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  <link rel="stylesheet" href="css/fontface.css">
  <!--reset-->
  <link rel="stylesheet" href="css/reset.css" />
  <!-- CSS : implied media="all" -->
  <link rel="stylesheet" href="css/style.css?v=2">
  <!--googles code prettify-->
  <link rel="stylesheet" href="css/prettify.css" />
  <!-- page spacific stylesheet -->
  <link rel="stylesheet" "type="text/css" href="css/<?php echo $page_style; ?>" media="screen" />
  
  
   <script src="js/libs/modernizr-1.6.min.js"></script>



</head>
<body>