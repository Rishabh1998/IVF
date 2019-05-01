				<br><br><br>
				
				<center>
				<h2 class="hind"><b>vUrjkZ"Vªh; oS'; egklEesyu] egkuxj] nsgjknwu</b></h2><br>
						<h2 class="hind"><b>oS'; ;qod&;qorh ifjp;</b></h2>
						<br>
						<h3 class="hind"> laidZ lw+= % 9897227034] 9358133076] 9837042187] 9837634597] 9412059573<br>
bZ&esy % </h3><a>ivfukddoon@gmail.com</a>, <h3 class="hind"> osclkbZV %</h3>www.<br>
<h3 class="hind">
cSad & bykgkckn cSad] ,dkÅUV ua-  <b>50451591756</b>	<br>
cSad</h3> IFSC <h3 class="hind"> dksM%</h3> <b> ALLA0212834 </b>
</center>


						<br>
						
					<div class="row">	
					
                    <div class="col-sm-4 col-sm-offset-4">
  <div class="panel panel-info">
						<div class="panel-heading">
						<h4>पंजीकरण शुल्क 200 रू.</h4></div></div>                      
						
						<h2>परिचय प्रपत्र </h2>
						<br><br>
						<?php if($formError) { ?>
	
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?>
	
                        <form  action="<?php echo $action; ?>" method="post" name="payuForm">
						<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
	  <input type="hidden" name="amount" value="<?php echo 200 ?>" />
	   <input type="hidden" name="productinfo" value="payu_paisa" />
	  <input type= "hidden" name="surl" value="http://localhost/site17/success.php"  />
	  <input type= "hidden" name="furl" value="http://localhost/site17/failure.php"  />
	  <input type="hidden" name="service_provider" value="payu_paisa" />
	 
                            <div class="form-group">
							
                                <input type="text" class="form-control" name="firstname" placeholder="युवक/युवती का नामः" required="true" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="gotr" placeholder="गौत्र">
                            </div> 
                            <div class="radio">
							<label><input type="radio" name="optradio" checked>सामान्य </label>
							&nbsp
 							 <label><input type="radio" name="optradio">मांगलिक  </label>
							&nbsp
 							 <label><input type="radio" name="optradio">विधुर </label>
							 &nbsp
							 <label><input type="radio" name="optradio">विधवा </label>
							 &nbsp
							 <label><input type="radio" name="optradio">तलाकशुदा </label>
							 &nbsp
							 
							</div>
                           <br>
                          
						  
						  
							<center><label><b>जन्मतिथिः </b>	</label></center>
							
							<div class="form-group">
							
							<div class="col-md-4">
                                <input type="number" class="form-control" name="day" placeholder="Day" required="true">
								</div>
								<div class="col-md-4">
								<select class="form-control" name="month" required="true">
								<option value="1">January</option>
								<option value="2">February</option>
								<option value="3">March</option>
								<option value="4">April</option>
								<option value="5">May</option>
								<option value="6">June</option>
								<option value="7">July</option>
								<option value="8">August</option>
								<option value="9">September</option>
								<option value="10">October</option>
								<option value="11">November</option>
								<option value="12">December</option>
								</select>
								</div>
								<div class="col-md-4">
								<input type="number" class="form-control" name="year" placeholder="Year" required="true">
								
                            </div><br><br><br>
							<div class="form-group">
							<div class="col-md-4">
							 <b>समयः </b></div> <div class="col-md-8"><input class="form-control" type="time" name="time">
							</div> </div><br>	<br>
							
							
							
<div class="form-group">
<input type="text" class="form-control" name="placeofbirth" placeholder="जन्मस्थानः">
</div>
<div class="form-group">
<input type="text" class="form-control" name="age" placeholder="आयुः">
</div>
<div class="form-group">
<input type="text" class="form-control " name="height" placeholder="कद (से.मी.)ः  ">
</div>
<div class="form-group">
<input type="text" class="form-control " name="weight" placeholder="वजनः.ः">
</div>
<div class="radio "><b>कार्यः </b>
							<label><input type="radio" name="work" checked>व्यवसाय </label>
							&nbsp
 							 <label><input type="radio" name="work">नौकरी  </label>
							
							</div>
                           <br>

<div class="form-group">
<input type="text" class="form-control " name="edu_qual" placeholder="शैक्षिक योग्यताः">
</div>
<div class="radio "><b>रंगः</b>
							<label><input type="radio" name="facecolor" checked>गोरा </label>
							&nbsp
 							 <label><input type="radio" name="facecolor">गेहूंआ  </label>
							&nbsp
 							 <label><input type="radio" name="facecolor">श्याम </label>
							 &nbsp
							
							</div>
                           <br> 

<div class="form-group">
<input type="text" class="form-control " name="company_name" placeholder="युवक/युवती के प्रतिष्ठान/कार्यालय का नामः">
</div>
<div class="form-group">
<input type="text" class="form-control " name="company_place" placeholder="कार्य स्थलः">
</div>
<div class="form-group">
<input type="text" class="form-control " name="salary" placeholder="वार्षिक आयः">
</div>
<div class="form-group">
<input type="text" class="form-control " name="address" placeholder="पिता/संरक्षक का नाम व पूरा पताः">
</div>
<div class="form-group">
<input type="text" class="form-control " name="phone" placeholder="संपर्क मोबाईल नं.ः" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>">
</div>
<div class="form-group">
<input type="text" class="form-control " name="whatsapp" placeholder="व्हट्सएप्पः">
</div>
<div class="form-group">
<input type="text" class="form-control " name="email" placeholder="ई-मेलः" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>">
</div>
<div class="form-group">
<input type="text" class="form-control " name="father_work" placeholder="पिता/संरक्षक कात्रयवसाय/नौकरीः">
</div>
<div class="form-group">
<input type="text" class="form-control " name="father_company" placeholder="प्रतिष्ठान का नामः">
</div>
<div class="form-group">
<input type="text" class="form-control " name="father_company_place" placeholder="कार्य स्थलः">
</div>
<div class="form-group">
<input type="text" class="form-control " name="family_salary" placeholder="परिवार की वार्षिक आयः">
</div>
<div class="form-group">
<input type="text" class="form-control " name="houses" placeholder="निवास निजी/किराये काः">
</div>
<div class="radio "><b>युवक/युवती से अतिरिक्तः<br>भाइः</b>
							<label><input type="radio" name="bhai" checked>विवाहित  </label>
							&nbsp
 							 <label><input type="radio" name="bhai">अविवाहित. </label>
							<br><b>बहनः<b>
							<label><input type="radio" name="behn" checked>विवाहित </label>
							&nbsp
 							 <label><input type="radio" name="behn">अविवाहित.  </label>
							</div>
                           <br> 

<div class="form-group">
<input type="text" class="form-control " name="info" placeholder="युवक/युवती के बारे में अन्य जानकारी">
</div>
<div class="form-group">
<input type="text" class="form-control " name="comments" placeholder="प्रस्तावक का अन्य कथन">
</div>
<div class="form-group">
<input type="text" class="form-control " name="proposed" placeholder="प्रस्तावक">
</div>
<div class="form-group">
<input type="text" class="form-control " name="proposed_mobile" placeholder="मोबाईल न.ः">
</div>


							
							
                            <div class="form-group">
                                <?php if(!$hash) { ?>
            <td colspan="4"><input type="submit" value="Submit" class = "btn btn-success" /></td>
          <?php } ?>
                            </div>
							
                        </form>
						</div>
						 </div>
						 <div class="container-fluid">
						 <div class="danger container-fluid">
						<h3 class="hind"><b>?kks’k.kk&</b> eSa izekf.kr djrk@djrh gw¡ fd mi;ZqDr fooj.k lgh gS] izLrkfor ;qod@;qorh dk fj”rk vHkh r; ugha gqvk gSA eSa   izkFkhZ dk fooj.k ifjp; if=dk esa Nkius ds fy;s lgefr nsrk@nsrh gw¡A eSaus bl ifjp; ds fu;e o “krsZa /;kuiwoZd i<+ yh gS vkSj ;g eq>s Lohdkj gSaA
						</h3>
                    <br><br>
					<h3 class="hind"><b>
					uksV%& </b> d`Ik;k  QkeZ ds lkFk QksVks o iathdj.k jkf”k ¼200@&:  vFkok  cSad dh jlhn dh QksVksdkWih layXu djsaA
					</h3>
					
					</div><br>
					<div class="info container-fluid">
					<h1 class="hind"><center>fu;e o “krsZa</center></h1>
					<h3 class="hind">
					1-	OkS”; ;qod@;qorh lEesyu vUrjkZ’Vªh; oS”; egklEesyu mRrjk[k.M] egkuxj] nsgjknwu }kjk vk;ksftr fd;k tk jgk gSA
vr% bl lEcU/k esa O;olkf;d fj”rs djkus okys ls dksbZ lEidZ u djsaA <br>
2-	vUrjkZ’Vªh; oS”; egklEesyu mRrjk[k.M dh ftEesokjh dsoy ifjp; djokus rd dh gksxh] rRi”pkr~ fookg lEcU/kh ckrsa vkidks vkil esa r; djuh gksaxhA vUrjkZ’Vªh; oS”; egklEesyu mRrjk[k.M egkuxj] nsgjknwu dh dksbZ e/;LFkrk fdlh Hkh :Ik esa ugha gksxhA<br>
3-	d`Ik;k fj”rk gks tkus ds Ik”pkr] vUrjkZ’Vªh; oS”; egklEesyu mRrjk[k.M dks mijksDr irs ij fyf[ky ;k Qksu dj lwpuk vo”; izsf’kr djsaA<br>
4-	nksuksa i{kksa ds yksx ;qod@;qorh ds ckjs esa lHkh tkudkjh;k¡] lEcU/k gksus ls iwoZ Lo;a ,df=r dj] iw.kZ lUrqf’V dj ysaA vUrjkZ’Vªh; oS”; egklEesyu mRrjk[k.M egkuxj nsgjknwu dk bl lEcU/k esa dksbZ mRrjnkf;Ro ugha gksxkA<br>
5-	lEcU/k ifjp; gsrq ;qod dh vk;q de ls de 21 o’kZ o ;qorh dh vk;q 18 o’kZ gksuk vko”;d gSA<br>
6-	xjhc dU;k ds fookg gsrq vki vUrjkZ’Vªh; oS”; egklEesyu mRrjk[k.M dks vkfFkZd lg;ksx dj ldrs gSaA lg;ksx gsrq lEidZ lw=% 9897227034] 9358133076] 9837042187] 9837634597] 9412059573   <br>
7-	iathdj.k “kqYd fdlh Hkh n”kk esa okfil ugha fd;k tk;sxkA<br>
8-	fdlh Hkh izdkj ds fookn esa laLFkk vUrjkZ’Vªh; oS”; egklEesyu mRrjk[k.M dk fu.kZ; gh vfUre jgsxkA<br>
9-	egkjktk vxzlsu gkWfLiVy] 101] peu fogkj] fujatuiqj] nsgjknwu] vUrjkZ’Vªh; oS”; egklEesyu] mRrjk[k.M] ds izFke ry ijA

					</h3>
               </div>
			   <br><br>
			   
            </div>
           
