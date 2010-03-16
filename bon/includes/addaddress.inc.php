														<tr>
														<td><!--insert dropdown here-->Region: 
  														<select name="selRegion" onchange="addAddress.submit()">
 															 <option value="0"> --Select Region-- </option>
                                                        <?php
															$sql = 'SELECT DISTINCT Region FROM addresses ORDER BY Region'; 
															if (!@mysql_query($sql)){
																//exit('<p>ERROR GETTING REGIONS</p>' .
																//mysql_error() . '</p>');
															}else{
																$q=mysql_query($sql);
                                                            while($row=mysql_fetch_array($q)){
                                                         ?>
															
                                                            <option value = '<?php echo $row['Region'] ;?>' <?php if($_GET['selRegion']==$row['Region']){echo "selected";}?>> <?php echo "".$row['Region'] ;?></option>
                                                            <?php } ?></select>
                                                        </td>
														
                                                       <td >Province: <select name = 'selProvince'  onchange="addAddress.submit()"> <option value="0"> --Select Province-- </option> 
                                                       <?php
													   		$qprov = "select distinct province from addresses where region = '".$_GET['selRegion']."' and province is not null";													 
                                                            $q1=mysql_query($qprov);
															while($row1=mysql_fetch_array($q1)){
                                                         ?>
                                                            <option value = '<?php echo $row1['province'] ;?>' <?php if($_GET['selProvince']==$row1['province']){echo "selected";}?>> <?php print($row1['province']);?></option>
                                                            <?php } ?></select>
														</td>
														
                                                       <td >Municipality  City: <select name = 'selMunicipalityCity'  onchange="addAddress.submit()"> <option value="0"> --Select Municipality / City-- </option> 
													   <?php
													   		$qmun = "select distinct city_town from addresses where  province = '".$_GET['selProvince']."' and region ='".$_GET['selRegion']."' and city_town is not null";
															//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                            $q2=mysql_query($qmun);
															while($row3=mysql_fetch_array($q2)){
                                                       ?>
                                                            <option value = '<?php echo $row3['city_town'] ;?>' <?php if($_GET['selMunicipalityCity']==$row3['city_town']){echo "selected";}?>> <?php echo " ".$row3['city_town'] ;?></option>
                                                            <?php } ?></select>
														</td>
														
														<td>
                                                       		Zip Code: 
															<input type = 'text' name = 'addZipCode' size="10" > 
	 														</input> 
														</td>
														
														<td>
  																PRC Code:
  																<input name = 'addPrcCode' type = 'text' id="addPrcCode" size="10">
														</td>
														
														<td>
  																Area Code:
  																<input name = 'addAreaCode' type = 'text' id="addAreaCode" size="10">
														</td>
														
                                                        <td> 
                                                        	&nbsp;<input type = 'submit' value='SUBMIT' name='saveProv'  > </input > 
                                                        </td>
													</tr>
                                                        
                                                   <tr> 
                                                    <!-- insert blank fields here-->
                                                    
                                                    	<td > <br/> <p>
														  <label><input type="text" name="otherR" value = "<?php if(($_GET['otherR']=="" && $_GET['selRegion']=="0") || !isset($_GET['otherR']) ){echo "Enter Region Here";}elseif(($_GET['otherR']=="Enter Region Here"  && $_GET['selRegion']!="0" ) || $_GET['selRegion']!="0" ){echo "";}else{echo $_GET['otherR'];}?>"/> </label ></p>
                                                        </td >
                                                       
													   <td > <br/> 
                                                       <p><label><input type="text" name="otherP" value = "<?php if(($_GET['otherP']=="" && $_GET['selProvince']=="0") || !isset($_GET['otherP']) ){echo "Enter Province Here";}elseif(($_GET['otherP']=="Enter Province Here"  && $_GET['selProvince']!="0" ) || $_GET['selProvince']!="0" ){echo "";}else{echo $_GET['otherP'];}?>" /> </label></p>
                                                       </td>
                                                       
													   <td> <br/> 
                                                       <p><label><input type="text" name="otherM" value = "<?php if(($_GET['otherM']=="" && $_GET['selMunicipalityCity']=="0") || !isset($_GET['otherM']) ){echo "Enter Municipality / City Here";}elseif(($_GET['otherM']=="Enter Municipality / City Here"  && $_GET['selMunicipalityCity']!="0" ) || $_GET['selMunicipalityCity']!="0" ){echo "";}else{echo $_GET['otherM'];}?>" /></label></p>
                                                       </td>
                                                       
													   <td></td>
                                                       <td></td>
                                                    </tr>    
                                                   
                                                    <tr>
                                                    <?php
															##query to process add province
															$message = "If item is not in the selection menu, please type it in the box below.</p>"; //message for the results of query
															$reg   = $_GET['selRegion'];
															$zip   = $_GET['addZipCode'];
															$area   = $_GET['addAreaCode'];
															$oreg  = $_GET['otherR'];
															$oprov = $_GET['otherP'];
															$omun  = $_GET['otherM'];
															$mun   = $_GET['selMunicipalityCity'];
															$prov  = $_GET['selProvince'];
															$rcode = $_GET['addPrcCode'];
															if($prov=="0"){
																$prov=$oprov;
															}
															if($reg=="0"){
																$reg=$oreg;
															}
															if($mun=="0"){
																$mun=$omun;
															}
															
															$qinsertaddress = "INSERT INTO `bondb`.`addresses` (`Region`, `Province`, `City_Town`, `Zip_Code`, `Rurban_Code`, `Area_Code`) VALUES ('$reg', '$prov', '$mun', '$zip', '$rcode' , '$area');";
															if($_GET['saveProv']=="SUBMIT" && $reg !="" && $prov!="" && $mun!=""&& $zip!=""){
																//print($qinsertaddress);
															if (!@mysql_query($qinsertaddress)){
																exit('<p>ERROR INSERTING ADDRESS</p><p>'.mysql_error().'</p>');
																$message = $message."<p>Error inserting address</p>";
																}else{
																//$q=mysql_query($qinsertaddress);
																$message = $message."<p>data added</p>";
																}
															print($message);
															} 
														/**
																 **/														
													}?>
