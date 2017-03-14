<?php require 'header.php'; ?>
<div class="checkout">
	<div class="title">
		<div class="wrap">
		<h2 class="first">Panier</h2>
		</div>
	</div>
	<form method="post" action="panier.php">
	<div class="table">
		<div class="wrap">

			<div class="rowtitle">
				<span class="name">Nom</span>
				<span class="price">Prix</span>
				<span class="quantity">Quantité</span>
				<span class="subtotal">Prix avec TVA</span>
				<span class="action">Actions</span>
			</div>

			<?php
			$identifiants = array_keys($_SESSION['panier']);
			if(empty($identifiants)){
				$products = array();
			}else{
				$products = $DB->query('SELECT * FROM articles WHERE id IN ('.implode(',',$identifiants).')');
			}
			foreach($products as $product):
			?>
			<div class="row">
				<a href="#" class="img"> <img src="images/<?= $product->id; ?>.jpg" height="50"></a>
				<span class="name"><?= $product->nom; ?></span>
				<span class="price"><?= number_format($product->prix,2,',',' '); ?> €</span>
				<span class="quantity"><input type="text" name="panier[quantity][<?= $product->id; ?>]" value="<?= $_SESSION['panier'][$product->id]; ?>"></span>
				<span class="subtotal"><?= number_format($product->prix * 1.196,2,',',' '); ?> €</span>
				<span class="action">
					<a href="panier.php?delPanier=<?= $product->id; ?>" class="del"><img src="images/del.png"></a>
				</span>
			</div>
			<?php endforeach; ?>
			<div class="rowtotal">
				Grand Total : <span class="total"><?= number_format($panier->total() * 1.196,2,',',' '); ?> € </span>
			</div>
			<input type="submit" value="Rafraîchir le panier">
		</div>
	</div>
	</form>
</div>
<?php require 'footer.php'; ?>