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

      .search-bar {
        margin: 10px 0;
        padding: 10px;
        width: 60%;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 1em;
      }

      .job-listings {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        padding: 20px;
      }

      .job {
        width: 45%;
        padding: 15px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin: 20px 0;
        transition: transform 0.3s;
      }

      .job:hover {
        transform: scale(1.05);
      }

      .job h2 {
        color: #1a1a1a;
        font-size: 1.5em;
        margin-bottom: 10px;
      }

      .job p {
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
    <title>Recommended Jobs</title>
  </head>
  <body>
    <header>
      <h1>Open Jobs</h1>
      <p>Explore exciting job opportunities tailored for you.</p>
      <input
        type="text"
        class="search-bar"
        placeholder="Job Title, Keywords, location,..."
      />
    </header>
    <h2 style="text-align: center; color: #ffcc00">Latest positions</h2>
    <section class="job-listings">
      <div class="job">
        <h2>Full Stack Developer</h2>
        <p>Company: AC Group</p>
        <p>Location: Kigali City, Rwanda</p>
        <p>
          Description: Join our dynamic team as a Full Stack Developer and
          contribute to exciting projects.
        </p>
        <a href="Login.php" class="apply-btn">Apply Now</a>
      </div>

      <div class="job">
        <h2>Data Analyst</h2>
        <p>Company: MTN RWANDA</p>
        <p>Location: Kigali City, Rwanda</p>
        <p>
          Description: Join our team as a data analyst and contribute in this
          new field.
        </p>
        <a href="Login.php" class="apply-btn">Apply Now</a>
      </div>
      <div class="job">
        <h2>Environmental Engineer</h2>
        <p>Company: REMA</p>
        <p>Location: Kigali City, Rwanda</p>
        <p>
          Description: Join our team of Environmental engineers at our head
          office and contribute in this field.
        </p>
        <a href="Login.php" class="apply-btn">Apply Now</a>
      </div>
      <div class="job">
        <h2>Civil Engineer</h2>
        <p>Company: REAL</p>
        <p>Location: Kigali City, Rwanda</p>
        <a href="Login.php" class="apply-btn">Apply Now</a>
      </div>
      <div class="job">
        <h2>HUMAN RESOURCE MANAGER</h2>
        <p>Company: EQUITY BANK RWANDA PLC</p>
        <p>Location: Kigali City, Rwanda</p>
        <p>Description: Join our team as a Human Resource Manager.</p>
        <a href="Login.php" class="apply-btn">Apply Now</a>
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
