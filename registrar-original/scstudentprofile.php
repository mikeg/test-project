<?php
	$functSubmit = $_POST['submit'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/school.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>BoN Online System - Add Student</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<script language="JavaScript" type="text/javascript" src="js/utilities.js"></script>
<link rel="stylesheet" href="css/default.css" type="text/css" />
</head>

<body bgcolor="#F4FFE4">
<table width="1050" border="0" cellspacing="0" cellpadding="0" align="center" id="tablebody">
  <tr bgcolor="#0033FF">
    <td height="150" width="1050" colspan="2" class="logo" nowrap="nowrap" align="CENTER"><br />
	BON NAME HERE <BR /><span class="tagline">OPTIONAL TAGLINE HERE</span></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#0099FF" class="borderline" background="mm_dashed_line.gif"><img src="mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>

  <tr bgcolor="#0033FF">
  	<td height="20" colspan="3">
		<table width="1050" border="0" id="navigationTop">
			<tr>	
				<td width="55" align="center"><a href="schome.php" class="navText">HOME</a></td>
				<td width="110" align="center"><a href="sccontact.php" class="navText">CONTACT US</a></td>
				<td width="55" align="center"><a href="schelp.php" class="navText">HELP</a></td>
				<td width="90" align="center"><a href="#" class="navText"><font color="#660000">LOG OUT</font></a></td>
			  	<td width="740" align="right" id="dateformat">Today: 
		      <script language="javascript">document.write(getDate())</script></td>
			</tr>
	  </table>	</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#0099FF" class="borderline" background="mm_dashed_line.gif"><img src="mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>

 <tr>
    <td width="150" valign="top" bgcolor="#6699FF">
	<br />
	<table border="0" cellspacing="0" cellpadding="0" width="150" id="navigation" align="center">
		<tr>
			<td style="padding-left:5px;">Welcome!<br />Name of User<br />&nbsp;
			</td>
		</tr>
        <tr>
          <td width="150" class="menuname" valign="middle">REGISTRAR
		  <br /></td>
        </tr>        <tr>
          <td width="150"><a href="scviewstudents.php" class="navText">students</a></td>
        </tr>
		 <tr>
          <td width="150"><a href="scstatusreport.php" class="navText">status report</a></td>
        </tr>
        <tr>
          <td width="150"><a href="scapplications.php" class="navText">graduates / <br /> 
          applications</a></td>
        </tr>
		  <tr>
          <td width="150"><a href="#" class="navText">recogniton code 
         </a></td>
        </tr>
        <tr>
          <td width="150"><a href="#" class="navText">transfers</a></td>
        </tr>
      </table>
 	 <br />
  	 <br />
  	&nbsp;<br /> 	</td>
    <td width="880" valign="top" ><br />
	&nbsp;<br />
	<table border="0" cellspacing="0" cellpadding="0" width="900" align="center">
      <tr>
        <td width="900" class="pageName"><!-- InstanceBeginEditable name="contentName" -->
		<? if($functSubmit=='Edit') {
			echo 'UPDATE STUDENT PROFILE'; 
		}else if($functSubmit=='Transfer'){
			echo 'TRANSFER STUDENT';
		}else{
			echo 'STUDENT REGISTRATION';
		} ?><!-- InstanceEndEditable --> </td>
      </tr>
      <tr>
        <td class="bodyText"><br /><!-- InstanceBeginEditable name="content" -->
        <table align="center" width="100%" bgcolor="#C0C0C0">
			<form action="" enctype="multipart/form-data" method="post" >
			<tr>
				<td width="100%" align="left" class="bodyText">
					<table align="center" border="1" width="100%" cellpadding="1" cellspacing="0" id="tableFormat">
						<tr>
							<td>
								<table width="100%" >
								<tr>
									<td>
										<div class="divLastClass" align="center">
											<b>NOT FOR SALE</b><br />This form is pre-numbered<br />REPRODUCTION <br />IS NOT ALLOWED
										</div>
										<div class="divLastClass" align="center">
											&nbsp;&nbsp;<img src="images/logo.jpg" alt="BoN" height="75" width="90" />
										</div>
										<div class="divLastClass" align="center" style="width:450px">
											<!--&nbsp;&nbsp;<img src="images/prc.jpg" alt="BoN" height="75" width="400" />-->
											<font style="font-size:14px">Republic of the Philippines </font><br />
											<font style="font-size:16px">Professional  Regulation  Commission</font><br />
											<font style="font-size:14px">Manila</font><br /><BR />
											<font style="font-size:19px;font-family:IMPACT; font-stretch:extra-expanded">APPLICATION & QUALIFICATION EVALUATION DIVISION</font>
										</div>
									</td>
									<td align="center" rowspan="2" width="150px" valign="middle">
									PRC App Form No. 001-A<br />
									Sept(2007)
									<img src="images/picFrame.jpg" width="150"/>
									</td>
								</tr>
								<tr>
									<td align="left" colspan="2">
										<div class="divLastClass" align="left">
										<b>Application No</b> <input type="text" name="applicationNo" value="" /> <br />
										<input type="radio" name="examineeType" value="new" /> <b>1st TIMER(NEW)</b> <br /> 
										<input type="radio" name="examineeType" value="repeater"  /> <b>REPEATER</b><br />
										<input type="radio" name="examineeType" value="conditioned"  /> <b>CONDITIONED</b>
										</div>
										<div class="divLastClass" align="center" style="width:440px">
										&nbsp;&nbsp;&nbsp;<img src="images/NAF.jpg" /><br />
										<input type="radio" name="degree" value="regularNursing" /> <font style="font-size:14px"><b>Regular BS Nursing&nbsp;</b></font>
										<input type="radio" name="degree" value="withDegree" /> <font style="font-size:14px"><b>With Other Degree/s</b></font>
										</div>
									</td>
								</tr>
								<tr>
									<td align="center" colspan="2">
										Date of Examination <input type="text" name="dateExam" value="" /> Place of Examination <input type="text" name="placeExam" value=""  />
									</td>
								</tr>
								<tr>
									<td align="left" style="padding-left:20px" colspan="2">
										<div class="divLastClass">
											<font style="font-size:10px; color:#333333"> <b>WARNING</b>:</font>
										</div>
										<div class="divLastClass">
											<font style="font-size:10px; color:#333333">All documents/statements submitted are subject to verification and any false statement or misrepresentation made in this <br />application  is a ground for disqualification and criminal prosecution/administrative sanction for falsification</font>
										</div>
										<div class="divLastClass">
											&nbsp;&nbsp;<b>PERRC No.</b> <input type="text" name="perrcNo" />
										</div>
									</td>
								</tr>
								</table>
							</td>
						</tr>
						
						<tr>
							<td  height="5" bgcolor="#0000FF" class="bodyText"></td>
						</tr>
						<tr >
							<td align="center" class="bodyText"><font size="2">Part I. PERSONAL INFORMATION </font></td>
						</tr>
						<tr>
							<td  height="5" bgcolor="#0000FF" class="bodyText"></td>
						</tr>
						<tr>
							<td >
								<div class="divClass">
									SURNAME<font color="red">*</font> <br />
									<input type="text" name="surname" value="" size="40" />&nbsp;
								</div>
								<div class="divClass">
									GIVEN NAME<font color="red">*</font> <br />
									<input type="text" name="firstName" value="" size="40" />&nbsp;
								</div>
								<div class="divClass">
									MIDDLE NAME<font color="red">*</font> <br />
									<input type="text" name="midName" value="" size="40" />&nbsp;
								</div>
								<div class="divLastClass">
									M.I.<font color="red">*</font> <br />
									<input type="text" name="mi" value="" size="2" />
								</div>
							</td>										
						</tr>
						<tr>
							<td >
								<div class="divClass">SEX<font color="red">*</font><br />
									<input type="radio" name="sex" value="Male" />Male<br />
									<input type="radio" name="sex" value="Female" />Female &nbsp;&nbsp;
								</div>
								<div class="divLastClass">
									COMPLETE MAILING ADDRESS<br />House No.,Street<font color="red">*</font><br />
									<input type="text" name="street" value="" size="40"/>
								</div>
								<div class="divLastClass">
									&nbsp;<br />City/Town<font color="red">*</font><br />
									<select name="cityAddress" value="" onchange="">
										<option value="">Cebu</option>
										<option value="">Cagayan de Oro</option>
										<option value="">Quezon City</option>
									</select>
									&nbsp;
								</div>
								<div class="divClass">&nbsp;<br />Province<font color="red">*</font><br />
									<select name="provinceAddress">
										<option value="">Cebu</option>
										<option value="">Maguindanao</option>
										<option value="">Quezon</option>
									</select>&nbsp;
								</div>
								<div class="divClass">
									<br />&nbsp;ZIP CODE<font color="red">*</font> <br />
									<input type="text" name="zipcode" value="" size="5" />&nbsp;
								</div>
								<div class="divLastClass">
									Town/City/Prov <br />RURBAN CODE<font color="red">*</font> <br />
									<input type="text" name="rurbancode" value="" size="8" />
								</div>
							</td>										
						</tr>
						<tr>
							<td >
								<div class="divClass">
									CITIZENSHIP<font color="red">*</font><br />
									<input type="text" name="citizenship" value="" size="30"/>&nbsp;
								</div>
								<div class="divClass">
									E-Mail Address <br />
									<input type="text" name="email" value="" size="30" />&nbsp;
								</div>
								<div class="divClass">
									Landline No.(include area code) <br />
									<input type="text" name="telNo" value="" size="30" />&nbsp;
								</div>
								<div class="divLastClass">
									Mobile No.(include area code)<br />
									<input type="text" name="mobileNo" value="" size="30" />
								</div>
							</td>										
						</tr>
						<tr>
							<td>
								<div class="divLastClass">
											CIVIL STATUS<font color="red">*</font><br />
											<input type="radio" name="status" value="single" />SINGLE <br />
											<input type="radio" name="status" value="married" />MARRIED
								</div>
								<div class="divLastClass">
											<br />
											<input type="radio" name="status" value="widow" />WIDOW/ER<br />
											<input type="radio" name="status" value="annuled" />ANNULED
								</div>
								<div class="divClass">
											<br />
											<input type="radio" name="status" value="divorced" />DIVORCED<br />
											<input type="radio" name="status" value="separated" />LEGALLY SEPARATED &nbsp;

								</div>
								<div class="divClass">
									DATE OF BIRTH<font color="red">*</font> <br />
									(mm/dd/yyyy)<br />
									<input type="text" name="birthdate" value="" size="15" /> &nbsp;
								</div>
								<div class="divLastClass">
									PLACE OF BIRTH<br />
									City/Town<font color="red">*</font> <br />
									<select name="cityBirth" value="" onchange="">
										<option value="">Cebu</option>
										<option value="">Cagayan de Oro</option>
										<option value="">Quezon City</option>
									</select>
								</div>
								<div class="divClass">&nbsp;<br />Province<font color="red">*</font><br />
									<select name="provinceBirth">
										<option value="">Cebu</option>
										<option value="">Maguindanao</option>
										<option value="">Quezon</option>
									</select>&nbsp;
								</div>
								<div class="divLastClass">Town/City/Prov <br />RURBAN CODE<font color="red">*</font><br />
									<input type="text" name="birthRurbanCode" value="" size="10" />
								</div>
							</td>										
						</tr>
						<tr>
							<td>
								<div class="divClass">
									<table>
										<tr>
											<td>
												SPOUSE'S NAME<br />
												<input type="text" name="spouse" value="" size="42" />
											</td>
										</tr>
										<tr>
											<td>
												CITIZENSHIP<br />
												<input type="text" name="spouseCitizen" value="" size="42" />&nbsp;
											</td>
										</tr>
									</table>
								</div>
								<div class="divClass">
									<table>
										<tr>
											<td>
												FATHER'S NAME<font color="red">*</font> <br />
												<input type="text" name="father" value="" size="42" />
											</td>
										</tr>
										<tr>
											<td>
												CITIZENSHIP<font color="red">*</font><br />
												<input type="text" name="fatherCitizen" value="" size="42" />&nbsp;
											</td>
										</tr>
									</table>
								</div>
								<div class="divLastClass">
									<table>
										<tr>
											<td>
												MOTHER'S NAME<font color="red">*</font> <br />
												<input type="text" name="mother" value="" size="42" />
											</td>
										</tr>
										<tr>
											<td>
												CITIZENSHIP<font color="red">*</font> <br />
												<input type="text" name="motherCitizen" value="" size="42" />
											</td>
										</tr>
									</table>
								</div>
							</td>										
						</tr>
						<tr>
							<td>
								<div class="divLastClass">
									HAVE YOU EVER BEEN CONVICTED IN FINAL JUDGEMENT BY ANY COURT, MILITARY TRIBUNAL OR ADMINISTRATIVE BODY?<br />
									<input type="radio" name="convicted" value="yes" />YES &nbsp;
									<input type="radio" name="convicted" value="no" />NO &nbsp; (IF yes, <input type="checkbox" name="decisionAttached" value="decisionAttached" /> attached hereto a copy of the decision )
								</div>
							</td>
						</tr>
						
						<tr>
							<td  height="5" bgcolor="#0000FF" class="bodyText"></td>
						</tr>
						<tr >
							<td align="center" class="bodyText"><font size="2">Part II. EDUCATIONAL INFORMATION </font></td>
						</tr>
						<tr>
							<td  height="5" bgcolor="#0000FF" class="bodyText"></td>
						</tr>
						<tr>
							<td>
								<div class="divClass">
									NAME OF SCHOOL<font color="red">*</font> <br />
									<input type="text" name="nameSchool" value="" size="55"/>&nbsp;
								</div>
								<div class="divClass">
									ADDRESS/LOCATION of SCHOOL<font color="red">*</font> <br />
									<input type="text" name="schoolAddress" value="" size="55"/>&nbsp;
								</div>
								<div class="divLastClass">
									PRC SCHOOL CODE<font color="red">*</font> <br />
									<input type="text" name="prcCode" value="" />
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="divClass">
									DEGREE/COURSE OBTAINED<font color="red">*</font> <br />
									<input type="text" name="degree" value="B.S. Nursing" size="55"/>&nbsp;
								</div>
								<div class="divClass">
									DATE GRADUATED<font color="red">*</font>(mm/dd/yyyy) <br />
									<input type="text" name="dateGraduated" value="" size="25"/>&nbsp;
								</div>
								<div class="divClass">
									PRC COURSE CODE<font color="red">*</font> <br />
									<input type="text" name="courseCode" value="4018" size="24"/>&nbsp;
								</div>
								<div class="divLastClass">
									PRC BOARD CODE<font color="red">*</font> <br />
									<input type="text" name="boardCode" value="2600" />
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<table width="100%" border="1px" bordercolor="#0000FF" cellpadding="1" cellspacing="0">
									<tr>
										<th width="23%" align="center">OTHER EDAUCATIONAL ATTAINMENT<br />
									  Degree/Course <i>prior to BS Nursing</i></th>
										<th width="23%" align="center">NAME OF SCHOOL</th>
										<th width="12%" align="center">PRC SCHOOL CODE</th>
										<th width="30%" align="center">ADDRESS/LOCATION of SCHOOL</th>
										<th width="12%" align="center">DATE GRADUATED<br />
									  (mm/dd/yy)</th>
									</tr>
									<tr>
										<td width="23%" align="center"><input type="text" name="degree1" size="25"/></td>
										<td width="23%" align="center">
											<select name="school1" onchange="">
												<option value="" selected="selected"></option>
												<option value="UP Manila">UP Manila</option>
											</select>
										</td>
										<td width="12%" align="center"><input type="text" name="schoolCode1" value="" size="10"/></td>
									  	<td width="30%" align="center"><input type="text" name="schoolAddress1" value="" size="36"/></td>
										<td width="30%" align="center">
											<select name="dateGraduated1">
												
											</select>
										</td>									
								  	</tr>
									<tr>
										<td width="23%" align="center"><input type="text" name="degree2" size="25"/></td>
										<td width="23%" align="center">
											<select name="school2" onchange="">
												<option value="" selected="selected"></option>
												<option value="UP Manila">UP Manila</option>
											</select>
										</td>
										<td width="12%" align="center"><input type="text" name="schoolCode2" value="" size="10"/></td>
									  	<td width="30%" align="center"><input type="text" name="schoolAddress2" value="" size="36"/></td>
										<td width="30%" align="center">
											<select name="dateGraduated2">
												
											</select>
										</td>									
								  	</tr>
									<tr>
										<td width="23%" align="center"><input type="text" name="degree3" size="25"/></td>
										<td width="23%" align="center">
											<select name="school3" onchange="">
												<option value="" selected="selected"></option>
												<option value="UP Manila">UP Manila</option>
											</select>
										</td>
										<td width="12%" align="center"><input type="text" name="schoolCode3" value="" size="10"/></td>
									  	<td width="30%" align="center"><input type="text" name="schoolAddress3" value="" size="36"/></td>
										<td width="30%" align="center">
											<select name="dateGraduated3">
												
											</select>
										</td>									
								  	</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td>
								<b>REVIEW SCHOOL/CENTER ATTENDED</b><font color="red">*</font>
								<input type="text" name="reviewSchool" value="" size="50"/>&nbsp;
							</td>
						</tr>
						<tr>
							<td  height="5" bgcolor="#0000FF" class="bodyText"></td>
						</tr>
						<tr >
							<td align="center" class="bodyText"><font size="2">Part III. PREVIOUS NURSES' LICENSURE EXAMINATION/S TAKEN </font></td>
						</tr>
						<tr>
							<td  height="5" bgcolor="#0000FF" class="bodyText"></td>
						</tr>
						<tr>
							<td class="bodyText">
								<table width="100%" border="1px" bordercolor="#0000FF" cellpadding="1" cellspacing="0">
									<tr>
										<th width="20%" align="center">NAME of EXAMINATION</th>
										<th width="24%" align="center">PLACE of EXAM</th>
										<th width="9%" align="center">DATE TAKEN</th>
										<th width="8%" align="center">RATING</th>
										<th width="18%" align="center">RESULT of EXAMINATION</th>
										<th width="9%" align="center">EXAM NO.</th>
										<th width="12%" align="center">VERIFIED BY</th>
									</tr>
									<tr>
										<td width="20%" align="center">NAME of EXAMINATION</td>
										<td width="24%" align="center">PLACE of EXAM</td>
										<td width="9%" align="center">DATE TAKEN</td>
										<td width="8%" align="center">RATING</td>
										<td width="18%" align="center">RESULT </td>
										<td width="9%" align="center">EXAM NO.</td>
										<td width="12%" align="center">VERIFIED BY</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td>
								<div class="divClass">
								<b>STATUS CODES:&nbsp;&nbsp;&nbsp;&nbsp;1.) EXAMINATION TYPE (EX CODE)</b>
								<input type="text" name="exCode" value="" />&nbsp;
								</div>
								<div class="divLastClass">
								<b>2.) NUMBERS OF TIMES TAKEN (NX Code)</b>
								<input type="text" name="nxCode" value="" />&nbsp;
								</div>	
							</td>
						</tr>
						<tr>
							<td  height="5" bgcolor="#0000FF" class="bodyText"></td>
						</tr>
						<tr>
							<td>
								<table width="100%" >
									<tr>
										<td width="50%">
											<div class="divClass" style="width:400px; text-align:justify; padding-right:5px;">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I HEREBY CERTIFY that the information and/or statements in this application including the exhibits submitted in support thereof are all true and correct of my own knowledge and that I am fully aware that any false information or statement in this application or in its attachments shall render me liable for criminal prosecution and/or administrative sanction.<br />
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; I AM WILLING TO TAKE VALIDATING EXAMINATION IN CASE THE TEST RESULTS IN MY PLACE OF EXAMINATION ARE STATISCALLY IMPRORABLE.<br />&nbsp;
											</div>
										</td>
										<td align="center" width="25%">
											<div class="divClass" style="width:220px; padding-right:5px;">
											ACTION TAKEN<br /> BY THE APPLICATION PROCESSOR<br /><br />
											</div>
											<div class="divClass" style="padding-right:5px; text-align:right">
											Processed by: <input type="text" name="processedby" value=""/><br />
											
											Date: &nbsp;<input type="text" name="dateprocessed" value=""/><br />
											<div class="divLastClass" style="padding-right:5px; text-align:left">
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Remarks: &nbsp;<input type="hidden" name="processorRemarks" value=""/><font style="text-decoration:underline">Remarks</font><br />&nbsp;
											</div>
											</div>
										<td align="center" width="25%">
											<div class="divLastClass" style="width:220px;padding-right:5px;">
											ACTION TAKEN<br /> BY THE LEGAL DIVISION/OFFICER<br /><br />
											</div>
											<div class="divLastClass" style="width:220px;padding-right:5px; text-align:right">
											Processed by: <input type="text" name="legaldivision" value=""/><br />
											Date: &nbsp;<input type="text" name="divisiondate" value=""/><br />
											<div class="divLastClass" style="padding-right:5px; text-align:left">
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Remarks: &nbsp;<input type="hidden" name="legaldivisionRemarks" value=""/><font style="text-decoration:underline">Remarks</font><br />&nbsp;
											</div>
										</td>
									</tr>
									<tr>
										<td align="center" width="40%">
											<div class="divLastClass" style="padding-right:5px;">
											<br /><br />____________________________________<br />Signature<br /><br />
											____________________________________<br />Date
											</div>
											<div class="divClass" style="text-align:justify; padding-right:5px; text-align:center">
											
											<img src="images/thumbmark.jpg" width="175" height="125"/><br />
											right thumbmark
											</div>
										</td>
										<td align="center" width="28%">
											<div class="divClass" style="width:220px; padding-right:5px;">
											ACTION TAKEN<br /> BY THE CASH SECTION<br /><br />
											</div>
											<div class="divClass" style="width:220px; padding-right:5px; text-align:right">
											Amount: &nbsp;<input type="text" name="amountPaid" value=""/><br />
											O.R. No: &nbsp;<input type="text" name="orno" value=""/><br />
											Date: &nbsp;<input type="text" name="datePaid" value=""/><br />
											Issued by: &nbsp;<input type="text" name="cashier" value=""/>
											</div>
										</td>
										<td align="center" width="28%">
											<div class="divLastClass" style="width:220px; padding-right:5px;">
											ACTION TAKEN<br /> BY THE BOARD<br /><br />
											</div>
											<div class="divLastClass" style="width:220px;padding-right:5px; text-align:right">
											Chairman: &nbsp;<input type="text" name="chairman" value=""/><br />
											Member: &nbsp;<input type="text" name="member1" value=""/><br />
											Member: &nbsp;<input type="text" name="member1" value=""/><br />
											
											</div>
											<div class="divLastClass" style="padding-right:5px; text-align:left">
											&nbsp;Remarks: &nbsp;<input type="hidden" name="boardRemarks" value=""/><font style="text-decoration:underline">Remarks</font><br />&nbsp;
											</div>
										</td>
									</tr>
									<tr>
										<td colspan="2" width="74%">
											<div class="divLastClass" style="text-align:justify; padding-right:5px;border-top:solid">
											<img src="images/stamp.jpg" width="126" height="125"/>
											</div>
											<div class="divClass" style="width:504px;text-align:justify; padding-right:5px; border-top:solid">	
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Subscribed and sworn </b> to before me this &nbsp;<input type="text" name="swornday" value="" size="3"/>&nbsp;day of <input type="text" name="swornmonth" value="" size="12"/>&nbsp;<input type="text" name="swornYear" value="20" size="5"/> at <input type="text" name="swornPlace" size="30" />. Affiant applicant exhibited to me his/her Community Tax Certificate No.&nbsp;<input type="text" name="cedulaNo" value="" size="20"  /> &nbsp; issued at <input type="text" name="cedulaPlace" value="" size="30" /> on &nbsp;<input type="text" name="cedlaDate" value="" size="15" />
											</div>
											<div class="divClass" style="width:504px;padding-right:5px; text-align:right">
											_________________________<br /> PRC Monitoring Officer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br /><br />
											</div>
										</td>
										<td width="26%" align="center">
											<div class="divLastClass" style="width:220px;padding-right:5px;">
											ACTION TAKEN<br /> BY THE ISSUING OFFICER<br /><br />
											</div>
											<div class="divLastClass" style="width:220px;padding-right:5px; text-align:right">
											Issued by: <input type="text" name="issuingOfficer" value=""/><br />
											Date: &nbsp;<input type="text" name="issuingDate" value=""/><br />
											<div class="divLastClass" style="padding-right:5px; text-align:left">
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Remarks: &nbsp;<input type="hidden" name="isssuingRemarks" value=""/><font style="text-decoration:underline">Remarks</font><br />&nbsp;
											</div>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td  height="5" bgcolor="#0000FF" class="bodyText"></td>
						</tr>
						<tr>
							<td align="center">
								<? if($functSubmit == 'Profile')
								{?>
									<input type="submit" name="update" value="UPDATE" />
								<? } else if($functSubmit == 'Transfer') { ?>
									<input type="submit" name="update" value="TRANSFER" />
								<? } else{ ?>
									<input type="submit" name="register" value="REGISTER" /> &nbsp; <input type="reset" name="clear" 
								value="     CLEAR     " />
								<? } ?>
							</td>
						</tr>
						
					</table>
				</td>
			</tr>
			</form>
		</table><!-- InstanceEndEditable --> </td>
      </tr>
    </table>
	<br />
	<br /> 	</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#0099FF" class="borderline" background="mm_dashed_line.gif"><img src="mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>
  <tr bgcolor="#0033FF">
  	<td height="20" colspan="3">&nbsp;<br />	</td>
  </tr>
</table>
</body>
<!-- InstanceEnd --></html>

