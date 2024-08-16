<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header("Location: login.html");
    exit();
}

$gender = $_SESSION['gender'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <h1>Welcome, <?php echo $_SESSION['name']; ?>!</h1>
    </header>
    <main>
        <h2>Products for <?php echo ucfirst($gender); ?></h2>
        <p>Here are some <?php echo $gender; ?> related products.</p>
        <!-- Display products based on gender -->
        <?php if ($gender == 'male'): ?>
            <ul>
                <li>Men's Shirt</li>
                <li>Men's Pants</li>
                <li>Men's Shoes</li>
            </ul>
        <?php else: ?>
            <ul>
                <li>Women's Dress</li>
                <li>Women's Skirt</li>
                <li>Women's Tshirt</li>
                <li>Women's Shoes</li>
            </ul>
        <?php endif; ?>
    </main>
    <footer>
        <p>&copy; 2024 Gender-Based Selection App</p>
    </footer>
</body>
</html>
