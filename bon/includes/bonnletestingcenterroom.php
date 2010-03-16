

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">


		 <table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
				
					<table width="100%" >
					
					<tr>
					<br/><th class="thead" ><div align="center">TESTING CENTERS - Room Assignment</div></th>
					</tr>
					<form name="testingCenterRoomAssignment" method="GET" enctype="multipart/form-data">
							<tr>
								<td align="left">
									<br/>
									<div style="font-size:13px;">
										
											<input name="mlist" type="submit" value="Master List" style="font-size:12px;"/>
											<input name="room1" type="submit" value="Room Assignment" style="font-size:12px;" />
											
										
									</div>
								</td>
							</tr>
						</form>	
							
							
						
							
					<!--		<tr>
								<td align="left">
									<br/>
									<div style="font-size:13px;">
										Testing Center:&nbsp;<span style="font-weight:bold">Name of Testing Center</span><br/>
										Date:&nbsp;<span style="font-weight:bold">Date</span><br/>
									</div>
								</td>
							</tr> -->
							
							<tr>
								<!--LIST OF Examinees for selected testing center-->
								<td width="100%" align="left" class="bodyText" >
								<br/>
								<table width="100%" border="1px" bordercolor="#0000FF" cellpadding="1" cellspacing="0" >
									<tr>
										<th width="20%" align="center" >Name</th>
										<th width="20%" align="center" >School</th>
										<th width="20%" align="center" >Testing Center</th>
										<th width="20%" align="center" >Room Name</th>
										<th width="20%" align="center" >Seat No.</th>
										
									</tr>
									
									<!-- list here-->
									<? $i=0;
											for (; $i<3; $i++)
										{ ?>
									 
										<tr>
											<td width="20%" align="left">
												Name
											</td>
											<td width="20%" align="left">
												School
											</td>
											<td width="20%" align="left">
												Testing Center
											</td>
											<td width="20%" align="left">
												Room Name
											</td>
											<td width="20%" align="left">
												Seat No.
											</td>
											
										 </tr>											
									<? } ?>									
								</table>
								</td>
							</tr>
							
							<tr>
						<td>
							<form name="form" method="POST" enctype="multipart/form-data" action="includes/bonpdf/createPDF.php" target="_blank">
							<table align="center">
							<td align="center">
							<input type="button" name="print" value="SAVE / PRINT" onClick="form.submit()"></input>
							</td>
							</table>
							</form>
							
						</td>
						</tr>
										
					</table>
				</td>
			</tr>
		</table>

	
	