<?php
    require("db.php");
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Responsive Tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="with=device-width, intial-scale=1.0 shrink-to-fit=no">
    <!-- Title -->
    <title>Log In | Sweet Cart</title>
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
    <div class="formbox">
        <img class="y" src="image/logo1.png" width="100px" height="100px">

        <h3 class="x">Login</h3>

        <form id="login" class="inputgrp">
            <input type="email" class="inputfeild" name="em" placeholder="email id" required>
            <input type="password" class="inputfeild" name="pw" placeholder="Enter Password" required>

            <div class="abc"><a href="">forgot password?</a></div>
            <div class="abcd"><a href="">Dont have an account?</a></div>

            <button type="submit" class="submitbtn">Log in</button>

        </form>

        <?php
            if(isset($_POST["em"]) && isset($_POST["pw"])){
                $em = $_POST["em"];
                $pw = $_POST["pw"];

                $query = "select * from accounts where email='$em' and password='$pw';";
                $result = mysqli_query($conn, $query);
                $num = mysqli_num_rows($result);

                if($num == 1) {
                    header("Location: main.php");
                    exit();
                } else {
                    echo "Login Failed";
                }

            }
        ?>

    </div>
    <!-- footer -->
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
                            <li><a href="aboutus.html">About Us</a></li>
                            <li><a href="allproduct.html">Products</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
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
                <p class="copy">Powered by <a href="http://blueskript.com" target="_blank"
                        rel="noopener noreferrer" style="color: blue;">BlueSkript</a></p>
            </div>
        </div>
    </footer>
    <script>
        var menuitem = document.getElementById("menuitem")
        menuitem.style.maxHeight = "0px";

        function menutoggle() {
            if (menuitem.style.maxHeight == "0px") {
                menuitem.style.maxHeight = "200px";
            } else {
                menuitem.style.maxHeight = "0px";
            }
        }
    </script>
</body>
</html>