
<div class="contentcontainer">
    <h2> Job Applications</h2>
    <?php
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "Careercrafthub";

    $conn = mysqli_connect($servername, $db_username, $db_password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

 
    $stmt = $conn->prepare("SELECT * FROM jobapplication");
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
   
        echo "<table>";
        echo "<tr>";
        echo "<th>Names</th>";
        echo "<th>JobTitle</th>";
        echo "<th>Application Date</th>";
        echo "<th>Action</th>";
        echo "</tr>";

        while ($job = $result->fetch_assoc()) {
            echo '<div class="job-table-container">';
            echo '<table>';
            echo '<thead>';
            echo "<tr>";
            echo "<td>{$job['names']}</td>";
            echo "<td>{$job['jobtitle']}</td>";
            echo "<td>{$job['applicationdate']}</td>";
            echo '<td><button>View application</button></td>';
            echo "</tr>";
            echo '</thead>';
            echo '<tbody>';
        }

        echo "</table>";
    } else {
        echo "<p>No job applications available at the moment.</p>";
    }

  
    $stmt->close();

    $conn->close();
    ?>
</div>
