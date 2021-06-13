<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" type="text/css" href="styleLayout.css">
<body>
<?php  include("css_layout.php.php"); ?>
<h1>City Gallery</h1>
<h1>London</h1>
<p> London is the capital city of England. It is the most populous city in the United Kingdom, with a metropolitan area
    of over 13 million inhabitants.</p>
<p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its
    founding by the Romans, who named it Londinium.</p>
<ul>
    <li><a href="#">London</a></li>
    <li><a href="#">Paris</a></li>
    <li><a href="#">Tokyo</a></li>
</ul>

<div class="container">
<header><?php include "header.php"; ?></header>
<nav><?php include "nav.php"; ?></nav>
<article><?php include "content.php"; ?></article>
<footer><?php include "footer.php"; ?></footer>
</div>


</body>
</html>

