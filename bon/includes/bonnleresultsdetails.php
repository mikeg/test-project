<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<form name="studentDetails" method="POST" enctype="multipart/form-data">
		<table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" >
														
							<tr>
								<td align="left">
									<br/>
									<div style="font-size:13px;"> 
										
										
										<input name="rlist" type="submit" value="List" style="font-size:12px;" />
										<input name="rdetails" type="submit" value="Student Details" style="font-size:12px;"/>
										<input name="rank" type="submit" value="School Rank" style="font-size:12px;"/>
										
											
									</div>
								</td>
							</tr>
							
					<tr>
					
					<th class="thead" ><div align="center">RESULTS - Details</div></th>
				
					</tr>
					
					<tr>
					<td>
					<br/><select name="schoolReg"  style="font-size:11px;"/> <option >--Select Region--</option>
											<option>Region I</option>
											<option>Region II</option>
											<option>Region III</option>
											</select>
						&nbsp;<select name="schoolProv"  style="font-size:11px;"/> <option >--Select Province--</option>
											<option>Cebu</option>
											<option>Bohol</option>
											<option>Isabela</option>
											</select>
						&nbsp;<select name="schoolCity"  style="font-size:11px;"/> <option >--Select Municipality/City--</option>
											<option>Cebu</option>
											<option>Bohol</option>
											<option>Isabela</option>
											</select>
						&nbsp;School Name: 	<select name="schoolName"  style="font-size:11px;"/> <option >--Select School--</option>
											<option>School 1</option>
											<option>School 2</option>
											<option>School 3</option>
											</select>
							&nbsp;<input type="button" name="search" value="Search">
					</td>
					</tr>
							
				
							
							<tr>
								<td align="left">
									<br/>
									<div style="font-size:13px;">
										School:&nbsp;<span style="font-weight:bold">Name of Selected School</span><br/>
										Date:&nbsp;<span style="font-weight:bold">Date</span><br/>
									</div>
								</td>
							</tr>
							
							<tr>
								<!--LIST OF STUDENTS-->
								<td width="100%" align="left" class="bodyText" >
								<table width="100%" border="1px" bordercolor="#0000FF" cellpadding="1" cellspacing="0" >
									<tr>
										<th width="25%" align="center" >Name</th>
										<th width="15%" align="center" >Examinee No.</th>
										<th width="20%" align="center" >Test 1</th>
										<th width="20%" align="center" >Test 2</th>
										<th width="20%" align="center" >Test 3</th>
										
									</tr>
									
									<!-- list here-->
									<? $i=0;
											for (; $i<5; $i++)
										{ ?>
									 
										<tr>
											<td width="25%" align="left">&nbsp;
												Name
											</td>
											<td width="15%" align="left" >&nbsp;
												Examinee Number
											</td>
										 	<td width="20%" align="center" > 
												80% 80 pts Passed
											</td>
											<td width="20%" align="center" > 
												60% 60 pts Failed
											</td>
											<td width="20%" align="center" > 
												89% 89 pts Passed
											</td>
										 </tr>									
									<? } ?>									
								</table>
								</td>
							</tr>
							
							<tr>
								<td align="right">
								<div style="font-size:13px;">
									<table align="right">
										<tr>	
											<td align="left">
												Total Passed:&nbsp;<span style="font-weight:bold">(passed)</span>&nbsp;Total Failed:&nbsp;<span style="font-weight:bold">(failed)</span>
											</td>
										</tr>
										<tr>
											<td align="left">Percentage:&nbsp;<span style="font-weight:bold">(percentage)</span>
											</td>
										</tr>
										
									</table>
									
								</div>								
								</td>
							</tr>
							
							<tr>
								<td align="left">
									<br/>
									<input type="button" value="Print" style="font-size:12px;" onclick="javascript:alert('Print');"/>
									<input type="button" value="Save" style="font-size:12px;" onclick="javascript:alert('Save to .pdf');"/>
									<input type="button" value="Archive" style="font-size:12px;" onclick="javascript:alert('Archive');"/>&nbsp;
										<select name="regiondDrpDwn" style="font-size:11px;">
											<!--TODO: get all examination dates-->
											<option>-- Select Examination Date --</option>
											<option>Date 1</option>
											<option>Date 2</option>
											<option>Date 3</option>
											<option>Date 4</option>
											<option>Date 5</option>
											<option>Date 6</option>
											<option>Date 7</option>
											<option>...</option>
										</select>&nbsp;&nbsp;
								</td>								
							</tr>					
					</table>
				</td>
			</tr>
		</table>
	
	</form>