<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<form name="form" method="POST" enctype="multipart/form-data">
		
		  <table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" >
													
						
							
							
							
							
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
												Test 1 Result (Pass/Fail)
											</td>
											<td width="20%" align="center" > 
												Test 2 Result (Pass/Fail)
											</td>
											<td width="20%" align="center" > 
												Test 3 Result (Pass/Fail)
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
								
									<input type="button" value="SAVE / PRINT" style="font-size:12px;" onclick="javascript:alert('Print');"/>
									
								</td>								
							</tr>						
					</table>
				</td>
			</tr>
		</table>
		
	</form>
