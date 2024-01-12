<!DOCTYPE html>
<html>
<head>
</head>
<style>
  body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: #333;
            padding: 15px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 16px;
        }

        nav a i {
            margin-right: 5px;
        }

        section {
            margin-top: 60px;
            padding: 20px;
        }

        .search-bar {
            display: flex;
            align-items: center;
        }

        .search-bar input[type="text"] {
            padding: 8px;
            border: none;
            border-radius: 5px;
        }

        .search-bar button {
            background: #4CAF50;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            margin-left: 10px;
            cursor: pointer;
        }
body{
background:gray;
}
/* CSS code for the project help section */
.project-help-section h2 {
  font-size: 24px;
  color: #333;
  margin-bottom: 10px;
  width:100%;
  margin-bottom:10px;
  
}
.section {
  display: flex;
  align-items: center;
  padding-bottom:70px;
}
.icon {
  width: 30px;
  height: 30px;
  background-color:none; /* Placeholder color */
  margin-right: 10px;
}
.qaa{
background:grey;
width:300px;
height:100px;
margin-left:500px;
margin-top:90px;
}
#IRT-icon {
  /* Add the HOME icon image or use a CSS background property */
}

#account-icon {
  /* Add the account icon image or use a CSS background property */
  }

#privacy-icon {
  /* Add the privacy icon image or use a CSS background property */
}

#safety-icon {
  /* Add the safety icon image or use a CSS background property */
}

#policies-icon {
  /* Add the policies icon image or use a CSS background property */
}

.selection-icon {
  /* Add the selection icon image or use a CSS background property */
}

.name {
  font-size: 16px;
}
.search-bar {
  display: flex;
  align-items: center;
  width: 300px;
  height: 40px;
  border: 1px solid #ccc;
  border-radius: 20px;
  overflow: hidden;
}

input[type="text"] {
  flex: 1;
  height: 100px;
  border: none;
  padding: 0 10px;
  font-size: 14px;
}

button[type="submit"] {
  height: 100px;
  padding: 0 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 0 20px 20px 0;
  cursor: pointer;
  font-size: 14px;
}

button[type="submit"]:hover {
  background-color: #0069d9;
}
.container {
  display: flex;
  justify-content: space-between;
  margin-left:0px;
}

.section {
  display: flex;
  align-items: center;
  width: calc(33.33% - 20px);
  padding: 40px;
  border: 0px solid #ccc;
  border-radius: 5px;
}


.content {
  flex: 1;
  width:100px;
  height:190px;
}

h2 {
  margin: 1;
}
.cont{
background:gray;
margin-left:10px;
height:50%;
}
.cont {
  display: flex;
  justify-content: space-between;
}

.section {
  width: calc(33.33% - 20px);
  padding: 20px;
}

.card {
  display: flex;
  align-items: center;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 5px;
  height: 100%;
}
.content {
  flex: 1;
  padding:50px;
}

h2 {
  margin: 0;
}
.conta{
height:480px;width:100%;
background-color:green;
background-text:white;
font-size:25px;}
.message {
  display: none;
}
</style>
<body>

<nav>
    <a href="help.html"><i class="fas fa-question-circle"></i> Help</a>
    <a href="about.html"><i class="fas fa-info-circle"></i> About Us</a>
    <a href="usersignup.php"><i class="fas fa-user-plus"></i> Register</a>
    <a href="userlog.php"><i class="fas fa-sign-in-alt"></i> Login</a>
    <div class="search-bar">
        <input type="text" placeholder="Search...">
        <button><i class="fas fa-search"></i></button>
    </div>
</nav>

<div class="project-help-section">
<div class="qaa">
 <center> <h2>What can we help you?</h2>
 <div class="search-bar">
  <input type="text" placeholder="Search">
  <button type="submit">Search</button>
</div>
<h3>popular topics</h3>
<div class="container">
<div class="cont">
  <div class="section">
    <span class="icon" id="account-icon"></span>
    <div class="content">
      <h2>Account Settings</h2>
      <!-- Content for Account Settings -->
	  <h5>You can manage settings for your IRT account at any time. Update your contact information, adjust your IRT settings, change your username.</h5>
    </div>
  </div>

  <div class="section">
    <span class="icon" id="login-icon"></span>
    <div class="content">
      <h2>Login and Password</h2>
      <!-- Content for Login and Password -->
	  <h5>If you know your current password, you can change it,If you're having trouble changing your password, learn how to get login and password help.</h5>
    </div>
  </div>
   <div class="section">
     <span class="icon" id="privacy-icon"></span>
      <div class="content">
        <h2>Privacy and Security</h2>
        <!-- Content for Privacy and Security -->
		<h5>You can use the Privacy Checkup to review and adjust your settings to make sure you're sharing with who you want.</h5> 
  </div>
 </center>
 </div>
<div class="section">
  <span class="icon" id="IRT-icon"></span>
  <span class="name">Using IRT</span>
</div>

<div class="section">
  <span class="icon" id="account-icon"></span>
  <span class="name">Managing Your Account</span>
</div>

<div class="section">
  <span class="icon" id="privacy-icon"></span>
  <span class="name">Privacy</span>
</div>

<div class="section">
  <span class="icon" id="safety-icon"></span>
  <span class="name">Safety & Security</span>
</div>

<div class="section">
 <span class="icon" id="policies-icon"></span>
  <span class="name">Policies & Reporting</span>
</div>
  </div>
 <div class="conta">
    <h1>Contact</h1>
    <h3>Email</h3>
    <a href="mailto:info@imitationregistration.com">info@imitationregistration.com</a>
    <h3>Phone</h3>
    <a href="tel:+250789410107">+250789410107</a>
    <h3>Website</h3>
    <a href="http://www.imitationregistration.com" target="_blank">www.imitationregistration.com</a>
    <a href="index.php#Back" target="_blank">Back</a>
</div>

</body> 
</html>