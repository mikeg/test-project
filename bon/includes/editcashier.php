<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
	<form name="search"enctype="multipart/form-data" method="GET" action="boncashier.php">	
	 <table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
						<tr>
								<td width="100%" align="left">
									<br/><table width="100%" cellspacing="0" align="center">
											<td align="left">
										
										 <select name= 'selLocation'>
										   <option value="0"> --Select Location-- </option>
										     <?php
												$sql = 'SELECT location FROM prclocations ORDER BY LOCATION'; 
												if (!@mysql_query($sql)){
											
												}
														else{
														$q=mysql_query($sql);
		
                                                         while($row=mysql_fetch_array($q)){
                                                          ?>
															
                                            <option value = '<?php echo $row['location'] ;?>' <?php if($_GET['selLocation']==$row['location']){echo "selected";}?>> <?php echo "".$row['location'] ;?></option>
                                            <?php } }?>
										   
                                          
										    </select>
												
											</td>
									</table>
								</td>
						</tr>
							
								<td width="100%" align="left" class="bodyText" > 
									<table width="100%" border="1px" bordercolor="#0000FF" cellpadding="1" cellspacing="0" align="center">
										<tr>
											<th width="12%" class="thead">Cashier Name</th>
											<th width="3%" class="thead">Access</th>
											<th colspan="2" width="1%"class="thead">Action</th>
										</tr>
										
										<? 
											for($i = 0; $i<5; $i++)
										{ ?>
										
											<tr>
												
											<td width="12%" align="center" class="tcontent">Cashier Name</td>
											<td width="3%" align="center" class="tcontent"><input name="access" type="checkbox" id="access" /></td>
											<td align="center" class="tcontent"><input name="edit1" type="button" id="edit" value="EDIT"/></td>
											<td align="center" class="tcontent"><input name="save" type="submit" id="save" value="SAVE"/></td>
											</tr>
										
										<? } ?>
									</table>
								</td>
						
					</table>
				</td>
			</tr>
		</table>
		</form>
		
	