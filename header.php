<?php
require 'db.class.php';
require 'panier.class.php';
$DB = new DB();
$panier = new panier($DB);
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Panier Interactif !</title>
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

	<div id="header">
	<div class="wrap">
	<div class="menu">
		
	<a href="index.php" class="logo">Cocotte</a>
	<h1>Primi igitur Eusebius</h1>
		<ul class="panier">
			<li class="caddie"><a href="panier.php">Caddie</a></li>
			<li class="items">Articles<span id="count"><?= $panier->count(); ?></span></li>
			<li class="total">Sous-total<span><span id="total"><?= number_format($panier->total(),2,',',' '); ?></span> €</span></li>
		</ul>
	</div>
	</div>
</div>

<div id="subheader">
	<div class="wrap">
		<h2>Et quoniam mirari posse quosdam <a href="#">peregrinos</a> sed <a href="#">certamen alacriter</a> .</h2>
	</div>
</div>


<div id="wrap">

	<div id="menu">
		<ul class="wrap">
			<li> <a href="#">Quid enim</a> </li>
			<li> <a href="#">Quid enim</a> </li>
			<li> <a href="#">Quid enim</a> </li>
			<li> <a href="#">Quid enim</a> </li>
		</ul>
	</div>
	<div id="ariane">
		<div class="wrap">		Quibus occurrere bene pertinax miles explicatis <a href="#">Ordinibus</a>
		</div>
	</div>
	<div id="main" class="clearfix">