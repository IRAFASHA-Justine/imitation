<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itrs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['Telephone/Email'];
    $password = $_POST['Password'];

    // Use prepared statement to avoid SQL injection
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            echo "Login successful!";
            // Redirect or perform other actions after successful login
            header("Location: index.php");
            exit();
        } else {
            echo "Invalid email or password";
        }
    } else {
        echo "Invalid email or password";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
       <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/your/local/fontawesome/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="path/to/your/local/fontawesome/css/all.min.css" as="style">
    <noscript><link rel="stylesheet" href="path/to/your/local/fontawesome/css/all.min.css"></noscript>
    <style>
 body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }
 .xxx a {
            display: flex;
            align-items: center;
        }
        .xxx a i {
            margin-right: 5px;
        }
        .xxx {
            background-color: black;
            height: 60px;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .xxx a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 16px;
            display: flex;
            align-items: center;
        }

        .xxx a input[type="button"] {
            background: #4CAF50;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .xxx a input[type="text"] {
            padding: 8px;
            border: none;
            border-radius: 5px;
            margin-right: 10px;
        }

        /* Add your own styles as needed */
        body {
            background-color: #013220;
        }

       
        body {
            font-family: 'Arial', sans-serif;
           
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .sisi {
			height:300px;
            background-color: green;
            padding: 20px;
            border-radius: 70px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form {
            max-width: 300px;
            margin: 0 auto;
            text-align: center;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        input[type="checkbox"] {
            margin-right: 8px;
        }

        span {
            font-size: 14px;
        }

        p {
            margin-top: 10px;
            font-size: 14px;
        }

        a {
            text-decoration: none;
            color: #333;
            display: block;
            margin-top: 10px;
            font-size: 16px;
        }
    </style>
    </style>
</head>
<body>
<div class="xxx">
    <a href="index.php"><i class="fas fa-home"></i> Home</a>
    <a href="about.php" target="blank"><i class="fas fa-info-circle"></i> About Us</a>
    <a href="update.php" target="blank"><i class="fas fa-user-edit"></i> Update</a>
   <a href="menu.php" target="_blank"><i class="fas fa-bars"></i> Menu</a>
    <a href="userlogin.php" target="blank"><i class="fas fa-sign-in-alt"></i> Login</a>
    <a href="usersignup.php" target="blank"><i class="fas fa-user-plus"></i> Register</a>
    <a href="#Search"><i class="fas fa-search"></i> Search</a>
    <a href="help.php"><i class="fas fa-question-circle"></i> Help</a>
</div>
    <form class="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
     <div class="sisi">
        <div class="form">
            <label for="TelephoneEmail">Telephone/Email</label>
            <input type="text" id="TelephoneEmail" name="TelephoneEmail" required>

            <label for="Password">Password</label>
            <input type="password" id="Password" name="Password" required>

            <input type="submit" name="log" id="log" value="Log In">

            <input type="checkbox" id="check">
            <span>Forgot password</span>

            <p><a href="usersignup.php" target="_blank">Forgot Password</a></p>

            <a href="index.php" target="_blank">Back</a>
        </div>
    </div>
       
</body>
</html>
