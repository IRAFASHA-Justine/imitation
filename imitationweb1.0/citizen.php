<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itrs";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Citizens</title>
    <style>
        body {
            background-color: #f0f8ff; /* Set the background color to white blue (light blue) */
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: green;
            color: white;
        }
    </style>
</head>
<body>
    <h1>All Citizens</h1>

    <?php
    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Telephone</th><th>Email</th><th>Name</th><th>Country</th><th>Province</th><th>District</th><th>Reg_Date</th><th>Gender</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["telephone"] . "</td><td>" . $row["email"] . "</td><td>" . $row["name"] . "</td><td>". $row["country"] . "</td><td>". $row["province"] . "</td><td>". $row["district"] . "</td><td>" . $row["reg_date"] . "</td><td>". $row["gender"] . "</td></tr>";
        }

        echo "</table>";
    } else {
        echo "No citizens found";
    }
    ?>
		<a href="dash.php" target="blank page">Back</a>
</body>
</html>
