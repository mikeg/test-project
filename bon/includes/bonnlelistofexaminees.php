<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<script language="javascript" type="text/javascript">
function SetAllCheckBoxes(FormName, FieldName, CheckValue)
{
	if(!document.forms[FormName])
		return;
	var objCheckBoxes = document.forms[FormName].elements[FieldName];
	if(!objCheckBoxes)
		return;
	var countCheckBoxes = objCheckBoxes.length;
	if(!countCheckBoxes)
		objCheckBoxes.checked = CheckValue;
	else
		// set the check value for all check boxes
		for(var i = 0; i < countCheckBoxes; i++)
			objCheckBoxes[i].checked = CheckValue;
}

function limitText(limitField, limitCount, limitNum) {
	if (limitField.value.length > limitNum) {
		limitField.value = limitField.value.substring(0, limitNum);
	} else {
		limitCount.value = limitNum - limitField.value.length;
	}
}
</script>
			 <table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" >
					
					<tr>
					<br/><th class="thead" ><div align="center">LIST OF EXAMINEES</div></th>
					</tr>
					
					<tr>
					<form name="listOfExaminees"  method="POST" enctype="multipart/form-data" >
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
									<form name="ched">
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
											
											<td align="center" > 
												<input name= "limitedtextfield<? echo $i ?>" type="text" onKeyDown="limitText(this.form.limitedtextfield<? echo $i ?>,this.form.countdown<? echo $i ?>,10);" 
onKeyUp="limitText(this.form.limitedtextfield<? echo $i ?>,this.form.countdown<? echo $i ?>,10);" maxlength="10"> <br>

<input  type="hidden" name="countdown<? echo $i ?>" size="3" value="10">
											</td>
										
										 	<td width="10%" align="center" > 
												<input type="checkbox" name="hasChed"/>
											</td>
										
										 </tr>									
									<? } ?>									
								</table>
								</td>
									</form>
							</tr>
							
							<tr>
				
						
								<td width="50%">
								<div style="font-size:13px;">
								TOTAL NUMBER OF STUDENTS:&nbsp;<span style="font-weight:bold">Total</span>
								</div>									
								</td>		
								
						
							
							</tr>
							
							
							
							<tr>
							
							<td align="right">
								<table>
								<form name="checkAll"  method="POST" enctype="multipart/form-data" >
									<td>
									<input align="right" type="button" value="Check All" name="checkAll" onClick="SetAllCheckBoxes('ched','hasChed',true);" /> 
									</td>
								</form>
								
								<form name="saveChanges"  method="POST" enctype="multipart/form-data" >
									<td>
									<input type="button" value="SAVE CHANGES" name="saveChanges"/>
									</td>
								</form>
								</table>
							</td>
							
							</tr>
							
						
						
							<tr>
					
								<td>
								<table>
								
									<form name="archive" method="GET" enctype="multipart/form-data" >
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
									</form>
																
									<form name="listOfExaminees"  method="GET" enctype="multipart/form-data" >
									<td>
									<input name="room" type="submit" value="Room Assignment" style="font-size:12px;"/>
									</td>
									</form>
									
									
								 </table>
								</td>
							
							</tr>
							
								<tr>
									<form name="form"  method="POST" enctype="multipart/form-data" action="includes/bonpdf/createPDF.php" target="_blank" >

									<td align="center">
									<br/>
									
									<input type="button" value="SAVE / PRINT" style="font-size:12px;" onclick="form.submit()"/>

								
										
									</td>
									</form>
															

							</tr>
											
					</table>
				</td>
			</tr>
		</table>
			