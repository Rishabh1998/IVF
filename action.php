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
		   <h2>
Thank You <?php echo $_POST["firstname"]; ?> for registering with us.</h2>
 <a href = "http://ivfuttarakhand.com/">Go back.</a>
<?php 
         $to = "ivfukddoon@gmail.com";
         $subject = "IVF Registration.";
         
		 $target_dir = "images/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["file"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
		 $_SESSION["name"] = $_POST["firstname"];
		 $_SESSION["mobile"] = $_POST["phone"];
         $message = "<h3>New Registration</h3>";
         $message .= "<h4>Details</h4><table><tr>";
		 $message .= "<img src='http://ivfuttarakhand.com/images/". rawurlencode(basename($_FILES["file"]["name"]))."' style='width:200px;height:auto;' />";
         $message .= "<tr><b><td> युवक/युवती का नामः </b></td><td> " . $_POST["firstname"] . "</td></tr>";
		 $message .=  "<tr><b><td> गौत्र : </b></td><td>" . $_POST["gotr"]. "</td></tr>";
		 $message .=  "<tr><b><td>सामान्य : </b></td><td>" . $_POST["optradio"]. "</td></tr>";
		 $message .=  "  <tr><b><td> जन्मतिथि : </b></td><td>" . $_POST["day"] . " " . $_POST["month"] . " " . $_POST["year"]. "</td></tr>";
		 $message .=  "<tr><b><td>जन्मस्थान  : </b></td><td>" . $_POST["placeofbirth"]. "</td></tr>";
		 $message .=  "<tr><b><td>आयुः : </b></td><td>" . $_POST["age"]. "</td></tr>";
		 $message .=  "<tr><b><td>कद (से.मी.)ः : </b></td><td>" . $_POST["height"]. "</td></tr>";
		 $message .=  "<tr><b><td>वजन : </b></td><td>" . $_POST["weight"]. "</td></tr>";
		 $message .=  "<tr><b><td>कार्यः : </b></td><td>" . $_POST["work"] . "</td></tr>";
		 $message .=  "<tr><b><td>शैक्षिक योग्यताः : </b></td><td>" . $_POST["edu_qual"]. "</td></tr>";
		 $message .=  "<tr><b><td>रंगः : </b></td><td>" . $_POST["facecolor"]. "</td></tr>";
		 $message .=  "<tr><b><td>युवक/युवती के प्रतिष्ठान/कार्यालय का नाम : </b></td><td>" . $_POST["company_name"]. "</td></tr>";
		 $message .=  "<tr><b><td>कार्य स्थलः : </b></td><td>" . $_POST["company_place"]. "</td></tr>";
		 $message .=  "<tr><b><td>वार्षिक आयः : </b></td><td>" . $_POST["salary"]. "</td></tr>";
		 $message .=  "<tr><b><td>पिता/संरक्षक का नाम व पूरा पताः : </b></td><td>" . $_POST["address"]. "</td></tr>";
		 $message .=  "<tr><b><td>संपर्क मोबाईल नं. : </b></td><td>" . $_POST["phone"]. "</td></tr>";
		 $message .=  "<tr><b><td>व्हट्सएप्पः : </b></td><td>" . $_POST["whatsapp"]. "</td></tr>";
		 $message .=  "<tr><b><td>ई-मेलः : </b></td><td>" . $_POST["email"]. "</td></tr>";
		 $message .=  "<tr><b><td>पिता/संरक्षक कात्रयवसाय/नौकरीः : </b></td><td>" . $_POST["father_work"]. "</td></tr>";
		 $message .=  "<tr><b><td>प्रतिष्ठान का नामः : </b></td><td>" . $_POST["father_company"]. "</td></tr>";
		 $message .=  "<tr><b><td>कार्य स्थलः </b></td><td>" . $_POST["father_company_place"]. "</td></tr>";
		 $message .=  "<tr><b><td>परिवार की वार्षिक आयः : </b></td><td>" . $_POST["family_salary"]. "</td></tr>";
		 
		 $message .=  "<tr><b><td>युवक/युवती के बारे में अन्य जानकारी : </b></td><td>" . $_POST["info"]. "</td></tr>";
		 $message .=  "<tr><b><td>प्रस्तावक का अन्य कथन : </b></td><td>" . $_POST["comments"]. "</td></tr>";
		 $message .=  "<tr><b><td>प्रस्तावक : </b></td><td>" . $_POST["proposed"]. "</td></tr>";
		 $message .=  "<tr><b><td>मोबाईल न. :</b></td><td> " . $_POST["proposed_mobile"]. "</td></tr></table>";
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
         header("location: https://www.payumoney.com/paybypayumoney/#/7D71A6A1B7A61FB5DD0BF587D19690AD"); 
         header("Location:https://www.payumoney.com/paybypayumoney/#/7D71A6A1B7A61FB5DD0BF587D19690AD");
         echo("<meta http-equiv='Refresh' content='0; URL=https://www.payumoney.com/paybypayumoney/#/7D71A6A1B7A61FB5DD0BF587D19690AD'>");
         echo "<script>location='https://www.payumoney.com/paybypayumoney/#/7D71A6A1B7A61FB5DD0BF587D19690AD'</script>";
      ?>
	  
</body>
</html>


