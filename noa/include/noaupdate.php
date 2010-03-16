<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<form name="search"enctype="multipart/form-data" method="GET">
<table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
					
								<td width="100%" align="left" class="bodyText" > <br/>
									<table width="100%" border="1px" bordercolor="#0000FF" cellpadding="1" cellspacing="0" align="center">
										<tr>
											
											<th width="12%" class="thead">Student Name</th>
											<th width="8%" class="thead">Examinee Number</th>
											<th width="8%" class="thead">Test Center</th>
											<th width="8%" class="thead">PERRC</th>
											<th width="1%" class="thead">Action</th>
											
										</tr>
										
										<? 
											for($i = 0; $i<1; $i++)
										{ ?>
											
											<tr>
												
											<td width="12%" align="center" class="tcontent">Student Name</td>
											<td width="8%" align="center" class="tcontent"><label>Examinee Number</label></td>
											<td width="8%" align="center" class="tcontent"><select>
											<option>Test Center 1</option>
											<option>Test Center 2</option>
											<option>Test Center 3</option> 
											</select></td>
											<td width="7%" align="center" class="tcontent"><input type="text" name="PERRC" size="15"></td>
											<td width="1%" align="center" class="tcontent"><input name="save" type="button" value="SAVE" onClick="window.location='noaprintform.php'"/></td>
											
											</tr>
											
										<? } ?>
									
									</table>
								</td>
									
									
																		

						
					</table>
				</td>
			</tr>
		</table>
</form>
