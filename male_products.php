<?php
session_start();
if (!isset($_SESSION['name']) || $_SESSION['gender'] != 'male') {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Male Products</title>
    <link rel="stylesheet" href="male.css">
    <!-- Link to an external font for better typography -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    <!-- Link to Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Include the script directly in the head -->
    
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="navbar">
                <h1 class="logo">Fashion for Men</h1>
                <nav>
                    <ul>
                        <li><a href="public.html">Home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="aboutus.html">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="logout.html">Logout</a></li>
                    </ul>
                </nav>
            </div>
            <div class="hero">
                <h2>Welcome, <?php echo $_SESSION['name']; ?>!</h2>
                <p>Explore the latest trends in men's fashion.</p>
                <a href="#product-list" class="btn">Shop Now</a>
            </div>
        </div>
    </header>
    <main class="container">
        <h2 class="section-title">Products for Men</h2>
        <div id="product-list" class="product-list">
            <!-- Display male products here -->
            <div class="product-item">
                <img src="shirt.jpg" alt="Men's Shirt" style="width: 250px; height: auto;">
                <h3>Shirt</h3>
                <p>A stylish men's shirt.</p>
                <p class="price">Rs 2900.00</p>
                <button class="btn" onclick="window.location.href='order_confirmation.html'">Shop Now</button>

            </div>
            <div class="product-item">
                <img src="nike.jpg" alt="Men's Shoes" style="width: 250px; height: auto;">
                <h3>Shoes</h3>
                <p>Comfortable men's shoes.</p>
                <p class="price">Rs 7000.00</p>
                <button class="btn" onclick="window.location.href='order_confirmation.html'">Shop Now</button>

            </div>
            <!-- Add more products here -->
            <div class="product-item">
                <img src="m jeans.jpg" alt="Men's Jeans" style="width: 250px; height: auto;">
                <h3>Jeans</h3>
                <p>Stylish men's jeans.</p>
                <p class="price">Rs 3400.00</p>
                <button class="btn" onclick="window.location.href='order_confirmation.html'">Shop Now</button>

            </div>
            <div class="product-item">
                <img src="watch.jpg" alt="Men's Watch" style="width: 250px; height: auto;">
                <h3>Watch</h3>
                <p>Elegant men's watch.</p>
                <p class="price">Rs 4500.00</p>
                <button class="btn" onclick="window.location.href='order_confirmation.html'">Shop Now</button>

            </div>
            <div class="product-item">
                <img src="b.jpg" alt="Men's Blazer" style="width: 250px; height: auto;">
                <h3>Blazer</h3>
                <p>Elegant men's blazer.</p>
                <p class="price">Rs 4500.00</p>
                <button class="btn" onclick="window.location.href='order_confirmation.html'">Shop Now</button>

            </div>
            <div class="product-item">
                <img src="cap.jpg" alt="Men's Cap" style="width: 250px; height: auto;">
                <h3>Cap</h3>
                <p>Daily wears cap.</p>
                <p class="price">Rs 900.00</p>
                <button class="btn" onclick="window.location.href='order_confirmation.html'">Shop Now</button>

            </div>
            <div class="product-item">
                <img src="rings.jpg" alt="Men's Ring" style="width: 250px; height: auto;">
                <h3>Ring</h3>
                <p>Stylish ring.</p>
                <p class="price">Rs 400.00</p>
                <button class="btn" onclick="window.location.href='order_confirmation.html'">Shop Now</button>

            </div>
            <div class="product-item">
                <img src="wallet.jpg" alt="Men's Wallet" style="width: 250px; height: auto;">
                <h3>Wallet</h3>
                <p>Elegant wallet.</p>
                <p class="price">Rs 3500.00</p>
                <button class="btn" onclick="window.location.href='order_confirmation.html'">Shop Now</button>

            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 E-Commerce Site. All rights reserved.</p>
            <div class="social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>


