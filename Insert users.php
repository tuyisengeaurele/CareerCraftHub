<style>
  .contentcontainer {
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
  }

  h2 {
    color: #333;
    text-align: center;
  }

  form {
    display: grid;
    gap: 15px;
  }

  label {
    font-weight: bold;
    font-size: 1.1em;
  }

  select,
  input {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ddd;
    margin-top: 5px;
    box-sizing: border-box;
  }

  button {
    background-color: #1a1a1a;
    color: #fff;
    padding: 12px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
    font-size: 1.2em;
  }

  button:hover {
    background-color: rgba(255, 255, 255, 0.1);
  }
</style>

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
      ;

      $sql = "INSERT INTO users (role, firstname, lastname, username, sex, address, email, phone, educationbg, department, password)
      VALUES ('$role', '$firstname', '$lastname', '$username', '$sex', '$address', '$email', '$phone', '$educationbg', '$departmentoi', '$password')";


        if ($conn->query($sql) === TRUE) {
            echo "User inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>


<div class="contentcontainer">
    <h2>Insert Users</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

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

        <label for="username">Username:</label>
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

        <label for="educationbg">Education Background:</label>
        <select id="educationbg" name="educationbg" required>
            <option value="educationbg">CHOOSE YOUR EDUCATION BACKGROUND</option>
            <option value="secondary school graduate">SECONDARY SCHOOL GRADUATE</option>
            <option value="bachelor's">BACHELOR'S</option>
            <option value="masters">MASTERS</option>
            <option value="phd">PhD</option>
        </select>

        <label for="departmentoi">Department of Interest:</label>
        <select id="departmentoi" name="departmentoi" required>
            <option value="Choose Your Department">CHOOSE YOUR DEPARTMENT</option>
            <option value="ict">ICT</option>
            <option value="engineering">ENGINEERING</option>
            <option value="sciences">SCIENCES</option>
            <option value="medicine">MEDICINE</option>
            <option value="photography">PHOTOGRAPHY</option>
            <option value="hospitality">HOSPITALITY</option>
            <option value="mmcommunication">MASS MEDIA COMMUNICATION</option>
            <option value="culinary">CULINARY</option>
        </select>

        <label for="password">Create Password:</label>
        <input type="password" id="password" name="password" required />

        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required />
        <button type="submit">Insert User</button>
    </form>
</div>
