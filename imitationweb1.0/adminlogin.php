<!DOCTYPE html>
<html>
<head>
  <title>Admin Landing Page</title>
  <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<style>
/* Reset default styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Set a background color */
body {
  background-color: #f1f1f1;
}

/* Center the admin content */
.admin-content {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}
/* Style the admin container */
.admin-container {
  max-width: 600px;
  padding: 40px;
  background-color: blue;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
}

/* Style the admin heading */
.admin-heading {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
  text-align: center;
}

/* Style the admin form */
.admin-form {
  display: flex;
  flex-direction: column;
}

.admin-form label {
  font-weight: bold;
  margin-bottom: 5px;
}

.admin-form input[type="text"],
.admin-form input[type="password"] {
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

.admin-form input[type="submit"] {
  padding: 10px;
  background-color: #4CAF50;
 color: white;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

.admin-form input[type="submit"]:hover {
  background-color: #45a049;
}

/* Style the admin footer */
.admin-footer {
  margin-top: 20px;
  text-align: center;
  font-size: 14px;
  color: #888;
}
.admin-footer a {
  color: #888;
  text-decoration: none;
}

.admin-footer a:hover {
  color: #555;
}
</style>
<body background="pppp.jpeg">
  <div class="admin-content">
    <div class="admin-container">
      <h1 class="admin-heading">Admin Login</h1>
      <form class="admin-form">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Enter your username">

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password">
  <a href="dash.html"target="blanck page"><input type="submit" value="Login">
      </form>
      <div class="admin-footer">
      
      </div>
    </div>
  </div>
</body>
</html>