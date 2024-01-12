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

$checkColumnQuery = "SHOW COLUMNS FROM recommendations LIKE 'is_approved'";
$result = $conn->query($checkColumnQuery);

if ($result->num_rows == 0) {
    $addColumnQuery = "ALTER TABLE recommendations ADD COLUMN is_approved BOOLEAN DEFAULT 0";
    if ($conn->query($addColumnQuery) === TRUE) {
        echo "Column 'is_approved' added successfully.";
    } else {
        echo "Error adding column: " . $conn->error;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $sql = "SELECT id, village_leader_id, recommendation_text, recommendation_date, is_approved FROM recommendations";
    $result = $conn->query($sql);
}


$sql = "SELECT id, village_leader_id, recommendation_text, recommendation_date, is_approved FROM recommendations";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<!-- Your existing HTML code -->
</html>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF=8"/>
<title>Dashboard </title>
<link rel="stylesheet" href="style.css"/>
<!--font awesome cdn link-->
<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<style>
/* import google fonts */
@import url("https://fonts.googleapis.com/css2?family=poppins:wght@400;500;600;700&display=swap");
*{
margin:0;
padding:0;
outline:none;
border:none;
text-decoration:none;
box-sizing:border-box;
font-family:"poppins",sans-serif;
}
body{
background:gggg.png;
}
.container{
display:flex;
}
nav{
position:relative;
height:123.5vh;
background:lightblue;
overflow:hidden;
box-shadow:0 20px 35px rgba(0,0,0,1);
}
nav{width:400px;}
.logo{
text-align:center;
display:flex;
margin:10px 0 0 10px;
}
.logo img{
width:45px;
height:45px;
border-radius:50%
}
.logo span{
font-weight:bold;
padding-left:15px;
font-size:18px;
text-transform:uppercase;
}
a{
position:relative;
color:rgb(85,83,83);
font-size:14px;
display:table;
width:280px;
padding:10px;
}
nav .fas{
position:relative;
width:76px;
height:40px;
top:14px;
font-size:20px;
text-align:center;
}
.nav-item{
position:relative;
top:12px;
margin-left:10px;
}
a:hover{
background:#eee;
}
.logout{
position:absolute;
bottom:0;
Padding-top:30px;
}
/*main section*/
.main{
position:relative;
padding:10px;
width:100%;
}
.main-top{
display:flex;
width:100%;
}
.main-top i{
position:absolute;
right:0;
margin:10px 30px;
color:rgb(11,109,109);
cursor:pointer;
}

.show {display: block;}
/* Dropdown container */
.dropdown {
  position: relative;
  display: inline-block;
  margin-right: 10px; /* Add margin for spacing between dropdowns */
}

/* Dropdown button */
.dropdown button.dropbtn {
position:relative;
  color:rgb(85,83,83);
  padding: 10px;
  font-size: 14px;
  border: none;
  cursor: pointer;
  
}
/* Dropdown content */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #fff;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Dropdown links */
.dropdown-content a {
  color: #333;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Show the dropdown content when hovering or clicking on the dropdown button */
.dropdown:hover .dropdown-content,
.dropdown.show .dropdown-content {
  display: block;
}

.main-residency{
display:flex;
margin-top:20px;

}
.main-residency .card{
width:35%;
margin-left:10px;
background:green;
text-align:center;
border-radius:20px;
padding:10px;
box-shadow:0 20px 35px rgba(0,0,0,0.1);
height:300px;
}
.main-residency .card h3{
margin:10px;
text-transform:capiatalize;
}
.main-residency .card p{
font-size:12px;
}
.main-residency .card button{
background:orangered;
color:#fff;
padding:7px 15px;
border-radius:10px;
margin-top:15px;
curson:pointer;
}
.main-residency .card button:hover{
background:rgba(223,70,15,0.856);
}
.main-skills .card i{
font-size:22px;
padding:10px;}
/* courses*/
.main-course{
margin-top:20px;
text-transform:capitalize;}
.course-box{
height:380px;
width:50%
padding:10px;
margin-top:10px;
background:#fff;
border-radius:10px;
box-shadow:0 20px 35px rgba(0,0,0,0.1);
}
.course-box ul{
list-style:none;
display:flex;
}
.course-box ul li{
margin:10px;
color:gray;
cursor:pointer;
}
.course-box ul .active{
color:#000;
border-bottom:1px solid #000;
}
.course-box .course{
display:flex;
}
.box{
width:33%;
padding:10px;
margin:10px;
border-radius:10px;
background:rgb(235,233,233);
box-shadow:0 20px 35px rgba(0,0,0,0.1);
}
.box p{
font-size:12px;
margin-top:5px;
}
.box buttom{
background:#000;
color:#fff;
padding:7px 10px;
border-radius:10px;
margin-top:3rem;
cursor:pointer;
}
.box button:hover{
background:rgba(0,0,0,0.842);
}
.box i{
font-size:7rem;
float:right;
margin:-20px 20px 20px 0;
}
.html{
color:rgb(25,94,54);
}
.ian{
margin-right:60px;
text-align:center;}

.people-list {
  width: 100%;
  height:100px;
  padding:10px;
  margin: 20px;
}



thead {
  background-color: #f9f9f9;
}

th, td {
  padding: 20px;
  text-align: left;
  border-bottom: 1px solid #ccc;
}
.approval-button {
  padding: 5px 10px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}
.approval-button:hover {
  background-color: #45a049;
}
.aga{height:400px;width:100%;border-radius:10px;}
 
</style>
<body>
<div class="aga">
<body background="dddd.jpeg">

<div class="container">
<nav>
<ul>
<li><a href="#" class="logo">
<span class="nav-item">DashBoard</span>
</a></li>
<li><a href="#">
<i class="fas fa-home"></i>
<span class="nav-item">Home</span>
</a></li>
<ul>
  <li class="dropdown">
    <a href="#">
      <i class="fas fa-user"></i>
      <span class="dropbtn">Citizen</span>
      <div class="dropdown-content">
        <a href="citizen.php" target="_blank">All Citizen</a>
        <a href="#">Notification</a>
      </div>
    </a>
  </li>

  <li class="dropdown">
    <a href="#">
      <i class="fas fa-user"></i>
      <span class="dropbtn">Village Leader</span>
      <div class="dropdown-content">
       <a href="submit_recommendation.php" target="_blank" onclick="toggleRecommendations()">Recommendation</a>
      </div>
    </a>
  </li>

  <li class="dropdown">
    <a href="#">
      <i class="fas fa-user"></i>
      <span class="dropbtn">Cell Leader</span>
      <div class="dropdown-content">
      <a href="approve.php" target="_blank" onclick="toggleApproveRecommendations()">Approve Recommendation</a>
      </div>
    </a>
  </li>

  <li class="dropdown">
    <a href="#">
      <i class="fas fa-user"></i>
      <span class="dropbtn">Sector Leader</span>
      <div class="dropdown-content">
        <a href="#" onclick="toggleApprovedRecommendations()">Approved Recommendation</a>
      </div>
    </a>
  </li>
</ul>

<li><a href="" class="logout">
  <a href="greet.html"target="blanck page"><i class ="fas fa-sign-out-alt"></i>
<span class="nav-item">Logout</span>
</a></i>
</ul>
</nav>
<section class="main">
<div class="main-top">
<h1>Project Analytics</h1>
<i class="fas fa-user-cog"></i>
</div>
<div class="main-residency">
<div class="card">
 <div class="analytics-container">
 <h3>Village</h3>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itrs";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT village, COUNT(*) AS num_people FROM biodata GROUP BY village";
$result = $conn->query($sql);

$villages = [];
$totalPeople = 0;

if ($result !== false && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $villages[$row['village']] = $row['num_people'];
        $totalPeople += $row['num_people'];
    }
}

$conn->close();
?>
    <div class="analytics-container">
       
       
            <div class="text">
                <h4>Village</h4>
                <h4>Number of People</h4>
                <h4>Percentage</h4>
            </div>
            <?php
            foreach ($villages as $village => $numPeople) {
                $percentage = ($numPeople / $totalPeople) * 100;
                echo "<div>";
                echo "<h4>$village</h4>";
                echo "<h4>$numPeople</h4>";
                echo "<h4>$percentage%</h4>";
                echo "</div>";
            }
            ?>
       
    </div>
</div>
</div>
<div class="card">
 <div class="analytics-container">
 <h3>cell</h3>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itrs";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT cell, COUNT(*) AS num_people FROM biodata GROUP BY cell";
$result = $conn->query($sql);

$cells = [];
$totalPeople = 0;

if ($result !== false && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $cells[$row['cell']] = $row['num_people'];
        $totalPeople += $row['num_people'];
    }
}

