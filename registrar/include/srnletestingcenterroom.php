

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<form name="testRoom" method="POST" enctype="multipart/form-data" >
		 <table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
				
					<table width="100%" >
					
					<tr>
					<br/><th class="thead" ><div align="center">TESTING CENTERS - Room Assignment</div></th>
					</tr>
							<tr>
								<td align="left">
									<br/>
									<div style="font-size:13px;">
										
											<input name="mlist" type="submit" value="Master List" style="font-size:12px;"/>
											<input name="room1" type="submit" value="Room Assignment" style="font-size:12px;" />
									<!--		<input type="text" size="30" style="font-size:11px;"/> <input type="button" value="Search" style="font-size:12px;" onclick="javascript:alert('Room and Seat Number Not Foound');"/> -->
										
									</div>
								</td>
							</tr>
							
						
							
														
							<tr>
								<!--LIST OF Examinees for selected testing center-->
								<td width="100%" align="left" class="bodyText" >
								<br/>
								<table width="1000%" border="1px" bordercolor="#0000FF" cellpadding="1" cellspacing="0" >
									<tr>
										<th width="20%" align="center" >Name</th>
										
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
						<br/>
							<table align="center">
							<td align="center">
							<input type="button" name="save" value="SAVE / PRINT"></input>
							
							</td>
							</table>
						</td>
						</tr>
							
										
					</table>
				</td>
			</tr>
		</table>
	</form>
	
	




	
	