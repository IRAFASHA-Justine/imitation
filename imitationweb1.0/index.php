<!DOCTYPE HTML>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #03002e;
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

        .uuu {
            margin-top: 170px;
            text-align: center;
            color: white;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .card {
            margin: 10px;
        }

        .container2 {
            display: flex;
            flex-wrap: nowrap;
        }

        .container2 img {
            flex: 1;
            margin-right: 10px;
            height: 400px;
        }

        .www {
            background-color: #000348;
            margin-left: 40px;
            width: 90%;
            padding: 20px;
            text-align: justify;
            color: white;
        }

        .conta {
            text-align: center;
            margin-top: 20px;
            color: white;
        }

        .contact-info {
            margin: 10px 0;
        }

        .contact-info a {
            color: white;
            text-decoration: none;
        }

        .java {
            height: 40px;
            width: 35%;
            background-image: linear-gradient(rgb(33, 17, 17), rgb(255, 107, 107), rgb(129, 200, 244));
            color: whitesmoke;
            margin-left: 35%;
            text-align: center;
            border-radius: 12px;
            margin-top: 2%;
        }

        @keyframes timeout-animation {
            0% {
                opacity: 1;
            }
            50% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        #timeout-element {
            animation: timeout-animation 2s linear infinite;
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
        <a href="help.php" target="_blank"><i class="fas fa-question-circle"></i> Help</a>
        <a href="adminlog.php" target="_blank"><i class="fas fa-user-cog"></i> Admin</a>
    </div><section>
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
	</section>
    <div class="uuu">
        <h1>IMITATION OF REGISTRATION AND TRACING (IRT)</h1>
        <h2>To Provide Information When It Comes To Safety</h2>
    </div>
    <div class="container">
        <div class="card">
            <div class="container2">
                <img src="image/gabi.jpg" alt="gabi">
                <img src="image/ITR.jpg" alt="ITR">
                <img src="image/ganza.jpg" alt="ganza">
            </div>
        </div>
        <div class="card">
            <img src="image/kop.jpg" alt="kop">
        </div>
    </div>
    <div class="www">
        <h3>Social & Affordable Housing Development</h3>
        <p>
            The government is actively working on social and affordable housing development to ensure that everyone has access to safe and affordable housing. This initiative aims to provide housing options for individuals and families with low to moderate incomes. By addressing the housing needs of vulnerable populations, the government aims to improve living conditions and enhance social well-being.
        </p>
        <p>
            In addition to housing development, the government has implemented an imitation registration and tracing system. This system utilizes individuals' personal information and addresses to enhance security measures in the country. By having accurate data on residents, authorities can effectively track and monitor activities, identify potential threats, and ensure the safety of citizens.
        </p>
    </div>
    <div class="conta">
        <h1>Contact</h1>
        <div class="contact-info">
            <h3><i class="fas fa-envelope"></i> Email</h3>
            <a href="mailto:info@imitationregistration.com">info@imitationregistration.com</a>
        </div>
        <div class="contact-info">
            <h3><i class="fas fa-phone"></i> Phone</h3>
            <a href="tel:+250789410107">+250789410107</a>
        </div>
        <div class="contact-info">
            <h3><i class="fas fa-globe"></i> Website</h3>
            <a href="http://www.imitationregistration.com">www.imitationregistration.com</a>
        </div>
    </div>
</body>
</html>
