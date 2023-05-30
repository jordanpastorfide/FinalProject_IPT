<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="with=decie-width, initial-scale=1.0">
	<title>Jasmin's Peanut Butter</title>
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
</head>
<body>
	<section class="sub-header">
		<nav>
			<a href="index.html"><img src="img/pnut.jpg"></a>
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>
				 <ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="about.php">ABOUT</a></li>
					<li><a href="products.php">PRODUCTS</li>
					<li><a href="contact.php">CONTACT</a></li>
				</ul>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>
		<h1>About Us</h1>
</section>

<!---------- about us content ------->

<section class="about-us">

	<div class="row">
		<div class="about-col">
			<h1>What you want to know about Jasmin's Peanut Butter</h1>
			<p>Jasmine's Peanut Butter is a local business in Marinduque known for producing high-quality peanut butter products. The company follows a meticulous process to ensure the production of delicious and nutritious peanut butter. Here's a simplified description of the flowchart for Jasmine's Peanut Butter production: <br>

			<br>Sourcing: Jasmine's Peanut Butter sources fresh and locally grown peanuts from trusted farmers in Marinduque.<br>

			<br>Sorting and Cleaning: The peanuts are carefully sorted to remove any damaged or discolored ones. They are then thoroughly cleaned to remove dirt and impurities.<br>

			<br>Roasting: The cleaned peanuts are evenly roasted to enhance their flavor and bring out their natural oils. This step adds a rich and distinctive taste to the peanut butter.<br>

			<br>Grinding: The roasted peanuts are finely ground to a smooth consistency using specialized equipment. This grinding process ensures a creamy texture and optimal blending of flavors.<br>

			<br>Ingredient Addition: Depending on the recipe, Jasmine's Peanut Butter may add ingredients like sugar, salt, or other flavorings to enhance the taste. This step is done in controlled proportions to maintain the desired flavor profile.<br>

			<br>Mixing and Homogenization: The ingredients are thoroughly mixed and homogenized to ensure even distribution of flavors and a consistent texture throughout the peanut butter.<br>

			<br>Packaging: The finished peanut butter is carefully packaged in jars or containers, taking care to maintain hygiene and freshness. Proper labeling and branding are applied to the packaging.<br>

			<br>Quality Control: Jasmine's Peanut Butter conducts stringent quality checks to ensure that each batch meets their high standards. This involves taste testing, texture assessment, and adherence to food safety regulations.<br>

			<br>Distribution: The packaged peanut butter is ready for distribution. It is either sold directly at the company's own store or supplied to local retailers and supermarkets in Marinduque.<br>

			<br>Marketing and Sales: Jasmine's Peanut Butter engages in marketing activities to promote their products, including advertising, social media presence, and participating in local events or food fairs. They focus on building customer loyalty and expanding their customer base.<br>

			<br>Customer Satisfaction: Jasmine's Peanut Butter values feedback from customers and strives to meet their expectations. They continuously assess customer satisfaction and make improvements based on feedback received.</p>
			
		</div>
		<div class="about-col">
			<img src="img/1.jpg">
		</div>
	</div>
	
</section>


<!----- Footer ----->

<section class="footer">
	<p>Made with <i class="fa fa-heart-o"></i> by Jordan Pastorfide</p>
</section>


<!------Javascript for Toggle Menu------>
<script>
	
	var navLinks = document.getElementById("navLinks");
	function showMenu(){
		navLinks.style.right = "0";
	}
	function hideMenu(){
		navLinks.style.right = "-200px";
	}

</script>

</body>
</html>