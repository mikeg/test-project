
<script type="text/JavaScript" language="JavaScript">

	function limitText(limitField, limitCount, limitNum) {
		if (limitField.value.length > limitNum) {
		limitField.value = limitField.value.substring(0, limitNum);
		} else {
		limitCount.value = limitNum - limitField.value.length;
		}
	}

</script>


<form method="GET" enctype="multipart/form-data" name="form" action="srstudent.php" >


									<table width="100%" cellspacing="0" cellpadding="5" align="center" bgcolor="#C0C0C0"> 
										<tr>
										  
											<th width="25%" class="thead"><div align="left">NURSES' APPLICATION FORM</div></th>
											<th width="75%" class="thead" align="left"> </th>
										</tr>
										
										<tr>
											<td width="25%" align="right"> <br/>Application No.:
											<input name="add" type="hidden" id="add" value="Add Profile" />
											<input name="reseter" type="hidden"/></td> 
											<td width="75%" align="left"><br/><input type="text" readonly="" size="15"> 
											</td>
										</tr>
										
										<tr>
											<td width="25%" align="right">Examinee Type:</td> 
											
											<td width="75%" align="left">
											<input name="etype" type="radio" value="new" id="new1" onChange="form.submit()" 
											<?php if($_GET['etype'] == "new"){
											?> 
													checked <?php }?> > 
													<label for="new1">1st Timer(New)</label>
											</input> 
											
											<input type="radio" name="etype" value="repeater" id="repeat" onChange="form.submit()" 
											  <?php if($_GET['etype'] == "repeater"){
											  ?> 		
											  			checked 
												<?php }?> > <label for="repeat">REPEATER</label>
													
											</input>
											
												<input type="radio" name="etype" value="conditioned" id="conditioned" onChange="form.submit()" 
											  <?php if($_GET['etype'] == "conditioned"){
											  ?> 		
											  			checked 
												<?php }?> > 
													<label for="conditioned">CONDITIONED</label>
											</input>
										</td>
										</tr>
										
										<tr>
												<td width="25%" align="right">Degree:</td> 
												
												<td width="75%" align="left"> 
										
													<table>
														<tr>
														
															<td>
											<input type="radio" name="deg" value="rdeg" onChange="form.submit();" id="rDeg"
											  <?php if($_GET['deg'] == "rdeg"){
											  ?> 		
											  			checked  > 
												</input> 		
													<? $_GET['addcrs'] = 0 ?>
											<?php }?>
										</td>	
													
										<td> 
										<label for="rDeg">	
											Regular B.S. Nursing
										</label> 
										</td>
										
										<td>
										<input name="deg" type="radio" value="wdeg" onChange = "form.submit()" id="wDeg" 
											<?php if($_GET['deg'] == "wdeg"){
											?> 
													checked   >  
											</td>
									
									<font color="#003300"><strong>Select No. of Other Degree(s) Obtained:</strong></font> <select name="addcrs" id="addcrs" onchange="form.submit();">
										  
										<!--<option value="0" selected="selected"></option> -->

										<!--<option value="0" selected="selected"></option> -->										 
										  <?php 
											 $registrylimit = 15;
										 	 for($rl=0;$rl<=$registrylimit;$rl++){
										   	?>
										   		<option value="<?php echo $rl?>" 
										   			<?php if($_GET['addcrs']==$rl) { 
															echo 'selected="selected"';}?> > 
										   			<?php echo $rl ?>
										   
											<?php 
											}?>
									   
										</select> 
											<?php } ?>
										
								
											<td>
												<label for="wDeg">	
													With Other Degree(s) 
												</label>
											</td>	 
									
										
									       	</tr>
										   </table>
										</td>
									</tr>
														
										
										<tr>
											<td width="25%" align="right">Date of Examination:</td> 
											<td width="75%" align="left"> <input type="text" size="15" readonly=""/></td>
										</tr>
										
											<tr>
											<td width="25%" align="right">Place of Examination:</td> 
											<td width="75%" align="left"> <input type="text" size="15" readonly=""></td>
										</tr>
									
												
										

											<tr>
											
											<th width="25%" class="thead"> <div align="left">PERSONAL INFORMATION</div></th>
											<th width="75%" class="thead" align="left"> </th> 
										</tr>
										
										
										<tr>
											<td width="25%" align="right"><br/>Surname/Family Name:</td> 
											<td width="75%" align="left"><br/>
											<input type="text" size="30" name="lastName" value="<?php echo $_GET['lastName'];?>"> </input></td>
										</tr>
										
										<tr>
											<td width="25%" align="right">Given Name:</td> 
											<td width="75%" align="left">
											<input type="text" size="30" name="firstName" value="<?php echo $_GET['firstName'];?>"/></td>
										</tr>
										
										<tr>
											<td width="25%" align="right">Middle Name:</td> 
											<td width="75%" align="left">
											<input type="text" name="middleName" size="30" value="<?php echo $_GET['middleName'];?>"/></td>
										</tr>
										
										<tr>
											<td width="25%" align="right">M.I.:</td> 
											<td width="75%" align="left">
											<input type="text" name="mi" size="5" value="<?php echo $_GET['mi'];?>" /></td>
										</tr>
										
														
										<tr>
											<td width="25%" align="right">Sex:</td> 
											
											<td width="75%" align="left">
											<input name="sex" type="radio" value="M" id="male" 
											<?php if($_GET['sex'] == "M"){
											?> 
													checked <?php }?> > 
													<label for="male">Male</label>
											</input> 
											
											<input type="radio" name="sex" value="F" id="female"
											  <?php if($_GET['sex'] == "F"){
											  ?> 		
											  			checked 
												<?php }?> > 
													<label for="female">Female</label>
											</input>
										</td>
										
										</tr>
										
										
	<tr>
	<div style="font-size:13px;">
											<td width="25%" align="right"> Complete Mailing Address:</td> 
											
											<td width="75%" align="left">
											
											House No.,Street: 
											<input type="text" size="35" name="houseStreet" value="<?php echo $_GET['houseStreet'];?>">  
		<br/><br/><select name= 'selRegion' onchange="form.submit()">
										   <option value="0"> --Select Region-- </option>
                                           
                                            <?php
												$sql = 'SELECT DISTINCT Region FROM addresses ORDER BY Region'; 
												if (!@mysql_query($sql)){
												
												}
														else{
														$q=mysql_query($sql);
		
                                                         while($row=mysql_fetch_array($q)){
                                                            ?>
															
                                            <option value = '<?php echo $row['Region'] ;?>' <?php if($_GET['selRegion']==$row['Region']){echo "selected";}?>> <?php echo "".$row['Region'] ;?></option>
                                            <?php } }?>
										    </select>
										    &nbsp;
											  <select name = 'selProvince'  onchange="form.submit()">
                                                <option value="0"> --Select Province-- </option>
                                                <?php
													   		$qprov = "select distinct province from addresses  where region = '".$_GET['selRegion']."' and province is not null";													 
                                                            $q1=mysql_query($qprov);
															while($row1=mysql_fetch_array($q1)){
                                                            ?>
                                                            <option value = '<?php echo $row1['province'] ;?>' <?php if($_GET['selProvince']==$row1['province']){echo "selected";}?>> <?php print($row1['province']);?></option>
                                                            <?php } ?></select>
											  &nbsp;
											  <select name = 'selMunicipalityCity'  onchange="form.submit()">
                                                <option value="0"> --Select Municipality / City-- </option>
                                                <?php
													   		$qmun = "select distinct city_town from addresses where  province = '".$_GET['selProvince']."' and region ='".$_GET['selRegion']."' and city_town is not null";
															//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                            $q2=mysql_query($qmun);
															while($row3=mysql_fetch_array($q2)){
                                                            ?>
                                                <option value = '<?php echo $row3['city_town'] ;?>' <?php if($_GET['selMunicipalityCity']==$row3['city_town']){echo "selected";}?>> <?php echo " ".$row3['city_town'] ;?></option>
                                                <?php } ?>
										      </select>
											  &nbsp; <br/><br/>
											  Zip Code: <input name = 'selZip' size="10" readonly=""
                                              
                                                <?php
													   		$qmun = "select distinct zip_code from addresses where  province = '".$_GET['selProvince']."' and region ='".$_GET['selRegion']."' and city_town ='".$_GET['selMunicipalityCity']."'and city_town is not null";
															//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                            $q2=mysql_query($qmun);
															while($row3=mysql_fetch_array($q2)){
                                                 ?>
                                               value = '<?php echo $row3['zip_code'] ;?>'>
											  
                                               <?php } ?>
										    </input >
											
											Rurban Code: <input name = 'selRur' size="10" readonly=""
                                              
                                                <?php
													   		$qmun = "select distinct rurban_code from addresses where  province = '".$_GET['selProvince']."' and region ='".$_GET['selRegion']."' and city_town ='".$_GET['selMunicipalityCity']."'and city_town is not null";
															//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                            $q2=mysql_query($qmun);
															while($row3=mysql_fetch_array($q2)){
                                                ?>
                                               value = '<?php echo $row3['rurban_code'] ;?>
											 
                                               <?php } ?>'>
										    </input >
											
												Area Code: <input name = 'selAdd' size="10" readonly=""
                                              
                                                <?php
													   		$qmun = "select distinct area_code from addresses where  province = '".$_GET['selProvince']."' and region ='".$_GET['selRegion']."' and city_town ='".$_GET['selMunicipalityCity']."'and city_town is not null";
															//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                            $q2=mysql_query($qmun);
															while($row3=mysql_fetch_array($q2)){
                                                ?>
                                               value = '<?php echo $row3['area_code'] ;?>
											 
                                               <?php } ?>'>
										    </input >
											
											<input type="hidden" name= 'mailingAdd_id'
											 <?php
													   		$qaid = "select distinct address_id from addresses where  province = '".$_GET['selProvince']."' and region ='".$_GET['selRegion']."' and city_town ='".$_GET['selMunicipalityCity']."'and city_town is not null";
															//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                            $q2=mysql_query($qaid);
															while($row3=mysql_fetch_array($q2)){
											?>
										  	value = '<?php echo $row3['address_id'] ;?>
                                            <?php } ?>'>
											
											</input>
											</td>
														
							</div>				
			
		</tr>
										
										<tr>
										<td width="25%" align="right"><br/>Citizenship:</td> 
										<td width="75%" align="left"><br/>
										<select name = 'selCit' onChange="form.submit()">
                                                <option value="0"> --Select Citizenship Country-- </option>
                                                <?php
													   		$qcit = "select distinct country from citizenship order by country ";
															//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                            $q2=mysql_query($qcit);
															while($row=mysql_fetch_array($q2)){
                                                            ?>
                                                <option value = '<?php echo $row['country'] ;?>' <?php if($_GET['selCit']==$row['country']){echo "selected";}?>> <?php echo " ".$row['country'] ;?></option>
                                                <?php } ?>
										 </select>
											  
											  <input type="hidden" name= 'cit_id'
											 <?php
													   		$qcid = "select distinct citizenship from citizenship where  country = '".$_GET['selCit']."' and  country is not null";
															//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                            $q3=mysql_query($qcid);
															while($row3=mysql_fetch_array($q3)){
											?>
										  	value = '<?php echo $row3['citizenship'] ;?>
                                            <?php } ?>' >
										</td>
										</tr>
										
										<tr>
										<td width="25%" align="right">E-mail Address:</td> 
										<td width="75%" align="left"><input type="text" name="email" size="25" value="<?php echo $_GET['email'];?>"/></td>
										</tr>
										
										<tr>
										<td width="25%" align="right">Landline No. (ex. 32 4353389):</td> 
										<td width="75%" align="left"><select name= 'selAreaLandline'>
									
										<?php
													

												$sql = 'SELECT DISTINCT Area_Code FROM addresses ORDER BY Area_Code'; 
												if (!@mysql_query($sql)){
												
												}
														else{
														$q=mysql_query($sql);
		
                                                         while($row=mysql_fetch_array($q)){
                                                            ?>			
                                            <option value = '<?php echo $row['Area_Code'] ;?>' <?php if($_GET['selAreaLandline']==$row['Area_Code']){echo "selected";}?>> <?php echo "".$row['Area_Code'] ;?>
                                            <?php } }?>
										</select> 
										
										
										<input name= "landline7dig" value="<?php echo $_GET['landline7dig'];?>" type="text" onKeyDown="limitText(this.form.landline7dig,this.form.countdown7dig,7);" 
										onKeyUp="limitText(this.form.landline7dig,this.form.countdown7dig,7);" maxlength="7" size="7"> 
										<input  type="hidden" name="countdown7dig" size="3" value="7">
										
										
										</td>
										</tr>
										
										<tr>
										<td width="25%" align="right">Mobile No.(ex. 0927 4353389):</td> 
										<td width="75%" align="left">
										
										<input name= "cell4dig" value="<?php echo $_GET['cell4dig'];?>" type="text" onKeyDown="limitText(this.form.cell4dig,this.form.countdownc4dig,4);" 
										onKeyUp="limitText(this.form.cell4dig,this.form.countdownc4dig,4);" maxlength="4" size="4"> 
										<input  type="hidden" name="countdownc4dig" size="3" value="4">
										
										<input name= "cell7dig" value="<?php echo $_GET['cell7dig'];?>" type="text" onKeyDown="limitText(this.form.cell7dig,this.form.countdownc7dig,7);" 
										onKeyUp="limitText(this.form.cell7dig,this.form.countdownc7dig,7);" maxlength="7" size="7"> 
										<input  type="hidden" name="countdownc7dig" size="3" value="7">
										</td>
										</tr>
										
										<tr>
									
										<td width="25%" align="right">Civil Status:</td> 
										<td width="75%" align="left"> 
										
										<table width="75%">
											<tr>
												<!-- single-->
												<td align="left" width="20%"> <input type="radio" name="civil" value="S" onChange="form.submit();" id="single"
											  		<?php if($_GET['civil'] == "S"){
												  	?> 		
											  			checked  > 
												</input>		
													<? 	$_GET['spouseName'] = NULL;
														$_GET['citSp_id'] = NULL;
													?>
													<?php }?>
												</td>
											
												<td width="20%" align="center">
													<label for="single">
													SINGLE</label>
												</td>
											<!-- widow/er-->
										
											<td align="left" width="20%">
												<input name="civil" type="radio" value="W" onChange = "form.submit()"  id="widow"
												<?php if($_GET['civil'] == "W"){
												?> 
													checked   > 	
												</input>  
												<? 	$_GET['spouseName'] = NULL;
														$_GET['citSp_id'] = NULL;
													?>
												<?php } ?>
											</td>
				
					 						<td width="10%" align="center">
										 		<label for="widow">
												WIDOW/ER</label>		
										 	</td> 			
									
											<!-- divorsed-->
										<td align="left" width="20%">
											<input type="radio" name="civil" value="D" onChange="form.submit();"  id="divorsed" 
											  <?php if($_GET['civil'] == "D"){
											  ?> 		
											  			checked  > 
											</input> 
												<? 	$_GET['spouseName'] = NULL;
													$_GET['citSp_id'] = NULL;
													?>
												<?php } ?>
										</td>
										
										<td width="10%" align="center">
										 		<label for="divorsed">
												DIVORSED </label>		
										</td> 
											
											<!-- married-->
									 	<td align="left" width="20%">
											 <input type="radio" name="civil" value="M" onChange="form.submit();" id="married"
											  <?php if($_GET['civil'] == "M"){
											  ?> 		
											  			checked  > 
											</input>
											<?php }?>
										</td>
									
										 <td width="10%" align="center">
										 		<label for="married">
												 MARRIED </label>		
										</td> 
								
												<!-- annulled-->
										 <td width="20%" align="left">
												 <input type="radio" name="civil" value="A" onChange="form.submit();" id="annulled"
											  		<?php if($_GET['civil'] == "A"){
											  		?> 		
											  			checked  > 
												</input> 
													<? 	$_GET['spouseName'] = NULL;
														$_GET['citSp_id'] = NULL;
													?>
												<?php } ?>
										 </td>
										
										<td width="10%" align="center">
										 		<label for="annulled">
												 ANNULLED </label>		
										</td> 
										
											 
										 <!-- legally separated-->
											<td width="20%" align="left">
													<input type="radio" name="civil" value="LS" onChange="form.submit();" id="separated"
													  <?php if($_GET['civil'] == "LS"){
													  ?> 		
											  			checked  > 
												</input> 
													<? 	$_GET['spouseName'] = NULL;
														$_GET['citSp_id'] = NULL;
													?>
												<?php } ?>
											 </td>
											
											<td width="10%" align="center">
										 		<label for="separated">
												 LEGALLY SEPARATED </label>		
											</td> 	
									</tr>											
   <!-- old code 
   		<input type="radio" name="convict" value="yes" onChange="show('yesTbl');return true;" id="yes"  />
       	<font style="FONT-SIZE: 10pt; FONT-FAMILY: 'Verdana'">YES</font>
        <input type="radio" name="convict" value="no" onChange="hide('yesTbl');return true;" id="no" />
		<font style="FONT-SIZE: 10pt; FONT-FAMILY: 'Verdana'">NO</font> 
	-->
	<? 
	// checking purposes
		//echo $_GET['spouseName'];
		//echo $_GET['citSp_id'];
		//echo $_GET['sex'];
   ?>
  


