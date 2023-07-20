<!--
	The 'cart.php' page allows the user to view their cart, what all items are present in cart at the moment
-->

<!DOCTYPE html>
<html>

<head>
	<title>Cart</title>
	<link href = "cart.css"
			rel = "stylesheet" />
</head>

<body>
	
	<!-- Header of the body -->
	<header>
		<h1>
			<?php
				session_start();
				
			?>
			Shopping Cart
		</h1>
	

	<!-- navigation of body -->
	<nav>
		<ul>
			<li>
				<a href = "shopping.php">Home</a>
			</li>
			
			<li>
				<a href = "shopping.php">Products</a>
			</li>

			<li>
				<a href = "mailto:karthik.veeranki.2003@gmail.com">Mail us</a>
			</li>
		</ul>
	</nav>
	</header>

	<!-- Main section -->
	<main>
		<table>

			<!-- First we create the fields of the cart table -->
			<tr class = 'headings'>
				<th>Product Name </th>
				<th>Price </th>
				<th>Quantity </th>
				<th>Total amount </th>
			</tr>
			
			<!-- Next get the database connection -->
			<!-- This is done after creating the fields because they are mandatory to be displayed, even if there is no item in the cart -->

			<?php
				
				// database information
				$host = "localhost";
				$database = "shopping";
				$username_db = "root";
				$password_db = "";

				// establishing MySQL connection using mysqli()
				$db = new mysqli($host, $username_db, $password_db, $database);

				if($db->connect_error)
				{
					die ("Conncetion failed: " .$db->connect_error);
				}

				$total_amount = 0;	// To store the total amount of items

				// Now, we fill the cart table
				//var_dump($_SESSION['cart']);


				if(isset($_SESSION["cart"]))
				{
					foreach ($_SESSION['cart'] as $prod_id => $prod_quantity)
					{
						// Write the SQL command to get the entry with particular id from products table
						$cursor = "SELECT * FROM `products`
								   WHERE `id` = $prod_id;";

						// Execute the command
						$result = $db->query($cursor);

						// We can display if such product exists in the table
						if($result != false)
						{
							if($result->num_rows)
							{
								$item = $result->fetch_assoc();
								$name = $item["name"];
								$price = $item["price"];
								$item_amount = $price * $prod_quantity;	// amount for a product is product of its price and its quantity in Cart

								// Having the necessary information, we can display the item on screen
								if($prod_quantity != 0)
								{
									echo "<tr>";
										echo "<td>$name</td>";
										echo "<td>&#x20B9;$price</td>";
										echo "<td>$prod_quantity</td>";
										echo "<td>&#x20B9;$item_amount</td>";
									echo "</tr>";
								}
								// Now, add this item_amount to total
								$total_amount += $item_amount;
							}
						}
					}
				}
				else
				{
					echo "<h2>Your cart is empty</h2>";
				}

				// By now, all the items have been displayed, and now we need to display the total_amount
				echo "<tr>";
				echo "<td colspan = '3'><b>Total Amount</b> : (inclusive of all taxes)</td>";
				echo "<td>&#x20B9;<b>$total_amount</b></td>";
				echo "</tr>";
			?>
		</table>

		<form action = "billing.php" method = "post">
			<input type = "submit"
					value = "Proceed to buy"
					class = "button" />
		</form>
	</main>

	<footer>
        	<p style = "text-align: right;">&copy; 2023 Bamazon Shopping. All rights reserved.</p>
    	</footer>
</body>

</html>