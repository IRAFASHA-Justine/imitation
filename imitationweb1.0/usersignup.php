<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];
    $country = $_POST["name_of_the_country"];
    $province = $_POST["province"];
    $district = $_POST["district"];
    $reg_date = $_POST["reg_date"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];

    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password_db = "";
    $dbname = "itrs";

    // Create connection
    $conn = new mysqli($servername, $username, $password_db, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Hash the password for security (use a proper hashing algorithm in a real-world scenario)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // SQL query to insert data into the "users" table
    $sql = "INSERT INTO users (name, telephone, email, country, province, district, reg_date, gender, password)
            VALUES ('$name', '$telephone', '$email', '$country', '$province', '$district', '$reg_date', '$gender', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>

 <html>
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/your/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
 body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
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

       
.dudu {
background:#507963;
border-radius:40px;
margin-left:50px;
padding-top:40px;
height:900px;
width:330px;
}
.winn{

label {
  color: #333;
  font-size: 16px;
  font-weight: bold;
}
 label {
            display: block;
            margin: 5px 0;
            color: #555;
        }
		  input[type="text"],
        input[type="number"],
        select {
            width: 50%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        textarea {
            width: 80%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

label.error {
  color: red;
}

#nameLabel {
  text-transform: uppercase;
} background: linear-gradient(135deg, #ffffff, #00ff00);
</style>
 
</head>
<body background-color="dreky green">
<div class="xxx" style="position:relative; right:100px;">
    <a href="index.php"><i class="fas fa-home"></i> Home</a>
    <a href="about.php" target="_blank"><i class="fas fa-info-circle"></i> About Us</a>
    <a href="update.php" target="_blank"><i class="fas fa-pencil-alt"></i> Update</a>
    <a href="menu.php" target="_blank"><i class="fas fa-bars"></i> Menu</a>
    <a href="userlogin.php" target="_blank"><i class="fas fa-sign-in-alt"></i> Login</a>
    <a href="usersignup.php" target="_blank"><i class="fas fa-user-plus"></i> Sign Up</a>
    <a><input type="text" placeholder="Search.."></a>
    <a href="adminlog.php" target="_blank"><i class="fas fa-user"></i> Admin</a>
</div>
<center>
<h1><strong>Sign_Up Form</strong></h1>
<div class="dudu">
 
<form method="post" action="">
<form>

<div class=" winn">
<label for="name">Name:</label>
<input type="text" id="name" name="name">
<br><br>
<label for="telephone">Telephone:</label>
<input type="text" id="telephone" name="telephone">
<br><br>
<label for="email">Email:</label>
<input type="text" id="email" name="email">
<br><br>
<p><label for="name of the country">name of country:</label></p>
    <input type="text" id="name of the country" name="name of the country" required></a>
	
          <label for="province">Province:</label>
        <select id="province" name="province" >
            <option value="">Please select one...</option>
            <option value="East">East</option>
            <option value="West">West</option>
            <option value="North">North</option>
            <option value="South">South</option>
            <option value="Kigali City">Kigali City</option>
        </select>

        <label for="district">District:</label>
        <select id="district" name="district" >
            <option value="">Please select one...</option>
            <option value="Kicukiro">Kicukiro</option>
            <option value="Nyarugenge">Nyarugenge</option>
            <option value="Gasabo">Gasabo</option>
            <option value="Rulindo">Rulindo</option>
            <option value="Nyagatare">Nyagatare</option>
            <option value="Bugesera">Bugesera</option>
        </select><br>
<input type="date" name="reg_date" size="40" placeholder="type day/month/year"/><br>
<br>
<label for="gender">Gender:</label>
  <select name="gender">
   <option value="">Please select one…</option>
      <option value="female">Female</option>
    <option value="male">Male</option></select><br>
<p><label for="password">Password:</label></p>
	<input type="password" id="password" name="password" required>
    <p><label for="confirm_password">Confirm Password:</label></p>
    <input type="password" id="confirm_password" name="confirm_password" required>
	<input type ="submit" value ="register"></a><br>
	</head>
	<a href="userlogin.php""#Back"target="blanck page">Back</a>
	</div></div>
	</body>
	</html>