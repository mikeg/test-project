<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<form name="listOfExaminees"  method="POST" enctype="multipart/form-data" >
			 <table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" >
					
					<tr>
					<br/><th class="thead" ><div align="center">LIST OF EXAMINEES</div></th>
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
										<th width="30%" align="center" >Student Name</th>
										<th width="10%" align="center" >Special Order</th>
										<th width="10%" align="center" >Ched Recognition/<br/>Board Resolution</th>
									</tr>
									
									<!-- list here-->
									<? $i=0;
											for (; $i<5; $i++)
										{ ?>
									 
										<tr>
											<td width="30%" align="left">&nbsp;
												Student Name
											</td>
											<td width="10%" align="center" > 
												<input type="text" size="10" style="width:98%;font-size:10px;"/>
											</td>
										 	<td width="10%" align="center" > 
												<input type="checkbox" name="hasChed"/>
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
							<td align="right">
								<input align="right" type="button" value="Check All" name="checkAll"/> <input type="button" value="SAVE CHANGES" name="saveChanges"/>
							</td>
							</tr>
							
							
							
							
							<tr>
								<td align="left">
									<table>
									
									<td>
									Archives:
									<select name="regiondDrpDwn" style="font-size:11px;">
										<!--TODO: get all examination dates-->
										<option>-- Select Examination Date --</option>
										<option>Date 1</option>
										<option>Date 2</option>
										<option>Date 3</option>
										<option>Date 4</option>
									</select>
									</td>
									
									<td>
								
									<input name="room" type="submit" value="Room Assignment" style="font-size:12px;"/>	
									</td>
									
									</table>
								</td>
							</tr>
							
							<tr>
								<td align="center">
									<br/>
									
									<input type="button" value="SAVE / PRINT" style="font-size:12px;" onclick="javascript:alert('Save List');"/>
										
									</td>							
							</tr>
											
					</table>
				</td>
			</tr>
		</table>
			</form>
