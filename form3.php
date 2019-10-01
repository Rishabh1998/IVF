				<br><br><br><br>
				
				<center>
				<h2><b>निषुल्क फार्म</b></h2>
						<h4><b> उत्तरांचल प्रदेश अग्रवाल महासभा, महानगर देहरादून<br><br> 
						 की निर्देशिका (Directory) हेतु विवरण प्रपत्र। </b></h4>
				</center>
				<div class="col-sm-4 col-sm-offset-4">
					<div class="row">	
					
                   
						<br><br>
						<?php if($formError) { ?>
	
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?>
	
                       <!-- <form  action="<?php #echo $action; ?>" method="post" name="payuForm"> -->
					   <form  action="action3.php" method="post" enctype="multipart/form-data">
						
                            <div class="form-group">
							
                                <input type="text" class="form-control" name="firstname" placeholder="नाम" required="true" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>">
                            </div>
														
							<div class="form-group">
								<input type="text" class="form-control" name="father" placeholder="पिता/पति का नाम">
							</div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="gotr" placeholder="गौत्र">
                            </div> 
                          
                           <br>
                          
						  
						  
							<center><label><b>जन्मतिथिः </b>	</label></center>
							
							<div class="form-group">
							
							<div class="col-md-4">
                                <input type="number" class="form-control" name="day" placeholder="Day" required="true">
								</div>
								<div class="col-md-4">
								<select class="form-control" name="month" required="true">
								<option value="January">January</option>
								<option value="February">February</option>
								<option value="March">March</option>
								<option value="April">April</option>
								<option value="May">May</option>
								<option value="June">June</option>
								<option value="July">July</option>
								<option value="August">August</option>
								<option value="September">September</option>
								<option value="October">October</option>
								<option value="November">November</option>
								<option value="December">December</option>
								</select>
								</div>
								<div class="col-md-4">
								<input type="number" class="form-control" name="year" placeholder="Year" required="true">
								
                            </div><br><br><br>
							

<div class="form-group">
<input type="text" class="form-control" name="address" placeholder="पता ">
</div>
<div class="form-group">
<input type="text" class="form-control " name="mobile" placeholder="मोबाइलः ">
</div>
<div class="form-group">
<input type="text" class="form-control " name="profession" placeholder="व्यवसाय ">
</div>

<div class="form-group">
            <input type="submit" value="Submit" class = "btn btn-success" name="submit" /></div>
          <?php  ?>
                            </div>
							
			
							
							
                        </form>
						</div>
						 </div>
						 </div>
						 <div class="container-fluid">
						 <div class="danger container-fluid">
                   
					<h3><b>
					 </b>	
					  1.	कृपया एक व्यक्ति एक ही फार्म ही भरे।<br>
2.	उक्त प्रपत्र भरकर कृपया महाराजा अग्रसैन हॉस्पिटल 101, चमन विहार, निरंजनपुर, देहरादून के कार्यालय में जमा कराने का कश्ट करें।<br><br>
<p align="center">
<b> -संपर्क सूत्र-</b><br><br>
सोहन लाल गुप्ता  <br> 9897227034<br>  <br>  रामगोपाल <br> 9837042187 <br> <br> दीपक सिंघल  <br> 9412059573<br> <br>           

रमेष कुमार गोयल <br>  9811127378  <br>   <br>  मुकेष कुमार गोयल  <br> 7599107787 <br>  <br> भारत भूशण <br> 9837572077<br><br> 
 अजय सिंघल<br>
 7310815593
</p>
</h3>
					
					</div>
            </div>
			</div>
           
