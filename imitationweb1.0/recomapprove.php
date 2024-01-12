
<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    // Establish a connection to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "itrs";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch data from the "recommendations" table
    $sql = "SELECT * FROM recommendations";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Village Leader ID</th><th>Recommendation Text</th><th>Is Approved</th><th>Sector Leader Approved</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["village_leader_id"] . "</td>";
            echo "<td>" . $row["recommendation_text"] . "</td>";
            echo "<td>" . (isset($row["is_approved"]) && $row["is_approved"] ? 'Yes' : 'No') . "</td>";
            echo "<td>" . (isset($row["sector_leader_approved"]) && $row["sector_leader_approved"] ? 'Yes' : 'No') . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No recommendations found.";
    }

    $conn->close();
    ?>
</body>
</html>
  