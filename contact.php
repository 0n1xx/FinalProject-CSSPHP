<?php
    $pageTitle = "Contact Page";
    $pageDes = "This is the contact page.";
    require "./templates/header.php";
?>
<main>
  <section class="intro-contact-page">
      <h1>Get in touch</h1>
      <p>We'd love to hear from you. Whether you have a question about our iPods, repairs, or just want to say hello.</p>
  </section>
  <section class="methods-of-contact">
    <div class="contact-method">
      <h3>Email Us</h3>
      <p>Send us an email anytime</p>
      <p>quebecipodsupport@gmail</p>
    </div>
    <div class="contact-method">
      <h3>Call us</h3>
      <p>Mon-Fri from 9am to 6pm</p>
      <p>+1 (514) 123-4567</p>
    </div>
    <div class="contact-method">
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
    <div class="frequently-asked-questions-intro">
      <h3>Frequently Asked Questions</h3>
      <p>Quick answers to common questions</p>
    </div>
    <div class="question-answer">
      <h4>How long does a repair typically take?</h4>
      <p>Most repairs are completed within 3–5 business days. For more complex restorations, we’ll provide an estimated timeline upfront.</p>
    </div>
    <div class="question-answer">
      <h4>Do you ship across Canada?</h4>
      <p>Yes! We ship refurbished iPods and parts across Canada with tracked shipping. International shipping is available upon request.</p>
    </div>
    <div class="question-answer">
      <h4>What’s your warranty policy?</h4>
      <p>All refurbished iPods come with a 90-day warranty covering parts and labor. Extended warranties are available for purchase.</p>
    </div>
    <div class="question-answer">
      <h4>Can you customize my iPod?</h4>
      <p>Absolutely! We offer custom colors, storage upgrades, and special modifications. Contact us to discuss your vision.</p>
    </div>
  </section>
</main>
<?php require "./templates/footer.php"; ?>