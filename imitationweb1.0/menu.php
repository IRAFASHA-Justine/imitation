<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
 body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        .xxx {
            background-color: black;
            height: 60px;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .xxx a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 16px;
            display: flex;
            align-items: center;
        }

        .xxx a input[type="button"] {
            background: #4CAF50;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .xxx a input[type="text"] {
            padding: 8px;
            border: none;
            border-radius: 5px;
            margin-right: 10px;
        }

        /* Add your own styles as needed */
  body{background:#29765A;}
    /* Reset default list styles */
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }
    
    /* Style menu items */
    li {
      display: inline-block;
      margin-right: 10px;
    }
    
    /* Style links */
	 li a {
      display: block;
      padding: 10px;
      text-decoration: none;
      background-color: #f2f2f2;
      color: #333;
    }
    
    /* Change link styles on hover */
    li a:hover {
      background-color: #333;
      color: #f2f2f2;
    }
	.ss{
	background:grey;
	margin:10px;
	padding:10px;
	height:55s0px;
	width:20%;
	margin-top:100px;
	}
  </style>
</head>
<body>
 <div class="xxx">
        <a href="index.php"><i class="fas fa-home"></i> Home</a>
        <a href="about.php" target="_blank"><i class="fas fa-info-circle"></i> About Us</a>
        <a href="update.php" target="_blank"><i class="fas fa-user-edit"></i> Update</a>
        <a href="menu.php" target="_blank"><i class="fas fa-bars"></i> Menu</a>
        <a href="userlogin.php" target="_blank"><i class="fas fa-sign-in-alt"></i> Login</a>
        <a href="usersignup.php" target="_blank"><i class="fas fa-user-plus"></i> Register</a>
        <a href="#Search"><i class="fas fa-search"></i> Search</a>
        <a href="help.php"><i class="fas fa-question-circle"></i> Help</a>
    </div>
<center>
<div class="ss">
  <ul>
	   <li><a href="question.php" target="blanck page" href="#">Ask Question</a></li><br><br><br>
	    <li><a href="help.php" target="blanck page" href="#">help</a></li><br><br><br>
		 <li><a href="feedback.php"target="blanck page" href="#">Gives feedback</a></li><br><br><br>
		 <li><a href="post.php"target="blanck page"  href="#">post</a></li><br><br><br>
    <li><a href="confirm.php"target="blanck page" href="#">confirm message</a></li><br><br><br>
    <li><a href="service.php"target="blanck page" href="#">Services</a></li><br><br><br>
	  <li><a href="#">residency placelisting</a></li><br><br><br>
	  <a href="index.php""#Back"target="blanck page">Back</a>
  </ul></div>
  </center>
</body>
</html>

