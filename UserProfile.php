<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    session_start();
    $username = $_SESSION['user-id'];  

    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "Careercrafthub";

    $conn = mysqli_connect($servername, $db_username, $db_password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT * FROM Users WHERE Username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    echo "<table class='user-info-table'>";
    
    if ($result) {
        $row = mysqli_fetch_assoc($result);

        if ($row) {

            echo "<tr><th colspan='2'><h2>Welcome, {$row['username']}!</h2></th></tr>";
            echo "<tr><td>Email:</td><td>{$row['email']}</td></tr>";
            echo "<tr><td class='label'>First Name:</td><td>{$row['firstname']}</td></tr>";
            echo "<tr><td class='label'>Last Name:</td><td>{$row['lastname']}</td></tr>";
            echo "<tr><td class='label'>Sex:</td><td>{$row['sex']}</td></tr>";
            echo "<tr><td class='label'>Address:</td><td>{$row['address']}</td></tr>";
            echo "<tr><td class='label'>Phone:</td><td>{$row['phone']}</td></tr>";
            echo "<tr><td class='label'>Education Background:</td><td>{$row['educationbg']}</td></tr>";
            echo "<tr><td class='label'>Department:</td><td>{$row['department']}</td></tr>";
            echo "<tr><td class='label'>Role:</td><td>{$row['role']}</td></tr>";

        } else {
            echo "<tr><td colspan='2'>No user found for username: $username</td></tr>";
        }
    } else {
        echo "<tr><td colspan='2'>Error: " . $stmt->error . "</td></tr>";
    }

    $stmt->close();

    echo "</table>";

    $conn->close();
} else {

}
?>
