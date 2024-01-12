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
    $dbname = "your_database_name";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch data from the "YourTableName" table
    $sql = "SELECT * FROM YourTableName";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Village Leader ID</th><th>Cell Leader ID</th><th>Sector Leader ID</th><th>Recommendation Text</th><th>Recommendation Date</th><th>Actions Cell Leader</th><th>Actions Sector Leader</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["village_leader_id"] . "</td>";
            echo "<td>" . $row["Cell_leader_id"] . "</td>";
            echo "<td>" . $row["Sector_leader_id"] . "</td>";
            echo "<td>" . $row["recommendation_text"] . "</td>";
            echo "<td>" . $row["recommendation_date"] . "</td>";
            echo "<td>" . $row["actions_cell_leader"] . "</td>";
            echo "<td>" . $row["actions_sector_leader"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No recommendation found.";
    }

    $conn->close();
    ?>
</body>
</html>