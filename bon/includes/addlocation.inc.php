<form method="GET" enctype="multipart/form-data">
		<table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="left">
							<tr>
								<td width="100%" align="left" class="bodyText" >
									<table width="100%" bordercolor="#0000FF" cellpadding="1" cellspacing="0" align="center">
										<tr>
											
											<th width="15%" class="thead">
											
											 Add PRC Location</th>
											<th width="85%" class="thead"></th>
										</tr>
										
									
										<tr>
										<td width="15%" align="right"><br/>
											<input name="add" type="hidden" id="add" value="Add PRC Location" />
											 <input name="reseter" type="hidden"/>
											 PRC Location Name:<br/><br/></td> 
										<td width="85%" align="left"><br/> <input type="text" size="40" name="prcName" value ="<?php echo $_GET['prcName'];?>" />
										<br/><br/></td>
										</tr>
										
										<tr>
										<td width="15%" align="right">Code (ex. M):<br/><br/></td> 
										<td width="85%" align="left"> <input type="text" size="5" name="code" value="<?php echo $_GET['code'];?>" />
										<br/><br/></td>
										</tr>
										
										<tr>
										<td width="15%" align="right">Street:<br/><br/></td> 
										<td width="85%" align="left"><input type="text" size="60" name="address" value = "<?php echo $_GET['address'];?>"/><br/><br/></td>
										</tr>
										
										<tr>
										<div style="font-size:13px;">
										<td width="15%" align="right"> Location: </td> 
								
								<? // this table data  handles the automation of the dropdowns for a certain location ?>		
										<td width="85%" align="left">
										  
										 <? // dropdown for the region ?>
										 
										  <select name= 'selRegion' onchange="form.submit()">
										  <option value="0"> --Select Region-- </option>
                                           
                                            <?php
												$sql = 'SELECT DISTINCT Region FROM addresses ORDER BY Region'; 
													if (!@mysql_query($sql)){
													}
													else{
														$q=mysql_query($sql);
                                                         	while($row=mysql_fetch_array($q)){
                                            ?>			
                                           						 <option value = '<?php echo $row['Region'] ;?>' <?php if($_GET['selRegion']==$row['Region']){echo "selected";}?>> <?php echo "".$row['Region'] ;?> 
																 </option>
                                            <?php 			} 
														} ?>
										    </select>
										    &nbsp;
											
											<? // dropdown for the province ?>
											
											<select name = 'selProvince'  onchange="form.submit()">
                                            <option value="0"> --Select Province-- </option>
                                            <?php
												$qprov = "select distinct province from addresses  where region = '".$_GET['selRegion']."' and province is not null";													 
                                                $q1=mysql_query($qprov);
													while($row1=mysql_fetch_array($q1)){
                                             ?>
                                            			 <option value = '<?php echo $row1['province'] ;?>' <?php if($_GET['selProvince']==$row1['province']){echo "selected";}?>> <?php print($row1['province']);?>
														 </option>
                                              <?php } ?>
											</select>
											&nbsp;
											  
											<? // dropdown for the municipality / city ?>
											
											<select name = 'selMunicipalityCity'  onchange="form.submit()">
                                       		<option value="0"> --Select Municipality / City-- </option>
                                            <?php
												$qmun = "select distinct city_town from addresses where  province = '".$_GET['selProvince']."' and region ='".$_GET['selRegion']."' and city_town is not null";
												//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                $q2=mysql_query($qmun);
													while($row3=mysql_fetch_array($q2)){
                                            ?>
                                               			<option value = '<?php echo $row3['city_town'] ;?>' <?php if($_GET['selMunicipalityCity']==$row3['city_town']){echo "selected";}?>> <?php echo " ".$row3['city_town'] ;?>
														</option>
                                              <?php } ?>
										   </select>
											&nbsp;
								
								<? // textfield for the zipcode ?>			  
								<br/> <br/>
								Zip Code: <input name = 'selZip' size="10" readonly=""
                                            <?php
												$qzip = "select distinct zip_code from addresses where  province = '".$_GET['selProvince']."' and region ='".$_GET['selRegion']."' and city_town ='".$_GET['selMunicipalityCity']."'and city_town is not null";
												//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                $q2=mysql_query($qzip);
													while($row3=mysql_fetch_array($q2)){
                                            ?>
                                               		value = '<?php echo $row3['zip_code'] ;?>'>		  
                                               <?php } ?>
										    </input >
								
								<? // textfield for the rurban code ?>					
								Rurban Code: <input name = 'selRur' size="10" readonly=""
                                              
                                     		<?php
												$qrur = "select distinct rurban_code from addresses where  province = '".$_GET['selProvince']."' and region ='".$_GET['selRegion']."' and city_town ='".$_GET['selMunicipalityCity']."'and city_town is not null";
												//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                $q2=mysql_query($qrur);
															while($row3=mysql_fetch_array($q2)){
                                                ?>
                                               					value = '<?php echo $row3['rurban_code'] ;?> '>
											 
                                               			<?php } ?>
										    </input >
								
							  <? // textfield for the area code ?>				
							  Area Code: <input name = 'selAdd' size="10" readonly=""
                                              
                              <?php
									$qarea = "select distinct area_code from addresses where  province = '".$_GET['selProvince']."' and region ='".$_GET['selRegion']."' and city_town ='".$_GET['selMunicipalityCity']."'and city_town is not null";
									//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                    $q2=mysql_query($qarea);
										while($row3=mysql_fetch_array($q2)){
                                        ?>
                                               value = '<?php echo $row3['area_code'] ;?>'>
											 
                                  <?php } ?>
											</input >
											
											
								 <? // form to get the address id of the whole location ?>
								
								 <input type="hidden" name= 'add_id'
								<?php
								$qaid = "select distinct address_id from addresses where  province = '".$_GET['selProvince']."' and region ='".$_GET['selRegion']."' and city_town ='".$_GET['selMunicipalityCity']."'and city_town is not null";
								//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                $q2=mysql_query($qaid);
									while($row3=mysql_fetch_array($q2)){
								?>
										value = '<?php echo $row3['address_id'] ;?> '>
                              <?php } ?>
											
								</input>
																						  				  
								  </td>						
											
								</div>	
									</tr>
									
										<tr>
										<td width="15%" align="right"></td> 
										<td width="85%" align="left"> 
										<?php 
