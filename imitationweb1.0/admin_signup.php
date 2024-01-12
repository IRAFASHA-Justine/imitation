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
    $name = $_POST["name"];
    $telephone_number = $_POST["telephone_number"];
    $email = $_POST["email"];
    $name_of_country = $_POST["name_of_country"];
    $name_of_province = $_POST["province"]; // Corrected name_of_province
    $name_of_district = $_POST["district"];
    $reg_date = $_POST["reg_date"];
    $gender = $_POST["gender"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO user_signup (name, telephone_number, email, name_of_country, name_of_province, name_of_district, reg_date, gender, password)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("sssssssss", $name, $telephone_number, $email, $name_of_country, $name_of_province, $name_of_district, $reg_date, $gender, $password);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      background-color: #3a4c40;
      border-radius: 10px;
    }

    .dudu {
      background: #507963;
      border-radius: 70px;
      margin-left: 50px;
      padding-top: 40px;
      height: 153vh;
      width: 400px;
    }

    .winn {
      text-align: center;
    }

    label {
      color: #333;
      font-size: 16px;
      font-weight: bold;
      margin-top: 10px;
      display: block;
    }

    label.error {
      color: red;
      margin-top: 5px;
      display: block;
    }

    input[type="text"],
    input[type="password"],
    input[type="date"],
    select {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background-color: #4caf50;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    a {
      color: #fff;
      text-decoration: none;
      margin-top: 10px;
      display: inline-block;
    }
  </style>
</head>
<body>
  <center>
    <h1><strong>Sign Up Form</strong></h1>
    <div class="dudu">
      <form method="post" action="">
        <div class="winn">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name">

          <label for="telephone_number">Telephone Number:</label>
          <input type="text" id="telephone_number" name="telephone_number">

          <label for="email">Email:</label>
          <input type="text" id="email" name="email">

          <label for="name_of_country">Name of Country:</label>
          <input type="text" id="name_of_country" name="name_of_country" required>
<br>
          <label for="province">Province:</label>
        <select id="province" name="province" >
            <option value="">Please select one...</option>
            <option value="East">East</option>
            <option value="West">West</option>
            <option value="North">North</option>
            <option value="South">South</option>
            <option value="Kigali City">Kigali City</option>
        </select>
<br>
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
		<label for="position">role:</label>
        <select id="position" name="position" >
            <option value="">Please select one...</option>
            <option value="Village Leader">Village Leader</option>
            <option value="Cell Leader">Cell Leader</option>
            <option value="Sector Leader">Sector Leader</option>
			<option value="Super Admin">Super Admin</option>
			 </select><br>
          <label for="reg_date">Registration Date:</label>
          <input type="date" name="reg_date" size="40" placeholder="type day/month/year">

          <label for="gender">Gender:</label>
          <select name="gender">
            <option value="">Please select one...</option>
            <option value="female">Female</option>
            <option value="male">Male</option>
          </select>

          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>

          <label for="confirm_password">Confirm Password:</label>
          <input type="password" id="confirm_password" name="confirm_password" required>

          <input type="submit" value="Register">
        </div>
      </form>
      <a href="adminlog.php" target="_blank">Back</a>
    </div>
  </center>
</body>
</html>
