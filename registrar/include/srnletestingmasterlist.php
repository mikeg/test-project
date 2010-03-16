<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

		 <table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" >
					
					<tr>
					<br/><th class="thead" ><div align="center">TESTING CENTERS - Master List</div></th>
					</tr>
					
							<tr>
								<form name="masterList" method="POST" enctype="multipart/form-data">

								<td align="left">
									<br/>
									<div style="font-size:13px;">
									
										<input name="mlist" type="submit" value="Master List" style="font-size:12px;"/>
										<input name="room1" type="submit" value="Room Assignment" style="font-size:12px;"/>
							<!--			<input type="text" size="30" style="font-size:11px;"/> <input type="button" value="Search" style="font-size:12px;" onclick="javascript:alert('School Not Found');"/> -->
										
									</div>
								</td>
									</form>
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
								<td align="left">
									<br/>
									Archives:
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
							
							<tr>
								<td align="center">
									<br/>
									<input type="button" value="SAVE / PRINT" style="font-size:12px;" onclick="javascript:alert('Save to .pdf');"/>
								</td>								
							</tr>
							
										
					</table>
				</td>
			</tr>
		</table>
	
