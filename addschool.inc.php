<form name="form" method="post" enctype="multipart/form-data" action="bonschool.php">		
                                        <tr>
											
											<th width="25%" class="thead">Add School</th>
											<th width="85%" class="thead"></th>
										</tr>
                                        
								
										<tr>
										<td width="15%" align="right"> School Name:<br/><br/></td> 
										<td width="85%" align="left"> <input name="schoolName" type="text" value="<?php echo $_POST['schoolName'];?>" size="45"><br/><br/></td>
										</tr>
										
										<tr>
											<td width="15%" align="right"> Status:</td> 
											<td width="85%" align="left"> <input name="schoolStatus" type="radio" value="1" <?php if($_POST['schoolStatus'] == "1"){?> checked <?php }?>/><font color="#00FF00"><strong/>Active</font></input>
											</td>
										</tr>
										
										<tr>
										<td width="15%" align="right"><br/><br/></td> 
										<td width="85%" align="left"><input type="radio" name="schoolStatus" value="0" <?php if($_POST['schoolStatus'] == "0"){?> checked <?php }?>/><font color="#FF0000"><strong/>Closed</input></font><br/><br/></td>
										</tr>
										
										<tr>
										<td width="15%" align="right">PRC School Code:<br/><br/></td> 
										<td width="85%" align="left"><input name="prcSchoolCode" type="text" value="<?php echo $_POST['prcSchoolCode'];?>" size="25"/><br/><br/></td>
										</tr>
										
										<tr>
										<td width="15%" align="right">PRC Address:<br/><br/></td> 
										<td width="85%" align="left"><input name="prcAddress" type="text" value="<?php echo $_POST['prcAddress'];?>" size="45"/><br/><br/></td>
										</tr>
										
										<tr>
										
										<td width="15%" align="right">PRC Address Code:<br/><br/></td> 
										<td width="85%" align="left"><input name="prcAddressCode" type="text" value="<?php echo $_POST['prcAddressCode'];?>" size="25"/><br/><br/></td>
										</tr>
												
										<tr>
										<div style="font-size:13px;">
											<td width="15%" align="right"> Location: </td> 
											
											<td width="40%" align="left"><select name="selRegion"  style="font-size:11px;"onChange="form.submit()"> <option value="0">--Select Region--</option>
                                            <?php $getRegion = @mysql_query("select distinct region from addresses");
																			if(!result){exit('<p>Error performing query: ' . mysql_error() . '</p>');}
																			while($row=mysql_fetch_array($getRegion)){
																				?>
                                                                                <option value = "<?php echo $row['region'];?>" <?php if($_POST['selRegion']==$row['region']){?> selected<?php } ?>><?php echo $row['region']; ?></option>  <?php }?>
											<!---<option>Region 1</option>
											<option>Region 2</option>
											<option>Region 7</option>--> </select>
											
											
											&nbsp;  <select name="selProvince"  style="font-size:11px;" onChange="form.submit()">
											  <option value="0">--Select Province--</option>
                                              <?php  $qstring = "select distinct province from addresses where Region = ".$_POST['selRegion'];
											  $getProvince = @mysql_query($qstring);
											  if(!result){exit('<p>Error performing query: ' . mysql_error() . '</p>');}//if(!result){exit("");}
											  while($row=mysql_fetch_array($getProvince)){
											  ?>
                                                                                <option value = "<?php echo $row['province'];?>" <?php if($_POST['selProvince']==$row['province']){?> selected<?php } ?>><?php echo "".$row['province']; ?></option>  <?php }?>
											</select>
											
											&nbsp;  <select name="selMunicipaplityCity"  style="font-size:11px;" onChange="form.submit()">
                                            <option value="0">--Select Municipality / City--</option>
											<?php 
												$qstring ="Select distinct city_town from addresses where province = '".$_POST['selProvince']."'";
												$getCity = @mysql_query($qstring);
												if(!result){exit('<p>Error performing query: ' . mysql_error() . '</p>');}
												while($row=mysql_fetch_array($getCity)){
												?>
                                           <option value = "<?php echo $row['city_town'];?>" <?php if($_POST['selMunicipaplityCity']==$row['city_town']){?> selected<?php } ?>><?php echo " ".$row['city_town']; ?></option>  
												<?php }
											?>
                                               </select>												
											&nbsp;  <select name="ZipCode"  style="font-size:11px;">
											  <option value="0">--Select Zip Code--</option>
                                              <?php 
												$qstring ="Select distinct zip_code from addresses where city_town = '".$_POST['selMunicipaplityCity']."'";
												$getZip = @mysql_query($qstring);
												if(!result){exit('<p>Error performing query: ' . mysql_error() . '</p>');}
												while($row=mysql_fetch_array($getZip)){
												?>
                                                <option value = "<?php echo " ".$row['zip_code'];?>" <?php if($_POST['ZipCode']==$row['zip_code']){?> selected<?php } ?>><?php echo " ".$row['zip_code']; ?></option>  
												<?php }
											?>
											</select>
								
											</td>
											</div>
											
										</tr>
										
										
										<tr>
											
											<td width="15%" align="right">Registrar Entry:
											</td>
											<td width="85%" align="left">
											
												<br/><table id='addRegTable' border="3" width="100%" bordercolor="#0099FF">																
														<tr>
															<td align="right" width="15%">Registrar 1:</td>  
															<td>&nbsp;Firstname: <input name="registrarname1" type="text" id="addRegFrst0" value="<?php echo $_POST['registrarname1'];?>" size="25"></input><br/>&nbsp;Lastname: <input name="registrarlastname1" type="text" id="addRegLst0" value="<?php echo $_POST['registrarlastname1'];?>" size="25"></input></td>
															<td align="center">&nbsp;Username: <input name="username1" type="text" id="addRegUser0" value="<?php echo $_POST['username1'];?>" size="25"></input><br/>&nbsp;Password: <input type="password" id="addRegPass0" value="<?php echo $_POST[''];?>" size="25"></input></td>						
															<td align="center">&nbsp;Access: <input type="checkbox" id="addRegChk0"></input></td>
														</tr>
														
														<tr>

															<td align="right" width="15%">Registrar 2:</td> 
															<td>&nbsp;Firstname: <input name="registrarname2" type="text" id="addRegFrst1" value="<?php echo $_POST['registrarname2'];?>" size="25"></input><br/>&nbsp;Lastname: <input name="registrarlastname2" type="text" id="addRegLst1" value="<?php echo $_POST['registrarlastname2'];?>" size="25"></input></td>
															<td align="center">&nbsp;Username: <input name="username2" type="text" id="addRegUser1" value="<?php echo $_POST['username2'];?>" size="25"></input><br/>&nbsp;Password: <input type="password" id="addRegPass1" value="<?php echo $_POST[''];?>" size="25"></input></td>						
															<td align="center">&nbsp;Access: <input type="checkbox" id="addRegChk1" ></input></td>
															
														</tr>
												</table>			
											</td>	
										
										</tr>
										
										<tr>
										
										<td width="15%" align="right"><br/><br/></td> 
										
										<td width="85%" align="left">
										<input type="button" name="reg" value="Add Registrar" onclick="addReg()">
                                        
										</td>
										</tr>
									
		
										<table width="100%">
												<td width="50%" align="right"><input type="reset" value="CANCEL" onclick = "removeReg()"></td><br/>
												<td width="50%" align="left"><input type="submit" value="SAVE" name ="submitx"></td>
										</table>
										
									</form>