<form name="schools" method="GET" enctype="multipart/form-data" >	

<table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
							<tr>
								<td width="100%" align="left">
									<table width="100%" cellspacing="0" align="center">
										
										<tr>
									
											<div style="font-size:14px;">
											<td width="85%" align="left"><br/><select name="selRegion" onchange="schools.submit()">
                                              <option value="0"> --Select Region-- </option>
                                              <?php
															$sql = 'SELECT DISTINCT Region FROM addresses ORDER BY Region'; 
	if (!@mysql_query($sql)){
	
	}else{
		$q=mysql_query($sql);
		
                                                            while($row=mysql_fetch_array($q)){
                                                            ?>
                                              <option value = '<?php echo $row['Region'] ;?>' <?php if($_GET['selRegion']==$row['Region']){echo "selected";}?>> <?php echo "".$row['Region'] ;?></option>
                                              <?php } }?>
                                            </select>
											  &nbsp;
											  <select name = 'selProvince'  onchange="schools.submit()">
                                                <option value="0"> --Select Province-- </option>
                                                <?php
													   		$qprov = "select distinct province from addresses where region = '".$_GET['selRegion']."' and province is not null";										
																				 
                                                            $q1=mysql_query($qprov);
															while($row1=mysql_fetch_array($q1)){
                                                            ?>
                                                <option value = '<?php echo $row1['province'] ;?>' <?php if($_GET['selProvince']==$row1['province']){echo "selected";}?>> <?php print($row1['province']);?></option>
                                                <?php } ?>
                                              </select>
											  &nbsp;
											  <select name = 'selMunicipalityCity'  onchange="schools.submit()">
                                                <option value="0"> --Select Municipality / City-- </option>
                                                <?php
													   		$qmun = "select distinct city_town from addresses where  province = '".$_GET['selProvince']."' and region ='".$_GET['selRegion']."' and city_town is not null";
															//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                            $q2=mysql_query($qmun);
															while($row3=mysql_fetch_array($q2)){
                                                            ?>
                                                <option value = '<?php echo $row3['city_town'] ;?>' <?php if($_GET['selMunicipalityCity']==$row3['city_town']){echo "selected";}?>> <?php echo " ".$row3['city_town'] ;?></option>
                                                <?php } ?>
                                              </select>											  &nbsp; School Name: 
											  <input name="schoolName" type="text" id="schoolName">
											  <input type="submit" name="search1" value="SEARCH"/>
											  <input name="search" type="hidden" id="search" value="Edit / Search" />											</td>
											</div>
										</tr>
									</table>
								</td>
							</tr>
							
							<tr>
							  <td width="100%" align="left" class="bodyText" >
									
								</td>
							</tr>
					</table>
				</td>
			</tr>
		</table>
</form>	


