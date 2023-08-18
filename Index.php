<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>
<!DOCTYPE html>
<html>
<head>
    <title>K-MART</title>
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <style>
    body {
    background-image: url(bg1.jpg);    
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-repeat: no-repeat;
}

header {
    background-color: #333;
    color: orange;
    padding: 10px 20px;
    position: relative;
    display:block;
    text-align:center;
}

header h1 {
    margin: 0;
}

nav ul {
    list-style: none;
    margin: 0px 0px 10px 30px;
    padding: 0;
    text-align: center;
    display: flex;
    flex-wrap: wrap;
    filter: grayscale(0);
    transition: 0.3s;
}

nav ul li{
    display: inline-block;
    margin-top: 35px;
}
nav ul li a{
    font-weight: bolder;
    text-decoration: none;
    color: rgb(230, 211, 138);
    padding: 8px 15px;
    letter-spacing: 0.5px;
    font-size: 20px;
    position: relative;
}
nav ul li a::after{
    content: "";
    background-color: rgb(173, 237, 237);
    position: absolute;
    height: 3px;
    width: 0%;
    bottom: 2px;
    left: 15px;
    transition: 0.3s;
}
nav ul li a:hover::after{
    width: 80%;
}

main {
    margin: 20px;
}

section {
    margin-bottom: 20px;
}

section h2 {
    margin-top: 0;
}

.product {
    /* border: 1px solid #ccc; */
    padding: 30px;
    display: inline-block;
    margin-right: 20px;
    border-radius: 6px;
    background: #fff;
}

.product img {
    max-width: 100%;
    max-height: 130px;
    margin-left: 26px;
}

.product h3 {
    margin-top: 0;
    margin-bottom: 5px;
    text-align: center;
}

.product p {
    margin-top: 0;
    text-align: center;
    margin-bottom: 10px;
}

.product button {
    background-color: #333;
    color: whitesmoke;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    margin-left: 26px;
    justify-content: center;
}

.product button:hover {
    background-color: orange;
}

/* Login and Signup button styles */
nav a:nth-child(5), nav a:nth-child(6) {
    background-color: #555;
    padding: 10px 20px;
    border-radius: 5px;
}
footer{
    text-align: center;
    padding-top: 20px;
}

    </style>
</head>
<body>
    <header>
        <h1>K-MART</h1>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="login.php">Login</a></li>
                
            </ul>
        </nav>
    </header>
    <main>
        <section id="featured">
            <h2>Featured Products</h2>
            <div class="product">
                <img src="product1.jpg" alt="Product 1">
                <h3>boAt headphone</h3>
                <p>Rs. 1399</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="product4.jpg" alt="Product 4">
                <h3>POLO Men's t-Shirt</h3>
                <p>Rs. 1199</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="product5.jpg" alt="Product 5">
                <h3>Raymond Blazer</h3>
                <p>Rs. 13,999</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="product6.jpg" alt="Product 6">
                <h3>LG washing machine</h3>
                <p>Rs. 1399</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="product2.jpg" alt="Product 2">
                <h3>SM projector</h3>
                <p>Rs. 30,000</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="product3.jpg" alt="Product 3">
                <h3>Canon camera</h3>
                <p>Rs. 64,999</p>
                <button>Add to Cart</button>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 K-MART All rights reserved.</p>
    </footer>
</body>
</html>
