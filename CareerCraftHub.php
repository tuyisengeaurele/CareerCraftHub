<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <title>CareerCraft Hub</title>
    <style>
      body {
        font-family: "Arial", sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f5f5f5;
        color: #333;
      }

      header {
        background-color: #1a1a1a;
        color: #fff;
        padding: 20px;
        text-align: center;
      }

      nav {
        background-color: #1a1a1a;
  display: flex;
  justify-content: space-around;
  position: sticky;
  top: 0;
  z-index: 1000;
      }

      nav a {
        background-color: #1a1a1a;
        color: #fff;
        text-decoration: none;
        font-size: 1.2em;
        transition: color 0.3s;
        padding: 10px;
        border-radius: 5px;
      }

      nav a:hover {
        background-color: rgba(255, 255, 255, 0.1);
      }

      section.hero {
        background-position: center;
        color: black;
        text-align: center;
        padding: 100px 20px;
      }

      h1 {
        font-size: 3em;
        margin-bottom: 20px;
      }

      p {
        font-size: 1.2em;
        margin-bottom: 30px;
      }

      .cta-button {
        display: inline-block;
        padding: 15px 30px;
        font-size: 1.2em;
        text-decoration: none;
        background-color: #ffcc00;
        color: #1a1a1a;
        border-radius: 5px;
        transition: background-color 0.3s, transform 0.3s;
      }

      .cta-button:hover {
        background-color: #ffdb4d;
        transform: scale(1.1);
      }

      section.features {
        background-image: url("psychedelic-paper-shapes-with-copy-space.jpg");
        background-size: cover;
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        padding: 80px 20px;
        background-color: #fff;
      }

      .feature {
        width: calc(33.33% - 20px);
        text-align: center;
        margin-bottom: 40px;
        transition: transform 0.3s;
      }

      .feature:hover {
        transform: scale(1.05);
      }

      .feature img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin-bottom: 20px;
      }

      section.testimonials {
        background-color: #fff;
        color: #1a1a1a;
        text-align: center;
        padding: 100px 20px;
      }

      .testimonial {
        width: 60%;
        margin: 0 auto;
        text-align: left;
        padding: 20px;
        border: 2px solid #fff;
        border-radius: 8px;
        margin-bottom: 40px;
        transition: transform 0.3s;
      }



      footer {
        text-align: center;
        padding: 8px 3px;
        background-color: #1a1a1a;
        color: #fff;
      }

      .footer-container {
        display: flex;
        justify-content: space-around;
      }

      .footer-section {
        width: 30%;
      }

      .footer-section h3 {
        color: #ffcc00;
      }

      .footer-section ul {
        list-style: none;
        padding: 0;
      }

      .footer-section ul li {
        margin-bottom: 10px;
      }

      .footer-section a {
        color: #fff;
        text-decoration: none;
      }

      .footer-section a:hover {
        text-decoration: underline;
      }
      .copyright {
        margin-top: 20px;
        font-size: 0.9em;
      }
      .search-bar {
        margin: 10px 0;
        padding: 10px;
        width: 60%;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 1em;
      }
    </style>
  </head>

  <body>
    <section class="header" >
    <header>
      <h1 style="color: #ffcc00">CareerCraftHub</h1>
    </header>
    <nav>
      <a style="color: #ffcc00" href="#">Home</a>
      <a style="color: #ffcc00" href="Login.php" target="_blank">Login</a>
      <a style="color: #ffcc00" href="About Us.php" target="_blank"
        >About Us</a
      >
      <a style="color: #ffcc00" href="Support&Contact.php" target="_blank"
        >Support</a
      >
    </nav>
    </section>
    <section class="hero">

      <br/>
      <p  >
        Discover opportunities, enhance your skills, and build a successful
        career with CareerCraft Hub.
      </p>
      <a href="Recommended jobs.php" target="_blank" class="cta-button">Browse jobs</a>
      
    </section>
    <br/>
    <br/>
    <br/>
    <br/>
    <section id="features" class="features">
      <div class="feature">
        <img src="OJXL4E0.jpg" alt="Feature 1" />
        <h2>Explore Job Openings</h2>
        <p>
          Access a wide range of job listings from top companies in various
          industries.
        </p>
      </div>
      <div class="feature">
        <img src="36918.jpg" alt="Feature 2" />
        <h2>Skill Development</h2>
        <p>
          Enhance your skills with our curated courses and stay competitive in
          the job market.
        </p>
      </div>
      <div class="feature">
        <img src="2837155.jpg" alt="Feature 3" />
        <h2>Expert Guidance</h2>
        <p>
          Receive career advice and guidance from industry experts to shape your
          professional journey.
        </p>
      </div>
      <br/>
      <a href="Register.php" target="_blank" class="cta-button">Get Started</a>
    </section>
    <section class="testimonials">
      <h1 style="color: #ffcc00">WHAT OUR USERS SAY</h1>
      <div class="testimonial">
        <p>
          "CareerCraft Hub transformed my job search. The personalized
          recommendations helped me land my dream job!"
        </p>
        <p>Herve Manishimwe, Software Engineer at MTN Rwanda</p>
      </div>
      <div class="testimonial">
        <p>
          "The platform's user-friendly interface and valuable resources make it
          an essential tool for career growth."
        </p>
        <p>Wilson Gakuba, Marketing Specialist</p>
      </div>
      <div class="testimonial">
        <p>
          CareerCraft Hub provided me with the insights I needed to make
          informed career decisions.
        </p>
        <p>Kevine Ineza, Project Manager</p>
      </div>
      <div class="testimonial">
        <p>"The support from CareerCraft Hub's community is outstanding."</p>
        <p>Davis Kanimba, Data Scientist</p>
      </div>
    </section>
    <footer>
      <div class="footer-container">
        <div class="footer-section">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
        <div class="footer-section">
          <h3>Contact Us</h3>
          <p>
            Email:
            <a href="mailto:info@careercrafthub.com">info@careercrafthub.com</a>
          </p>
          <p>Phone: +250 780 605 880</p>
          <p>Phone: +250 790 999 989</p>
        </div>
        <div class="footer-section">
          <h3>Follow Us</h3>
          <div class="social-icons">
            <a href="#"> <i class="fab fa-facebook-f"></i></a>
            <br />
            <br />
            <a href="#"> <i class="fab fa-twitter"></i></a>
            <br />
            <br />
            <a href="#"> <i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
      <p class="copyright">&copy; 2023 CareerCraft Hub. All rights reserved.</p>
    </footer>
  </body>
</html>
