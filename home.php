<?php
    $pageTitle = "Home Page";
    $pageDes = "This is the home page.";
    require "./templates/header.php";
?>
<main>
    <section class="intro-home">
        <div>
            <h1>Bring the music back to life</h1>
            <p>Review the golden era from sound with these timeless devices</p>
        </div>
        <div class="buttons">
            <a href="../shop.php" class="button-home-primary">Shop Now</a>
            <a href="../about.php" class="button-home-secondary">Learn More</a>
        </div>
    </section>
    <section class="info-home-header">
        <h2>Discover our classics</h2>
    </section>
    <section class="info-home-page">
        <!-- Big iPod with headphones -->
        <div class="ipod-headphones">
            <img src="../images/ipod_headphones_home_page.png" alt="iPod with headphones">
        </div>
        <!-- Three small iPods which will used as small image cards -->
        <div class="ipod-card">
            <img src="../images/ipod_classic_home_page.png" alt="iPod Classic">
            <h4>iPod Classic</h4>
        </div>
        <div class="ipod-card">
            <img src="../images/ipod_mini_home_page.png" alt="iPod Mini">
            <h4>iPod Mini</h4>
        </div>
        <div class="ipod-card">
            <img src="../images/ipod_shuffle_home_page.png" alt="iPod Shuffle">
            <h4>iPod Shuffle</h4>
        </div>
        <div class="brand-story">
            <h3>Brand Story Teaser</h3>
            <p>QuébecIpod was born from a passion of sound and simplicity</p>
            <div class="buttons">
                <a class="button-about-us" href="../about.php">About Us</a>
            </div>
        </div>
    </section>
    <section class="info-home-additional">
        <h3>Stay tuned for exclusive drops and retro revivals.</h3>
        <form action="#" method="post">
            <input type="email" class="home-form-input" placeholder="Your Email" required>
            <button type="submit" class="home-form-button">Subscribe</button>
        </form>
    </section>
</main>
<?php require "./templates/footer.php"; ?>