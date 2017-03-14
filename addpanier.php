<?php
require 'header.php';
$json = array('error' => true);
if(isset($_GET['id'])){
	$product = $DB->query('SELECT id FROM articles WHERE id=:id', array('id' => $_GET['id']));
	if(empty($product)){
		$json['message'] = "Produit introuvable !";
	}else{
		$panier->add($product[0]->id);
		$json['error']  = false;
		$json['total']  = number_format($panier->total(),2,',',' ');
		$json['count']  = $panier->count();
		$json['message'] = 'Ceci à bien été ajouté au panier !';
	}
}else{
	$json['message'] = "Rien a été selectionné !";
}
echo json_encode($json);
