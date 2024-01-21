<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
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
        color: #ffcc00;
        padding: 20px;
        text-align: center;
      }

      .application-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        padding: 20px;
      }

      .application {
        width: 45%;
        padding: 15px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin: 20px 0;
        transition: transform 0.3s;
      }

      .application:hover {
        transform: scale(1.05);
      }

      .application h2 {
        color: #1a1a1a;
        font-size: 1.5em;
        margin-bottom: 10px;
      }

      .application p {
        color: #333;
        font-size: 1.2em;
        margin-bottom: 10px;
      }

      .apply-btn {
        display: inline-block;
        padding: 10px 15px;
        background-color: #ffcc00;
        color: #1a1a1a;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
      }

      .apply-btn:hover {
        background-color: #e5e500;
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
    </style>
    <title>Applications</title>
  </head>
  <body>
    <header>
      <h1>Applications</h1>
      <p>Explore your applications.</p>
    </header>
    <h2 style="text-align: center; color: #ffcc00">OPEN APPLICATIONS</h2>
    <section class="application-list">
      <div class="application">
        <h2>Software Engineer</h2>
        <p>Company: Airtel Rwanda</p>
        <p>Location: Kigali city, Rwanda</p>
        <p>
          Description: Exciting opportunity for a skilled software engineer to
          join our innovative team.
        </p>
        <a href="#" class="apply-btn">Edit application</a>
      </div>

      <div class="application">
        <h2>Accountant</h2>
        <p>Company: UR Group Holdings.</p>
        <p>Location: Huye, Rwanda</p>
        <p>Description: Join our team as an accountant in UR Huye campus.</p>
        <a href="#" class="apply-btn">Edit application</a>
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
