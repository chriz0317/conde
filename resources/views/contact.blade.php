<?php $title = 'Contact Us'; ?>

<section class="page-header">
    <div class="container">
        <h1>Contact Us</h1>
        <p>Get in touch with MMG Autozone</p>
    </div>
</section>

<section class="contact-section">
    <div class="container">
        <div class="contact-wrapper">
            <div class="contact-info">
                <h2>Get In Touch</h2>
                <p>Have a question or want to book a service? Reach out to us.</p>
                
                <div class="info-item">
                    <h3>📧 Email</h3>
                    <p><a href="mailto:info@mmgautozone.com">info@mmgautozone.com</a></p>
                </div>

                <div class="info-item">
                    <h3>📞 Phone</h3>
                    <p><a href="tel:+63">+63 (insert number)</a></p>
                </div>

                <div class="info-item">
                    <h3>📍 Address</h3>
                    <p>Blk 14, Lot 14, Road 7<br>Silcas Village, Binan, Laguna</p>
                </div>

                <div class="info-item">
                    <h3>🕒 Business Hours</h3>
                    <p>Monday - Saturday: 8:00 AM - 6:00 PM<br>Sunday: Closed</p>
                </div>

                <div class="social-links">
                    <h3>Follow Us</h3>
                    <div class="social-icons">
                        <a href="#" title="Facebook">Facebook</a>
                        <a href="#" title="X">X</a>
                        <a href="#" title="Instagram">Instagram</a>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <h2>Send us a Message</h2>
                <form action="#" method="POST">
                    
                    <div class="form-group">
                        <label for="name">Your Name *</label>
                        <input type="text" id="name" name="name" required placeholder="John Doe">
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required placeholder="john@example.com">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="0917xxxxxxx">
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject *</label>
                        <input type="text" id="subject" name="subject" required placeholder="How can we help?">
                    </div>

                    <div class="form-group">
                        <label for="service">Service Interested In</label>
                        <select id="service" name="service">
                            <option value="">Select a service</option>
                            <option value="auto-body">Auto Body Repair</option>
                            <option value="collision">Collision Repair</option>
                            <option value="painting">Automotive Painting</option>
                            <option value="pdr">Paintless Dent Repair</option>
                            <option value="detailing">Detailing</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" required placeholder="Tell us about your vehicle or service needed..." rows="5"></textarea>
                    </div>

                    <div class="form-group checkbox">
                        <input type="checkbox" id="agree" name="agree" required>
                        <label for="agree">I agree to the terms and privacy policy</label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="map-section">
    <h2>Find Us on the Map</h2>
    <div class="map-container">
        <iframe src="https://www.google.com/maps?q=Blk%2014%20Lot%2014%20Road%207%20Silcas%20Village%20Binan%20Laguna&output=embed" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
