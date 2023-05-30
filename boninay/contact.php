<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="with=decie-width, initial-scale=1.0">
	<title>Jasmin's Peanut Butter</title>
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
		<h1>Contact Us!</h1>
</section>

<!---------- about us content ------->

<section class="about-us">

	<div class="row">
		<div class="about-col">
			<h1>Contact Us!</h1>
			<p>Jasmin's Peanut Butter
                <br>☎️ 0927-072-4604
                <br>📍 Tamayo Santa Cruz Marinduque</p>
			
		</div>
		<div class="about-col">
			<img src="img/1.jpg">
		</div>
	</div>
	
</section>
<section class="reviews">
    <div class="container">
        <h2 class="text-center text-black">Customer Reviews</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="review-form">
                    <h3 class="text-center text-black">Leave a Review</h3>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="form-group">
                            <label for="review" class="text-black">Review:</label>
                            <textarea name="review" id="review" rows="5" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Review</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .reviews {
        background: #ccc;
    }

    .review-form {
        background: #ccc;
    }

    .text-black {
        color: black;
    }
</style>


<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $reviewText = $_POST["review"];

    $reviewsFile = 'reviews.xml';

    // Load the existing XML file or create a new one
    if (file_exists($reviewsFile)) {
        $reviews = simplexml_load_file($reviewsFile);
    } else {
        $reviews = new SimpleXMLElement('<reviews></reviews>');
    }

    $review = $reviews->addChild('review');
    $review->addChild('reviewText', $reviewText);

    $reviews->asXML($reviewsFile);

    echo '<div class="text-center"><span class="text-black">Thank you for your review!</span></div>';

}
?>


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