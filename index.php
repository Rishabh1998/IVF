<?php

$MERCHANT_KEY = "tDmo8OaF";
$SALT = "F5Rby9cEFk";
// Merchant Key and Salt as provided by Payu.

$PAYU_BASE_URL = "https://sandboxsecure.payu.in";		// For Sandbox Mode
//$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>
<!DOCTYPE html>
<html>
    <head>
	 <link rel="shortcut icon" href="img/logo.png" />
        <title>International Vaish Federation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
		<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/style.css" type="text/css">
		<script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
	</head>
	<body data-spy="scroll" data-target=".navbar" data-offset="50" onload="submitPayuForm()">
	 <div>
           <?php
            require 'header.php';
           ?>
		   
		   <div id="home">
		  <?php
		  require 'motive.php';
            require 'home.php';
           ?>
		   </div>

		<div id="about-us">		   
		<?php
            require 'about.php';
           ?>
		   <br><br>
		</div>
			<div id="form" class="container-fluid">		   
		<?php
            require 'form.php';
           ?>
		</div>
		
		<div id="gallery">
		<?php
            require 'gallery.php';
           ?>	
		   </div>
		 
		&nbsp<br>&nbsp<br>&nbsp<br>
		   </div>
	
	<footer class="footer"> 
               <div class="container">
               <center>
			   
                   <p>Copyright &copy All Rights Reserved. Developed By <a href="https://www.theninequeens.com/">TheNineQueens.</a> </p>
                   
               </center>
               </div>
           </footer> 
		   </body>
	
</html>