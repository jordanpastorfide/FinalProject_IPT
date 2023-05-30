<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="with=decie-width, initial-scale=1.0">
	<title>Jasmin's Peanut Butter</title>
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<section class="sub-header">
		<nav>
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
		<h1>Our Products</h1>
</section>

<!---------- Our Product Content ------->

<main>
    <section id="tours" class="container">
        <h1 class="mt-5">Products</h1>

        <form method="GET" class="mt-3">
            <div class="form-group">
                <label for="search">Search:</label>
                <input type="text" id="search" name="search" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>

		<?php
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $xmlFile = simplexml_load_file('products.xml');
    $found = false;
    $output = '';
    foreach ($xmlFile->tour as $tour) {
        if (stripos($tour->title, $search) !== false) {
            $output .= '<div class="blog mt-5 bg-gray">';
            $output .= '<h2 class="text-center">' . $tour->title . '</h2>'; 
            $output .= '<p><strong>Details:</strong> ' . $tour->details . '</p>';
            $output .= '<p><strong>Price:</strong> ' . $tour->author . '</p>';
            $output .= '<p><strong>Date:</strong> ' . $tour->date . '</p>';
            $output .= '<div class="image-container">';
            $output .= '<img src="img/' . $tour->image . '" alt="img" class="tour-image">';
            $output .= '</div>';

            // Add the thumbs up and thumbs down buttons
            $output .= '<div class="mb-4 d-flex flex-wrap justify-content-center">';
            $output .= '<div class="mr-4 mb-2">';
            $output .= '<span class="tm-text-gray-dark"></span><span class="tm-text-primary">How is it for you?</span>';
            $output .= '</div>';
            $output .= '<div class="d-flex align-items-center">';
            $output .= '<label class="like-button mr-3">';
            $output .= '<input type="radio" name="like-dislike" />';
            $output .= '<i class="far fa-thumbs-up"></i>';
            $output .= '</label>';
            $output .= '<label class="dislike-button">';
            $output .= '<input type="radio" name="like-dislike" />';
            $output .= '<i class="far fa-thumbs-down"></i>';
            $output .= '</label>';
            $output .= '</div>';
            $output .= '</div>';

            $output .= '</div>';
            $found = true;
        }
    }
    if (!$found) {
        $output .= '<p class="mt-5 text-center">No destination found.</p>';
    }
    // Display the search metadata
    $output .= '<p class="mt-3 text-center">Showing results for search: ' . $search . '</p>';
} else {
    $xmlFile = simplexml_load_file('products.xml');
    $output = '';
    foreach ($xmlFile->tour as $tour) {
        $output .= '<div class="blog mt-5 bg-gray">';
        $output .= '<h2 class="text-center">' . $tour->title . '</h2>';
        $output .= '<p><strong>Author:</strong> ' . $tour->author . '</p>';
        $output .= '<p><strong>Date:</strong> ' . $tour->date . '</p>';
        $output .= '<div class="image-container">';
        $output .= '<img src="img/' . $tour->image . '" alt="img" class="tour-image">';
        $output .= '</div>';
        $output .= '<p><strong>Details:</strong> ' . $tour->details . '</p><p></p>';

        // Add the thumbs up and thumbs down buttons
        $output .= '<div class="mb-4 d-flex flex-wrap justify-content-center">';
        $output .= '<div class="mr-4 mb-2">';
        $output .= '<span class="tm-text-gray-dark"></span><span class="tm-text-primary">How is it for you?</span>';
        $output .= '</div>';
        $output .= '<div class="d-flex align-items-center">';
        $output .= '<label class="like-button mr-3">';
        $output .= '<input type="radio" name="like-dislike" />';
        $output .= '<i class="far fa-thumbs-up"></i>';
        $output .= '</label>';
        $output .= '<label class="dislike-button">';
        $output .= '<input type="radio" name="like-dislike" />';
        $output .= '<i class="far fa-thumbs-down"></i>';
        $output .= '</label>';
        $output .= '</div>';
        $output .= '</div>';

        $output .= '</div>';
    }
}
?>

<!-- Wrap the output within a centered div -->
<main>
    <section style="display: flex; justify-content: center;">
        <div>
            <?php echo $output; ?>
        </div>
    </section>
</main>

<!-- Add CSS styles for centering the image and setting a consistent size -->
<style>
    .image-container {
        display: flex;
        justify-content: center;
    }

    .tour-image {
        width: 900px; /* Set the desired width */
        height: auto;
    }

    .bg-gray {
        background-color: #ccc;
        padding: 10px;
        border-radius: 5px;
    }
    .image-container {
        display: flex;
        justify-content: center;
    }

    .tour-image {
        width: 900px; /* Set the desired width */
        height: auto;
    }

    .bg-gray {
        background-color: #ccc;
        padding: 10px;
        border-radius: 5px;
    }

    .bg-gray * {
        color: black;
    }
</style>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!----- Footer ----->

<section class="footer">
	<p>Made <i class="fa fa-heart-o"></i> by Jordan Pastorfide</p>
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