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
    $sql = "SELECT * FROM user_signup WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            echo "Login successful!";
            header("Location: dash.php");
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
<html lang="en">
<head>
    <style>
       /* Add your own styles as needed */
        body {
            background-color: #013220;
	
            display: flex;
            align-items: center;
            justify-content: center;
            height: 110vh;
            margin: 0;
        }

        .form-container {
            width: 380px;
			height:400px;
            background-color:dreky blue;
            padding: 20px;
            border-radius: 70px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
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

        a {
            text-decoration: none;
            color: #333;
        }

        .checkbox-container {
            display: flex;
            align-items: center;
        }

        input[type="checkbox"] {
            margin-right: 8px;
        }

        p {
            margin-top: 10px;
            font-size: 14px;
        }

        .back-link {
            display: block;
            margin-top: 20px;
            color: #555;
        }
		.sisi {
		background: green;border-radius:70px;}
    </style>
</head>
</head>
<body>
<div class="sisi">
 <div class="form-container">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
             
			 <div class="form-group">
                <label for="TelephoneEmail">Telephone/Email</label>
                <input type="text" id="TelephoneEmail" name="TelephoneEmail" required>
            </div>

            <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" id="Password" name="Password" required>
            </div>

            <input type="submit" name="log" id="log" value="Log In">

            <div class="form-group">
                <a href="admin_signup.php">Signup</a>
            </div>

            <div class="checkbox-container">
                <input type="checkbox" id="check">
                <span>Remember me</span>
            </div>

            <p><a href="forgot.php">Forgot Password</a></p>

            <a class="back-link" href="index.php">Back</a>
        </form>
    </div>
</body>
</html>