	<?php
	   include("gatekey.php"); 
	?>

<html>
  <head>
    <title>contact</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css"/>
  </head>
  <body>
  	<table width="100%" height="10">
	<tr><td><a href="index.php">Home</a></td><td><a href="services.php">Services</a></td><td><a href="products.html">Products</a></td><td><a href="contact.php">ContactUs</a></td><td><a href="login.php">Login</a></td></tr>
		   </table>
    <h1>Provide your information</h1>
	<table width="100%" border="1">
	<tr ><td width="50%">
	<p>
	<form method="GET" action="">
		<input type="text" name="regnumber" size="30" value="210292828" placeholder=" Regnumber goes here"/> <br/>
		<br/>  
		Select your category of Message <br/>
		<select name="feedback_title">
		   <option value="0">Please type of Feedback</option>
		   <option value="i">Information</option>
		   <option value="c">Complaint</option>
		   <option value="r">Request for support</option>
		   <option value="w">Wishes</option>
		   <option value="s">Supporting Ideas</option>
		   <option value="a">Any</option>
		
		</select>
		<br/>
		Feel free to share your concern.<br/>
		<textarea name="feedbacks" rows="5" cols="15"> 
		
		</textarea>
		<br/>
		<input type="submit" name="bika" value="Bika amakuru" size="20" />
		<input type="submit" name="bikura" value="Bikura amakuru" size="20" />
		
	</form>
	</td> 
	<td width="50%">
	<?php
	if(isset($_GET['bika'])){
	   $rg = $_GET['regnumber']; 
	   $feedbacktitle = $_GET['feedback_title'];
	   $content= $_GET['feedbacks']; 
	   
	   $query = "INSERT 
	             INTO 
				 user_feedbacks
				 (feed_id, user_id, feedback_title, 
				 feedbacks, timestamp, 
				 feedback_status) 
	             VALUES('','$rg', 
				 '$feedbacktitle', 
				 '$content','',1)";
	   $results = mysqli_query($con, $query);
	   if(!$results){
		   die("Not inserted".mysqli_error($con));
	   }
	      echo "Recorded successifully";
	   
	   //echo $rg."<br/>";
	   //echo $feedbacktitle."<br/>"; 
	  // echo $content."<br/>"; 
	   //echo $date = date("h:m:s D-M-Y");
	}else{
		 $s = "SELECT * FROM user_feedbacks";
		 $resul = mysqli_query($con, $s);
		 echo "<table border=1>
		        <tr>
				   <th>ID</th>
				   <th>USER</th>
				   <th>FEEDBACK-TITLE</th>
				   <th>FEEDBACK-CONTENT</th>
				   <th>STATUS</th>
				</tr>";
		 while($rss=mysqli_fetch_array($resul)){
			 echo "<tr><td>".$rss['feed_id']."</td><td>".$rss['user_id']." </td><td>";
			 
			 if($rss['feedback_title']=="i")
			     echo "Information";
		     elseif($rss['feedback_title']=="c"){
				 echo "Complaint";
			 }
			 elseif($rss['feedback_title']=="r"){
				 echo "Request for support";
			 }
			  elseif($rss['feedback_title']=="w"){
				 echo "Wishes";
			 }
		    elseif($rss['feedback_title']=="s"){
				 echo "Supporting Ideas";
			 }
		    else{
				echo "Any";
			}  
			 echo "</td><td>".$rss['feedbacks']."</td><td>";
			 if($rss['feedback_status'] == 1){
				 echo "<button style='color:red;'>Unread</button>";
			 }else{
				 echo "Viewed";
			 }
			 echo "</td></tr>";
		 }
		 echo "</table>";
	}
	?>
	</td></tr>
	</p>
  </body>
</html>