// these codes handles the insertion of the values supplied above
			
			if(isset($_GET['submitx'])){
				//echo 'DELETE ME AFTER TESTING!<br>';
				$ln = $_GET['prcName'];
				$lc = $_GET['code'];
				$comad = $_GET['address'];
				$aid = $_GET['add_id'];
				
				$insertlocation = 'INSERT INTO prclocations (
												code,
												location,
												Address_ID,																										
												Com_Address
												) VALUES (
													 "'.$lc.'",'.	
													'"'.$ln.'",'.
													'"'.$aid.'",'.
													'"'.$comad.'")';
												
					if($ln!="" && $lc!="" && $comad!="" && $aid!=""){
						
							if(!@mysql_query($insertlocation)){
							
							echo '<script language="javascript">alert("PRC Location NOT Added. Duplicate ENTRY on Code")</script>';
												echo(mysql_error()); 			
								//echo 'Cashier not added. Check your entries<br>';
												
							
							}
							
							else{
								$getid = 'SELECT code from prclocations WHERE location = "'.$ln.'" and Com_Address = "'.$comad.'" and Address_ID = "'.$aid.'"';
								$sqid = mysql_query($getid);
									while($idrow=mysql_fetch_array($sqid)){
										$id=$idrow['code'];
									}
							echo '<script language="javascript">alert("PRC Location successfully added.")</script>';
		
							// echo 'Location added.<br>';
							}		
				
					} else {
								//echo 'PRC Location not added. Check your entries<br>';
								echo '<script language="javascript">alert("PRC Location not added. Check your entries.")</script>';

							}
							
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
	
		<table align="center">
			<tr>
			  <td width="50%" align="right"><input type="reset" value="CANCEL" name="resetx"/></td><br/>
			<td width="50%" align="left"><input type="submit" value="SAVE" name="submitx"/></td>
		</tr>
		</table>
</form>

