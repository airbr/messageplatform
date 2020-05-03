<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Message Platform</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="page">
<div id="header">
<!-- <a href="/"><img style="border:none" src="logo.png" width="192" height="85" alt="Retwis"></a> -->
<h3>Message Platform</h3>
<?php if(isLoggedIn()): ?>
<div id="homeinfobox">
<?php    
$r = redisLink();
?>
<?=$r->zcard("followers:".$User['id'])?> followers<br>
<?=$r->zcard("following:".$User['id'])?> following<br>
</div>
<?php endif; ?>
<? include("navbar.php") ?>
</div>
