<!doctype html>
<html lang="en">
<head>
    <!-- In the head element, we add our metadata -->
    <!-- Declare our character set -->
    <meta charset="utf-8">
    <!-- This measures the viewport of the device we are using -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- This will describe our pages content, this should be different
      on each page -->
    <meta name="description" content="<?php echo $pageDesc; ?>">
    <!-- This will tell the search engine to index the site or not -->
    <meta name="robots" content="noindex, nofollow">
    <!-- This is our title tag  -->
    <title> <?php echo $pageTitle ?></title>
    <!-- This is the element that connects css file to our html_css_js_introduction file -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Using a special google font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Inter:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div>
        <a href="home.php" class="logo">
            <img src="images/logo.png" alt="header logo">
        </a>
        <p>QuébecIpod</p>
    </div>
    <nav>
        <menu>
            <li class="nav_menu"><a href="home.php">Home</a></li>
            <li class="nav_menu"><a href="about.php">About</a></li>
            <li class="nav_menu"><a href="shop.php">Shop</a></li>
            <li class="nav_menu"><a href="contact.php">Contact</a></li>
        </menu>
    </nav>
    <div class="register">
        <a href="register.php">Register</a>
    </div>
</header>