$conn->close();
?>
    <div class="analytics-container">
      <div class="text">
                <h4>Cell</h4>
                <h4>Number of People</h4>
                <h4>Percentage</h4>
            </div>
            <?php
            foreach ($cells as $cell => $numPeople) {
                $percentage = ($numPeople / $totalPeople) * 100;
                echo "<div>";
                echo "<h4>$cell</h4>";
                echo "<h4>$numPeople</h4>";
                echo "<h4>$percentage%</h4>";
                echo "</div>";
            }
            ?>
       
    </div>
</div>
</div>
<div class="card">
<i class="fas fab-sector"></i>
<h3>sector</h3>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itrs";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT sector, COUNT(*) AS num_people FROM biodata GROUP BY sector";
$result = $conn->query($sql);

$sector = [];
$totalPeople = 0;

if ($result !== false && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $sectors[$row['sector']] = $row['num_people'];
        $totalPeople += $row['num_people'];
    }
}

$conn->close();
?>
  <div class="analytics-container">
      <div class="text">
                <h4>Sector</h4>
                <h4>Number of People</h4>
                <h4>Percentage</h4>
            </div>
            <?php
            foreach ($sectors as $sector=> $numPeople) {
                $percentage = ($numPeople / $totalPeople) * 100;
                echo "<div>";
                echo "<h4>$sector</h4>";
                echo "<h4>$numPeople</h4>";
                echo "<h4>$percentage%</h4>";
                echo "</div>";
            }
            ?>
       
    </div>
