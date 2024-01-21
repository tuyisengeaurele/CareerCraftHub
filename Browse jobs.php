<div class="contentcontainer">

  
    <div class="search-container">
        <form action="#" method="GET">
            <input type="text" placeholder="Search for jobs..." name="search">
            <button type="submit">Search</button>
        </form>
    </div>

    <div class="contentcontainer">
        <h2>Browse Jobs</h2>

        <?php
        
        $servername = "localhost";
        $db_username = "root";
        $db_password = "";
        $dbname = "Careercrafthub";

        $conn = mysqli_connect($servername, $db_username, $db_password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

       
        $stmt = $conn->prepare("SELECT * FROM joblistings");
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
      
            echo '<div class="job-list-container">';
            echo '<ul>';

            while ($job = $result->fetch_assoc()) {
                echo '<li>';
                echo "<h3>{$job['jobtitle']}</h3>";
                echo "<p>{$job['jobdescription']}</p>";
                echo "<p><strong>Location:</strong> {$job['location']}</p>";
                echo "<p><strong>Industry:</strong> {$job['industry']}</p>";
                echo "<p><strong>Company:</strong> {$job['Employerid']}</p>";
                echo "<p><strong>Salary:</strong> {$job['salary']}</p>";
                echo '<p><a href="applyjob.php?jobid=' . $job['jobid'] . '"><button type="button">Apply</button></a></p>';

                echo '</li>';
            }

            echo '</ul>';
            echo '</div>';
        } else {
            echo "<p>No jobs available at the moment.</p>";
        }

     
        $stmt->close();

        $conn->close();
        ?>
    </div>
</div>