<!--	<input type="radio" name="civil" value="single" onChange="hide('withWife');hide('withWifeLbl');return true;" id="single"  />
       SINGLE 
	   <input type="radio" name="civil" value="widow" onChange="show('withWife');show('withWifeLbl');return true;" id="widow"  />
       WIDOW/ER 
	   <input type="radio" name="civil" value="divorced" onChange="show('withWife');show('withWifeLbl');return true;" id="divorced"  />
       DIVORCED 
		<br/>
	   <input type="radio" name="civil" value="married" onChange="show('withWife');show('withWifeLbl');return true;" id="married"  />
       MARRIED 
	   <input type="radio" name="civil" value="annulled" onChange="show('withWife');show('withWifeLbl');return true;" id="annulled"  />
       ANNULLED 
	   <input type="radio" name="civil" value="separated" onChange="show('withWife');show('withWifeLbl');return true;" id="separated"  />
       LEGALLY SEPARATED
 -->
 
 </table>
		</td>
										</tr>
										
										<tr>
										<td width="25%" align="right">Date of Birth (mm/dd/yyyy):</td> 
										<td width="75%" align="left">
										
										<select name="mmb" >
											<?php
									
											 for($rm=1;$rm<=9;$rm++){ ?>
												<option value="0<? echo $rm ?>" 			
												<?php if($_GET['mmb']==$rm) { 
															echo 'selected="selected"';}?> >
												0<? echo $rm ?>	
												<?php }?>     
											
											<?php 
											$rmc=10;
												while($rmc<13){ ?>
												<option value="<? echo $rmc ?>" 			
												<?php if($_GET['mmb']==$rmc) { 
													echo 'selected="selected"';}?> > 
													<? echo $rmc ;?> 	
												<?php ++$rmc;}?>     
									                          
										</select>
										 
										<select name="ddb" >
											<?php
										 for($rd=1;$rd<=9;$rd++){ ?>
												<option value="0<? echo $rd ?>" 			
												<?php if($_GET['ddb']==$rd) { 
															echo 'selected="selected"';}?> >
												0<? echo $rd ?>	
												<?php }?>     
											
											<?php 
											$rdc=10;
												while($rdc<32){ ?>
												<option value="<? echo $rdc ?>" 			
												<?php if($_GET['ddb']==$rdc) { 
													echo 'selected="selected"';}?> > 
													<? echo $rdc ;?> 	
												<?php ++$rdc;}?>     
										</select> 
										
										<select name="yyb1" >
											<?php
									
											 for($rm=1;$rm<=9;$rm++){ ?>
												<option value="0<? echo $rm ?>" 			
												<?php if($_GET['yyb1']==$rm) { 
															echo 'selected="selected"';}?> >
												0<? echo $rm ?>	
												<?php }?>     
											
											<?php 
											$rmc=10;
												while($rmc<100){ ?>
												<option value="<? echo $rmc ?>" 			
												<?php if($_GET['yyb1']==$rmc) { 
													echo 'selected="selected"';}?> > 
													<? echo $rmc ;?> 	
												<?php ++$rmc;}?>     
									                          
										</select>
										
										<select name="yyb2" >
											<?php
									
											 for($rm=1;$rm<=9;$rm++){ ?>
												<option value="0<? echo $rm ?>" 			
												<?php if($_GET['yyb2']==$rm) { 
															echo 'selected="selected"';}?> >
												0<? echo $rm ?>	
												<?php }?>     
											
											<?php 
											$rmc=10;
												while($rmc<100){ ?>
												<option value="<? echo $rmc ?>" 			
												<?php if($_GET['yyb2']==$rmc) { 
													echo 'selected="selected"';}?> > 
													<? echo $rmc ;?> 	
												<?php ++$rmc;}?>     
									                          
										</select>
										
								
										
										
										<? // for testing purposes
											// echo $_GET['mmb'];
											// echo $_GET['ddb'];
											//echo $_GET['yyb1'];
										?>
										</td>
										</tr>
										
										<tr>
											<div style="font-size:13px;">
											<td width="25%" align="right"> Place of Birth:</td> 
											
											<td width="75%" align="left">
											
										<select name= 'selRegionB' onchange="form.submit()">
										   <option value="0"> --Select Region-- </option>
                                           
                                            <?php
												$sql = 'SELECT DISTINCT Region FROM addresses ORDER BY Region'; 
												if (!@mysql_query($sql)){
												
												}
														else{
														$q=mysql_query($sql);
		
                                                         while($row=mysql_fetch_array($q)){
                                                            ?>
															
                                            <option value = '<?php echo $row['Region'] ;?>' <?php if($_GET['selRegionB']==$row['Region']){echo "selected";}?>> <?php echo "".$row['Region'] ;?></option>
                                            <?php } }?>
										    </select>
										    &nbsp;
											  <select name = 'selProvinceB'  onchange="form.submit()">
                                                <option value="0"> --Select Province-- </option>
                                                <?php
													   		$qprov = "select distinct province from addresses  where region = '".$_GET['selRegionB']."' and province is not null";													 
                                                            $q1=mysql_query($qprov);
															while($row1=mysql_fetch_array($q1)){
                                                            ?>
                                                            <option value = '<?php echo $row1['province'] ;?>' <?php if($_GET['selProvinceB']==$row1['province']){echo "selected";}?>> <?php print($row1['province']);?></option>
                                                            <?php } ?></select>
											  &nbsp;
											  <select name = 'selMunicipalityCityB'  onchange="form.submit()">
                                                <option value="0"> --Select Municipality / City-- </option>
                                                <?php
													   		$qmun = "select distinct city_town from addresses where  province = '".$_GET['selProvinceB']."' and region ='".$_GET['selRegionB']."' and city_town is not null";
															//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                            $q2=mysql_query($qmun);
															while($row3=mysql_fetch_array($q2)){
                                                            ?>
                                                <option value = '<?php echo $row3['city_town'] ;?>' <?php if($_GET['selMunicipalityCityB']==$row3['city_town']){echo "selected";}?>> <?php echo " ".$row3['city_town'] ;?></option>
                                                <?php } ?>
										      </select>
											  &nbsp; <br/><br/>
											  Zip Code: <input name = 'selZipB' size="10" readonly=""
                                              
                                                <?php
													   		$qmun = "select distinct zip_code from addresses where  province = '".$_GET['selProvinceB']."' and region ='".$_GET['selRegionB']."' and city_town ='".$_GET['selMunicipalityCityB']."'and city_town is not null";
															//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                            $q2=mysql_query($qmun);
															while($row3=mysql_fetch_array($q2)){
                                                 ?>
                                               value = '<?php echo $row3['zip_code'] ;?>'>
											  
                                               <?php } ?>
										    </input >
											
											Rurban Code: <input name = 'selRurB' size="10" readonly=""
                                              
                                                <?php
													   		$qmun = "select distinct rurban_code from addresses where  province = '".$_GET['selProvinceB']."' and region ='".$_GET['selRegionB']."' and city_town ='".$_GET['selMunicipalityCityB']."'and city_town is not null";
															//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                            $q2=mysql_query($qmun);
															while($row3=mysql_fetch_array($q2)){
                                                ?>
                                               value = '<?php echo $row3['rurban_code'] ;?>
											 
                                               <?php } ?>'>
										    </input >
											
												Area Code: <input name = 'selAddB' size="10" readonly=""
                                              
                                                <?php
													   		$qmun = "select distinct area_code from addresses where  province = '".$_GET['selProvinceB']."' and region ='".$_GET['selRegionB']."' and city_town ='".$_GET['selMunicipalityCityB']."'and city_town is not null";
															//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                            $q2=mysql_query($qmun);
															while($row3=mysql_fetch_array($q2)){
                                                ?>
                                               value = '<?php echo $row3['area_code'] ;?>
											 
                                               <?php } ?>'>
										    </input >
											
											<input type="hidden" name= 'birthAdd_id'
											 <?php
													   		$qaid = "select distinct address_id from addresses where  province = '".$_GET['selProvinceB']."' and region ='".$_GET['selRegionB']."' and city_town ='".$_GET['selMunicipalityCityB']."'and city_town is not null";
															//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                            $q2=mysql_query($qaid);
															while($row3=mysql_fetch_array($q2)){
											?>
										  	value = '<?php echo $row3['address_id'] ;?>
                                            <?php } ?>'>
											
											</input>
											</td>
											
		
											</div>	
										</tr>
									
										
								<?php
										$status ='M';
										//$type2 ='conditioned';
										$getstatus=$_GET['civil'];
										if ($status==$getstatus) {
										
										?>		
										<tr>
										
										<td align="right">
										
										<table id="withWifeLbl">
										<td>Spouse's Name & Citizenship:</td> 										
										</table>
										</td>
										
										<td align="left">
										<table id="withWife" >
										<td>
										<input size="40" type="text" name="spouseName" value= "<?php echo $_GET['spouseName'] ?>">
										</input>
											
										<select name = 'selCitSpouse' onChange="form.submit()">
                                                <option value="0"> --Select Citizenship Country-- </option>
                                                <?php
													   		$qcitS = "select distinct country from citizenship order by country ";
															//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                            $q2=mysql_query($qcitS);
															while($row=mysql_fetch_array($q2)){
                                                            ?>
                                                <option value = '<?php echo $row['country'] ;?>' <?php if($_GET['selCitSpouse']==$row['country']){echo "selected";}?>> <?php echo " ".$row['country'] ;?></option>
                                                
												<?php  } ?>
									
										 </select>
											
										<input type="hidden" name= 'citSp_id'
											 <?php
													   		$qcidS = "select distinct citizenship from citizenship where  country = '".$_GET['selCitSpouse']."' and  country is not null";
															//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                            $q3=mysql_query($qcidS);
															while($row3=mysql_fetch_array($q3)){
											?>
										  	value = '<?php echo $row3['citizenship'] ;?>
                                            <?php } ?>' >		
										</input>				
										</td>										
										</table>
									
										</td>
										
										</tr>
										<? } ?>
										<tr>
										<td width="25%" align="right">Father's Name & Citizenship:</td> 
										
										<td width="75%" align="left">	
										&nbsp;<input size="40" type="text" name="fatherName"value= "<?php echo $_GET['fatherName'] ?>" > 
										</input>

										<select name = 'selCitFather' onChange="form.submit()">
                                                <option value="0"> --Select Citizenship Country-- </option>
                                                <?php
													   		$qcitF = "select distinct country from citizenship order by country ";
															//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                            $q2=mysql_query($qcitF);
															while($row=mysql_fetch_array($q2)){
                                                            ?>
                                                <option value = '<?php echo $row['country'] ;?>' <?php if($_GET['selCitFather']==$row['country']){echo "selected";}?>> <?php echo " ".$row['country'] ;?></option>
                                                
												<?php  } ?>
									
										 </select> 
											
										 <input type="hidden" name= 'citFa_id'
											 <?php
													   		$qcidF = "select distinct citizenship from citizenship where  country = '".$_GET['selCitFather']."' and  country is not null";
															//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                            $q3=mysql_query($qcidF);
															while($row3=mysql_fetch_array($q3)){
											?>
										  	value = '<?php echo $row3['citizenship'] ;?>
                                            <?php } ?>' >		
											</input>		
											
											</td>
										</tr>
										
										<tr>
										<td width="25%" align="right">Mother's Name & Citizenship:</td> 
										<td width="75%" align="left">
										&nbsp;<input size="40" type="text" name="motherName"value= "<?php echo $_GET['motherName'] ?>" > 
										</input>

										<select name = 'selCitMother' onChange="form.submit()">
                                                <option value="0"> --Select Citizenship Country-- </option>
                                                <?php
													   		$qcitM = "select distinct country from citizenship order by country ";
															//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                            $q2=mysql_query($qcitM);
															while($row=mysql_fetch_array($q2)){
                                                            ?>
                                                <option value = '<?php echo $row['country'] ;?>' <?php if($_GET['selCitMother']==$row['country']){echo "selected";}?>> <?php echo " ".$row['country'] ;?></option>
                                                
												<?php  } ?>
									
										 </select> 
											
										<input type="hidden" name= 'citMo_id'
											 <?php
													   		$qcidM = "select distinct citizenship from citizenship where  country = '".$_GET['selCitMother']."' and  country is not null";
															//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                            $q3=mysql_query($qcidM);
															while($row3=mysql_fetch_array($q3)){
											?>
										  	value = '<?php echo $row3['citizenship'] ;?>
                                            <?php } ?>' >		
											</input>
										</td>
										</tr>
										
										<tr>
										<td width="25%" align="right">Have you ever been convicted in a final judgment by any military tribunal or administrative body?</td> 
											<td width="75%" align="left"> 
										<label for="yes">	
										<font color="#003300">YES </font>
										</label>
										
										<input name="convict" type="radio" value="Y" onChange = "form.submit()" id="yes" 
											<?php if($_GET['convict'] == "Y"){
											?> 
													checked   > 
													
											</input> 
												&nbsp; &nbsp; <label for="ifYes"> (If yes, has submitted a copy of the decision?) </label>
												<input type="checkbox" name="hasDocs" onChange="form.submit();" id="ifYes" value="Y" 
													<?php if($_GET['hasDocs'] == "Y"){
																?> checked > 
														<?php } else $_GET['hasDocs'] = "N" ?>
													 		
													 	 
											</input>
											
											<?php } ?>
													 
											<br/> 
										 
										<label for="no">	
											<font color="#990000">NO</font>
										</label> 
											&nbsp;<input type="radio" name="convict" value="N" onChange="form.submit();" id="no"
											  <?php if($_GET['convict'] == N){
											  ?> 		
											  			checked  > 
												</input> 		
													<? $_GET['hasDocs'] = "N" ?>
											<?php }?>											
   <!-- old code 
   		<input type="radio" name="convict" value="yes" onChange="show('yesTbl');return true;" id="yes"  />
       	<font style="FONT-SIZE: 10pt; FONT-FAMILY: 'Verdana'">YES</font>
        <input type="radio" name="convict" value="no" onChange="hide('yesTbl');return true;" id="no" />
		<font style="FONT-SIZE: 10pt; FONT-FAMILY: 'Verdana'">NO</font> 
	-->
	<? 
	// checking purposes
	//	echo $_GET['convict'];
	//	echo $_GET['hasDocs'];
	//	echo $_GET['sex'];
   ?>
  								</td>
   								</tr>
 
  	
