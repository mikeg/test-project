<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

		 <table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" >
					
					<tr>
					<br/><th class="thead" ><div align="center">TESTING CENTERS - Master List</div></th>
					</tr>
					
							<tr>
								 	<form name="masterList" method="GET" enctype="multipart/form-data">

								<td align="left">
									<br/>
									<div style="font-size:13px;">
									
										<input name="mlist" type="submit" value="Master List" style="font-size:12px;"/>
										<input name="room1" type="submit" value="Room Assignment" style="font-size:12px;"/>
										
									</div>
								</td>
									</form>
							</tr>
							
							<tr>
							<td><br/>
								 <select>
								<option>--Select Region--</option>
								<option>Region I</option>
								<option>Region II</option>
								</select> &nbsp;
								<select>
								<option>--Select Province--</option>
								<option>Province 1</option>
								<option>Province 2</option>
								</select> &nbsp;
								<select>
								<option>--Select City/Municipality--</option>
								<option>City/Municipality</option>
								<option>City/Municipality</option>								
								</select> &nbsp;
								<select>
								<option>--Select School--</option>
								<option>School1</option>
								<option>School2</option>
								</select> &nbsp;
								<input type="submit" value="Search">
								</input>
							</td>
							</tr>
							
							
							
							<tr>
								<td align="left">
									<br/>
									<div style="font-size:13px;">
										Testing Center:&nbsp;<span style="font-weight:bold">Name of Testing Center</span><br/>
										Date:&nbsp;<span style="font-weight:bold">Date</span><br/>
									</div>
								</td>
							</tr>
							
							<tr>
								<!--LIST OF Examinees for selected testing center-->
								<td width="100%" align="left" class="bodyText" >
								<table width="100%" border="1px" bordercolor="#0000FF" cellpadding="1" cellspacing="0" >
									<tr>
										<th width="10%" align="center" >ID Thumbnail </th>
										<th width="20%" align="center" >Examinee No.</th>
										<th width="25%" align="center" >Room Name</th>
										<th width="20%" align="center" >Seat No.</th>
									</tr>
									
									<!-- list here-->
									<? $i=0;
											for (; $i<5; $i++)
										{ ?>
									 
										<tr>
											<td width="10%" align="left">&nbsp;
												Student ID Thumbnail
											</td>
											<td width="20%" align="left" > 
												Examinee Number
											</td>
											<td width="25%" align="left" > 
												Room Name
											</td>
											<td width="20%" align="left" > 
												Seat No.
											</td>
										 </tr>											
									<? } ?>									
								</table>
								</td>
							</tr>
							
							<tr>
								<td align="left">
								<div style="font-size:13px;">
								TOTAL NUMBER OF STUDENTS:&nbsp;<span style="font-weight:bold">Total</span>
								</div>								
								</td>
							</tr>
							
							
							
							<tr>
							<form name="archieve" method="POST" enctype="multipart/form-data">
								<td align="left">
									<br/>
									Archives:
										<select name="regiondDrpDwn" style="font-size:11px;">
											<!--TODO: get all examination dates-->
											<option>-- Select Exam Date --</option>
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
							</form>								
							</tr>
							
							<tr>
							<form name="form" method="POST" enctype="multipart/form-data" action="includes/bonpdf/createPDF.php" >
								<td align="center">
									<br/>
									<input type="button" value=" SAVE / PRINT" style="font-size:12px;" onClick="form.submit()"/>
									
								</td>
							</form>								
							</tr>
							
										
					</table>
				</td>
			</tr>
		</table>
	
