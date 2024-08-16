<?php
session_start();
if (!isset($_SESSION['name']) || $_SESSION['gender'] != 'female') {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Female Products</title>
    <link rel="stylesheet" href="female.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="navbar">
                <h1 class="logo">Fashion for Women</h1>
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
                <p>Discover the latest in women's fashion.</p>
                <a href="#product-list" class="btn">Shop Now</a>
            </div>
        </div>
    </header>
    <main class="container">
        <h2 class="section-title">Products for Women</h2>
        <div id="product-list" class="product-list">
            <div class="product-item">
                <img src="dress.jpg" alt="Long Dress">
                <h3>Long Dress</h3>
                <p>A beautiful women's dress.</p>
                <p class="price">Rs 3000.00</p>
                <button class="btn" onclick="window.location.href='order_confirmation.html'">Shop Now</button>

            </div>
            <div class="product-item">
                <img src="tshirt w.jpg" alt="T-shirt">
                <h3>T-shirt</h3>
                <p>A casual women's t-shirt.</p>
                <p class="price">Rs 1000.00</p>
                <button class="btn" onclick="window.location.href='order_confirmation.html'">Shop Now</button>

            </div>
            <div class="product-item">
                <img src="w jeans.jpg" alt="Jeans">
                <h3>Mom Jeans</h3>
                <p>Stylish women's jeans.</p>
                <p class="price">Rs 2000.00</p>
                <button class="btn" onclick="window.location.href='order_confirmation.html'">Shop Now</button>

            </div>
            <div class="product-item">
                <img src="blazer w.jpg" alt="Blazer Set">
                <h3>Blazer Set</h3>
                <p>Casual women's blazer set.</p>
                <p class="price">Rs 2500.00</p>
                <button class="btn" onclick="window.location.href='order_confirmation.html'">Shop Now</button>

            </div>
            <div class="product-item">
                <img src="skirt.jpg" alt="Skirt">
                <h3>Women's Skirt</h3>
                <p>Elegant women's skirt.</p>
                <p class="price">Rs 2000.00</p>
                <button class="btn" onclick="window.location.href='order_confirmation.html'">Shop Now</button>

            </div>
            <div class="product-item">
                <img src="croptop.jpg" alt="Crop Top">
                <h3>Crop Top</h3>
                <p>Trendy women's crop top.</p>
                <p class="price">Rs 1500.00</p>
                <button class="btn" onclick="window.location.href='order_confirmation.html'">Shop Now</button>

            </div>
            <div class="product-item">
                <img src="bow.jpg" alt="Bow Heels">
                <h3>Bow Heels</h3>
                <p>Trendy bow heels.</p>
                <p class="price">Rs 1900.00</p>
                <button class="btn" onclick="window.location.href='order_confirmation.html'">Shop Now</button>

            </div>
            <div class="product-item">
                <img src="loafers.jpg" alt="Loafers">
                <h3>Loafers</h3>
                <p>Casual loafers.</p>
                <p class="price">Rs 2500.00</p>
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


