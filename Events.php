<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up for Events</title>
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
        color: #ffcc00;
        text-decoration: none;
        font-size: 1.2em;
        transition: color 0.3s;
        padding: 10px;
        border-radius: 5px;
      }

      nav a:hover {
        background-color: rgba(255, 255, 255, 0.1);
      }

      section {
        text-align: center;
        padding: 80px 20px;
      }

      form {
        max-width: 400px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      label {
        display: block;
        margin-bottom: 10px;
        font-size: 1.2em;
      }

      input {
        width: 100%;
        padding: 8px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }

      select {
        width: 100%;
        padding: 8px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }

      button {
        background-color: #ffcc00;
        color: #1a1a1a;
        padding: 10px 15px;
        font-size: 1.2em;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }

      button:hover {
        transform: scale(1.05);
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
  </head>
  <body>
    <header>
      <h1>User Dashboard</h1>
    </header>

    <nav>
      <a href="Dashboard.php">Dashboard</a>
      <a href="Applications.php">Applications</a>
      <a href="RecommendedJobs.php">Recommended Jobs</a>
      <a href="SkillDevelopment.php">Skill Development</a>
      <a href="Settings.php">Settings</a>
      <a href="Logout.php" onclick="logout()">Logout</a>
    </nav>

    <section>
      <form action="process-event-signup.php" method="post">
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" required />

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required />

        <label for="event">Select Event:</label>
        <select id="event" name="event" required>
          <option value="select">Select</option>
          <option value="tech-conference">Tech Conference 2023</option>
          <option value="fintech-event">FINTECH RWANDA 2023</option>
          <!-- Add more options as needed -->
        </select>

        <button type="submit">Sign Up for Event</button>
      </form>
    </section>

    <script>
      function logout() {
        const confirmLogout = confirm("Are you sure you want to logout?");
        if (confirmLogout) {
          alert("Logout successful!");
        }
      }
    </script>
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
