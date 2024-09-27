<?php require "php/function.php" ?>
<?php
	if(isset($_GET['title'])){
		$cat = urldecode($_GET['title']);
		$product = getProductsByTitle($title);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo $product[0]['meta_description'] ?>">
	<link? rel="stylesheet" href="css/styles.css">
	<title><?php echo $title ?></title>
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
			<div class="section-title">Product details</div>
			<div class="products">
				<div class="product-left">
					<img src="<?php echo "products/(product['image'])" ?>" alt="">
				</div>
				<div class="product-right">
					<p class="make">
						<?php echo $product[0]['make'] ?>
						</a>
					</p>
					<p class="model">
						<?php echo $product[0]['model'] ?>
					</p>
					<p class="status">
						<?php echo $product[0]['status'] ?>
					</p>
				</div>
			</div>
		</div>
	</main>

	<?php include "includes/footer.php" ?>

		<script src="javascript/script.js"></script>
</body>
</html>
