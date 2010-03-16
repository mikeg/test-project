<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<form name="searchCashierEntry" method="POST" enctype="multipart/form-data" >
		<table align="left" width="100%" >
			<tr>
				<td align="right">
					<table width="100%" align="right">
					<tr>
					
				 <td align="left">
									<br/>
									<div style="font-size:13px;">
										Region: <select name="regiondDrpDwn" style="font-size:11px;">
													<!--TODO: get all regions-->

													<option>Region 1</option>
													<option>Region 2</option>
													<option>Region 3</option>
													<option>Region 4</option>
													<option>Region 5</option>
													<option>Region 6</option>

													<option>Region 7</option>
													<option>...</option>
												</select>&nbsp;&nbsp;
										Province: <select name="provinceDrpDwn" style="font-size:11px;">
													<!--TODO: get all province from selected region-->
													<option>-- Select Provice --</option>
													<option>Province 1</option>

													<option>Province 2</option>
													<option>Province 3</option>
													<option>Province 4</option>
													<option>Province 5</option>
													<option>Province 6</option>
													<option>Province 7</option>

													<option>...</option>
												</select>&nbsp;&nbsp;
										School: <select name="schoolDrpDwn" style="font-size:11px;">
													<!--TODO: get all schools from selected province-->
													<option>-- Select School --</option>
													<option>School 1</option>
													<option>School 2</option>

													<option>School 3</option>
													<option>School 4</option>
													<option>School 5</option>
													<option>School 6</option>
													<option>School 7</option>
													<option>...</option>

												</select>&nbsp;&nbsp;
										<input type="text" size="30" style="font-size:11px;"/> <input type="button" value="Search" style="font-size:12px;" onclick="javascript:alert('School Not Found');"/>
									</div>
								</td>
					</tr>
					<tr>

								<!--LIST OF STUDENTS-->
								<td width="100%" align="left" class="bodyText" >
								<table width="100%" border="1px" bordercolor="#0000FF" cellpadding="1" cellspacing="0" >
									<tr>
										<th width="22%" align="center" class="thead" >Name</th>
										<th width="15%" align="center" class="thead" >Amount Due</th>
										<th width="15%" align="center" class="thead" >Paid</th>

										<th width="20%" align="center" class="thead" >OR No.</th>
										<th width="18%" align="center" class="thead" >Date Paid</th>
										<th width="1%" align="center" class="thead" >Update</th>
										
									</tr>
									
									<!-- list here-->
									<? 
									
									$i=0;
										for (; $i<$ctr; $i++)
										{ ?>						 
										<tr>
											<td width="22%" align="center">
												Name
											</td>

											<td width="15%" align="center" >
												900
											</td>
										 	<td width="15%" align="center" > 
												<input type="checkbox" disabled checked name="chkPaidSearch"> </input>
											</td>
											<td width="20%" align="center" > 
												1234567890
											</td>
											<td width="20%" align="center" > 
												August 3, 2009
											</td>
											<td width="1%" align="center" > 
												
												<input type="submit" value="EDIT" name="edit">
											
											</td>
										 </tr>									
								<? } ?>																			
							</table>
						</td>

				</tr>
					<tr>
								<td align="left">
								<div style="font-size:13px;">
								TOTAL NUMBER OF STUDENTS:&nbsp;<span style="font-weight:bold"><? echo $ctr ?></span>
								</div>								
								</td>
							</tr>

							
					</table>
				</td>
			</tr>
		</table>
		</form>