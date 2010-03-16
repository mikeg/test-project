
<form name="form" method="GET" enctype="multipart/form-data" action="boncashier.php" >
		<table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
							<tr>
								<td width="100%" align="left" class="bodyText" >
									<table width="100%" bordercolor="#0000FF" cellpadding="1" cellspacing="0" align="center">
										<tr>
											
											<th width="15%" class="thead">Add Cashier</th>
											<th width="85%" class="thead"></th>
										</tr>
										
										<tr>
										<td width="15%" align="right"><br/>  <input name="add" type="hidden" id="add" value="Add Cashier" />
										 <input name="reseter" type="hidden"/>
										 Firstname:<br/><br/></td> 
										<td width="85%" align="left"><br/> <input type="text" size="30" name="firstName" value="<?php echo $_GET['firstName'];?>"> </input><br/><br/></td>
										</tr>
										
										<tr>
										<td width="15%" align="right"> Lastname:<br/><br/></td> 
										<td width="85%" align="left"> <input type="text" size="30" name="lastName" value="<?php echo $_GET['lastName'];?>"> </input><br/><br/></td>
										</tr>
										
										
										<tr>
											<td width="15%" align="right"> Location Handled:</td> 
									<? //this table data handled the query of the prclocations ?>
									<td width="85%" align="left">
									
									<? // the dropdown to select the PRC Location ?>
									<select name = 'selLoc' onChange="form.submit()">
                                    <option value="0"> --Select PRC Location-- </option>
                                    <?php
										$qloc = "select distinct location from prclocations order by location ";
                                      	$q2=mysql_query($qloc);
											while($row=mysql_fetch_array($q2)){
                                    ?>
                                            	<option value = '<?php echo $row['location'] ;?>' <?php if($_GET['selLoc']==$row['location']){echo "selected";}?>> <?php echo " ".$row['location'] ;?>
												</option>
                                   	 <?php } ?>
									 </select>
											  
									<input type="hidden" name= 'code'
									<?php
									$qc = "select distinct code from prclocations where  location = '".$_GET['selLoc']."' and  location is not null";
                                    $q3=mysql_query($qc);
										while($row3=mysql_fetch_array($q3)){
									?>
											value = '<?php echo $row3['code'] ;?>'>
                                  <?php } ?>
									</input>																							
									</td>
										</tr>
										
										
										<tr>
										<td width="15%" align="right"> <br/> Employee No.:<br/><br/></td> 
										<td width="85%" align="left"> <br/><input type="text" size="25" name="employeeNo" value='<?php echo $_GET['employeeNo'];?>' > </input><br/><br/></td>
										</tr>
										
										<tr>
										<td width="15%" align="right">Position:<br/><br/></td> 
										<td width="85%" align="left"><input type="text" size="30" name="position" value="<?php echo $_GET['position'];?>" > </input><br/><br/></td>
										</tr>
										
						
											
										<tr>
										<td width="15%" align="right">Username:<br/><br/></td> 
										<td width="85%" align="left"><input type="text" size="25" name="username" value="<?php echo $_GET['username'];?>" > </input><br/><br/></td>
										</tr>
										
											
										<tr>
										<td width="15%" align="right">Password:<br/><br/></td> 
										<td width="85%" align="left"><input type="password" size="25" name="password" value="<?php echo $_GET['password'];?>" > </input><br/><br/></td>
										</tr>
										
										<tr>
											<td width="15%" align="right"> Access:</td> 
											<td width="85%" align="left"> 
											<input name="enableAcc" type="radio" value="1" 
											<?php if($_GET['enableAcc'] == "1"){
											?> 
													checked <?php }?> > 
													<font color="#00FF00"><strong/>enable</font> 
											</input>
											 &nbsp; <input type="radio" name="enableAcc" value="0"
											  <?php if($_GET['enableAcc'] == "0"){
											  ?> 		
											  			checked 
												<?php }?> > 
													<font color="#FF0000"><strong/>disable</font>
											</input>
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
			<td width="50%" align="right"><input type="reset" value="CANCEL" name="resetx"/></td><br/>
			<td width="50%" align="left"><input type="submit" value="SAVE" name="submitx"/></td>							
		</table>
		</form>
		
<?php 
// these codes handles the insertion of the values supplied above			
			
			if(isset($_GET['submitx'])){
				echo 'DELETE ME AFTER TESTING<br>';
				$fn = $_GET['firstName'];
				$ln = $_GET['lastName'];
				$loc = $_GET['code'];
				$pos = $_GET['position'];
				$emno = $_GET['employeeNo'];
				$un = $_GET['username'];
				$pass = $_GET['password'];
				$role = 3;
				$stat = $_GET['enableAcc'];
				
				$insertcashier = 'INSERT INTO users (
												user_first,
												user_last,
												location,
												position,
												Employee_No,
												username,																								
												Password,
												role_id,		
												active
												) VALUES (
													 "'.$fn.'",'.
													'"'.$ln.'",'.
													'"'.$loc.'",'.
													'"'.$pos.'",'.
													'"'.$emno.'",'.
													'"'.$un.'",'.
													'"'.$pass.'",'.
													'"'.$role.'",'.
													'"'.$stat.'")';
												
					if($fn!="" && $ln!="" && $loc!="" && $pos!="" && $un!="" && $pass!="" && $stat!=""){
						
							if(mysql_query($insertcashier)){
												
								$getid = 'SELECT user_id from users WHERE user_first = "'.$fn.'" and user_last = "'.$ln.'" and location = "'.$loc.'" and position = "'.$pos.'" and username = "'.$un.'"  and Password = "'.$pass.'" and active = "'.$stat.'"';
								$sqid = mysql_query($getid);
									while($idrow=mysql_fetch_array($sqid)){
										$id=$idrow['user_id'];
									}
							echo 'Cashier added.<br>';
							}
							
							else{
								echo 'Cashier not added. Check your entries<br>';
							}
					}
								
			}
		
?>
		
	