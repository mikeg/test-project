<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">


			 <table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" >
					
					<tr>
					<br/><th class="thead" ><div align="center">PAID EXAMINEES</div></th>
					</tr>
					
					<tr>
					<form name="paidExaminees"  method="POST" enctype="multipart/form-data" >

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
					</form>
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
										<th width="20%" align="center" >ID Thumbnail</th>
										<th width="20%" align="center" >Student Name</th>
										<th width="20%" align="center" >OR No.</th>
										<th width="20%" align="center" >Date Paid</th>
									</tr>
									
									<!-- list here-->
									<? $i=0;
											for (; $i<5; $i++)
										{ ?>
									 
										<tr>
											<td width="20%" align="left">&nbsp;
												ID Thumbnail
											</td>
											
											<td width="20%" align="left">&nbsp;
												Student Name
											</td>
											
											<td width="20%" align="left">&nbsp;
												1234567890
											</td>
										 
										 	<td width="20%" align="left">&nbsp;
												Septermber 19, 2009
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
									<form name="form"  method="POST" enctype="multipart/form-data" action="includes/bonpdf/createPDF.php" target="_blank" >

									<td align="center">
									<br/>
									
									<input type="button" value="SAVE / PRINT" style="font-size:12px;" onClick="form.submit()"/>
									
									
									</td>
																
										</form>
							</tr>
							

											
					</table>
				</td>
			</tr>
		</table>
	