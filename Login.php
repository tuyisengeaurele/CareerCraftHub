<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
$error = "";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Careercrafthub";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM Users WHERE Role=? AND Username = ? AND Password = ?";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $role, $username, $password);

    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($result) >= 1) {
      $_SESSION['user-id'] = $username;
      if ($role == "employer") {
          header("Location: Employer dashboard.php?usernames=" . urlencode($username));
      } elseif ($username == "tuyisenge" && $role == "other") {
          header("Location: Admin dashboard.php?usernames=" . urlencode($username));
      } else {
          header("Location: Dashboard.php?usernames=" . urlencode($username));
      }
      exit();
  } else {
      $error = 'Invalid username or password';
  }
}
$conn->close();
?>
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
    <title>Login</title>
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

      form {
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      h2 {
        font-size: 2em;
        margin-bottom: 20px;
        color: #1a1a1a;
      }

      label {
        display: block;
        margin-bottom: 8px;
        color: #1a1a1a;
      }

      input {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }

      button {
        display: inline-block;
        padding: 10px 20px;
        font-size: 1em;
        background-color: #ffcc00;
        color: #1a1a1a;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
      }

      button:hover {
        background-color: #ffdb4d;
      }

      .register-link {
        text-align: center;
        margin-top: 20px;
      }

      .register-link a {
        color: #1a1a1a;
        text-decoration: underline;
      }

      .register-link a:hover {
        color: #ffcc00;
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
    <script>
     
      document.addEventListener("DOMContentLoaded", function () {
        const form = document.querySelector("form");

        form.addEventListener("submit", function (event) {
          const username = document.getElementById("username").value;
          const password = document.getElementById("password").value;

          if (!username || !password) {
            alert("Please enter both username and password");
            event.preventDefault(); 
          }
        });
      });
    </script>
    <header>
      <h1 style="color: #ffcc00">CareerCraftHub</h1>
    </header>

    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
      <h2>Login</h2>
      <?php echo "<br>".$error; ?>
      <label for="role">Role:</label>
      <select id="role" name="role" required>
        <option value="select">SELECT ROLE</option>
        <option value="Applicant">APPLICANT</option>
        <option value="employer">EMPLOYER</option>
        <option value="other">OTHER</option>
      </select>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required />

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required />

      <button type="submit">Login</button>
    </form>

    <div class="register-link">
      <p>Don't have an account? <a href="register.php">Register here</a></p>
    </div>
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