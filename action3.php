<?php
// Start the session
session_start();
?>
<html>
<head>
<script id="bolt" src="https://sboxcheckout-static.citruspay.com/bolt/run/bolt.min.js" bolt-
color="<color-code>" bolt-logo="<image path>"></script>
</script>
<style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 50%;
}

th, td {
  padding: 5px;
}
</style>
<link rel="shortcut icon" href="images/icon.png" />
        <title>International Vaish Federation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
		<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
	
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/carousel.js"></script>
		<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body class="body-padding">
<?php
$nav = 0;
            require 'header.php';
           ?>
		   </td></tr></td></tr></td></tr></td></tr>
		   <h2><br><br><br>
Thank You <?php echo $_POST["firstname"]; ?> for registering with us.</h2>
 <a href = "http://ivfuttarakhand.com/">Go back.</a>
<?php 
         $to = "ivfukddoon@gmail.com";
         $subject = "IVF Directory Registration.";
         
         $message = "<h3>New Directory Registration</h3>";
         $message .= "<h4>Details</h4><table><tr>";
         $message .= "<tr><b><td>नामः </b></td><td> " . $_POST["firstname"] . "</td></tr>";
		 $message .=  "<tr><b><td> गौत्र : </b></td><td>" . $_POST["gotr"]. "</td></tr>";
		 $message .=  "<tr><b><td>पति/पत्नी का नाम  : </b></td><td>" . $_POST["father"]. "</td></tr>";
		 $message .=  "  <tr><b><td> जन्मतिथि : </b></td><td>" . $_POST["day"] . " " . $_POST["month"] . " " . $_POST["year"]. "</td></tr>";
		 $message .=  "<tr><b><td>पता : </b></td><td>" . $_POST["address"]. "</td></tr>";
		 $message .=  "<tr><b><td>मोबाइलः : </b></td><td>" . $_POST["mobile"]. "</td></tr>";
		 $message .=  "<tr><b><td>व्यवसाय: </b></td><td>" . $_POST["profession"]. "</td></tr>";
		 $message .= "<br>Regards, International Vaish Federation </td></tr>";
		 
		 
         $header = "From:ivfukddoon@gmail.com \r\n";
         $header .= "nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";
        
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Registration was successful." ;
		    
         }else {
            echo "Registration failed for some reason.";
		
			echo "";
         }
        
      ?>
	  
</body>
</html>


