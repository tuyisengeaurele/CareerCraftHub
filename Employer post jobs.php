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

  input,
  textarea,
  select {
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


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Careercrafthub";

  
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

  
    $jobtitle = $_POST['jobtitle'];
    $jobdescription = $_POST['jobdescription'];
    $Employerid = $_POST['Employerid'];
    $location = $_POST['location'];
    $industry = $_POST['industry'];
    $expirydate = $_POST['expirydate'];
    $salary = $_POST['salary'];

   
    $sql = "INSERT INTO joblistings (jobtitle,jobdescription, Employerid, location, industry, expiryDate, Salary)
            VALUES ('$jobtitle', '$jobdescription','$Employerid', '$location', '$industry', '$expirydate', '$salary')";
    

    if ($conn->query($sql) === TRUE) {
        echo "Job posted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $conn->close();
}
?>


<div class="contentcontainer">
    <h2>Post a Job</h2>
    <form method="post" action="">
        <label for="jobTitle">Job Title:</label>
        <input type="text" id="jobtitle" name="jobtitle" required />

        <label for="jobdescription">Job Description:</label>
        <textarea id="jobdescription" name="jobdescription" rows="4" required></textarea>

        <label for="Employerid">EMPLOYER:</label>
      <select id="Employerid" name="Employerid" required>
        <option value="Choose The Employer">CHOOSE</option>
        <option value="1">UR</option>
        <option value="2">LOYOLA Tech Solutions</option>
        <option value="3">SKAT Constructions</option>
        <option value="4">GENECO</option>
      </select>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" required />

        <label for="industry">Industry:</label>
        <input type="text" id="industry" name="industry" required />

        <label for="expiryDate">Expiry Date:</label>
        <input type="date" id="expirydate" name="expirydate" required />

        <label for="salary">Salary:</label>
        <input type="text" id="salary" name="salary" required />

        <button type="submit">Post Job</button>
    </form>
</div>
