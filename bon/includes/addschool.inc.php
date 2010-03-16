
<form name="form" method="GET" enctype="multipart/form-data" action="bonschool.php">
	<table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
							<tr>
								<td width="100%" align="left" class="bodyText" >
									<table width="100%"  bordercolor="#0000FF" cellpadding="1" cellspacing="0" align="center">
		
                                        <tr>
																
											<th width="25%" class="thead">Add School</th>
											<th width="85%" class="thead">&nbsp;</th>
										</tr>
										
										
										
                                        
								
										<tr>
										<td width="15%" align="right"><br/><br/>School Name:
										  <input name="add" type="hidden" id="add" value="Add School" />
										  <input name="reseter" type="hidden"/>
										  <br/><br/></td> 
										<td width="85%" align="left"><br/> <br/> 
										<input name="schoolName" type="text" value="<?php echo $_GET['schoolName'];?>" size="45"><br/><br/>
										</td>
										</tr>
										
										<tr>
											<td width="15%" align="right"> Status:</td> 
										  <td width="85%" align="left"> 
											<input name="schoolStatus" type="radio" value="1" id="active"
											<?php if($_GET['schoolStatus'] == "1")
											{?> checked <?php }?>/><strong><font color="#006600"><label for="active">Active</label></font></strong>
											</input>
											</td>
										</tr>
										
										<tr>
											<td width="15%" align="right"><br/><br/></td> 
											<td width="85%" align="left"><input type="radio" name="schoolStatus" value="0" id="closed" <?php if($_GET['schoolStatus'] == "0"){?> checked <?php }?>/><font color="#FF0000"><strong/><label for="closed">Closed</label></input></font><br/><br/></td>
										</tr>
										
										<tr>
										<td width="15%" align="right">PRC School Code:<br/><br/></td> 
										<td width="85%" align="left"><input name="prcSchoolCode" type="text" value="<?php echo $_GET['prcSchoolCode'];?>" size="25"/><br/><br/></td>
										</tr>
										
										<tr>
										<td width="15%" align="right">Street Address:<br/><br/></td> 
										<td width="85%" align="left"><input name="streetAddress" type="text" value="<?php echo $_GET['streetAddress'];?>" size="45"/><br/><br/></td>
										</tr>
										
												
										<tr>
										<div style="font-size:13px;">
											<td width="15%" align="right"> Location: </td> 
											
										  <td width="40%" align="left"><select name= 'selRegion' onchange="form.submit()">
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
											
											<input type="hidden" name= 'add_id'
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
										  <td width="15%" align="right"><br/><br/>
										    <strong><font color="#990000">Registrar Entry</font></strong>
											</td>
											
											<td width="85%" align="left"> <br/><br/>
												
												<table id='addRegTable' border="3" width="100%" bordercolor="#0099FF">																
														
														<?php 
														$reg = 1;
														$regcount=$_GET['addreg'];
														while($reg<=$regcount){
															$registrarname='registrarname'.$reg;
															$registrarlastname='registrarlastname'.$reg;
															$username='username'.$reg;
															$pwd = 'userpass'.$reg;
															$chkbox='enabled'.$reg;
														?>
															<tr>
																<td align="right" width="15%">Registrar <?php echo $reg; ?>:</td>  
																<td>&nbsp;Firstname: <input name="registrarname<?php echo $reg; ?>" type="text" value="<?php echo $_GET[$registrarname];?>" size="25"></input><br/>&nbsp;Lastname: <input name="registrarlastname<?php echo $reg; ?>" type="text"  value="<?php echo $_GET[$registrarlastname];?>" size="25"></input></td>
																<td align="center">&nbsp;Username: <input name="username<?php echo $reg; ?>" type="text" value="<?php echo $_GET[$username];?>" size="25"></input><br/>&nbsp;Password: <input type="password" name = "userpass<?php echo $reg; ?>" value="<?php echo $_GET[$pwd];?>" size="25"></input></td>						
																<td align="center">&nbsp;Access: 
																<input name="enabled<?php echo $reg; ?>" 
																<?php if($_GET[$chkbox]=="on"){echo 'checked';}?> type="checkbox"  >
																</input>
																</td>
															</tr>
														<?php $reg++;} ?>
												</table>			
											
										</td>		
									</tr>
										
								
								<tr>
										<td width="15%" align="right"><br/>Add a Registrar:
										  
										
										</td> 
										
										<td width="85%" align="left">
										<br/>  
										<select name="addreg" id="addreg" onchange="form.submit();">
										  
										<!--<option value="0" selected="selected"></option> -->

										<!--<option value="0" selected="selected"></option> -->										 
										  <?php 
											 $registrylimit = 1;
										 	 for($rl=0;$rl<=$registrylimit;$rl++){
										   	?>
										   		<option value="<?php echo $rl?>" 
										   			<?php if($_GET['addreg']==$rl) { 
															echo 'selected="selected"';}?> > 
										   			<?php echo $rl ?>
										   
											<?php 
											}?>
									      
										  </select>
										
										 <input align="right" type="submit" name="submitr" value="Save Registrar">
										 </td>		  
								</tr>
								
								<tr>
										<td></td>
										<td> <br/>
											<?php 
									
									if(isset($_GET['submitx'])){
									//echo 'DELETE ME AFTER TESTING<br>';
										$schoolName=$_GET['schoolName'];
										$schoolStatus=$_GET['schoolStatus'];
										$prcSchoolCode=$_GET['prcSchoolCode'];
										$streetAddress=$_GET['streetAddress'];
										//$prcAddressCode=$_GET['prcAddressCode'];
										$selRegion=$_GET['selRegion'];
										$selProvince=$_GET['selProvince'];
										$selMunicipalityCity=$_GET['selMunicipalityCity'];
										$selZip=$_GET['selZip'];
										$selRur=$_GET['selRur'];
										#get address id first
										##query to get address id
										#$getidq='select Address_ID from addresses WHERE Zip_Code = "'.$selZip.'";';
										#$getidr=mysql_fetch_array(@mysql_query($getidq));
										$addressid = $_GET['add_id'];
										##temp user
										$user = $_SESSION['valid_userid'];
										$date = date("Y-m-d");										
										#insert school query
										$insertschool = 'INSERT INTO schools (
										School_Name,
										Address_ID,
										PRC_School_Code,
										Is_Active,
										Created_Date,
										Street_Brgy) VALUES (
										"'.$schoolName.'",'.
										'"'.$addressid.'",'.
										'"'.$prcSchoolCode.'",'.
										'"'.$schoolStatus.'",'.
										'"'.$date.'",'.
										'"'.$streetAddress.'")';
											
									
										 
					if($schoolName!="" && $addressid!="" && $prcSchoolCode!="" && $streetAddress!="" ){

											if(!@mysql_query($insertschool)){
													echo '<script language="javascript">alert("School NOT Added. Duplicate ENTRY on PRC School Code")</script>';
												echo(mysql_error()); 
											} else {
												#get id of the added school
												$getidschool = 'SELECT School_ID from schools WHERE School_Name = "'.$schoolName.'" and Address_ID = "'.$addressid.'" and PRC_School_Code = "'.$prcSchoolCode.'" and Street_Brgy = "'.$streetAddress.'"';
												$sqidschool = mysql_query($getidschool);
											
												while($idrow=mysql_fetch_array($sqidschool)){
													$idschool=$idrow['School_ID'];
												}
												echo 'School added.<br>';
												echo '<script language="javascript">alert("School Added!")</script>';
												
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
												  	echo '<script language="javascript">alert("School NOT Added. Check your entries.")</script>';
													
												  }
												
										##code below is for adding registrar user in a school;
										##function for clearing the forms
									} 
								
?>

<?php 
									
									if(isset($_GET['submitr'])){
								
									$prcSchoolCode=$_GET['prcSchoolCode'];
											
												#get id of the added school
												$getidschoolr = 'SELECT School_ID from schools WHERE PRC_School_Code = "'.$prcSchoolCode.'"';
												$sqidschoolr = mysql_query($getidschoolr);
											
												while($idrow=mysql_fetch_array($sqidschoolr)){
													$idschoolr=$idrow['School_ID'];
												}
											
												
												$cnt=1;
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
													##echo $name[$cnt];{
													if ($idschoolr!=""){
													$insertregistrar = $insertregistrar.'("'.$user[$cnt].'","'.$name[$cnt].'","'.$last[$cnt].'", "'.$role.'","Registrar", "'.$idschoolr.'","'.$uenabled[$cnt].'","'.$pass[$cnt].'")';
													
														if($_GET['addreg']!=$cnt){
															$insertregistrar = $insertregistrar.',';
													}} else {
													echo '<script language="javascript">alert("Add School First!")</script>';
													}
													$cnt++;
												}
												 
												
												##fortesting
												##echo $insertregistrar;
												
												##insert data for the registrars
												if(!@mysql_query($insertregistrar)){
													echo '<script language="javascript">alert("Registrar NOT Added or Duplicate Entry for Username ")</script>';
														echo(mysql_error()); 
												}	
												else {
													
													echo '<script language="javascript">alert("Registrar Added!")</script>';
												}		
												
											
									
												
										##code below is for adding registrar user in a school;
										##function for clearing the forms
									} 
								
?>



										
										</td>
									</tr>
										
									</table>
								</td>
							</tr>
					</table>
				</td>
			</tr>
	</table>
									
		
<table width="100%">
	<td width="50%" align="right"><input type="reset" value="CANCEL"  >
	</td><br/>
	<td width="50%" align="left"><input type="submit" value="SAVE SCHOOL" name ="submitx"></td>
</table>
											
</form>
								
