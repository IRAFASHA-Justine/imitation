<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
.uuu{
margin-top:100px;}
  body {
  width:70%; 
  height:30%;
  color:white;
}
.www {
background-color:#000348;
background-text:white;
margin-top:50Px;
width:90%;
padding:100px;
 position: absolute;
    left: 0;
	margin-right:flex;
	}
    </style>
    <title>Landing Page</title>
</head>
<body>

<nav>
    <a href="help.php"><i class="fas fa-question-circle"></i> Help</a>
    <a href="about.php"><i class="fas fa-info-circle"></i> About Us</a>
    <a href="usersignup.php"><i class="fas fa-user-plus"></i> Register</a>
    <a href="userlogin.php"><i class="fas fa-sign-in-alt"></i> Login</a>
    <div class="search-bar">
        <input type="text" placeholder="Search...">
        <button><i class="fas fa-search"></i></button>
    </div>
</nav>

<section>
    <body background="image/kop.jpg"> 
<h1 id="demo"></h1></div>
<script>
const hour = new Date().getHours(); 
let greeting;
function myFunction() {
  console.log("Timeout completed!");
}
if (hour>=1 && hour<12) {
  greeting = "Good morning,welcome to our online Imitation Registration and Tracing(IRT)!";
} else if(hour>=12 && hour<18){
  greeting = "Good afternoon,welcome to our online Imitation Registration and Tracing(IRT)!";
}
else{
    greeting="Good evening,welcome to our online Imitation Registration and Tracing(IRT)!";
}
document.getElementById("demo").innerHTML = greeting;
var timeoutId = setTimeout(function() {
  console.log('Timeout completed!');
}, 2000);
</script>
<div class ="uuu">
<h1>IMITATION OF REGISTRATION AND TRACING(IRT)</h1><br>
<h2>To Provide Information When It Comes To Safety</h2>
</div>
<div class="www">
	<h3>Social & Affordable Housing Development</h3>
	The government has a plan to increase the way to find out people's information using the fact that they know the identity of the people and where they live,so knowing them will help them to increase security in the country.  
	</div><br><br>
    </div>
	
</section>

</body>
</html>
