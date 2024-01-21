<?php
$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "Careercrafthub";

$conn = mysqli_connect($servername, $db_username, $db_password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM Users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="user-list">';
    echo '<h2>Users</h2>';
    echo '<table>';
    echo '<tr>
            <th>Role</th>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Sex</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Education Background</th>
            <th>Department</th>
            <th>Action</th>
          </tr>';

    $rowNum = 0; 

    while ($row = $result->fetch_assoc()) {
        $rowNum++;
        $rowColor = ($rowNum % 2 == 0) ? 'even' : 'odd';

        echo '<tr class="' . $rowColor . '">';
        echo '<td>' . $row['role'] . '</td>';
        echo '<td>' . $row['username'] . '</td>';
        echo '<td>' . $row['firstname'] . '</td>';
        echo '<td>' . $row['lastname'] . '</td>';
        echo '<td>' . $row['sex'] . '</td>';
        echo '<td>' . $row['address'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['phone'] . '</td>';
        echo '<td>' . $row['educationbg'] . '</td>'; 
        echo '<td>' . $row['department'] . '</td>';
        
        echo '<td><button onclick="editUser(' . $row['role'] . ')">Edit</button></td>';
        echo '</tr>';
    }

    echo '</table>';
    echo '</div>';
} else {
    echo 'No users found.';
}


$conn->close();
?>
