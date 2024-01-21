
<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
session_start();
$error="";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Careercrafthub";
$conn =mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "connection failed".mysqli_error($conn);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name =mysqli_real_escape_string($conn, $_POST['name']);
    $email =mysqli_real_escape_string($conn, $_POST['email']);
    $message =mysqli_real_escape_string($conn, $_POST['message']);
    $sql = "INSERT INTO support VALUES(?,?,?,now())";
    $stmt=mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($stmt,"sss",$name,$email,$message);
    mysqli_stmt_execute($stmt);
    $result=mysqli_stmt_get_result($stmt);
    if (!$result) {
     $error = 'Thank you for the enquiry, we will get back to you shortly!'; 
    }
     else {
        $error = 'something went wrong!';
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    <title>Support & Contact</title>
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

        input, textarea {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            margin-top: 5px;
            box-sizing: border-box;
        }

        input[type=button] {
            background-color: #1a1a1a;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 1.2em;
        }

        input[type=button]:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body>

<div class="contentcontainer">
    <h2>Contact Support</h2>
    <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required />

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required />

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <input type="submit"name="submit" value="Submit">
    </form>
</div>

</body>
</html>
