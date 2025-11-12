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
        <div>
            <a href="shop.php" class="button-shop">Shop Now</a>
            <a href="about.php" class="button-about">Learn More</a>
        </div>
    </section>
    <section class="info-home-page">
        <div class="info-home-header">
            <h2>Discover our classics</h2>
        </div>
        <div class="ipod-cards">
            <div class="ipod-type">
                <img src="./images/ipod_headphones_home_page.png" alt="ipod headphones">
            </div>
            <div class="ipod-type">
                <img src="./images/ipod_classic_home_page.png" alt="ipod classic">
                <p>Ipod Classic</p>
            </div>
            <div class="ipod-type">
                <img src="./images/ipod_mini_home_page.png" alt="ipod mini">
                <p>Ipod Mini</p>
            </div>
            <div class="info-home-ipod-shuffle">
                <img src="./images/ipod_shuffle_home_page.png" alt="ipod shuffle">
                <p>Ipod Shuffle</p>
            </div>
        </div>
        <div class="info-home-add-info">
            <h3>Brand Story Teaser</h3>
            <p>QuébecIpod was born from a passion of sound and simplicity</p>
            <a href="about.php">About us</a>
        </div>
    </section>
</main>
<?php require "./templates/footer.php"; ?>