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

    $jobtitle = mysqli_real_escape_string($conn, $_POST['jobtitle']);
    $names = mysqli_real_escape_string($conn, $_POST['names']);
    $employerid = mysqli_real_escape_string($conn, $_POST['Employerid']);

    $sql = "INSERT INTO jobapplication (names, jobtitle, employerid)
            VALUES ('$names', '$jobtitle', '$employerid')";

    if ($conn->query($sql) === TRUE) {
        $message = "Job applied to successfully";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<div class="contentcontainer">
    <h2>Post a Job</h2>
    <?php if (isset($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>
    <form method="post" action="">
    <label for="names">Full Name:</label>
        <input type="text" id="names" name="names" required />

        <label for="jobtitle">Job Title:</label>
        <input type="text" id="jobtitle" name="jobtitle" required />



        <label for="Employerid">EMPLOYER:</label>
      <select id="Employerid" name="Employerid" required>
        <option value="Choose The Employer">CHOOSE</option>
        <option value="1">UR</option>
        <option value="2">LOYOLA Tech Solutions</option>
        <option value="3">SKAT Constructions</option>
        <option value="4">GENECO</option>
        <option value="6">OPTIMA Clays</option>
      </select>
      <label for="resume">Resume and Tertiary Certificates:</label>
        <input type="file" id="resume" name="resume" accept=".pdf, .doc, .docx"  required />

        <label for="supportingdocument">Supporting Documents:</label>
        <input type="file" id="supportingdocument" name="supportingdocument" accept=".pdf, .doc, .docx"  />

      <label for="message">Anything you can add to your application:</label>
        <textarea id="message" name="message" rows="4" ></textarea>


        <button type="submit">Submit Application</button>
    </form>
</div>
