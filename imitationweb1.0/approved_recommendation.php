<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itrs";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id']) && isset($_POST['approve_cell_leader'])) {
    $id = $_POST['id'];
    $approve = $_POST['approve_cell_leader'];

    $stmt = $conn->prepare("UPDATE recommendations SET approve_cell_leader = ?, approved_sector_leader = 'Approved' WHERE id = ?");
    $stmt->bind_param("si", $approve, $id);

    if ($stmt->execute()) {
        echo "Recommendation updated successfully";
    } else {
        echo "Error updating recommendation: " . $stmt->error;
    }

    $stmt->close();
}

$sql = "SELECT * FROM recommendations WHERE approved_sector_leader = 'Approved'";
$result = $conn->query($sql);

if ($result === false) {
    die("Error: " . $conn->error);
}

if ($result->num_rows > 0) {
    echo "<form method='post' action=''>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Village Leader ID</th><th>Recommendation Text</th><th>Recommendation Date</th><th>Cell Leader ID</th><th>Approve Cell Leader</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["village_leader_id"] . "</td>";
        echo "<td>" . $row["recommendation_text"] . "</td>";
        echo "<td>" . $row["recommendation_date"] . "</td>";
        echo "<td>" . (isset($row["cell_leader_id"]) ? $row["cell_leader_id"] : "") . "</td>";
        echo "<td>";
        echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
        echo "<select name='approve_cell_leader'>";
        echo "<option value=''>Select</option>";
        echo "<option value='Approve Cell Leader'>Approved</option>";
        echo "<option value='Rejected'>Rejected</option>";
        echo "</select>";
        echo "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "<button type='submit'>Send</button>";
    echo "</form>";
} else {
    echo "No approved recommendations found.";
}

$conn->close();
?>