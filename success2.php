<?php
// Start the session
session_start();

 if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
        /* 
           Up to you which header to send, some prefer 404 even if 
           the files does exist for security
        */
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );

        /* choose the appropriate page to redirect users */
        die( header( 'location: /error.php' ) );

    }
?>
<!DOCTYPE html>
<html>
    <head>
	 <link rel="shortcut icon" href="img/logo.png" />
        <title>Payment Success</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
		<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/style.css" type="text/css">
	</head>
	<body>
	<?php
$to = "ivfukddoon@gmail.com";
         $subject = "Payment Success.";
		 $message = "<h3>Payment Success</h3>";
		 $message .= $_SESSION["name"] . " has paid a sum of Rs. 100 for Subscription form. <br> Contact No. - ". $_SESSION["mobile"];
		 
		 $header = "From:ivfukddoon@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
		 $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Payment was successful." ;
	
         }else {
            echo "Something went wrong.";
         }
		 session_unset(); 

// destroy the session 
session_destroy(); 
		 ?>

			   <div class="text-xs-center">
  <h3 class="display-3">Thank You!</h3>
  <p class="lead"><strong>Your Response have been submitted.</strong></p>
  <hr>
  
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="http://ivfuttarakhand.com/" role="button">Continue to homepage</a>
  </p>
</div>	


</body>
</html>