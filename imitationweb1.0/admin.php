<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itrs";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, telephone_number, email, name_of_country, name_of_province, name_of_district, reg_date, gender FROM user_signup";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin List</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .admin-list {
            max-width:100%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .admin-list h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <div class="admin-list">
        <h2>List of Admins</h2>
        <?php
        if ($result !== false && $result->num_rows > 0) {
            echo "<table>";
            echo "<thead><tr><th>ID</th><th>Name</th><th>Telephone</th><th>Email</th><th>Name_of_Country</th><th>Name_of_Province</th><th>Name_of_District</th><th>Registration Date</th><th>Gender</th></tr></thead>";
            echo "<tbody>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . (isset($row['id']) ? $row['id'] : 'N/A') . "</td>";
                echo "<td>" . (isset($row['name']) ? $row['name'] : 'N/A') . "</td>";
                echo "<td>" . (isset($row['telephone_number']) ? $row['telephone_number'] : 'N/A') . "</td>";
                echo "<td>" . (isset($row['email']) ? $row['email'] : 'N/A') . "</td>";
                echo "<td>" . (isset($row['name_of_country']) ? $row['name_of_country'] : 'N/A') . "</td>";
                echo "<td>" . (isset($row['name_of_province']) ? $row['name_of_province'] : 'N/A') . "</td>";
                echo "<td>" . (isset($row['name_of_district']) ? $row['name_of_district'] : 'N/A') . "</td>";
                echo "<td>" . (isset($row['reg_date']) ? $row['reg_date'] : 'N/A') . "</td>";
                echo "<td>" . (isset($row['gender']) ? $row['gender'] : 'N/A') . "</td>";
                echo "</tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "No admins found.";
        }
        ?>
    </div>
</body>
</html>