</div>
<div class="card">
 <div class="analytics-container">
 <h3>District</h3>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itrs";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT district, COUNT(*) AS num_people FROM biodata GROUP BY district";
$result = $conn->query($sql);

$districts = [];
$totalPeople = 0;

if ($result !== false && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $districts[$row['district']] = $row['num_people'];
        $totalPeople += $row['num_people'];
    }
}

$conn->close();
?>
    <div class="analytics-container">
   <div class="text">
                <h4>District</h4>
                <h4>Number of People</h4>
                <h4>Percentage</h4>
            </div>
            <?php
            foreach ($districts as $district => $numPeople) {
                $percentage = ($numPeople / $totalPeople) * 100;
                echo "<div>";
                echo "<h4>$district</h4>";
                echo "<h4>$numPeople</h4>";
                echo "<h4>$percentage%</h4>";
                echo "</div>";
            }
            ?>
      
    </div>
</div>
</div></div>
<section class="main-course">
<h1>POPULATION</h1>
    <div class="course-box">
        <div class="dropdown" id="villageLeaderDropdown">
            <li><a href="#">
                <i class="fas fa-user"></i>
                <span class="dropbtn">Village Leader</span>
                <div class="dropdown-content">
                    <a href="#" onclick="toggleRecommendations()">Recommendation</a>
                </div>
            </li>
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
                echo "<table border='1'>";
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

if (isset($_POST['id']) && isset($_POST['approve'])) {
    $id = $_POST['id'];
    $approve = $_POST['approve'];
    $sql = "UPDATE recommendations SET approve_cell_leader = '$approve' WHERE id = $id";
    $result = $conn->query($sql);
if (isset($yourArray['Cell_Leader_id'])) {
    $cellLeaderId = $yourArray['Cell_Leader_id'];
    
} else {
    
}
    if ($result === false) {
        die("Error: " . $conn->error);
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
		 echo "<td>" . (isset($row["cell_leader_id"]) ? $row["cell_leader_id"] : "") . "</td>";
        echo "<td>";
        echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
        echo "<select name='approve_cell_leader'>";
        echo "<option value=''>Select</option>";
        echo "<option value='Approve Cell Leader'>Approved</option>";
        echo "<option value='Rejected'>Rejected</option>";
        echo "</select>";
        echo "</form>";
    }

    echo "</table>";
} else {
    echo "No recommendations found in approve_recommendations.";
}

$conn->close();
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
    </div>

    <div class="course-box">
        <div class="dropdown" id="sectorLeaderDropdown">
            <li><a href="#">
                <i class="fas fa-user"></i>
                <span class="dropbtn">Sector Leader</span>
                <div class="dropdown-content">
                    <a href="#" onclick="toggleApprovedRecommendations()">Approved Recommendation</a>
                </div>
            </li>
        </div>

        <div class="course" id="approved_recommendationContent">
            <h2>Approved Recommendations from Sector Leaders</h2>

            <?php
           
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM approved_recommendations";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table border='3'>";
                echo "<tr><th>ID</th><th>Village Leader ID</th><th>Recommendation Text</th><th>Recommendation Date</th><th>Cell Leader ID</th><th>Sector Leader ID</th><th>Approve Cell Leader</th><th>Approved Sector Leader ID</th></tr>";

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["village_leader_id"] . "</td>";
   
                    echo "<td>" . $row["recommendation_text"] . "</td>";
                    echo "<td>" . $row["recommendation_date"] . "</td>";
					 echo "<td>" . $row["Cell_leader_id"] . "</td>";
                    echo "<td>" . $row["Sector_leader_id"] . "</td>";
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

        <script>
            function toggleApprovedRecommendations() {
                var approved_recommendationContent = document.getElementById("approved_recommendationContent");

                if (approved_recommendationContent.style.display === "none") {
                    approved_recommendationContent.style.display = "block";
                } else {
                    approved_recommendationContent.style.display = "none";
                }
            }
        </script>
    </div>
</body>
</html>