<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<form name="examineeRoomAssignment"  method="POST" enctype="multipart/form-data" >

	
	<table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" >
					
					<tr>
					<br/><th class="thead" ><div align="center">LIST OF EXAMINEES - Room Assignment</div></th>
					</tr>
					
								
							
							
							<tr>
								<td align="left">
									<br/>
									<div style="font-size:13px;">
										School:&nbsp;<span style="font-weight:bold">Name of School</span><br/>
										Date:&nbsp;<span style="font-weight:bold">Date</span><br/>
									</div>
								</td>
							</tr>
							
							<tr>
								<!--LIST OF STUDENTS-->
								<td width="100%" align="left" class="bodyText" >
								<table width="100%" border="1px" bordercolor="#0000FF" cellpadding="1" cellspacing="0" >
									<tr>
										<th width="12%" align="center" >ID Thumbnail </th>
										<th width="15%" align="center" >Examinee No.</th>
										<th width="15%" align="center" >Student Name</th>
										<th width="20%" align="center" >Testing Center</th>
										<th width="20%" align="center" >Room Name</th>
										<th width="10%" align="center" >Seat No.</th>
									</tr>
									
									<!-- list here -->
									<? $i=0;
											for (; $i<5; $i++)
										{ ?>
									 
										<tr>
											<td width="12%" align="left">&nbsp;
												Student ID Thumbnail
											</td>
											<td width="15%" align="left" > 
												Examinee Number
											</td>
											<td width="15%" align="left" > 
												Student Name
											</td>
											<td width="20%" align="left" > 
												Testing Center
											</td>
										 	<td width="20%" align="left" > 
												Room Name
											</td>
											<td width="10%" align="left" > 
												Seat No.
											</td>
										 </tr>									
									<? } ?>									
								</table>
								</td>
							</tr>
							
							
							<tr>
								<td align="center">
									<br/>
		
									<input type="button" value="SAVE / PRINT" style="font-size:12px;" onclick="javascript:alert('Print');"/>
								</td>								
							</tr>
							
						
					</table>
				</td>
			</tr>
		</table>
	</form>