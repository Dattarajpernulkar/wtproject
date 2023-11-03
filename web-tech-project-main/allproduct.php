<?php
    require("php/db.php");
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Responsive Tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="with=device-width, intial-scale=1.0 shrink-to-fit=no">
    <!-- Title -->
    <title>All Products | Sweet Cart</title>
    <!-- favicon/logo -->
    <link rel="icon" href="image/logo1.png" sizes="32x32" type="image/png">
    <!-- SEO tags -->
    <meta name="description" content="Sweet Cart is an online sweets store.">
    <meta name="author" content="Atharva Parkhe">
    <meta name="keywords" content="Sweet Cart, Sweets, Online Store, E-Shop">
    <meta property="og:title" content="Sweet Cart" />
    <meta property="og:type" content="E-Shop" />
    <meta property="og:url" content="https://blueskript.com" />
    <meta property="og:image" content="image/logo1.png" />
    <!-- Style -->
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="header">
        <div class="container">
            <!-- Navbar -->
            <div class="navbar">
                <div class="logo">
                    <a href="INDEX.html">
                        <img src="image/logo1.png" width="125px">
                    </a>
                </div>
                <nav>
                    <ul id="menuitem">
                        <li><a href="INDEX.html">HOME</a></li>
                        <li><a href="allproduct.html">PRODUCTS</a></li>
                        <li><a href="aboutus.html">ABOUT US</a></li>
                        <li><a href="blog.html">BLOG</a></li>
                        <li><a href="contact.html">CONTACT US</a></li>
                    </ul>
                </nav>
                <img src="image/cart.png" width="30px" height="30px"><a href="cart.html" class="yo">2</a>
                <img src="image/menu.jpg" width="30px" height="30px" class="menu" onclick="menutoggle()">
            </div>
        </div>
    </div>
    <!-- Products -->
    <div class="container">
        <h2 class="title">All Product</h2>

        <div class="smallcon">
            <div class="row">
                
                <div class="col4" style="border-radius: 4%;">
                <a href="product/singleProduct.php">
                
            <?php

            $sql = "SELECT * FROM products";
            $result = $conn -> query($sql);

            if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
                echo "<img src=" + $row["image"] + " width='300px' height='400px' style='border-radius: 2%;>";
                echo "<h4>" + $row["name"] + "</h4>";
                echo "<p>Rs." + $row["price"] + " per piece</p>";
                }
            }

            ?>

            </a>
            </div>

            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <hr>
                <div class="row">
                    <div class="footrecol1">
                        <h3>Download Our App</h3>
                        <p>Download App for Android And IOS Mobile Phone</p>
                        <div class="applogo">
                            <img src="image/play.png" width="150px" height="67px">
                            <img src="image/app.svg" width="150px" height="70px">
                        </div>
                    </div>
                    <div class="footrecol2">
                        <img src="image/logo1.png">
                        <p>Our purpose is to sustainably make
                            the pleasure<br> and benefit of sweets accessible to the many</p>
                    </div>
                    <div class="footrecol3">
                        <h3>Useful Links</h3>
                        <ul>
                            <li><a href="others/aboutus.html">About Us</a></li>
                            <li><a href="product/allproduct.php">Products</a></li>
                            <li><a href="blog/blog.php">Blog</a></li>
                            <li><a href="others/contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="footrecol4">
                        <h3>Follow Us</h3>
                        <ul>
                            <li>
                                <a href="http://" target="_blank">
                                    <img src="image/facebook.svg" width="20px" height="20px"> Facebook</li>
                                </a>
                            <li>
                                <a href="http://" target="_blank">
                                    <img src="image/instagram-2.svg" width="20px" height="20px"> Instagram</li>
                                </a>
                            <li>
                                <a href="http://" target="_blank">
                                    <img src="image/twitter.svg" width="20px" height="20px"> Twitter</li>
                                </a>
                            <li>
                                <a href="http://" target="_blank">
                                    <img src="image/youtube.svg" width="20px" height="20px"> YouTube</li>
                                </a>
                        </ul>
                    </div>
                </div>
                <hr>
                <p class="copy">Powered by <a href="http://blueskript.com" target="_blank" rel="noopener noreferrer" style="color: blue;">BlueSkript</a></p>
            </div>
        </div>
    </footer>
    
    <script>

        var menuitem = document.getElementById("menuitem")
        menuitem.style.maxHeight = "0px";
        function menutoggle() {
            if (menuitem.style.maxHeight == "0px") {
                menuitem.style.maxHeight = "200px";
            }
            else {
                menuitem.style.maxHeight = "0px";
            }
        }

    </script>
</body>
</html>