<tr>
	<td>
	</td>
	
	<td>
	 <table id="yesTbl" style="display:none;">
  	  <td width=699>
		&nbsp; &nbsp; (If yes, has submitted a copy of the decision?)
		 <input type="checkbox" name="hasDocs"></input> 
      </td>
 	 </table>	
	</td>  
</tr>
  							
										<tr>
											
											<th width="25%" class="thead"> <div align="left">EDUCATIONAL INFORMATION</div></th>
											<th width="75%" class="thead" align="left"> </th> <br/> <br/>
										</tr>
										
										
										<tr>
											<td width="25%" align="right"><br/>Name of School:</td> 
											<td width="75%" align="left"><br/><input  type="text" size="30" readonly="" value= "<?php echo $_SESSION['valid_schname'] ?> " /></td>
										</tr>
										
											<tr>
											<div style="font-size:13px;">
											<td width="25%" align="right"> School Address:</td> 
											
											<td width="75%" align="left">
											
											<input readonly="" type="text" size="35" class="smallText" name="street" value="<?php echo $_SESSION['valid_schstreet'] ?>"/>
											<input readonly="" type="text" size="12" class="smallText" name="region" value="<?php echo $_SESSION['valid_schreg'] ?>"/>   
											<input readonly="" type="text" size="27" class="smallText" name="province" value="<?php echo $_SESSION['valid_schprov'] ?>"/> 
											<input readonly="" type="text" size="35" class="smallText" name="city/municipality" value="<?php echo $_SESSION['valid_schmun'] ?>"/><br/> 
		
		Zip Code: <input name="zipSchool" type="text" class="smallText" readonly="" size="15" value="<?php echo $_SESSION['valid_schzip'] ?>" />		
       Rurban Code:
		<input class="smallText" name="rurSchool" type="text" readonly="" size="15" value="<?php echo $_SESSION['valid_schrur'] ?>"/>
		  Area Code:
		<input class="smallText" name="areaSchool" type="text" readonly="" size="15" value="<?php echo $_SESSION['valid_scharea'] ?>"/>
											</td>
											</div>	
										</tr>
										
										
											
										<tr>
										<td width="25%" align="right">PRC School Code :</td> 
										<td width="75%" align="left"><input type="text" readonly="" size="15" value="<?php echo $_SESSION['valid_schcode'] ?>"/></td>
										</tr>
										
											<tr>
											<td width="25%" align="right">Degree/Course Obtained:</td> 
											<td width="75%" align="left"><input type="text" size="12" readonly="" value="B.S. Nursing"/></td>
										</tr>
										
											<tr>
											<td width="25%" align="right">PRC Course Code:</td> 
											<td width="75%" align="left"><input type="text" size="2" readonly="" value="4018"/></td>
										</tr>
										
										</tr>
										
											<tr>
											<td width="25%" align="right">Review School Attended:</td> 
											<td width="75%" align="left"><select name="reviewSchool">
											<option>Review School</option>
											</select></td>
										</tr>
										
									</tr>
										
											<tr>
											<td width="25%" align="right">Review Center Attended:</td> 
											<td width="75%" align="left">
											<select name = 'selRCenter' onChange="form.submit()">
                                                <option value="0"> --Select Review Center-- </option>
                                                <?php
													   		$qcitRC = "select distinct RC_Name from review_centers order by RC_Name ";
															//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                            $q2=mysql_query($qcitRC);
															while($row=mysql_fetch_array($q2)){
                                                            ?>
                                                <option value = '<?php echo $row['RC_Name'] ;?>' <?php if($_GET['selRCenter']==$row['RC_Name']){echo "selected";}?>> <?php echo " ".$row['RC_Name'] ;?></option>
                                                
												<?php  } ?>
									
										 </select> 
											
										<input type="hidden" name= 'rc_id'
											 <?php
													   		$qrcid = "select distinct rc_id from review_centers where  rc_name = '".$_GET['selRCenter']."' and  rc_name is not null";
															//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                            $q3=mysql_query($qrcid);
															while($row3=mysql_fetch_array($q3)){
											?>
										  	value = '<?php echo $row3['citizenship_id'] ;?>
                                            <?php } ?>' >		
											</input>
											</td>
										</tr>
										
										
										
								
										
											
															
								
			<!--					<?php /* checking purposes row ?>		
									<tr> 
									<td></td>
									<td>
											<?php 
									
									echo $_GET['lastName'].$_GET['firstName'];
									echo '<br/>';
									echo $_GET['firstName'];
									echo '<br/>';
									echo $_GET['middleName'];
									echo '<br/>';
									echo $_GET['mi'];
									echo '<br/>';
									echo $_GET['sex'];
										echo '<br/>';
											echo $_GET['houseStreet'];
										echo '<br/>';
												echo $_GET['mailingAdd_id'];
											echo '<br/>';
												echo $_GET['selCit'];
											echo '<br/>';
											echo $_GET['email'];
											echo '<br/>';
											echo $_GET['selCitSpouse'];
											echo '<br/>';
											echo $_GET['selCitFather'];
											echo '<br/>';
												echo $_GET['selCitMother'];
											echo '<br/>';
											echo $_GET['convict'];
											echo '<br/>';
											echo $_GET['hasDocs'];
											echo '<br/>';
											echo $_GET['mmb'];
											echo '<br/>';
											echo $_GET['ddb'];
											echo '<br/>';
											echo $_GET['yyyyb'];
											echo '<br/>';
												echo $_GET['civil'];
											echo '<br/>';
											echo $_GET['mailingAdd_id'];
											echo '<br/>';
												echo $_GET['birthAdd_id'];
											echo '<br/>';
												echo $_GET['selRegion'];
											echo '<br/>';
												echo $_GET['selRegionB'];
											echo '<br/>';
														
*/ ?>
									</td>
									</tr> -->
	
									
																	
									</table>
									
	<table id='addCourseTable' border="1" width="100%" bgcolor="#C0C0C0" bordercolor="#990000" cellpadding="1" cellspacing="2">																
														
						<?php 
						$reg = 1;
						$regcount=$_GET['addcrs'];
						while($reg<=$regcount){
							$registrarname='registrarname'.$reg;
							$registrarlastname='registrarlastname'.$reg;
							$username='username'.$reg;
							$pwd = 'userpass'.$reg;
							$chkbox='enabled'.$reg;
							$prevCourse='prevcourse'.$reg;
							$prevCourseID='c_id'.$reg;
							$prevSchool='prevschool'.$reg;
							$prevSchoolID='sch_id'.$reg;
							$schoolCode='schoolcode'.$reg;
							$address='address'.$reg;
							$mmCourse='mmcourse'.$reg;
							$ddCourse='ddcourse'.$reg;
							$yy1Course='yy1course'.$reg;
							$yy2Course='yy2course'.$reg;
							
						?>
					<!-- prevCourse dropdown -->
					<tr>
								<td width="65%" align="left" class="tcontent">							
																						
							Previouse Course <?php echo $reg; ?>: <select name = "prevcourse<?php echo $reg; ?>" onChange="form.submit()">
								<option value="0"> --Select Previous Course-- </option>
								<?php
											$qcrs = "select Course_Name from course order by Course_Name ";
											//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
											$q2=mysql_query($qcrs);
											while($row=mysql_fetch_array($q2)){
											?>
								<option value = '<?php echo $row['Course_Name'] ;?>' <?php if($_GET[$prevCourse]==$row['Course_Name']){echo "selected";}?>> <?php echo " ".$row['Course_Name'] ;?></option>
								
								<?php  } ?>
					
						 </select> 
							
						<input type="hidden" name= "c_id<?php echo $reg; ?>"
							 <?php
											$qcid = "select distinct course_id from course where  course_name = '".$_GET[$prevCourse]."' and  Course_name is not null";
											//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
											$q3=mysql_query($qcid);
											while($row3=mysql_fetch_array($q3)){
							?>
							value = '<?php echo $row3['course_id'] ;?>
							<?php } ?>' >		
						</input>
							

							</td>
												
							<td>
							<?php //echo $_GET[$prevCourseID];?>
							</td>
												
					</tr>
												
					<!-- prevSchool dropdown -->							
					<tr>
							<td width="20%" align="left" class="tcontent">
												
																
				 &nbsp;&nbsp; School Graduated: <select name = "prevschool<?php echo $reg; ?>" onChange="form.submit()">
									<option value="0"> --Select School-- </option>
									<?php
											$qsch = "select School_Name from schools order by School_Name ";
											//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
											$q2=mysql_query($qsch);
											while($row=mysql_fetch_array($q2)){
											?>
								<option value = '<?php echo $row['School_Name'] ;?>' <?php if($_GET[$prevSchool]==$row['School_Name']){echo "selected";}?>> <?php echo " ".$row['School_Name'] ;?></option>
								
									<?php  } ?>
					
								 </select> 
							
								<input type="hidden" name= "sch_id<?php echo $reg; ?>" onFocus="form.submit()" 
									<?php
											$qschid = "select distinct school_id from schools where  school_name = '".$_GET[$prevSchool]."' and  school_name is not null";
											//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
											$q3=mysql_query($qschid);
											while($row3=mysql_fetch_array($q3)){								
									?>
									value = '<?php echo $row3['school_id'] ;?>
									<?php } ?>' >		
								</input>

							</td>    
												
							<td width="6%" align="center" class="tcontent">
								<?php //echo $_GET[$prevSchoolID];?>
								
						School Code: <input name = "schoolcode<?php echo $reg; ?>" size="10" readonly=""
							  
								<?php
											$qcode = "select distinct prc_school_code from schools where   school_name = '".$_GET[$prevSchool]."' and  school_name is not null";
											//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
											$q2=mysql_query($qcode);
											while($row3=mysql_fetch_array($q2)){
								 ?>
							   value ='<?php echo $row3['prc_school_code'] ;?>'>
							  
							   <?php } ?>
									</input >
							
												
							</td>
												
					</tr>		
										
					<tr>	
												
												
							<td width="70%" align="center">
			
									 <?php
											$qadd = "SELECT * from addresses INNER JOIN schools ON addresses.address_id = schools.address_id where school_name ='".$_GET[$prevSchool]."'";
											//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
											$q2=mysql_query($qadd);
											while($row3=mysql_fetch_array($q2)){			
									 ?>
						   
							<input readonly="" type="text" size="38" class="smallText" name="schstreet" value='<?php echo $row3['Street_Bryg']; ?>'>
							<input readonly="" type="text" size="11" class="smallText" name="schregion" value='<?php echo $row3['Region']; ?>'>   
							<input readonly="" type="text" size="30" class="smallText" name="schprovince" value='<?php echo $row3['Province'];  ?>'> 
							<input readonly="" type="text" size="38" class="smallText" name="schcity/municipality" value='<?php echo $row3['City_Town']; ?>'><br/> 
							Zip Code: <input name="zipSchool" type="text" class="smallText" readonly="" size="11" value='<?php echo $row3['Zip_Code'];  ?>' >	
							Rurban Code: <input class="smallText" name="rurSchool" type="text" readonly="" size="11" value='<?php echo $row3['Rurban_Code']; ?>'>
							Area Code: <input class="smallText" name="areaSchool" type="text" readonly="" size="11" value='<?php echo $row3['Area_Code']; ?>'>
								 <?php } ?>
							</td>
											
												
												
							<td width="20%" align="center" class="tcontent"> <font size="-1">
									 Graduated<font size="-2"> (mm/dd/yyyy):</font>	<br/><select name="mmcourse<?php echo $reg; ?>" >
											<?php
									
											 for($rm=1;$rm<=9;$rm++){ ?>
												<option value="0<? echo $rm ?>" 			
												<?php if($_GET[$mmCourse]==$rm) { 
															echo 'selected="selected"';}?> >
												0<? echo $rm ?>	
												<?php }?>     
											
											<?php 
											$rmc=10;
												while($rmc<13){ ?>
												<option value="<? echo $rmc ?>" 			
												<?php if($_GET[$mmCourse]==$rmc) { 
													echo 'selected="selected"';}?> > 
													<? echo $rmc ;?> 	
												<?php ++$rmc;}?>     
									                          
										</select>
										 
										<select name="ddcourse<?php echo $reg; ?>" >
											<?php
										 for($rd=1;$rd<=9;$rd++){ ?>
												<option value="0<? echo $rd ?>" 			
												<?php if($_GET[$ddCourse]==$rd) { 
															echo 'selected="selected"';}?> >
												0<? echo $rd ?>	
												<?php }?>     
											
											<?php 
											$rdc=10;
												while($rdc<32){ ?>
												<option value="<? echo $rdc ?>" 			
												<?php if($_GET[$ddCourse]==$rdc) { 
													echo 'selected="selected"';}?> > 
													<? echo $rdc ;?> 	
												<?php ++$rdc;}?>     
										</select> 
										
										<select name="yy1course<?php echo $reg; ?>" >
											<?php
									
											 for($rm=1;$rm<=9;$rm++){ ?>
												<option value="0<? echo $rm ?>" 			
												<?php if($_GET[$yy1Course]==$rm) { 
															echo 'selected="selected"';}?> >
												0<? echo $rm ?>	
												<?php }?>     
											
											<?php 
											$rmc=10;
												while($rmc<100){ ?>
												<option value="<? echo $rmc ?>" 			
												<?php if($_GET[$yy1Course]==$rmc) { 
													echo 'selected="selected"';}?> > 
													<? echo $rmc ;?> 	
												<?php ++$rmc;}?>     
									                          
										</select>
										
										<select name="yy2course<?php echo $reg; ?>" >
											<?php
									
											 for($rm=1;$rm<=9;$rm++){ ?>
												<option value="0<? echo $rm ?>" 			
												<?php if($_GET[$yy2Course]==$rm) { 
															echo 'selected="selected"';}?> >
												0<? echo $rm ?>	
												<?php }?>     
											
											<?php 
											$rmc=10;
												while($rmc<100){ ?>
												<option value="<? echo $rmc ?>" 			
												<?php if($_GET[$yy2Course]==$rmc) { 
													echo 'selected="selected"';}?> > 
													<? echo $rmc ;?> 	
												<?php ++$rmc;}?>     
									                          
										</select>
										</font>
							</td>
												
											<!-- sample code	
												<td>&nbsp;Firstname: <input name="registrarname<?php echo $reg; ?>" type="text" value="<?php echo $_GET[$registrarname];?>" size="25"></input><br/>&nbsp;Lastname: <input name="registrarlastname<?php echo $reg; ?>" type="text"  value="<?php echo $_GET[$registrarlastname];?>" size="25"></input></td>
												<td align="center">&nbsp;Username: <input name="username<?php echo $reg; ?>" type="text" value="<?php echo $_GET[$username];?>" size="25"></input><br/>&nbsp;Password: <input type="password" name = "userpass<?php echo $reg; ?>" value="<?php echo $_GET[$pwd];?>" size="25"></input></td>						
												<td align="center">&nbsp;Access: 
												<input name="enabled<?php echo $reg; ?>" 
												<?php if($_GET[$chkbox]=="on"){echo 'checked';}?> type="checkbox"  >
												</input>
												</td>
												<td>
												</td>
											 -->
							</tr>
										<?php $reg++;} ?>
		</table>				
				
				

								
								
									
									<table width="100%" cellspacing="0" cellpadding="5" align="center" bgcolor="#C0C0C0"> 
										<tr>
											<th width="25%" class="thead"><div align="left">PREVIOUS NLE TAKEN</div></th>
											<th width="75%" class="thead" align="left"></th>
										
									</table>
						<?php
										$type1 ='repeater';
										$type2 ='conditioned';
										$gettype=$_GET['etype'];
										if ($type1==$gettype || $type2==$gettype) {
										?>			
									<table id="nle" width="100%" border="1px" cellpadding="1" cellspacing="1" bgcolor="#C0C0C0" bordercolor="#990000">
										
										
										<tr>
											<th width="20%" >Name of Examination</th>
											<th width="15%" >Place of Examination</th>
											<th width="20%"  >Date Taken <br/> (<em>mm/dd/yyyy)</em></th>
											<th width="5%" >Rating</th>
											<th width="30%" >Result of Examination</th>
											<th width="8%" >Exam No.</th>
											
										
										</tr>
										<? $i=0;
											for (; $i<3; $i++)
										{ ?>
										
										<tr>
											<th width="20%" align="center" class="tcontent"><label>Name of Examination</label></th>
											<th width="15%" align="center" class="tcontent"><label>Place</label></th>
											<th width="20%" align="center" class="tcontent"> <label> Date of Examination</label></th>
											
											<th width="5%" align="center" class="tcontent"><label>Rating</label></th>
											
											<th width="30%" align="center" class="tcontent">										<label>
											  <label>
											  <input type="checkbox" name="resultOfExam" disabled >
  Passed</label>
											
											  <label>
											  <input type="checkbox" name="resultOfExam" disabled>
  Failed</label>
											 
											  <label>
											  <input type="checkbox" name="resultOfExam" checked disabled >
  Cond.</label>	  
												</label></th>
												<th width="8%" align="center" class="tcontent"><label>Exam No.</label></th>
											
										</tr>
										
										
										<? }  ?>
									
											
</table>
		<? }  ?>								
									   <table width="100%" cellspacing="0" cellpadding="5" align="center" bgcolor="#C0C0C0"> 
										<tr>
											<td width="50%" align="left"> <br/>Type of Examination: <font color="#990000"><strong><?php echo $_GET['etype']; ?></strong></font> </td> 
											<td width="50%" align="right"><br/>Number of Times Taken: <font color="#990000"><strong><label>NX CODE </label></strong></font></td> 	
										</tr>
										
										</table>
									<br/>
									<table width="100%">
									<td width="50%" align="right"> <input type="reset" value="CANCEL" name="resetx"> </input> </td>
									<td width="50%" align="left"> <input type="submit" value="SAVE" name="submitx"> </td>
									</table>
									
									
