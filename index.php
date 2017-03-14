<?php require 'header.php'; ?>

<div class="home">
	<div class="row">
	<div class="wrap">
		<?php $produits = $DB->query('SELECT * FROM articles');?>
		<?php foreach ($produits as $prod) :?>
	<div class="box">
		<div class="product full">
			<a href="#">
				<img src="images/<?= $prod->id; ?>.jpg"/>
				</a>
				<div class="description">
				<p><?= $prod->nom;?>&nbsp; : <br><?= $prod->description; ?></p>
				<br><p><a href="#" class="price">
				<?= number_format($prod->prix,2,',',' ');?> € </a></p>
		</div>
				<a href="addpanier.php?id=<?= $prod->id; ?>" class="gift addPanier">
				Cadeau
				</a>
			<div class="rating">
				<span>Rating :</span>
					<ul>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#" class="off">5</a></li>
					</ul>
			</div>
			<a class="add addPanier" href="addpanier.php?id=<?= $prod->id; ?>">
			add
			</a>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>
<?php require 'footer.php';?>