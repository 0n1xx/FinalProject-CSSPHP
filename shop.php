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
    </section>
    <section class="product-section">
        <!-- A section which will be replaced with auto generated content -->
        <div>
            <img src="./images/red.png" alt="red">
            <h4>Product 1</h4>
            <p>20.50$</p>
        </div>
        <div>
            <img src="./images/green1.png" alt="green1">
            <h4>Product 2</h4>
            <p>20.47$</p>
        </div>
        <div>
            <img src="./images/green2.png" alt="green2">
            <h4>Product 3</h4>
            <p>20.45$</p>
        </div>
        <div>
            <img src="./images/blue.png" alt="blue">
            <h4>Product 4</h4>
            <p>20.45$</p>
        </div>
        <div>
            <img src="./images/grey.png" alt="grey">
            <h4>Product 5</h4>
            <p>20.45$</p>
        </div>
        <div>
            <img src="./images/purple.png" alt="purple">
            <h4>Product 6</h4>
            <p>20.45$</p>
        </div>
    </section>
    <section class="info-additional">
        <h3>Stay tuned for exclusive drops and retro revivals.</h3>
        <form action="#" method="post">
            <input type="email" class="additional-form-input" placeholder="Your Email" required>
            <button type="submit" class="additional-form-button">Subscribe</button>
        </form>
    </section>
</main>
<?php require "./templates/footer.php"; ?>