</form>
									
<?php	if(isset($_GET['submitx'])){
									//echo 'DELETE ME AFTER TESTING<br>';
										
										$examineeType=$_GET['etype'];
										$examineeDegree=$_GET['deg'];
										
										$firstName=$_GET['firstName'];
										$lastName=$_GET['lastName'];
										$middleName=$_GET['middleName'];
										$middleInitial=$_GET['mi'];
										$sex=$_GET['sex'];
										$houseStreet=$_GET['houseStreet'];
										$mailingAdd=$_GET['mailingAdd_id'];
										$citizenship=$_GET['cit_id'];
										$email=$_GET['email'];
										
										$areaCode=$_GET['selAreaLandline'];
										$landline7=$_GET['landline7dig'];
										$telephone="".$areaCode."".$landline7.""; 
										
										$cell4=$_GET['cell4dig'];
										$cell7=$_GET['cell7dig'];
										$cellphone="".$cell4."".$cell7.""; 
										
										$civilStatus=$_GET['civil'];
										$spouseName=$_GET['spouseName'];
										$spouseCitizenship=$_GET['citSp_id'];
										
										$mmBday=$_GET['mmb'];
										$ddBday=$_GET['ddb'];
										$yy1Bday=$_GET['yyb1'];
										$yy2Bday=$_GET['yyb2'];
										$birthday="".$yy1Bday."".$yy2Bday."".$mmBday."".$ddBday."";
										$birthplace=$_GET['birthAdd_id'];
										
										$motherName=$_GET['motherName'];
										$motherCitizenship=$_GET['citMo_id'];
										$fatherName=$_GET['fatherName'];
										$fatherCitizenship=$_GET['citFa_id'];
										
										$convicted = $_GET['convict'];
										$hasSubmitted = $_GET['hasDocs'];
										$schoolID = $_SESSION['valid_schid'];
								
										$registrar = $_SESSION['valid_userid'];
																				
										#insert school query
										$insertstudent = 'INSERT INTO students (
										First_Name,
										Last_Name,
										Middle_Name,
										MI,
										Sex,
										Street_Brgy,
										Address_ID,
										Citizenship,
										Email_Address,
										Telephone,
										Mobile_Number,
										Marital_Status,
										Birth_Date,
										Birth_Place_Add_id,
										Spouse,
										Spouse_Citizenship,
										Father,
										Father_Citizenship,
										Mother,
										Mother_Citizenship,
										Convicted,
										Convicted_File,							
										Created_By,
										school_id) VALUES (
											"'.$firstName.'",'.
										'"'.$lastName.'",'.
										'"'.$middleName.'",'.
										'"'.$middleInitial.'",'.
										'"'.$sex.'",'.
										'"'.$houseStreet.'",'.
										'"'.$mailingAdd.'",'.
										'"'.$citizenship.'",'.
										'"'.$email.'",'.
										'"'.$telephone.'",'.
										'"'.$cellphone.'",'.
										'"'.$civilStatus.'",'.
										'"'.$birthday.'",'.
										'"'.$birthplace.'",'.
										'"'.$spouseName.'",'.
										'"'.$spouseCitizenship.'",'.
										'"'.$fatherName.'",'.
										'"'.$fatherCitizenship.'",'.
										'"'.$motherName.'",'.
										'"'.$motherCitizenship.'",'.
										'"'.$convicted.'",'.
										'"'.$hasSubmitted.'",'.
										'"'.$registrar.'",'.
										'"'.$schoolID.'")';
											
									
										 
					if($firstName!="" && $lastName!="" && $middleName!="" && $middleInitial!="" && $sex!="" && $houseStreet!="" && $mailingAdd!="" && $citizenship!="" && $email!="" && $civilStatus!="" && $birthday!="" && $birthplace!="" && $fatherName!="" && $fatherCitizenship!="" && $motherName!="" && $motherCitizenship!="" && $convicted!=""  && $registrar!="" && $schoolID!=""  ){

											if(!@mysql_query($insertstudent)){
													echo '<script language="javascript">alert("Student Profile NOT Added.)</script>';
												echo(mysql_error()); 
											} else {
												#get id of the added school
												$getidstudent = 'SELECT Student_ID from students WHERE First_Name = "'.$firstName.'" and Last_Name = "'.$lastName.'" and Middle_Name = "'.$middleName.'" and MI = "'.$middleInitial.'"';
												$sqidstudent = mysql_query($getidstudent);
											
												while($idrow=mysql_fetch_array($sqidstudent)){
													$idstudent=$idrow['Student_ID'];
												}
												//echo 'Student Profile added.<br>';
												echo '<script language="javascript">alert("Student Profile Added!")</script>';
												
										/*		$cnt=1;
												$role=2;
												$name = array();
												$last = array();
												$user = array();
												$pass = array();
												#string query for adding registrar info 
												$insertregistrar = 'INSERT INTO users (
												Username,											
												user_first,
												user_last,
												Role_ID,
												position,
												school_id,
												active,
												Password) VALUES 
												';
												
												while($cnt<=$_GET['addreg']){
													$n='registrarname'.$cnt;
													$l='registrarlastname'.$cnt;
													$u='username'.$cnt;
													$p='userpass'.$cnt;
													$s='enabled'.$cnt;
													$name[$cnt]=$_GET[$n];
													$last[$cnt]=$_GET[$l];
													$user[$cnt]=$_GET[$u];
													$pass[$cnt]=$_GET[$p];
														if($_GET[$s]=="on"){
															$uenabled[$cnt]=1;
														}else{
															$uenabled[$cnt]=0;
														}
													##echo $name[$cnt];
													
													$insertregistrar = $insertregistrar.'("'.$user[$cnt].'","'.$name[$cnt].'","'.$last[$cnt].'", "'.$role.'","Registrar", "'.$idschool.'","'.$uenabled[$cnt].'","'.$pass[$cnt].'")';
													
														if($_GET['addreg']!=$cnt){
															$insertregistrar = $insertregistrar.',';
													}
													$cnt++;
												} */
												 
												
												##fortesting
												##echo $insertregistrar;
												
												##insert data for the registrars
												/*if(!@mysql_query($insertregistrar)){
													echo '<script language="javascript">alert("Registrar NOT Added!")</script>';
												}	
												else {
													
													echo '<script language="javascript">alert("Registrar Added!")</script>';
												}*/		
												
											} 
										} else {
												  	echo '<script language="javascript">alert("Student Profile NOT Added. Check your entries.")</script>';
													
												  }
												
									} 
								
?>
									
									
									
	