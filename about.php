<?php
    $pageTitle = "About Page";
    $pageDes = "This is the about page.";
    require "./templates/header.php";
?>
<main>
    <section class="about-intro-section">
        <div>
            <h1 class="main-header">Our story</h1>
            <p>Keep the music alive, one Ipod at a time</p>
        </div>
    </section>
    <section class="about-primary-section">
        <div class="about-company-fact">
            <p>
                Founded in the heart of Québec, QuébecIpod began as a small community of music lovers passionate about
                preserving the legacy of the iPod. What started as a local repair and resale shop quickly grew into
                a trusted Canadian destination for all things iPod — from classic models to the latest digital audio gear.
            </p>
        </div>
        <div class="about-company-fact">
            <p>
                Our mission has always been simple: to keep the rhythm alive. In an age of streaming and disposable tech,
                we believe in the timeless design, quality, and emotional value of Apple’s iconic music players.
                Every device we restore goes through a detailed inspection, battery replacement, and software optimization
                to ensure it performs like new.
            </p>
        </div>
        <div class="about-company-fact">
            <p>
                Over the years, QuébecIpod has built a reputation for quality, honesty, and a genuine love for music.
                Whether you’re a collector searching for a rare iPod Classic or someone rediscovering their first
                soundtrack memories, we’re here to help you reconnect with that feeling.
            </p>
        </div>
        <div class="about-company-fact">
            <p>
                Today, we proudly serve customers across Canada and beyond, continuing to bridge nostalgia with modern
                reliability. Thank you for supporting a local Québec brand — where music, memory, and craftsmanship come together.
            </p>
        </div>
    </section>
    <section class="additional-company-fact">
        <div class="additional-company-fact-text">
            <h2>Our Mission</h2>
            <p>To preserve the joy of personal music and give iPods a second life.</p>
            <ul>
                <li>Expert restoration with authentic parts</li>
                <li>Preserving musical heritage</li>
                <li>Creating lasting memories</li>
            </ul>
        </div>
        <div class="additional-company-fact-image-con">
            <a href="home.php" class="logo">
                <img src="images/quebecflag.png" alt="quebec flag">
            </a>
            <p>Crafted with passion in Québec</p>
        </div>
    </section>
    <section class="restore">
        <div class="restore-info">
            <h2>Ready to Restore Your Ipod ?</h2>
            <p>Join thousands of satisfied customers who trust us with their precious music devices.
                Let's bring your iPod back to life</p>
        </div>
        <div class="restore-actions">
            <a href="team.php" class="btn-primary">Meet the team</a>
            <a href="contact.php" class="btn-secondary">Get in touch</a>
        </div>
    </section>
</main>
<?php require "./templates/footer.php"; ?>