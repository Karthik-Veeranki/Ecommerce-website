# Ecommerce-website

This Web application is similar to an online e-commerce website (similar to Amazon).

The application contains the following files:

1. **login.html** - It is the first page that comes to the screen when the project is executed.
    This file contains the frontend UI - mainly prompts the user to login to the e-commerce site.
    If they have no account, registration option is provided which will be re-directed to register them first.
2. **login.php** - This page contains the backend logic of taking the user login credentials and redirect them to 'Home' page
	First we connect to the database (SQL server) and check if the entered details are matching with one of the already existing accounts.
	With a successful login, the user will be re-directed to the Home page of the shopping site (shopping.php)
3. **registration.html** - It is the page that allows the user to register themselves if they are using the website first time.
    This file contains the frontend UI.
    Once they have entered their details correctly, their account gets created successfully and gets redirected to login page.
4. **registration.php** - This page contains the backend logic of taking the user registration credentials to create their account.
	First we connect to the database (SQL server) and then insert the user data into the 'users' table 
	With a successful registration, the user will be re-directed to the Login page of the shopping site (login.html)
5. **style.css** - This file contains the external styling for the webpages login.html and registration.html
6. **shopping.php** - This page contains the frontend view of the total products available currently.
	If the user wishes to add an item to their cart, they can do so using the 'Add to Cart' option, which redirects user to the cart
    This page is styled using basic Bootstrap5
7. **shopping.css** - This file contains the external styling for the webpage cart.php
8. **cart.php** - This page allows the user to view their cart, what all items are present in cart at the moment
9. **cart.css** - This file contains the external styling for the webpage cart.php
10. **billing.php** - This page allows the user to enter their details for placing their respective order
11. **billing.css** - This file contains the external styling for the webpage billing.php
12. **thanks.php** - This page displays a 'Thank You' message to the user after they have placed order.
13. **thanks.css** - This file contains the external styling for the webpage thanks.php
14. **logout.php** - This page is the end page of the chronological ordering. 
        Once the user wants to logout, they will end their session and gets redirected to default opening page (login.html)

Also, the data storage uses **MySQL** in the backend.
The SQL file **Database.sql** creates one database 'Shopping' which is used for this e-commerce platform. We create two tables - 'users' and 'products'

-- Users table has three fields:'username', 'email', 'password' of the user

-- Products table has three fields: 'id', 'name', 'price' of the product

Finally hosted the website using **XAMPP Control Panel**. Xampp is for scripts mainly written in PHP. It contains **Apache HTTP server**, also provides MySQL data storage module where admin can access the database. Having both Apache and MySQL module services started, we can view the output in any web browser at default localhost link: http://localhost/login.html


**Disclaimer**: This project is designed solely for learning purpose. It doesn't resemble or replicate any other web services and doesn't cause any copyright issues.
