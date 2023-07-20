<!--
	The 'shopping.php' page contains the frontend view of the total products available currently.
	If the user wishes to add an item to their cart, they can do so using the 'Add to Cart' option, which redirects user to the cart
    This page is styled using basic Bootstrap5
-->
<?php
    session_start();

    // if the Add to Cart button is clicked, we need to create a session variable
    if(isset($_POST["Add_to_Cart"]))
    {
        $prod_id = $_POST["prod_id"];
        $prod_quantity = $_POST["prod_quantity"];

        if(!isset($_SESSION['cart']))
        {
            $_SESSION['cart'] = [];     // creating an empty array to store cart items
            header("location:cart.php");
        }

        // Having the cart array, we need to add individual items to it
        $_SESSION["cart"][$prod_id] = $prod_quantity;
        header("location:cart.php");
    }
?>


<!DOCTYPE html>
<html>

<head>
    <title>Bamazon Shopping Application</title>
    <link rel="stylesheet"
            href="shopping.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Specifying the header bar first -->
    <header>
        <h1>
            Hello !!, Welcome to Bamazon Shopping!!
        </h1>
    </header>

    <!-- Next, we have navigation bar to specify all the links-->
    <nav>
        <ul>
            <li>
                <a href="shopping.php">Home</a>
            </li>
            <li>
                Have a look, what's in your <a href="cart.php">Cart</a>
            </li>
            <li>
                Done with me, let's <a href="logout.php">LOG OUT</a>
            </li>
        </ul>
    </nav>

    <!-- Next, we have all the products currently available in the application-->
    <main>
        <section>
            <h1 style = "text-align: center;">Products</h1>
            <ul style = "list-style-type: none;">

            
                <hr>
                <li style = "display: inline-block; ">
                    <!-- Carousel -->
                                        
                                        <div id="demo" class="carousel slide" data-bs-ride="carousel">
                                            
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                                                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                                                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                                                <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                                                <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
                                                <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>

                                            </div>
  
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="/Products_images/mouse1.jpg" alt="Mouse" class="d-block" style="width:450px; height:450px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="/Products_images/mouse2.jpg" alt="Mouse" class="d-block" style="width:450px; height:450px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="/Products_images/mouse3.jpg" alt="Mouse" class="d-block" style="width:450px; height:450px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="/Products_images/mouse4.jpg" alt="Mouse" class="d-block" style="width:450px; height:450px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="/Products_images/mouse5.jpg" alt="Mouse" class="d-block" style="width:450px; height:450px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="/Products_images/mouse6.jpg" alt="Mouse" class="d-block" style="width:450px; height:450px;">
                                                </div>
                                            </div>
  
                                            <!-- Left and right controls/icons -->
                                            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon"></span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                                                <span class="carousel-control-next-icon"></span>
                                            </button>
                                        </div>

                    <h3>Kreo Hawk Gaming Mouse</h3>
                    <p>| With Programmable buttons & RGB Lighting | Pixart 3327 Sensor | Optical Sensor | Lightweight & Durable |</p>
                    
                    <p>| Adjustable DPI upto 12,400 with 1.5m Long Braided Cable | Compatible With Windows & MAC |</p>
                    
                    <p><span><sup>&#x20B9;</sup><b>1,590.00</b></span></p>
                    <!-- Having the entire description of the product, we give option to add to the cart-->

                    <form method="post" action="shopping.php">
                        <input name="prod_id"
                               type="hidden"
                               value="2" />
                        <label for="prod1_quantity">
                            Quantity : 
                        </label>
                        <input name="prod_quantity"
                               type="number"
                               id="prod1_quantity" 
                               value=""
                               min="0"  />

                        <button name="Add_to_Cart"
                                type="submit">
                            Add to Cart
                        </button>
                    </form>
                </li>

                <hr>
                <li style = "display: inline-block; ">
                    <!-- Carousel -->
                                        
                                        <div id="demo2" class="carousel slide" data-bs-ride="carousel">
                                            
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#demo2" data-bs-slide-to="0" class="active"></button>
                                                <button type="button" data-bs-target="#demo2" data-bs-slide-to="1"></button>
                                                <button type="button" data-bs-target="#demo2" data-bs-slide-to="2"></button>
                                                <button type="button" data-bs-target="#demo2" data-bs-slide-to="3"></button>
                                                <button type="button" data-bs-target="#demo2" data-bs-slide-to="4"></button>
                                                <button type="button" data-bs-target="#demo2" data-bs-slide-to="5"></button>

                                            </div>
  
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="/Products_images/watch_1.jpg" alt="Watch" class="d-block" style="width:450px; height:450px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="/Products_images/watch_2.jpg" alt="Watch" class="d-block" style="width:450px; height:450px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="/Products_images/watch_3.jpg" alt="Watch" class="d-block" style="width:450px; height:450px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="/Products_images/watch_4.jpg" alt="Watch" class="d-block" style="width:450px; height:450px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="/Products_images/watch_5.jpg" alt="Watch" class="d-block" style="width:450px; height:450px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="/Products_images/watch_6.jpg" alt="Watch" class="d-block" style="width:450px; height:450px;">
                                                </div>
                                            </div>
  
                                            <!-- Left and right controls/icons -->
                                            <button class="carousel-control-prev" type="button" data-bs-target="#demo2" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon"></span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#demo2" data-bs-slide="next">
                                                <span class="carousel-control-next-icon"></span>
                                            </button>
                                        </div>
                    <h3>Noice ColorFit Pulse Grand Smart Watch</h3>
                    <p>| With 1.69"(4.29cm) HD Display, 60 Sports Modes | 150 Watch Faces | Fast Charge |</p>
                    <p>| Spo2 | Stress | Sleep | Heart Rate Monitoring | IP68 Waterproof (Jet Black) |</p>
                    

                    <p><span><sup>&#x20B9;</sup><b>1,299.00</b></span></p>
                    <!-- Having the entire description of the product, we give option to add to the cart-->

                    <form method="post" action="shopping.php">
                        <input name="prod_id"
                               type="hidden"
                               value="3" />
                        <label for="prod2_quantity">
                            Quantity :
                        </label>
                        <input name="prod_quantity"
                               type="number"
                               id="prod2_quantity"
                               value=""
                               min="0" />

                        <button name="Add_to_Cart"
                                type="submit">
                            Add to Cart
                        </button>
                    </form>
                </li>
                <hr>
                <li style = "display: inline-block; ">
                    <!-- Carousel -->
                                        
                                        <div id="demo3" class="carousel slide" data-bs-ride="carousel">
                                            
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#demo3" data-bs-slide-to="0" class="active"></button>
                                                <button type="button" data-bs-target="#demo3" data-bs-slide-to="1"></button>
                                                <button type="button" data-bs-target="#demo3" data-bs-slide-to="2"></button>
                                                <button type="button" data-bs-target="#demo3" data-bs-slide-to="3"></button>
                                                <button type="button" data-bs-target="#demo3" data-bs-slide-to="4"></button>
                                                <button type="button" data-bs-target="#demo3" data-bs-slide-to="5"></button>

                                            </div>
  
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="/Products_images/earphones_1.jpg" alt="Watch" class="d-block" style="width:450px; height:450px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="/Products_images/earphones_2.jpg" alt="Watch" class="d-block" style="width:450px; height:450px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="/Products_images/earphones_3.jpg" alt="Watch" class="d-block" style="width:450px; height:450px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="/Products_images/earphones_4.jpg" alt="Watch" class="d-block" style="width:450px; height:450px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="/Products_images/earphones_5.jpg" alt="Watch" class="d-block" style="width:450px; height:450px;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="/Products_images/earphones_6.jpg" alt="Watch" class="d-block" style="width:450px; height:450px;">
                                                </div>
                                            </div>
  
                                            <!-- Left and right controls/icons -->
                                            <button class="carousel-control-prev" type="button" data-bs-target="#demo3" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon"></span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#demo3" data-bs-slide="next">
                                                <span class="carousel-control-next-icon"></span>
                                            </button>
                                        </div>
                
                    <h3>Oraimo Necklace 4 Bluetooth</h3>
                    <p>| Neckband Wireless in Ear Earphones Deep Bass | 50Hrs Playtime |</p>
                    <p>| ASAP Charge,ENC Tech,Low-Latency Ergonomic | Sweat-Resistant Magnetic Earbuds | Dual Pairing (Black) |</p>
                    

                    <p><span><sup>&#x20B9;</sup><b>1,590.00</b></span></p>
                    <!-- Having the entire description of the product, we give option to add to the cart-->

                    <form method="post" action="shopping.php">
                        <input name="prod_id"
                               type="hidden"
                               value="4" />
                        <label for="prod2_quantity">
                            Quantity :
                        </label>
                        <input name="prod_quantity"
                               type="number"
                               id="prod2_quantity"
                               value=""
                               min="0" />

                        <button name="Add_to_Cart"
                                type="submit">
                            Add to Cart
                        </button>
                    </form>
                </li>


            </ul>
        </section>
    </main>

    <footer>
        <p style = "text-align: right;">&copy; 2023 Bamazon Shopping. All rights reserved.</p>
    </footer>
</body>

</html>