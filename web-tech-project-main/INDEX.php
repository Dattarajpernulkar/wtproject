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
    <title>Sweet Cart</title>
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
    <link rel="stylesheet" href="static/css/toast.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css" integrity="sha512-+1GzNJIJQ0SwHimHEEDQ0jbyQuglxEdmQmKsu8KI7QkMPAnyDrL9TAnVyLPEttcTxlnLVzaQgxv2FpLCLtli0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500;600;700&display=swap" rel="stylesheet">
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
                        <li><a href="INDEX.php">HOME</a></li>
                        <li><a href="product/allproduct.php">PRODUCTS</a></li>
                        <li><a href="others/aboutus.html">ABOUT US</a></li>
                        <li><a href="blog/blog.php">BLOG</a></li>
                        <li><a href="others/contact.php">CONTACT US</a></li>
                    </ul>
                </nav>
                <img  src="image/cart.png" width="30px" height="30px"><a href="cart.html" class="yo">2</a>
                <img src="image/menu.jpg" width="30px" height="30px" class="menu" onclick="menutoggle()">
            </div>
            <!-- Hero Section -->
            <div class="row">
                <div id="toast"></div>
                <div class="col-1">
                    <h1>Life Is Short,<br> So Make It Sweet Here!</h1>
                    <p>At work, rest and play, you get three great tastes in a Milky Way – Butterfinger.</p>
                    <!-- <a href="allproduct.html" class="btn">Explore now &#8594;</a> -->
                    <div onclick="showSuccessToast();" class="btn">Explore now &#8594;</div>
                </div>
                <div class="col-2"><img src="image/front.png" width="599px"></div>
            </div>
        </div>
    </div>
    <!-- Products -->
    <div class="smallcon">
        <h2 class="title">Top Selling Products</h2>
        <div class="row">
            <ul id="autoWidth" class="cs-hidden">
                <li class="item-a">
                    <div class="col4" style="border-radius: 4%;">
                        <a href="singleProduct.html">
                            <img src="data/products/gulab.jpeg" width="300px" height="400px" style="border-radius: 2%;">
                            <h4>Gulab Jamun</h4>
                            <p>Rs.15 per piece</p>
                        </a>
                    </div>
                </li>
                <li class="item-a">
                    <div class="col4" style="border-radius: 4%;">
                        <a href="singleProduct.html">
                            <img src="data/products/gulab.jpeg" width="300px" height="400px" style="border-radius: 2%;">
                            <h4>Gulab Jamun</h4>
                            <p>Rs.15 per piece</p>
                        </a>
                    </div>
                </li>
                <li class="item-a">
                    <div class="col4" style="border-radius: 4%;">
                        <a href="singleProduct.html">
                            <img src="data/products/gulab.jpeg" width="300px" height="400px" style="border-radius: 2%;">
                            <h4>Gulab Jamun</h4>
                            <p>Rs.15 per piece</p>
                        </a>
                    </div>
                </li>
                <li class="item-a">
                    <div class="col4" style="border-radius: 4%;">
                        <a href="singleProduct.html">
                            <img src="data/products/gulab.jpeg" width="300px" height="400px" style="border-radius: 2%;">
                            <h4>Gulab Jamun</h4>
                            <p>Rs.15 per piece</p>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- About Us -->
    <div>
        <h2 class="title">About Us</h2>
        <div class="row">
            <div class="info">
                <p>A confectionery store more commonly referred to as a sweet<br> shop in the United Kingdom, a
                    candy store in North America, or a lolly shop in Australia<br>sells confectionery and the intended
                    market is usually children. <br>Most confectionery stores are filled with an assortment of sweets
                    far larger than<br> a grocer or convenience store could accommodate.<br> They often offer a
                    selection of old-fashioned treats and sweets from different countries.<br> Very often unchanged in
                    layout since their inception, <br>confectioneries are known for their warming and nostalgic
                    feel.<br> The village of Pateley Bridge claims to<br> have the oldest confectionery store in
                    England.</p>
            </div>
            <div class="sec"><img src="image/sweets.jpeg" width="450px" style="border-radius: 10%; box-shadow:12px;"></div>
        </div>
    </div>
    <!-- Testimonials -->
    <h2 class="title">Testimonials</h2>
    <div class="feedback">
        <div class="smallcon">
            <div class="row">
                <div class="col3" style="border-radius: 5%;">
                    <h2 class="quote">"</h2>
                    <p>“I can tell how hard you’ve worked to be more
                        during meetings. Yesterday, although disagreed with
                        David’s idea, you asked some good questions first.
                        team is better for it.”</p>
                    <img src="image/hu1.jpg">
                    <h3>Abhinav Borde</h3>
                </div>
                <div class="col3" style="border-radius: 5%;">
                    <h2 class="quote">"</h2>
                    <p>“I can tell how hard you’ve worked to be more
                        during meetings. Yesterday, although disagreed with
                        David’s idea, you asked some good questions first.
                        team is better for it.”</p>
                    <img src="image/hu2.jpg">
                    <h3>Sunidhi Naik</h3>
                </div>
                <div class="col3" style="border-radius: 5%;">
                    <h2 class="quote">"</h2>
                    <p>“I can tell how hard you’ve worked to be more
                        during meetings. Yesterday, although disagreed with
                        David’s idea, you asked some good questions first.
                        team is better for it.”</p>
                    <img src="image/hu3.jpg">
                    <h3>Samrudh Dhaimodkar</h3>
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
    
    
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="   crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js" integrity="sha512-Gfrxsz93rxFuB7KSYlln3wFqBaXUc1jtt3dGCp+2jTb563qYvnUBM/GP2ZUtRC27STN/zUamFtVFAIsRFoT6/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>

        $(document).ready(function() {
            $('#autoWidth').lightSlider({
                autoWidth:true,
                loop:true,
                onSliderLoad: function() {
                    $('#autoWidth').removeClass('cS-hidden');
                }
            });
        });

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

        function showSuccessToast() {
          toast({
            title: "Toast Message",
            message: "Hello Nadine Ma'am",
            type: "success",
            duration: 5000
          });
        }


// Toast function
function toast({ title = "", message = "", type = "info", duration = 3000 }) {
const main = document.getElementById("toast");
if (main) {
    const toast = document.createElement("div");

    // Auto remove toast
    const autoRemoveId = setTimeout(function () {
    main.removeChild(toast);
    }, duration + 1000);

    // Remove toast when clicked
    toast.onclick = function (e) {
    if (e.target.closest(".toast__close")) {
        main.removeChild(toast);
        clearTimeout(autoRemoveId);
    }
    };

    const icons = {
    success: "fas fa-check-circle",
    info: "fas fa-info-circle",
    warning: "fas fa-exclamation-circle",
    error: "fas fa-exclamation-circle"
    };
    const icon = icons[type];
    const delay = (duration / 1000).toFixed(2);

    toast.classList.add("toast", `toast--${type}`);
    toast.style.animation = `slideInLeft ease .3s, fadeOut linear 1s ${delay}s forwards`;

    toast.innerHTML = `
                    <div class="toast__icon">
                        <i class="${icon}"></i>
                    </div>
                    <div class="toast__body">
                        <h3 class="toast__title">${title}</h3>
                        <p class="toast__msg">${message}</p>
                    </div>
                    <div class="toast__close">
                        <i class="fas fa-times"></i>
                    </div>
                `;
    main.appendChild(toast);
}
}

        
    </script>
</body>
</html>