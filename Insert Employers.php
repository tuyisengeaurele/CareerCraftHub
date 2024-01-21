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
    $EmployerName = $_POST['EmployerName'];

    $sql = "INSERT INTO employer (EmployerName) VALUES ('$EmployerName')";

    if ($conn->query($sql) === TRUE) {
        echo "Employer inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>



<div class="contentcontainer">
    <h2>Insert Employer</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">



        <label for="EmployerName">Employer Name:</label>
        <input type="text" id="EmployerName" name="EmployerName" required />

        <button type="submit">Insert Employer</button>
    </form>
</div>
