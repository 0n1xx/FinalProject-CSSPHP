<?php
    $pageTitle = "Registration Page";
    $pageDes = "This is the registration page.";
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
            <h3>New to our website ?</h3>
            <p>Register to always be on track with our Ipods</p>
        </div>
        <div class="form-details">
            <!-- Creating the form to register the user -->
            <form action="contact.php" method="post">
                <fieldset>
                    <label for="name">Full name:</label>
                    <input type="text" id="name" name="name" placeholder="Your full name" required>
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" placeholder="Your email" required>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Your password" required>
                    <label for="confirm_password">Confirm Password:</label>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
                </fieldset>
                <div class="submit-button">
                    <button type="submit">Sign in</button>
                </div>
            </form>
        </div>
    </section>
</main>
<?php require "./templates/footer.php"; ?>