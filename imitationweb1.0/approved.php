<!DOCTYPE html>
<html>

<head>
    <style>
        .course table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .course th,
        .course td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .course th {
            background-color: #4CAF50;
            color: white;
        }

        .course td {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="course-box">
        <div class="course">
            <h2>Approved Recommendations</h2>

            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "itrs";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM recommendations WHERE approve_cell_leader = 'Approved' AND approve_sector_leader = 'Approved'";
            $result = $conn->query($sql);

            if ($result === false) {
                die("Error: " . $conn->error);
            }

            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>ID</th><th>Village Leader ID</th><th>Recommendation Text</th><th>Recommendation Date</th><th>Cell Leader ID</th><th>Sector Leader ID</th><th>Approve Cell Leader</th><th>Approve Sector Leader</th></tr>";

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["village_leader_id"] . "</td>";
                    echo "<td>" . $row["recommendation_text"] . "</td>";
                    echo "<td>" . $row["recommendation_date"] . "</td>";
                    echo "<td>" . $row["cell_leader_id"] . "</td>";
                    echo "<td>" . $row["sector_leader_id"] . "</td>";
                    echo "<td>" . $row["approve_cell_leader"] . "</td>";
                    echo "<td>" . $row["approve_sector_leader"] . "</td>";
                    echo "</tr>";
                }

                echo "</table>";
            } else {
                echo "No approved recommendations found.";
            }

            $conn->close();
            ?>
        </div>

        <a href="dashboard.php" target="_blank">Back</a>
    </div>
</body>

</html>
