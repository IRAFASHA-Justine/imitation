<!DOCTYPE html>
<html>

<head>
    <style>
        .course table {
            width: 100%;
            background-color: #f2f2f2;
            border-collapse: collapse;
        }

        .course th, .course td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="course-box">
        <div class="dropdown" id="villageLeaderDropdown">
            <li><a href="#">
                    <i class="fas fa-user"></i>
                    <span class="dropbtn">Village Leader</span>
                    <div class="dropdown-content">
                        <a href="#">Recommendation</a>
                    </div>
                </a></li>
        </div>

        <div class="course" id="recommendationContent">
            <h2>Recommendations from Village Leaders</h2>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "itrs";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM recommendations";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table border='1' style='width:100%;background-color:#f2f2f2;border-collapse: collapse;'>";
                echo "<tr><th>ID</th><th>Village Leader ID</th><th>Recommendation Text</th><th>Recommendation Date</th></tr>";

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["village_leader_id"] . "</td>";
                    echo "<td>" . $row["recommendation_text"] . "</td>";
                    echo "<td>" . $row["recommendation_date"] . "</td>";
                    echo "</tr>";
                }

                echo "</table>";
            } else {
                echo "No recommendations found.";
            }

            $conn->close();
            ?>
        </div>

        <script>
            function toggleRecommendations() {
                var recommendationContent = document.getElementById("recommendationContent");

                if (recommendationContent.style.display === "none") {
                    recommendationContent.style.display = "block";
                } else {
                    recommendationContent.style.display = "none";
                }
            }
        </script>
    </div>
</body>

</html>
