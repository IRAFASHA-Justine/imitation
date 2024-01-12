<!DOCTYPE html>
<html>

<head>
    <style>
        .course table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .course th, .course td {
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

        .approve-buttons {
            display: flex;
            gap: 10px;
        }

        .approve-buttons button {
            padding: 8px;
            cursor: pointer;
        }

        .approve-button-approve {
            background-color: #4CAF50;
            color: white;
        }

        .approve-button-reject {
            background-color: #f44336;
            color: white;
        }

        .submit-button {
            margin-top: 20px;
        }

        .success-message {
            color: green;
        }

        .error-message {
            color: red;
        }
    </style>
</head>

<body>
    <div class="course-box">
        <div class="dropdown" id="cellLeaderDropdown">
            <li><a href="#">
                <i class="fas fa-user"></i>
                <span class="dropbtn">Cell Leader</span>
                <div class="dropdown-content">
                    <a href="#" onclick="toggleApproveRecommendations()">Approve Recommendation</a>
                </div>
            </li>
        </div>

        <div class="course" id="approve_recommendationsContent">
            <h2>Approve Recommendations from Cell Leaders</h2>

            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "itrs";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Check if the form is submitted
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['id'])) {
                    $id = $_POST['id'];

                    if (isset($_POST['approve'])) {
                        $approve = $_POST['approve'];

                        // Add cell_leader_id handling
                        $cellLeaderId = isset($_POST['cell_leader_id']) ? $_POST['cell_leader_id'] : '';

                        $sql = "UPDATE recommendations SET approve_cell_leader = '$approve', cell_leader_id = '$cellLeaderId' WHERE id = $id";
                        $result = $conn->query($sql);

                        if ($result === false) {
                            die("Error: " . $conn->error);
                        } else {
                            $successMessage = "Successfully updated the recommendation!";
                        }
                    }
                }
            }

            $sql = "SELECT * FROM recommendations";
            $result = $conn->query($sql);

            if ($result === false) {
                die("Error: " . $conn->error);
            }

            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>ID</th><th>Village Leader ID</th><th>Recommendation Text</th><th>Recommendation Date</th><th>Cell Leader ID</th><th>Approve Cell Leader</th></tr>";

                while ($row = $result->fetch_assoc()) {
                    echo "<form method='post'>";
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["village_leader_id"] . "</td>";
                    echo "<td>" . $row["recommendation_text"] . "</td>";
                    echo "<td>" . $row["recommendation_date"] . "</td>";
                    echo "<td>";
                    echo "<input type='text' name='cell_leader_id' value='" . (isset($row["cell_leader_id"]) ? $row["cell_leader_id"] : "") . "'>";
                    echo "</td>";
                    echo "<td class='approve-buttons'>";
                    echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
                    echo "<button type='submit' name='approve' value='Approved' class='approve-button-approve'>Approve</button>";
                    echo "<button type='submit' name='approve' value='Rejected' class='approve-button-reject'>Reject</button>";
                    echo "</td>";
                    echo "</tr>";
                    echo "</form>";
                }

                echo "</table>";
            } else {
                echo "No recommendations found in approve_recommendations.";
            }

            $conn->close();
            ?>

            <!-- Submit Form Outside the Loop -->
            <form method="post" action="">
                <button type="submit" class="submit-button" name="submit">Submit</button>
            </form>

            <!-- Display Success Messages -->
            <?php
            if (isset($successMessage)) {
                echo "<p class='success-message'>$successMessage</p>";
            }
            ?>
        </div>

        <script>
            function toggleApproveRecommendations() {
                var approve_recommendationContent = document.getElementById("approve_recommendationsContent");

                if (approve_recommendationContent.style.display === "none") {
                    approve_recommendationContent.style.display = "block";
                } else {
                    approve_recommendationContent.style.display = "none";
                }
            }
        </script>
		<a href="dash.php" target="blank page">Back</a>
    </div>
</body>

</html>
