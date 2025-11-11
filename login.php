<?php
    $pageTitle = "Login Page";
    $pageDes = "This is the login page.";
    require "./templates/header.php";
?>
<main>
    <div class="login-reg-img-block">
        <a href="login.php" class="login-reg-img">
            <img src="images/login_ipod.png" alt="ipod phot">
        </a>
    </div>
    <section class="form-section">
        <div class="form-instructions form-instructions-login-reg">
            <h3>Welcome back</h3>
            <p>Sign in to keep your music alive</p>
        </div>
        <div class="form-details">
            <form action="contact.php" method="post">
                <fieldset>
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" placeholder="Your email" required>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Your password" required>
                </fieldset>
                <div class="submit-button">
                    <button type="submit">Sign in</button>
                </div>
            </form>
        </div>
    </section>
</main>
<?php require "./templates/footer.php"; ?>