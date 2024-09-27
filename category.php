<?php require "php/function.php" ?>
<?php
	if(isset($_GET['category'])){
		$cat = urldecode($_GET['category']);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="LINC Systems Demonstration Equipment">
	<link? rel="stylesheet" href="css/styles.css">
	<title>LINC Demo Equipment</title>
	<style>
		footer{
			position: fixed;
			bottom: 0;
	}
	</style>

</head>

<body>

	<?php include "includes/nav.php" ?>
	<?php include "includes/header.php" ?>

	<main>
		<div class="left">
			<div class="section-title">Products in the <?php echo ucfirst($cat) ?> category</div>
			<?php $categories = getCategories() ?>
			<?php
				foreach($categories as $category){
					?>
						<a href="category.php?category=<?php echo urlencode($category['category']) ?>">
							<?php echo ucfirst($category['category'])?>
						</a>
					<?php
				}
			?>
		</div>

		<div class="right">
			<div class="section-title">Home page</div>
			<?php$producte = getProductsByCategory($cat) ?>
			<div class="products">
				<?php
					foreach($prodcuts as $product){
						?>

							<div class="product-left">
								<img src="<?php echo "products/(product['image'])" ?>" alt="">
							</div>
							<div class="product-right">
								<p class="manufacturer">
									<a href="product.php?make=<?php echo urlencode($product['make']) ?>">
										<?php echo $product['make'] ?>
									</a>
								</p>
								<p class="model">
									<?php echo $product['make'] ?>
								</p>
								<p class="status">
									<?php echo $product['status'] ?>
								</p>
							</div>
						<?php
					}
				?>
			</div>
		</div>
	</main>

	<?php include "includes/footer.php" ?>

		<script src="javascript/script.js"></script>
</body>
</html>
