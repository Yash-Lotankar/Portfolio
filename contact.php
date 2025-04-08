<!-- Add this in your <body> before the <footer> -->
<section id="contact" class="contact">
    <h2>Contact Me</h2>
    <div class="contact-container">
        <form action="contact.php" method="POST" class="contact-form">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit" class="btn">Send Message</button>
        </form>

        <!-- Social Links (again here for better user access) -->
        <div class="contact-socials">
            <h3>Connect with me</h3>
            <a href="https://www.linkedin.com/in/yash-lotankar" target="_blank"><img src="linkedin.png" alt="LinkedIn"></a>
            <a href="https://github.com/YashLotankar" target="_blank"><img src="github.png" alt="GitHub"></a>
            <a href="https://twitter.com/YashLotankar" target="_blank"><img src="twitter.png" alt="Twitter"></a>
        </div>
    </div>
</section>
