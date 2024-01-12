<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itrs";
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $village_leader_id = $_POST["village_leader_id"];
    $recommendation_text = $_POST["recommendation_text"];

   
    $stmt = $conn->prepare("INSERT INTO recommendations (village_leader_id, recommendation_text) VALUES (?, ?)");
    $stmt->bind_param("ss", $village_leader_id, $recommendation_text);

    if ($stmt->execute()) {
        echo "Recommendation submitted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommendation Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
.form-container {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 400px;
        max-width: 100%;
    }

    .form-container label {
        display: block;
        margin-bottom: 8px;
    }

    .form-container input {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .form-container textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    .form-container button {
        background-color: #4caf50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    .form-container button:hover {
        background-color: #45a049;
    }
</style>
      
</head>
<body>

<div class="form-container">
    <h2>Recommendation Form</h2>
    <form action="submit_recommendation.php" method="post">
        <label for="village_leader_id">Village Leader ID:</label>
        <input type="text" id="village_leader_id" name="village_leader_id" required>

       <label for="recommendation_text">Recommendation Text:</label>
    <textarea id="recommendation_text" name="recommendation_text" rows="4" required></textarea>

    <button type="submit">Send</button>
	 	<a href="dash.php" target="blank page">Back</a>
</form>
    </form>
</div>

</body>
</html>
