				<br><br><br><br>
				
				<center>
				<h2><b>अन्तर्राष्ट्रीय वैश्य महासम्मेलन</b></h2>
						<h4><b>International Vaish Federation</b></h4>
						<h5>Connecting Vaish World Over…….. For community Empowerment</h5>
						<h4> <b> महानगर, देहरादून - 248001 (उत्तराखण्ड) </b></h4>						
					<div class="row">	
					
                    <div class="col-sm-4 col-sm-offset-4">
  <div class="panel panel-info">
						<div class="panel-heading">
						<h4>वार्षिक सदस्यता सहयोग राशि 100 रू </h4></div></div>                      
						
						<h2>सदस्यता प्रपत्र</h2>
						<br><br>
						<?php if($formError) { ?>
	
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?>
	
                       <!-- <form  action="<?php #echo $action; ?>" method="post" name="payuForm"> -->
					   <form  action="action2.php" method="post" enctype="multipart/form-data">
						
                            <div class="form-group">
							
                                <input type="text" class="form-control" name="firstname" placeholder="युवक/युवती का नामः" required="true" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>">
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
							<div class="col-md-4">
							 <b>पति/पत्नी का नाम </b></div> <div class="col-md-8"><input class="form-control" type="text" name="partner">
							</div> </div><br>	<br>
							<center><label><b>पति/पत्नी की जन्मतिथि </b>	</label></center>
							
							<div class="form-group">
							
							<div class="col-md-4">
                                <input type="number" class="form-control" name="partner_day" placeholder="Day" required="true">
								</div>
								<div class="col-md-4">
								<select class="form-control" name="partner_month" required="true">
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
								<input type="number" class="form-control" name="partner_year" placeholder="Year" required="true">
								
                            </div><br><br><br>
							
							
<div class="form-group">
<input type="text" class="form-control" name="father" placeholder="पिता/पति का नाम">
</div>
<div class="form-group">
<input type="text" class="form-control" name="address" placeholder="पता ">
</div>
<div class="form-group">
<input type="text" class="form-control " name="prati" placeholder="प्रतिष्ठान का नाम  ">
</div>
<div class="form-group">
<input type="text" class="form-control " name="job" placeholder="नौकरी (पद सहित)  ">
</div>
<div class="form-group">
<input type="text" class="form-control " name="mobile" placeholder="मोबाइलः ">
</div>
<div class="form-group">
<input type="text" class="form-control " name="email" placeholder="ई-मेल आई.डी. ">
</div>
<div class="form-group">
<input type="text" class="form-control " name="family_count" placeholder="परिवार में कुल सदस्यः">
</div>

<div class="form-group">
<input type="text" class="form-control " name="married" placeholder="विवाहितः">
</div>
<div class="form-group">
<input type="text" class="form-control " name="unmarried" placeholder="अविवाहित:">
</div>
<div class="form-group">
<input type="text" class="form-control " name="child" placeholder="आश्रित बच्चों के नामः ">
</div>
<div class="form-group">
<input type="text" class="form-control " name="non_refund" placeholder="सदस्याता शुल्क (नॉन रिफण्डेबल) :">
</div>
<div class="form-group">
<input type="text" class="form-control " name="rashi" placeholder="संस्था सहयोग राशि">
</div>
<div class="form-group">
<input type="text" class="form-control " name="total_rashi" placeholder="कुल राशि">
</div>
<div class="form-group">
<input type="text" class="form-control " name="social" placeholder="अन्य विशेष विवरण (सोशल रानीतिक)ः">
</div>
<div class="form-group">
<input type="text" class="form-control " name="proposed" placeholder="प्रस्तावक">
</div>
<div class="form-group">
Upload your picture:
<input type="file" name="file" id="file">
</div>
<div class="form-group">
                                <?php if(!$hash) { ?>
            <td colspan="4"><div class='pm-button'><input type="submit" value="Pay Now" class = "btn btn-success" name="submit" /></div></td>
          <?php } ?>
                            </div>
							
			
							
							
                        </form>
						</div>
						 </div>
						 </div>
						 <div class="container-fluid">
						 <div class="danger container-fluid">
                   
					<h3><b>
					घोषणा </b> मैं अन्तर्राष्ट्रीय वैश्य महासम्मेलन महानगर, देहरादून का सदस्य बनने हेतु आवेदन करता/करती हूँ। मैं संस्था के नियम एवं संविधान का पालन करने हेतु कृत संकल्प हूँ। मैं सदैव संस्था के माध्यम से वैश्य समाज की एकजुटता के लिए प्रयासरत रहूंगा/ रहूँगी। मेरे द्वारा दी गई उपरोक्त सूचनाएं सत्य एवं सही हैं।
					</h3>
					
					</div>
            </div>
           
