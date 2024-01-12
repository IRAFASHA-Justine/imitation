<html>
<head>
<style>
body{
Background:lightblue;
text-align:center;
}
.confirmation-box {
  display: none;
  align-items: center;
  background-color: grad; /* Background color for the confirmation box */
  color: white; /* Text color for the confirmation message */
  padding: 10px;
  border-radius: 5px;
  margin-bottom: 10px;
}

.icon {
  font-size: 20px;
  margin-right: 10px;
}

.registered .icon {
  color: #155724; /* Color for the checkmark icon */
}
.not-registered .icon {
  color: #721c24; /* Color for the cross icon */
}

.message {
  font-size: 14px;
}
.sis{
Background:blue;
padding-top:40px;
width:300px;
height:250px;
margin-left:270px;
margin-top:70px;
border-radius:60px;
}
</style>
<body>
<form id="registration-form">
<div class="sis">
  <!-- Add your registration form fields here -->
  <input type="text" id="name" placeholder="Name" required><br><br>
  <input type="email" id="email" placeholder="Email" required><br><br>
  <input type="password" id="password" placeholder="Password" required><br><br>
  <button type="submit">Login</button>
</form>
<div id="confirmation-box" class="confirmation-box"></div>
<a href="create account.html"target="blanck page"><input type ="button" value="checkRegistration">
</div>
<script>
function showConfirmation(isRegistered) {
  const confirmationBox = document.getElementById('confirmation-box');

  if (isRegistered) {
    confirmationBox.innerHTML = `
      <div class="icon">&#10004;</div>
      <div class="message">You are registered.</div>
    `;
    confirmationBox.classList.add('registered');
  } else {
    confirmationBox.innerHTML = `
      <div class="icon">&#10008;</div>
      <div class="message">Please fill out the registration form.</div>
    `;
    confirmationBox.classList.add('not-registered');
  }

  confirmationBox.style.display = 'flex';
}
function checkRegistration(event) {
  event.preventDefault(); // Prevent form submission

  // Assuming you have validation logic to check if the required fields are filled out
  const name = document.getElementById('name').value.trim();
  const email = document.getElementById('email').value.trim();
  const password = document.getElementById('password').value.trim();

  if (name !== '' && email !== '' && password !== '') {
    // Assuming you have registration logic that returns a boolean value indicating registration status
    const isPersonRegistered = true; // or false

    showConfirmation(isPersonRegistered);
  } else {
    showConfirmation(false);
  }
}
const registrationForm = document.getElementById('registration-form');
registrationForm.addEventListener('submit', checkRegistration);
</script>
  <a href="menu.php""#Back"target="blanck page">Back</a>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF=8"/>
    <title>Dashboard </title>
    <link rel="stylesheet" href="style.css"/>
    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<style>
    /* Your existing styles here */

    .table {
        height: 100px; /* Fix the syntax here */
        width: 100px;
    }
</style>
<body>
<div class="aga">
    <body background="dddd.jpeg">

    <div class="container">
        <nav>
            <ul>
                <!-- Your existing navigation items here -->
            </ul>
        </nav>
        <section class="main">
            <div class="main-top">
                <h1>Project Analytics</h1>
                <i class="fas fa-user-cog"></i>
            </div>
            <div class="main-residency">
                <!-- Your existing cards here -->
            </div>
            <section class="main-course">
                <h1>POPULATION</h1>
                <div class="course-box">
                    <div class="dropdown" id="villageLeaderDropdown">
                        <!-- Your existing dropdown code here -->
                    </div>

                    <div class="course" id="recommendationContent">
                        <h2>Recommendations from Village Leaders</h2>

                        <table border="1">
                            <tr>
                                <th>ID</th>
                                <th>Village Leader ID</th>
                                <th>Recommendation Text</th>
                                <th>Recommendation Date</th>
                                <th>Actions</th>
                            </tr>
                            <?php
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["id"] . "</td>";
                                echo "<td>" . $row["village_leader_id"] . "</td>";
                                echo "<td>" . $row["recommendation_text"] . "</td>";
                                echo "<td>" . $row["recommendation_date"] . "</td>";
                                echo "<td>";
                                // Display approve button only if the recommendation is not approved
                                if (!$row["is_approved"]) {
                                    echo "<form method='POST' action=''>";
                                    echo "<input type='hidden' name='recommendation_id' value='" . $row["id"] . "'>";
                                    echo "<input type='submit' name='approve' value='Approve'>";
                                    echo "</form>";
                                }
                                echo "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </section>
        </section>
    </div>
</body>
</html>
