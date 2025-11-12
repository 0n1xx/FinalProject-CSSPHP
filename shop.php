<?php
    $pageTitle = "Product Page";
    $pageDes = "This is the product page.";
    require "./templates/header.php";
?>
<main>
    <section class="intro-shop">
        <div>
            <h1>Discover Timeless Sound</h1>
            <p>Relieve the golden era from sound to the life</p>
        </div>
        <div>
            <a href="contact.php" class="button-shop">Contact Us</a>
            <a href="about.php" class="button-about">Learn More</a>
        </div>
    </section>
    <section class="product-section">
        <div>
            <img src="./" alt="product1">
            <h2>Product 1</h2>
            <p>20.50$</p>
        </div>
        <div>
            <img src="./" alt="product2">
            <h2>Product 2</h2>
            <p>20.47$</p>
        </div>
        <div>
            <img src="./" alt="product2">
            <h2>Product 3</h2>
            <p>20.45$</p>
        </div>
    </section>
</main>
<?php require "./templates/footer.php"; ?>