<?php if($_GET['search1']=="SEARCH"){

?>
									
								<table width="100%" border="1px" bordercolor="#0000FF" cellpadding="1" cellspacing="0" align="center">
										<tr>
											
											<th width="18%" class="thead">School Name</th>
											<th width="15%" class="thead">PRC Code</th>
											<th colspan="5" width="32%" class="thead">Location</th>
											<th colspan="1" width="4%" class="thead">Status</th>
											<th colspan="1" width="1%" class="thead">Action</th>
										</tr>
										
										<?  
											##code for searching the schools, get the address id first
											

											$getid='SELECT * FROM addresses INNER JOIN schools ON addresses.Address_ID = schools.Address_ID';
											if($_GET['selRegion']!="0"){
											$getid='SELECT * FROM addresses INNER JOIN schools ON addresses.Address_ID = schools.Address_ID WHERE Region = "'.$_GET['selRegion'].'" AND School_Name LIKE "%'.$_GET['schoolName'].'%"';
											}if($_GET['selProvince']!="0"){
											$getid='SELECT * FROM addresses INNER JOIN schools ON addresses.Address_ID = schools.Address_ID WHERE Region = "'.$_GET['selRegion'].'" and Province ="'.$_GET['selProvince'].'" AND School_Name LIKE "%'.$_GET['schoolName'].'%"';								
											}if($_GET['selMunicipalityCity']!="0"){
											$getid='SELECT * FROM addresses INNER JOIN schools ON addresses.Address_ID = schools.Address_ID WHERE Region = "'.$_GET['selRegion'].'" and Province ="'.$_GET['selProvince'].'" and City_Town ="'.$_GET['selMunicipalityCity'].'" AND School_Name LIKE "%'.$_GET['schoolName'].'%" ';
											}
											//echo $getid;
											$s=0;
											if(isset($_GET['jumptopage'])){
													$s=$_GET['jumptopage'];
											}
											$limit=$_GET['showpage'];
											$limit=10;
											##//$count = 1 + $s;
											$currPage = (($s/$limit) + 1);
											// next we need to do the links to other results
											  if ($s>=1) { // bypass PREV link if s is 0
											  $prevs=($s-$limit);
											 }
									
									##$getschool='SELECT * FROM schools where Address_ID = "'.$addid['Address_ID'].'" AND School_Name LIKE "%'.$_GET['schoolName'].'%"';
									##echo $getschool;
									$getnumres=mysql_query($getid);
									$numrows=mysql_num_rows($getnumres);
									$getres=$getid.' LIMIT '.$s.', '.$limit;
									//echo $getres;
									$getschoolquery=mysql_query($getres);
									while($schre=mysql_fetch_array($getschoolquery)){
									
									
									?>
														
											<tr>
									
											<form name="schools1" enctype="multipart/form-data" action="editschool.php" method="GET">
											<input type="hidden" name="skul" value= "<?php echo $schre['School_Name']; ?>"> </input>
											<input type="hidden" name="prccode" value= "<?php echo $schre['PRC_School_Code']; ?>"> </input>
											<input type="hidden" name="reg" value= "<?php echo $schre['Region']; ?>"> </input>
											<input type="hidden" name="prov" value= "<?php echo $schre['Province']; ?>"> </input>
											<input type="hidden" name="city" value= "<?php echo $schre['City_Town']; ?>"> </input>
											<input type="hidden" name="zip" value= "<?php echo $schre['Zip_Code']; ?>"> </input>
											<input type="hidden" name="rurban" value= "<?php echo $schre['Area_Code']; ?>"> </input>
											<td width="18%" align="center" class="tcontent"><?php echo $schre['School_Name']; ?></td>	
											<td width="7%" align="center" class="tcontent"> <?php echo $schre['PRC_School_Code']; ?></td>
											<td width="5%" align="center" class="tcontent"> <?php echo $schre['Region'];?> </td>
											<td width="7%" align="center" class="tcontent"> <?php echo $schre['Province'];?></td>
											<td width="11%" align="center" class="tcontent"><?php echo $schre['City_Town'];?></td>
											<td width="5%" align="center" class="tcontent"> <?php echo $schre['Zip_Code'];?></td>
											<td width="5%" align="center" class="tcontent"> <?php echo $schre['Area_Code'];?></td>
											<?php if($schre['Is_Active']=="1"){?>
											<td width="2%" align="center" class="tcontent"><font color="#009900">active</font></td>
											<?php }else{											
											?>
											<td width="2%" align="center" class="tcontent"><font color="#FF0000">closed</font></td>
											<?php }
											?>
											<td width="1%" align="center" class="tcontent"><input name="editSchool" type="submit" value="EDIT"/></td>
										</form>	
		
										</tr>
										<?php }
										?>
										
									</table>
							
									<?php
									?>
									
									
									<?php 
												 
											 // calculate number of pages needing links
  											$pages=intval($numrows/$limit);
											 if ($numrows%$limit) {
											 // has remainder so add one page
											 $pages++;
											 }
											 // check to see if last page
											 if (!((($s+$limit)/$limit)==$pages) && $pages!=1) {
												 // not last page so give NEXT link
												 $news=$s+$limit;
												 ?>
											<a name="jumptopage" value = "10" onClick="schools.submit()">Next 10</a><?php }

											 $a = $s + ($limit) ;
											 if ($a > $numrows) 
											 { $a = $numrows ; }
											 $b = $s + 1 ;
											 echo "<p>Showing results $b to $a of $numrows</p>";
												
										if($numrows>$p2){
										echo $numrows.'test';
																
									?>
									
									<?php
									  }
									  }?>
                                   <?php 
								   /** <table width="614" border="0">
                                  <tr>
                                    <td><select name="showpage" id="showpage">
                                      <option value="1" <?php if($_GET['showpage']=="1"){echo 'selected';} ?>>1</option>
                                      <option value="20" <?php if($_GET['showpage']=="20"){echo 'selected';} ?>>20</option>
                                      <option value="30" <?php if($_GET['showpage']=="30"){echo 'selected';} ?>>30</option>
                                      <option value="40" <?php if($_GET['showpage']=="40"){echo 'selected';} ?>>40</option>
                                      <option value="50" <?php if($_GET['showpage']=="50"){echo 'selected';} ?>>50</option>
                                    </select>
									results per page </td>
                                  </tr>
                                </table> */
								?>

	