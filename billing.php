<!--
	The 'billing.php' page allows the user to enter their details for placing their respective order
-->

<!DOCTYPE html>
<html>

<head>

	<title>Billing Portal</title>
	<link href = "billing.css"
			rel = "stylesheet" />

</head>

<body>
	
	<header>
	</header>

	

	<section>
		<h1>Billing Information</h1>

		<!-- We now create a form to take the entire billing information from the customer -->
		<form action = "thanks.php" method = "post">

			<label for = "firstname">First name : </label>
			<input type = "text"
					id = "firstname"
					name = "firstname"	required />

			<label for = "middlename">Middle name : </label>
			<input type = "text"
					id = "middlename"
					name = "middlename" />

			<label for = "lastname">Last name : </label>
			<input type = "text"
					id = "lastname"
					name = "lastname"	required />

			<label for = "email">Email Id: </label>
			<input type = "email"
					id = "email"
					name = "email"	required />

			<label for = "mobile">Mobile Number (of the form 12345-67890): </label>
			<input type = "text"
					id = "mobile"
					name = "mobile"	required 
					pattern = "[0-9]{5}-[0-9]{5}" required/>

			<label for = "address">Full Address (with Door No.) : </label>
			<input type = "text"
					id = "address"
					name = "address"	required />

			<label for = "city">City : </label>
			<input type = "text"
					id = "city"
					name = "city"	required />

			<label for = "state">State: </label>
			<select name = "state" id = "state">
				<option value = "Andhra Pradesh">Andhra Pradesh</option>
				<option value = "Arunachal Pradesh">Arunachal Pradesh</option>
				<option value = "Assam">Assam</option>
				<option value = "Bihar">Bihar</option>
				<option value = "Chattisgarh">Chattisgarh</option>
				<option value = "Goa">Goa</option>
				<option value = "Gujarat">Gujarat</option>
				<option value = "Haryana">Haryana</option>
				<option value = "Himachal Pradesh">Himachal Pradesh</option>
				<option value = "Jharkhand">Jharkhand</option>
				<option value = "Karnataka">Karnataka</option>
				<option value = "Kerala">Kerala</option>
				<option value = "Madhya Pradesh">Madhya Pradesh</option>
				<option value = "Maharastra">Maharastra</option>
				<option value = "Manipur">Manipur</option>
				<option value = "Meghalaya">Meghalaya</option>
				<option value = "Mizoram">Mizoram</option>
				<option value = "Nagaland">Nagaland</option>
				<option value = "Odisha">Odisha</option>
				<option value = "Punjab">Punjab</option>
				<option value = "Rajasthan">Rajasthan</option>
				<option value = "Sikkim">Sikkim</option>
				<option value = "Tamil Nadu">Tamil Nadu</option>
				<option value = "Telangana">Telangana</option>
				<option value = "Tripura">Tripura</option>
				<option value = "Uttar Pradesh">Uttar Pradesh</option>
				<option value = "Uttarakhand">Uttarakhand</option>
				<option value = "West Bengal">West Bengal</option>

			</select>

			<label for = "pincode">Pin Code : </label>
			<input type = "text"
					id = "pincode"
					name = "pincode"	required />

			<h1>Payment Details</h1>

			<label for = "cardholdername">NAME ON THE CARD : </label>
			<input type = "text"
					id = "cardholdername"
					name = "cardholdername"		required />

			<label for = "cardnumber">CARD NUMBER : </label>
			<input type = "text"
					id = "cardnumber"
					name = "cardnumber"		required
					pattern = "[0-9]{4}-?[0-9]{4}-?[0-9]{4}-?[0-9]{4}"	required />

			<label for = "expmonth">EXPIRY MONTH : </label>
			<input type = "text"
					id = "expmonth"
					name = "expmonth"	required />

			<label for = "expyear">EXPIRY YEAR : </label>
			<input type = "text"
					id = "expyear"
					name = "expyear"	required />
			
			<label for = "cvv">CVV : </label>
			<input type = "password"
					id = "cvv"
					name = "cvv"	required 
					pattern = "[0-9]{3}"/>
			<input type = "submit"
					value = "Place order" />
		</form>
	</section>

	<footer>
        	<p style = "text-align: right;">&copy; 2023 Bamazon Shopping. All rights reserved.</p>
    	</footer>

</body>

</html>