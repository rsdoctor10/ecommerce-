<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>My Shop</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Welcome to My Shop</h1>

	<?php
// Connect to database
include_once 'db_conn.php';


	// Retrieve the product information from the database
	$query = "SELECT * FROM products";
	$result = mysqli_query($conn, $query);

	// Display the product information on the shop interface
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo '<div>';
			echo '<h2>' . $row['prod_name'] . '</h2>';
			echo '<p>Price: ₱' . $row['prod_price'] . '</p>';
			echo '<button><a href="order_form.php?product_id=' . $row['prod_id'] . '">Buy Now</a></button>';
			echo '</div>';
		}
	}

	// Close the database connection
	mysqli_close($conn);
	?>

</body>
<script src="js/bootstrap.js"></script>
</html>
