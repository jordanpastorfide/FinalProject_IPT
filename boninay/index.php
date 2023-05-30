<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jasmin's Peanut Butter</title>
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<section class="header">
	<nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href="index.php"><img src="img/pnut.jpg" alt="Logo"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navLinks" aria-controls="navLinks" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navLinks">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a class="nav-link text-white" href="index.php">HOME</a></li>
				<li class="nav-item"><a class="nav-link text-white" href="about.php">ABOUT</a></li>
				<li class="nav-item"><a class="nav-link text-white" href="products.php">PRODUCTS</a></li>
				<li class="nav-item"><a class="nav-link text-white" href="contact.php">CONTACT</a></li>
			</ul>
		</div>
	</nav>

	<div class="text-box">
		<h1>Jasmin's Peanut Butter</h1>
		<p>Peanut butter is appreciated for its taste, versatility, and nutritional benefits, providing a good source of protein and healthy fats.</p>
		<a href="" class="hero-btn">Scroll Down To Know More</a>
	</div>
</section>

	<!---- campus ---->

	<section class="campus">
		<div class="container">
			<h1>Our Products</h1>
			<p>Peanut butter is appreciated for its taste, versatility, and nutritional benefits, providing a good source of protein and healthy fats.</p>

			<div class="row">
				<div class="col-md-4">
					<img src="img/small.png" alt="Seoul" class="img-fluid">
					<div class="layer">
						<h3>SMALL</h3>
					</div>
				</div>
				<div class="col-md-4">
					<img src="img/medium.jpg" alt="Yonsei" class="img-fluid">
					<div class="layer">
						<h3>MEDIUM</h3>
					</div>
				</div>
				<div class="col-md-4">
					<img src="img/large.jpg" alt="Korea University" class="img-fluid">
					<div class="layer">
						<h3>LARGE</h3>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!------ Facilities ------>

	<section class="facilities">
		<div class="container">
			<h1>Our Facilities</h1>
			<p>Our facilities are located at Brgy. Tamayo, Santa Cruz, Marinduque.</p>
            <section class="location">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3880.4080944257444!2d122.0929067915377!3d13.448922882136259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a31de6175f6f2b%3A0x2246afe830d30588!2sTamayo%2C%20Santa%20Cruz%2C%20Marinduque!5e0!3m2!1sen!2sph!4v1684725217515!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
		</div>
	</section>

	<!------ Reviews ------>

	<section class="testimonials">
		<div class="container">
			<h1>Reviews</h1>
			<p>Here are some of our customers who have experienced what it's like to taste our special peanut butter.</p>

			<div class="row justify-content-center">
				<div class="col-md-6">
					<img src="img/rev.jpg" alt="Student 1" class="img-fluid">
					<div>
						<p>Many people enjoy the natural sweetness and nutty taste of this peanut butter. It is often considered a delicious and wholesome treat that captures the local flavors of Marinduque. If you're a fan of peanut butter, trying Jasmine's Peanut Butter as a pasalubong from Marinduque would be a delightful experience.</p>
						<h3>@itsariaaaaane</h3>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
					</div>
				</div>
			</div>
		</div>

	<!----- Call To Action ----->

	<section class="cta">
		<div class="container">
			<h1>Order Now!</h1>
			<a href="contact.php" class="hero-btn">CONTACT US</a>
		</div>
	</section>

    <?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $date = $_POST["date"];

    // Move the uploaded image to a directory on your server
    $uploadDirectory = __DIR__ . "/img/";
    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory, 0755, true);
    }
    $image = $_FILES["image"];
    $filename = uniqid() . "." . pathinfo($image["name"], PATHINFO_EXTENSION);
    $destination = $uploadDirectory . $filename;
    move_uploaded_file($image["tmp_name"], $destination);

    $xmlFile = 'products.xml';

    // Load the existing XML file or create a new one
    if (file_exists($xmlFile)) {
        $tours = simplexml_load_file($xmlFile);
    } else {
        $tours = new SimpleXMLElement('<tours></tours>');
    }

    $tour = $tours->addChild('tour');
    $tour->addChild('title', $title);
    $tour->addChild('details', $description);
    $tour->addChild('date', $date);
    $tour->addChild('image', $filename);

    $tours->asXML($xmlFile);

    echo "New product saved successfully.";
}
?>

	<!----- Footer ----->

	<section class="footer">
		<div class="container">
			<p class="rights">© 2023 Jasmin's Peanut Butter. All rights reserved.</p>
		</div>
	</section>

	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
