<?php
    $pageTitle = "Contact Page";
    $pageDes = "This is the contact page.";
    require "./templates/header.php";
?><main>
    <section class="intro-contact-page">
        <h1>Get in touch</h1>
        <p>We'd love to hear from you. Whether you have a question about our iPods, repairs, or just want to say hello.</p>
    </section>
    <section class="methods-of-contact">
        <!-- created contact cards, clients can have multiple ways to contact us -->
        <div class="contact-method">
            <img src="../images/envelope_contact_page.png" class="image-contact-method" alt="letter contact page">
            <h3>Email Us</h3>
            <p>Send us an email anytime</p>
            <p>quebecipodsupport@gmail</p>
        </div>
        <div class="contact-method">
            <img src="../images/phone_contact_page.png" class="image-contact-method" alt="phone contact page">
            <h3>Call us</h3>
            <p>Mon-Fri from 9am to 6pm</p>
            <p>+1 (514) 123-4567</p>
        </div>
        <div class="contact-method">
            <img src="../images/geolocation_contact_page.png" class="image-contact-method" alt="geolocation">
            <h3>Visit Us</h3>
            <p>Come say hello at our workshop</p>
            <p>Montréal, Québec</p>
        </div>
    </section>
    <section class="form-section">
        <div class="form-instructions">
            <h3>Send Us a Message</h3>
            <p>Fill out the form below and we'll get back to you within 24 hours.</p>
        </div>
        <div class="form-details">
            <!-- Creating the form to contact us -->
            <form action="contact.php" method="post">
                <fieldset>
                    <label for="first-name">First Name</label>
                    <input type="text" id="first-name" name="first_name" placeholder="John" required>
                    <label for="last-name">Last Name</label>
                    <input type="text" id="last-name" name="last_name" placeholder="Doe" required>
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="john@example.com" required>
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" placeholder="+1 (514) 123-4567" required>
                    <label for="subject">Subject</label>
                    <select id="subject" name="subject" required>
                        <option value="" disabled selected>General Inquiry</option>
                        <option value="support">Support</option>
                        <option value="sales">Sales</option>
                        <option value="feedback">Feedback</option>
                        <option value="other">Other</option>
                    </select>
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="10" placeholder="Tell us how we can help you..." required></textarea>
                </fieldset>
                <div class="submit-button">
                    <button type="submit">Send Message</button>
                </div>
            </form>
        </div>
    </section>
    <section class="frequently-asked-questions">
        <!-- Added some cards for frequently asked questions -->
        <div class="frequently-asked-questions-intro">
            <h3>Frequently Asked Questions</h3>
            <p>Quick answers to common questions</p>
        </div>
        <!-- Instead of using js for making this effect, I found out that there is a pre-build element for that -->
        <details class="question-answer">
            <summary> How long does a repair typically take?</summary>
            <p>Most repairs are completed within 3–5 business days. For more complex restorations, we’ll provide an estimated timeline upfront.</p>
        </details>
        <details class="question-answer">
            <summary> Do you ship across Canada?</summary>
            <p>Yes! We ship refurbished iPods and parts across Canada with tracked shipping. International shipping is available upon request.</p>
        </details>
        <details class="question-answer">
            <summary> What’s your warranty policy?</summary>
            <p>All refurbished iPods come with a 90-day warranty covering parts and labor. Extended warranties are available for purchase.</p>
        </details>
        <details class="question-answer">
            <summary> Can you customize my iPod?</summary>
            <p>Absolutely! We offer custom colors, storage upgrades, and special modifications. Contact us to discuss your vision.</p>
        </details>
    </section>
</main>
<?php require "./templates/footer.php"; ?>