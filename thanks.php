<!--
	The 'thanks.php' page displays a 'Thank You' message to the user after they have placed order.
-->
<html>

<head>
	<link href = "thanks.css"
			rel = "stylesheet" />
</head>

<body>

	<header>
	</header>


		<?php
			session_start();

	

			echo "<h1>Thank you</h1>";
			echo "<h1>Your order has been placed successfully !!</h1>";
			echo "<h2>Item(s) will be delivered soon.</h2>";

		?>

		<img src = "/Products_images/celebration.gif" alt = "celebration" class = "center" style = "padding : 7px;">
		<img src = "/Products_images/celebration.gif" alt = "celebration" class = "center" style = "padding : 7px;">
		<img src = "/Products_images/celebration.gif" alt = "celebration" class = "center" style = "padding : 7px;">

		<h2>To return back, <a href = "shopping.php">Click here</a></h2>

	<footer>
		<p style = "text-align: right;">&copy; 2023 Bamazon Shopping. All rights reserved.</p>
	</footer>
</body>
</html>