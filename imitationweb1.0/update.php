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

$message = ""; // Variable to store success message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $names = $_POST["your_names"];
    $country = $_POST["the_name_of_country"];
    $province = $_POST["province"];
    $district = $_POST["district"];
    $sector = $_POST["sector"];
    $cell = $_POST["cell"];
    $village = $_POST["village"];
    $identification = $_POST["identification"];
    $gender = $_POST["gender"];
    $reg_date = $_POST["reg_date"];
    $family_members = $_POST["name_of_family_member"];
    $others = $_POST["name_of_other"];
    $children = $_POST["name_of_child"];

    $sql = "INSERT INTO biodata (names, country, province, district, sector, cell, village, identification, gender, reg_date, family_members, others, children)
            VALUES ('$names', '$country', '$province', '$district', '$sector', '$cell', '$village', $identification, '$gender', '$reg_date', '$family_members', '$others', '$children')";

    if ($conn->query($sql) === TRUE) {
        $message = "Record created successfully";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Form</title>
    <style>
        body {
			
            font-family: Arial, sans-serif;
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

        /* Add your own styles as needed */
       body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
           
        }

        form {
            width: 50%;
            margin: 50px auto;
            background:dreky;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0;
            color: #555;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        textarea {
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
           
        }
    </style>
</head>
<body background="back.webp">
    <div style="text-align: center; color: green; margin-top: 10px;"><?php echo $message; ?></div>
 <div class="xxx">
    <a href="index.php"><i class="fas fa-home"></i> Home</a>
    <a href="about.php" target="_blank"><i class="fas fa-info-circle"></i> About Us</a>
    <a href="update.php" target="_blank"><i class="fas fa-user-edit"></i> Update</a>
     <a href="menu.php" target="_blank"><i class="fas fa-bars"></i> Menu</a>
    <a href="userlogin.php" target="_blank"><i class="fas fa-sign-in-alt"></i> Login</a>
    <a href="usersignup.php" target="_blank"><i class="fas fa-user-plus"></i> Register</a>
    <a href="#Search"><i class="fas fa-search"></i> Search</a>
    <a href="#Help"><i class="fas fa-question-circle"></i> Help</a>
    <a href="adminlog.php" target="_blank"><i class="fas fa-user-cog"></i> Admin</a>
</div>
    <form method="post" action="">
        <h1>Biodata Form</h1>
        <label for="your_names">Names:</label>
        <input type="text" id="your_names" name="your_names" required>

        <label for="the_name_of_country">Country:</label>
        <input type="text" id="the_name_of_country" name="the_name_of_country" required>

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
        </select>

        <label for="sector">Sector:</label>
        <select id="sector" name="sector" >
            <option value="">Please select one...</option>
            <option value="Kanombe">Kanombe</option>
            <option value="Gikondo">Gikondo</option>
            <option value="Kigarama">Kigarama</option>
            <option value="Kagarama">Kagarama</option>
            <option value="Remera">Remera</option>
            <option value="Kimisagara">Kimisagara</option>
        </select>

        <label for="cell">Cell:</label>
        <select id="cell" name="cell" >
            <option value="">Please select one...</option>
            <option value="Mataba">Mataba</option>
            <option value="Karama">Karama</option>
            <option value="Urukundo">Urukundo</option>
            <option value="Gashyushya">Gashyushya</option>
        </select>

        <label for="village">Village:</label>
        <select id="village" name="village">
            <option value="">Please select one...</option>
            <option value="Kirusagara">Kirusagara</option>
            <option value="Rutoki">Rutoki</option>
            <option value="Kigarama">Kigarama</option>
            <option value="Mahoro">Mahoro</option>
        </select>
		   <label for="identification">Identification Number:</label>
        <input type="number" id="identification" name="identification" required>

        <label for="gender">Gender:</label>
        <select name="gender" required>
            <option value="">Please select one...</option>
            <option value="female">Female</option>
            <option value="male">Male</option>
        </select>
        <label for="reg_date">Registration Date:</label>
        <input type="date" id="reg_date" name="reg_date" required>
     <label for="name_of_family_member">Name of Family Members</label>
        <textarea id="name_of_family_member" name="name_of_family_member" rows="4" ></textarea>

        <label for="name_of_other">Name of Others</label>
        <textarea id="name_of_other" name="name_of_other" rows="4" ></textarea>

        <label for="name_of_child">Name of Children</label>
        <textarea id="name_of_child" name="name_of_child" rows="4" ></textarea>
        <input type="submit" value="Register" name="Register">
   
    <script>
        document.getElementById("the_name_of_country").addEventListener("input", function() {
            var countryInput = this.value.toLowerCase();
            var rwandaInputs = ["rwanda"];

            if (rwandaInputs.includes(countryInput)) {
                document.getElementById("province").removeAttribute("disabled");
                document.getElementById("district").removeAttribute("disabled");
                document.getElementById("sector").removeAttribute("disabled");
                document.getElementById("cell").removeAttribute("disabled");
                document.getElementById("village").removeAttribute("disabled");
            } else {
                document.getElementById("province").setAttribute("disabled", true);
                document.getElementById("district").setAttribute("disabled", true);
                document.getElementById("sector").setAttribute("disabled", true);
                document.getElementById("cell").setAttribute("disabled", true);
                document.getElementById("village").setAttribute("disabled", true);
            }
        });
    </script>
</body>
</html>
