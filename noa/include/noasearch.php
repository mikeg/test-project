
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">


<form name="search"enctype="multipart/form-data" method="GET">
<table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
						<tr>
								<td width="100%" align="left">
									<br/><table width="100%" cellspacing="0" align="center">
											<td align="left">
												
												Region: <select name="selRegion">
												<option>--Select Region--</option>
												<option>Region 1</option>
												<option>Region 7</option>
												<option>Region 12</option> </select>
												&nbsp;
												Province: <select name="selProv">
												<option>--Select Province--</option>
												<option>Province 1</option>
												<option>Province 2</option>
												<option>Province 3</option> </select>
												&nbsp;
												School: <select name="selSchool">
												<option>--Select School--</option>
												<option>School 1</option>
												<option>School 2</option>
												<option>School 3</option> </select>
												&nbsp;
												
											</td>
									</table>
								</td>
						</tr>
								<td width="100%" align="left" class="bodyText" > <br/>
									<table width="100%" border="1px" bordercolor="#0000FF" cellpadding="1" cellspacing="0" align="center">
										<tr>
											
											<th width="12%" class="thead">Student Name</th>
											<th width="8%" class="thead">O.R. Number</th>
											<th width="7%" class="thead">Date</th>
											<th width="1%" class="thead">Action</th>
											
										</tr>
										
										<? 
											for($i = 0; $i<1; $i++)
										{ ?>
											
											<tr>
												
											<td width="12%" align="center" class="tcontent">Student Name</td>
											<td width="8%" align="center" class="tcontent"><label>O.R. Number</label></td>
											<td width="7%" align="center" class="tcontent"><script language="javascript">document.write(getDate())</script></td>
											<td width="1%" align="center" class="tcontent"><input name="update" type="submit" value="UPDATE" /></td>
											</tr>
											
										<? } ?>
									
									</table>
								</td>
									
										
																		

						
					</table>
				</td>
			</tr>
		</table>
		</form>