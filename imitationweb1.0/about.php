<!DOCTYPE HTML>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: #03002e;
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

        .horizontal-text {
            writing-mode: horizontal-tb;
			margin-top:80px;
        }

        .container {
            margin: 20px 40px;
            padding: 20px;
            background-color: #90E3CE;
            color: #03002e;
            font-size: 17px;
            border-radius: 20px;
            opacity: 0.9;
        }

        h1, h3 {
            color: #03002e;
        }

        a {
            color: #4CAF50;
            text-decoration: none;
        }

        a:hover {
            color: #03002e;
        }

        .container a {
            color: #4CAF50;
        }

        .container a:hover {
            color: #03002e;
        }

        center {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="xxx">
        <a href="index.php"target="blank"><i class="fas fa-home"></i> Home</a>
        <a href="about.php" target="blank"><i class="fas fa-info-circle"></i> About Us</a>
        <a href="update.php" target="blank"><i class="fas fa-user-edit"></i> Update</a>
        <a href="menu.php" target="_blank"><i class="fas fa-bars"></i> Menu</a>
        <a href="userlogin" target="blank"><i class="fas fa-sign-in-alt"></i> Login</a>
        <a href="usersignup" target="blank"><i class="fas fa-user-plus"></i> Register</a>
        <a href="#Search"><i class="fas fa-search"></i> Search</a>
        <a href="help.php"><i class="fas fa-question-circle"></i> Help</a>
    </div>
    <div class="container">
        <table border="0" width="100%" height="100%">
            <tr>
                <td>
                    <div class="horizontal-text">
                    <dl>
                        <h1>Welcome to Imitation Registration and Tracing!</h1>
                        <p>We are an innovative online service dedicated to assisting governments in efficiently 
                        collecting and tracking information about individuals' residency when they move
                        from one place to another within a country. Our primary goal is to help governments
                        maintain accurate and up-to-date records of the population to facilitate effective resource
                        allocation, public services, and policy planning.</p>
                        
                        <h3>Why Choose Imitation Registration and Tracing?</h3>
                        <ul>
                            <li><strong>Data Security:</strong> We prioritize the security and privacy of individuals' data. Our system is designed with robust security measures to protect sensitive information and ensure compliance with relevant data protection regulations.</li>
                            <li><strong>Efficiency:</strong> Our advanced system provides a seamless and user-friendly platform for individuals to register their residency information and for government authorities to access and update this information as needed.</li>
                            <li><strong>Insights for Decision Making:</strong> By tracking individuals' movements within the country, we provide valuable insights into population dynamics and migration patterns, assisting governments in making informed decisions and implementing effective policies.</li>
                            <li><strong>Supporting Government Initiatives:</strong> We play a crucial role in supporting social and affordable housing development initiatives by providing accurate data on residents, allowing authorities to track and monitor activities, identify potential threats, and ensure the safety of citizens.</li>
                        </ul>
                        
                        <h3>Our Mission</h3>
                        <p>At Imitation Registration and Tracing, our mission is to contribute to the enhancement of national security, effective governance, and the overall well-being of the population by providing reliable and up-to-date residency information. We believe that accurate data is the foundation for informed decision-making and successful policy implementation.</p>

                        <h3>How It Works</h3>
                        <p>Our user-friendly interface allows individuals to easily register their residency information, including start and end dates, addresses, and other relevant details. Government authorities, as internal users, have authorized access to update and manage residency records, ensuring secure and controlled information sharing.</p>
                        
                       
                    </dl>
                </div>
            </td>
        </tr>
    </table>
    </div>
    <div class="container">
        <h1>Contact</h1>
        <h3>Email</h3>
        <a href="mailto:info@imitationregistration.com"><i class="fas fa-envelope"></i> info@imitationregistration.com</a>
        <h3>Phone</h3>
        <a href="tel:+250789410107"><i class="fas fa-phone"></i> +250789410107</a>
        <h3>Website</h3>
        <a href="http://www.imitationregistration.com"><i class="fas fa-globe"></i> www.imitationregistration.com</a>
        <center>
            <a href="index.php" target="_blank"><i class="fas fa-arrow-left"></i> Back</a>
        </center>
    </div>
</body>
</html>
