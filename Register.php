<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Careercrafthub";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $role = $_POST['role'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $sex = $_POST['sex'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $educationbg = $_POST['educationbg'];
    $departmentoi = $_POST['departmentoi'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    if ($password != $confirmPassword) {
        echo "Error: Passwords do not match.";
    } else {
        
        $sql = "INSERT INTO users (role, firstname, lastname, username, sex, address, email, phone, educationbg, department, password)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssssss", $role, $firstname, $lastname, $username, $sex, $address, $email, $phone, $educationbg, $departmentoi, $password);

        if ($stmt->execute()) {
            echo "User inserted successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    $conn->close();
}
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
    <title>Register</title>
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

      input,
      select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }

      button {
        display: inline-block;
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
      .password-toggle {
        cursor: pointer;
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
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
    </style>
  </head>
  <body>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
       
        const form = document.querySelector("form");

        form.addEventListener("submit", function (event) {
          
          const emailInput = document.getElementById("email");
          if (!isValidEmail(emailInput.value)) {
            alert("Please enter a valid email address.");
            event.preventDefault();
          }
        });

        function isValidEmail(email) {
          const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          return emailRegex.test(email);
        }

       
        const passwordInput = document.getElementById("password");
        const togglePasswordBtn = document.createElement("span");
        

        togglePasswordBtn.addEventListener("click", function () {
          const type =
            passwordInput.getAttribute("type") === "password"
              ? "text"
              : "password";
          passwordInput.setAttribute("type", type);
        });
      });
    </script>
    <header>
      <h1 style="color: #ffcc00">CareerCraftHub</h1>
    </header>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">


      <h2>Register</h2>

      <label for="role">Role:</label>
      <select id="role" name="role" required>
        <option value="select">SELECT</option>
        <option value="Applicant">APPLICANT</option>
        <option value="employer">EMPLOYER</option>
        <option value="other">OTHER</option>
      </select>
      <label for="firstname">Firstname:</label>
      <input type="text" id="firstname" name="firstname" required />

      <label for="lastname">Lastname:</label>
      <input type="text" id="lastname" name="lastname" required />

      <label for="username">username:</label>
      <input type="text" id="username" name="username" required />

      <label for="sex">Sex:</label>
      <select id="sex" name="sex" required>
        <option value="select">SELECT</option>
        <option value="male">MALE</option>
        <option value="female">FEMALE</option>
        <option value="other">OTHER</option>
      </select>

      <label for="address">Address:</label>
      <input type="text" id="address" name="address" required />

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required />

      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" required />

      <label for="education">Education Background:</label>
      <select id="education" name="educationbg" required>
        <option value="educationbg">CHOOSE YOUR EDUCATION BACKGROUND</option>
        <option value="secondary school graduate">
          SECONDARY SCHOOL GRADUATE
        </option>
        <option value="batchelor's">BACTHELOR'S</option>
        <option value="masters">MASTERS</option>
        <option value="phd">PhD</option>
      </select>

      <label for="departmentoi">Department of Interest:</label>
      <select id="departmentoi" name="departmentoi" required>
        <option value="Choose Your Department">CHOOSE YOUR DEPARTMENT</option>
        <option value="ict">ICT</option>
        <option value="engineering">ENGINEERING</option>
        <option value="sciences">SCIENCES</option>
        <option value="medecine">MEDECINE</option>
        <option value="photography">PHOTOGRAPHY</option>
        <option value="hospitality">HOSPITALITY</option>
        <option value="mmcommunication">MASS MEDIA COMMMUNICATION</option>
        <option value="culinary">CULINARY</option>
      </select>

      <label for="password">Create Password:</label>
      <input type="password" id="password" name="password" required />
      <label for="confirmPassword">Confirm Password:</label>
<input type="password" id="confirmPassword" name="confirmPassword" required />


      <button type="submit">Register</button>
    </form>
    <div class="register-link">
      <p>If you have an account <a href="Login.php">Login</a></p>
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
