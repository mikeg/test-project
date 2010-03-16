<?php	
	$test = $_POST['test'];
	$list = $_POST['list'];
	$rlist = $_POST['rlist'];
	$plist = $_POST['plist'];
	$results = $_POST['results'];
	$room = $_POST['room'];
	$room1 = $_POST['room1'];
	$mlist = $_POST['mlist'];
	$rdetails = $_POST['rdetails'];
	$rank = $_POST['rank'];
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/bon.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>BoN Online System - NLE</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<script language="JavaScript" type="text/javascript" src="js/schools.js"></script>
<!-- InstanceEndEditable -->
<script language="JavaScript" type="text/javascript" src="js/utilities.js"></script>
<link rel="stylesheet" href="css/default.css" type="text/css" />
</head>

<body bgcolor="#F4FFE4">
<table width="1050" border="0" cellspacing="0" cellpadding="0" align="center" id="tablebody">
  <tr bgcolor="#0033FF">
    <td height="150" width="1050" colspan="2" class="logo" nowrap="nowrap" align="CENTER"><br />
	NURSING SYSTEM <BR /><span class="tagline">Philippine Nursing Online System</span></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#0099FF" class="borderline" background="mm_dashed_line.gif"><img src="mm_dashed_line.gif" alt=" &nbsp; " width="4" height="3" border="0" /></td>
  </tr>

  <tr bgcolor="#0033FF">
  	<td height="20" colspan="3">
		<table width="1050" border="0" id="navigationTop">
			<tr>	
				<td width="30" align="left"> <a href="bonhome.php" class="navText">HOME</a></td>
				<td width="1" align="left" id="tdS"> <a class="navText">|</a></td>
				<td width="40" align="left"><a href="#" class="navText"><font color="#660000">LOGOUT</font></a></td>
			  	<td width="740" align="right" id="dateformat">Today: <script language="javascript">document.write(getDate())</script></td>
			</tr>
	  </table>	</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#0099FF" class="borderline" background="mm_dashed_line.gif"><img src="mm_dashed_line.gif" alt="&nbsp;" width="4" height="3" border="0" /></td>
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
          <td width="150" class="menuname" valign="middle">BoN ADMIN
		  <br /></td>
        </tr>       
		 <tr>
          <td width="150"><a href="bonschool.php" class="navText">school entry</a></td>
         </tr>
		 <tr>
          <td width="150"><a href="bonaddress.php" class="navText">address entry</a></td>
         </tr>
		 <tr>
          <td width="150"><a href="boncashier.php" class="navText">PRC cashier</a></td>
         </tr>
		 <tr>
          <td width="150"><a href="bonfoster.php" class="navText">foster</a></td>
         </tr>
		 <tr>
          <td width="150"><a href="bonstudent.php" class="navText">students</a></td>
         </tr>
		 <tr>
          <td width="150"><a href="bonstatusreport.php" class="navText">status report</a></td>
        </tr>
		<tr>
          <td width="150"><a href="bonnle.php" class="navText">nle</a></td>
         </tr>
      </table>
	  <br />
	  <br />
  	&nbsp;<br /> 	</td>
    <td width="880" valign="top" ><br />
	&nbsp;<br />
	<table cellspacing="15" cellpadding="0" width="900" align="center">
      <tr>
        <td width="900" class="pageName"><!-- InstanceBeginEditable name="contentName" -->NLE<!-- InstanceEndEditable --> </td>
      </tr>
      <tr>
        <td class="bodyText"><br /><!-- InstanceBeginEditable name="content" -->
		<table width="100%">
			<td>
				<form  method="POST" enctype="multipart/form-data" >	
					<input type="submit" value="List of Examinees" name="list" >
					&nbsp;<input type="submit" value="Paid Examinees" name="plist" >
					&nbsp;<input type="submit" name="test" value="Testing Centers"/>		
					&nbsp;<input name="results" type="submit" value="Results"/>
				</form>
			</td>
				
			<? if ($list=="List of Examinees"){ ?>
			<form name="listOfExaminees"  method="POST" enctype="multipart/form-data" >
			 <table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" >
														
							<tr>
								<td align="left">
									<br/>
									<div style="font-size:13px;">
										Region: <select name="regiondDrpDwn" style="font-size:11px;">
													<!--TODO: get all regions-->
													<option>Region 1</option>
													<option>Region 2</option>
													<option>Region 3</option>
													<option>Region 4</option>
													<option>Region 5</option>
													<option>Region 6</option>
													<option>Region 7</option>
													<option>...</option>
												</select>&nbsp;&nbsp;
										Province: <select name="provinceDrpDwn" style="font-size:11px;">
													<!--TODO: get all province from selected region-->
													<option>-- Select Provice --</option>
													<option>Province 1</option>
													<option>Province 2</option>
													<option>Province 3</option>
													<option>Province 4</option>
													<option>Province 5</option>
													<option>Province 6</option>
													<option>Province 7</option>
													<option>...</option>
												</select>&nbsp;&nbsp;
										School: <select name="schoolDrpDwn" style="font-size:11px;">
													<!--TODO: get all schools from selected province-->
													<option>-- Select School --</option>
													<option>School 1</option>
													<option>School 2</option>
													<option>School 3</option>
													<option>School 4</option>
													<option>School 5</option>
													<option>School 6</option>
													<option>School 7</option>
													<option>...</option>
												</select>&nbsp;&nbsp;
										<input type="text" size="30" style="font-size:11px;"/> <input type="button" value="Search" style="font-size:12px;" onclick="javascript:alert('School Not Found');"/>
									</div>
								</td>
							</tr>
							
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
										<th width="20%" align="center" >Student Name</th>
										<th width="40%" align="center" >Special Order</th>
										<th width="40%" align="center" >Ched Recognition</th>
									</tr>
									
									<!-- list here-->
									<? $i=0;
											for (; $i<5; $i++)
										{ ?>
									 
										<tr>
											<td width="20%" align="left">&nbsp;
												Student Name
											</td>
											<td width="40%" align="center" > 
												<input type="text" style="width:98%;font-size:10px;"/>
											</td>
										 	<td width="40%" align="center" > 
												<input type="text" style="width:98%;font-size:10px;"/>
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
									
									<input type="button" value="Save List" style="font-size:12px;" onclick="javascript:alert('Save List');"/>
									<input type="button" value="Print" style="font-size:12px;" onclick="javascript:alert('Print');"/>
									<input name="room" type="submit" value="Room Assignment" style="font-size:12px;"/>
										
									</td>							
							</tr>
							
							<tr>
								<td align="left">
									<br/>
									<input type="button" value="Archive" style="font-size:12px;" onclick="javascript:alert('Archive');"/>&nbsp;
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
											
					</table>
				</td>
			</tr>
		</table>
			</form>
	<? } ?>
	
	<? if ($plist=="Paid Examinees"){ ?>
		<form name="paidExaminees"  method="POST" enctype="multipart/form-data" >

			 <table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" >
														
							<tr>
								<td align="left">
									<br/>
									<div style="font-size:13px;">
										Region: <select name="regiondDrpDwn" style="font-size:11px;">
													<!--TODO: get all regions-->
													<option>Region 1</option>
													<option>Region 2</option>
													<option>Region 3</option>
													<option>Region 4</option>
													<option>Region 5</option>
													<option>Region 6</option>
													<option>Region 7</option>
													<option>...</option>
												</select>&nbsp;&nbsp;
										Province: <select name="provinceDrpDwn" style="font-size:11px;">
													<!--TODO: get all province from selected region-->
													<option>-- Select Provice --</option>
													<option>Province 1</option>
													<option>Province 2</option>
													<option>Province 3</option>
													<option>Province 4</option>
													<option>Province 5</option>
													<option>Province 6</option>
													<option>Province 7</option>
													<option>...</option>
												</select>&nbsp;&nbsp;
										School: <select name="schoolDrpDwn" style="font-size:11px;">
													<!--TODO: get all schools from selected province-->
													<option>-- Select School --</option>
													<option>School 1</option>
													<option>School 2</option>
													<option>School 3</option>
													<option>School 4</option>
													<option>School 5</option>
													<option>School 6</option>
													<option>School 7</option>
													<option>...</option>
												</select>&nbsp;&nbsp;
										<input type="text" size="30" style="font-size:11px;"/> <input type="button" value="Search" style="font-size:12px;" onclick="javascript:alert('School Not Found');"/>
									</div>
								</td>
							</tr>
							
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
								<td align="left">
									<br/>
									
									<input type="button" value="Save List" style="font-size:12px;" onclick="javascript:alert('Save List to PDF');"/>
									<input type="button" value="Print" style="font-size:12px;" onclick="javascript:alert('Print');"/>
									
									
									</td>							

							</tr>
							

											
					</table>
				</td>
			</tr>
		</table>
				</form>
	<? } ?>
	
	
	<? if ($room == "Room Assignment") { ?>
	<form name="roomAssignment"  method="POST" enctype="multipart/form-data" >

	
	<table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" >
								
							<tr>
								<td align="left">
									<br/>
									<div style="font-size:13px;">
										Region: <select name="regiondDrpDwn" style="font-size:11px;">
													<!--TODO: get all regions-->
													<option>Region 1</option>
													<option>Region 2</option>
													<option>Region 3</option>
													<option>Region 4</option>
													<option>Region 5</option>
													<option>Region 6</option>
													<option>Region 7</option>
													<option>...</option>
												</select>&nbsp;&nbsp;
										Province: <select name="provinceDrpDwn" style="font-size:11px;">
													<!--TODO: get all province from selected region-->
													<option>-- Select Provice --</option>
													<option>Province 1</option>
													<option>Province 2</option>
													<option>Province 3</option>
													<option>Province 4</option>
													<option>Province 5</option>
													<option>Province 6</option>
													<option>Province 7</option>
													<option>...</option>
												</select>&nbsp;&nbsp;
										School: <select name="schoolDrpDwn" style="font-size:11px;">
													<!--TODO: get all schools from selected province-->
													<option>-- Select School --</option>
													<option>School 1</option>
													<option>School 2</option>
													<option>School 3</option>
													<option>School 4</option>
													<option>School 5</option>
													<option>School 6</option>
													<option>School 7</option>
													<option>...</option>
												</select>&nbsp;&nbsp;
										<input type="text" size="30" style="font-size:11px;"/> <input type="button" value="Search" style="font-size:12px;" onclick="javascript:alert('School Not Found');"/>
									</div>
								</td>
							</tr>
							
							<tr>
								<td align="left">
									<br/>
									<div style="font-size:13px;">
										School:&nbsp;<span style="font-weight:bold">Name of Selected School</span><br/>
										Date:&nbsp;<span style="font-weight:bold">Date</span><br/>
										Testing Center:&nbsp;<span style="font-weight:bold">Selected Testing Center</span><br/>
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
								<td align="left">
									<br/>
									<span style="font-size:12px;">Testing Center:</span>&nbsp;
									<select name="regiondDrpDwn" style="font-size:11px;">
										<!--TODO: get all testing centers-->
										<option>-- All --</option>
										<option>Testing Center 1</option>
										<option>Testing Center 2</option>
										<option>Testing Center 3</option>
										<option>Testing Center 4</option>
										<option>Testing Center 5</option>
										<option>Testing Center 6</option>
										<option>Testing Center 7</option>
										<option>...</option>
									</select>&nbsp;&nbsp;
									<input type="button" value="Print" style="font-size:12px;" onclick="javascript:alert('Print');"/>
									<input type="button" value="Save" style="font-size:12px;" onclick="javascript:alert('Save in .pdf form');"/>
								</td>								
							</tr>
							
						
					</table>
				</td>
			</tr>
		</table>
	</form>
	<? } ?>
	
	<? if ($test=="Testing Centers"){ ?>
	<form name="testingCenters"  method="POST" enctype="multipart/form-data">
		  <table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" >
							<tr>
								<td align="left">
									<br/>
									<div style="font-size:13px;">
									
										<input name="mlist" type="submit" value="Master List" style="font-size:12px;"/>
										<input name="room1" type="submit" value="Room Assignment" style="font-size:12px;"/>
										<input type="text" size="30" style="font-size:11px;"/> <input type="button" value="Search" style="font-size:12px;" onclick="javascript:alert('School Not Found');"/>
										
									</div>
								</td>
							</tr>
							
							<tr>
								<td align="left">
									<br/>
									<div style="font-size:13px;">
										Region: <select name="regiondDrpDwn" style="font-size:11px;">
													<!--TODO: get all regions-->
													<option>Region 1</option>
													<option>Region 2</option>
													<option>Region 3</option>
													<option>Region 4</option>
													<option>Region 5</option>
													<option>Region 6</option>
													<option>Region 7</option>
													<option>...</option>
												</select>&nbsp;&nbsp;
										Province: <select name="provinceDrpDwn" style="font-size:11px;">
													<!--TODO: get all province from selected region-->
													<option>-- Select Provice --</option>
													<option>Province 1</option>
													<option>Province 2</option>
													<option>Province 3</option>
													<option>Province 4</option>
													<option>Province 5</option>
													<option>Province 6</option>
													<option>Province 7</option>
													<option>...</option>
												</select>&nbsp;&nbsp;
										Testing Center: <select name="schoolDrpDwn" style="font-size:11px;">
													<!--TODO: get all Testing Centers from selected province-->
													<option>-- Select Testing Center --</option>
													<option>Testing Center 1</option>
													<option>Testing Center 2</option>
													<option>Testing Center 3</option>
													<option>Testing Center 4</option>
													<option>Testing Center 5</option>
													<option>Testing Center 6</option>
													<option>Testing Center 7</option>
													<option>...</option>
												</select>&nbsp;&nbsp;
										<input type="text" size="30" style="font-size:11px;"/> <input type="button" value="Search" style="font-size:12px;" onclick="javascript:alert('School Not Found');"/>
									</div>
								</td>
							</tr>
							
							
							<tr>
								<td align="left">
									<br/>
									<div style="font-size:13px;">
										Testing Center:&nbsp;<span style="font-weight:bold">Name of Selected Testing Center</span><br/>
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
									<input type="button" value="Print" style="font-size:12px;" onclick="javascript:alert('Print');"/>
									<input type="button" value="Save" style="font-size:12px;" onclick="javascript:alert('Save to .pdf');"/>
									<input type="button" value="Archive" style="font-size:12px;" onclick="javascript:alert('Archive');"/>&nbsp;
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
							
										
					</table>
				</td>
			</tr>
		</table>
	</form>
	<? } ?>
	
	<? if ($room1 == "Room Assignment") { ?>
	<form name="room1Assignment" method="POST" enctype="multipart/form-data">
		 <table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" >
							<tr>
								<td align="left">
									<br/>
									<div style="font-size:13px;">
										
											<input name="mlist" type="submit" value="Master List" style="font-size:12px;"/>
											<input name="room1" type="submit" value="Room Assignment" style="font-size:12px;" />
											<input type="text" size="30" style="font-size:11px;"/> <input type="button" value="Search" style="font-size:12px;" onclick="javascript:alert('Room and Seat Number Not Foound');"/>
										
									</div>
								</td>
							</tr>
							
							<tr>
								<td align="left">
									
									<br/>
									<div style="font-size:13px;">
										Region: <select name="regiondDrpDwn" style="font-size:11px;">
													<!--TODO: get all regions-->
													<option>Region 1</option>
													<option>Region 2</option>
													<option>Region 3</option>
													<option>Region 4</option>
													<option>Region 5</option>
													<option>Region 6</option>
													<option>Region 7</option>
													<option>...</option>
												</select>&nbsp;&nbsp;
										Province: <select name="provinceDrpDwn" style="font-size:11px;">
													<!--TODO: get all province from selected region-->
													<option>-- Select Provice --</option>
													<option>Province 1</option>
													<option>Province 2</option>
													<option>Province 3</option>
													<option>Province 4</option>
													<option>Province 5</option>
													<option>Province 6</option>
													<option>Province 7</option>
													<option>...</option>
												</select>&nbsp;&nbsp;
										Testing Center: <select name="schoolDrpDwn" style="font-size:11px;">
													<!--TODO: get all Testing Centers from selected province-->
													<option>-- Select Testing Center --</option>
													<option>Testing Center 1</option>
													<option>Testing Center 2</option>
													<option>Testing Center 3</option>
													<option>Testing Center 4</option>
													<option>Testing Center 5</option>
													<option>Testing Center 6</option>
													<option>Testing Center 7</option>
													<option>...</option>
												</select>&nbsp;&nbsp;
										<input type="text" size="30" style="font-size:11px;"/> <input type="button" value="Search" style="font-size:12px;" onclick="javascript:alert('Testing Center Not Found');"/>
									</div>
								</td>
							</tr>
							
							
							<tr>
								<td align="left">
									<br/>
									<div style="font-size:13px;">
										Testing Center:&nbsp;<span style="font-weight:bold">Name of Selected Testing Center</span><br/>
										Date:&nbsp;<span style="font-weight:bold">Date</span><br/>
									</div>
								</td>
							</tr>
							
							<tr>
								<!--LIST OF Examinees for selected testing center-->
								<td width="100%" align="left" class="bodyText" >
								<table width="70%" border="1px" bordercolor="#0000FF" cellpadding="1" cellspacing="0" >
									<tr>
										<th width="60%" align="center" >Room Name</th>
										<th width="20%" align="center" >View</th>
										<th width="20%" align="center" >Print</th>
									</tr>
									
									<!-- list here-->
									<? $i=0;
											for (; $i<5; $i++)
										{ ?>
									 
										<tr>
											<td width="60%" align="left">&nbsp;
												Room Name
											</td>
											<td width="20%" align="center" > 
												<a href="bonnleroomview.php" target="_blank">View</a>
											</td>
											<td width="20%" align="center" > 
												<input type="button" value="Print" style="font-size:12px;" onclick="javascript:alert('Print');"/>	
											</td>
										 </tr>											
									<? } ?>									
								</table>
								</td>
							</tr>
										
					</table>
				</td>
			</tr>
		</table>
	</form>
	<? } ?>
	
	<? if ($mlist == "Master List") { ?>
	<form name="masterList" method="POST" enctype="multipart/form-data">
		 <table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" >
							<tr>
								<td align="left">
									<br/>
									<div style="font-size:13px;">
									
										<input name="mlist" type="submit" value="Master List" style="font-size:12px;"/>
										<input name="room1" type="submit" value="Room Assignment" style="font-size:12px;"/>
										<input type="text" size="30" style="font-size:11px;"/> <input type="button" value="Search" style="font-size:12px;" onclick="javascript:alert('School Not Found');"/>
										
									</div>
								</td>
							</tr>
							
							<tr>
								<td align="left">
									<br/>
									<div style="font-size:13px;">
										Region: <select name="regiondDrpDwn" style="font-size:11px;">
													<!--TODO: get all regions-->
													<option>Region 1</option>
													<option>Region 2</option>
													<option>Region 3</option>
													<option>Region 4</option>
													<option>Region 5</option>
													<option>Region 6</option>
													<option>Region 7</option>
													<option>...</option>
												</select>&nbsp;&nbsp;
										Province: <select name="provinceDrpDwn" style="font-size:11px;">
													<!--TODO: get all province from selected region-->
													<option>-- Select Provice --</option>
													<option>Province 1</option>
													<option>Province 2</option>
													<option>Province 3</option>
													<option>Province 4</option>
													<option>Province 5</option>
													<option>Province 6</option>
													<option>Province 7</option>
													<option>...</option>
												</select>&nbsp;&nbsp;
										Testing Center: <select name="schoolDrpDwn" style="font-size:11px;">
													<!--TODO: get all Testing Centers from selected province-->
													<option>-- Select Testing Center --</option>
													<option>Testing Center 1</option>
													<option>Testing Center 2</option>
													<option>Testing Center 3</option>
													<option>Testing Center 4</option>
													<option>Testing Center 5</option>
													<option>Testing Center 6</option>
													<option>Testing Center 7</option>
													<option>...</option>
												</select>&nbsp;&nbsp;
										<input type="text" size="30" style="font-size:11px;"/> <input type="button" value="Search" style="font-size:12px;" onclick="javascript:alert('School Not Found');"/>
									</div>
								</td>
							</tr>
							
							
							<tr>
								<td align="left">
									<br/>
									<div style="font-size:13px;">
										Testing Center:&nbsp;<span style="font-weight:bold">Name of Selected Testing Center</span><br/>
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
									<input type="button" value="Print" style="font-size:12px;" onclick="javascript:alert('Print');"/>
									<input type="button" value="Save" style="font-size:12px;" onclick="javascript:alert('Save to .pdf');"/>
									<input type="button" value="Archive" style="font-size:12px;" onclick="javascript:alert('Archive');"/>&nbsp;
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
							
										
					</table>
				</td>
			</tr>
		</table>
	
	</form>
	<? } ?>
	
	<? if ($results == "Results") { ?>
	
	<form name="results" method="POST" enctype="multipart/form-data">
	
		  <table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" >
														
							<tr>
								<td align="left">
									<br/>
									<div style="font-size:13px;"> 
										
										<input name="rlist" type="submit" value="List" style="font-size:12px;" />
										<input name="rdetails" type="submit" value="Student Details" style="font-size:12px;"/>
										<input name="rank" type="submit" value="School Rank" style="font-size:12px;"/>
										
										
									</div>
								</td>
							</tr>
							
							
							<tr>
								<td align="left">
									<br/>
									<div style="font-size:13px;">
										Region: <select name="regiondDrpDwn" style="font-size:11px;">
													<!--TODO: get all regions-->
													<option>Region 1</option>
													<option>Region 2</option>
													<option>Region 3</option>
													<option>Region 4</option>
													<option>Region 5</option>
													<option>Region 6</option>
													<option>Region 7</option>
													<option>...</option>
												</select>&nbsp;&nbsp;
										Province: <select name="provinceDrpDwn" style="font-size:11px;">
													<!--TODO: get all province from selected region-->
													<option>-- Select Provice --</option>
													<option>Province 1</option>
													<option>Province 2</option>
													<option>Province 3</option>
													<option>Province 4</option>
													<option>Province 5</option>
													<option>Province 6</option>
													<option>Province 7</option>
													<option>...</option>
												</select>&nbsp;&nbsp;
										School: <select name="schoolDrpDwn" style="font-size:11px;">
													<!--TODO: get all schools from selected province-->
													<option>-- Select School --</option>
													<option>School 1</option>
													<option>School 2</option>
													<option>School 3</option>
													<option>School 4</option>
													<option>School 5</option>
													<option>School 6</option>
													<option>School 7</option>
													<option>...</option>
												</select>&nbsp;&nbsp;
										<input type="text" size="30" style="font-size:11px;"/> <input type="button" value="Search" style="font-size:12px;" onclick="javascript:alert('School Not Found');"/>
									</div>
								</td>
							</tr>
							
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
									<br/>
									<input type="button" value="Print" style="font-size:12px;" onclick="javascript:alert('Print');"/>
									<input type="button" value="Save" style="font-size:12px;" onclick="javascript:alert('Save to .pdf');"/>
									<input type="button" value="Archive" style="font-size:12px;" onclick="javascript:alert('Archive');"/>&nbsp;
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
					</table>
				</td>
			</tr>
		</table>
		
	</form>
	<? } ?>
	
	
	<? if ($rlist == "List") { ?>
	<form name="list" method="POST" enctype="multipart/form-data">
		
		  <table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" >
													
							<tr>
								<td align="left">
									<br/>
									<div style="font-size:13px;"> 
									
										<input name="rlist" type="submit" value="List" style="font-size:12px;" />
										<input name = "rdetails" type="submit" value="Student Details" style="font-size:12px;"/>
										<input name="rank" type="submit" value="School Rank" style="font-size:12px;"/>
									
										
									</div>
								</td>
							</tr>
							
							
							<tr>
								<td align="left">
									<br/>
									<div style="font-size:13px;">
										Region: <select name="regiondDrpDwn" style="font-size:11px;">
													<!--TODO: get all regions-->
													<option>Region 1</option>
													<option>Region 2</option>
													<option>Region 3</option>
													<option>Region 4</option>
													<option>Region 5</option>
													<option>Region 6</option>
													<option>Region 7</option>
													<option>...</option>
												</select>&nbsp;&nbsp;
										Province: <select name="provinceDrpDwn" style="font-size:11px;">
													<!--TODO: get all province from selected region-->
													<option>-- Select Provice --</option>
													<option>Province 1</option>
													<option>Province 2</option>
													<option>Province 3</option>
													<option>Province 4</option>
													<option>Province 5</option>
													<option>Province 6</option>
													<option>Province 7</option>
													<option>...</option>
												</select>&nbsp;&nbsp;
										School: <select name="schoolDrpDwn" style="font-size:11px;">
													<!--TODO: get all schools from selected province-->
													<option>-- Select School --</option>
													<option>School 1</option>
													<option>School 2</option>
													<option>School 3</option>
													<option>School 4</option>
													<option>School 5</option>
													<option>School 6</option>
													<option>School 7</option>
													<option>...</option>
												</select>&nbsp;&nbsp;
										<input type="text" size="30" style="font-size:11px;"/> <input type="button" value="Search" style="font-size:12px;" onclick="javascript:alert('School Not Found');"/>
									</div>
								</td>
							</tr>
							
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
									<br/>
									<input type="button" value="Print" style="font-size:12px;" onclick="javascript:alert('Print');"/>
									<input type="button" value="Save" style="font-size:12px;" onclick="javascript:alert('Save to .pdf');"/>
									<input type="button" value="Archive" style="font-size:12px;" onclick="javascript:alert('Archive');"/>&nbsp;
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
					</table>
				</td>
			</tr>
		</table>
		
	</form>
	<? } ?>
	
	<? if ($rdetails == "Student Details") { ?>
	<form name="studentDetails" method="POST" enctype="multipart/form-data">
		<table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" >
														
							<tr>
								<td align="left">
									<br/>
									<div style="font-size:13px;"> 
										
										
										<input name="rlist" type="submit" value="List" style="font-size:12px;" />
										<input name="rdetails" type="submit" value="Student Details" style="font-size:12px;"/>
										<input name="rank" type="submit" value="School Rank" style="font-size:12px;"/>
										
											
									</div>
								</td>
							</tr>
							
							
							<tr>
								<td align="left">
									<br/>
									<div style="font-size:13px;">
										Region: <select name="regiondDrpDwn" style="font-size:11px;">
													<!--TODO: get all regions-->
													<option>Region 1</option>
													<option>Region 2</option>
													<option>Region 3</option>
													<option>Region 4</option>
													<option>Region 5</option>
													<option>Region 6</option>
													<option>Region 7</option>
													<option>...</option>
												</select>&nbsp;&nbsp;
										Province: <select name="provinceDrpDwn" style="font-size:11px;">
													<!--TODO: get all province from selected region-->
													<option>-- Select Provice --</option>
													<option>Province 1</option>
													<option>Province 2</option>
													<option>Province 3</option>
													<option>Province 4</option>
													<option>Province 5</option>
													<option>Province 6</option>
													<option>Province 7</option>
													<option>...</option>
												</select>&nbsp;&nbsp;
										School: <select name="schoolDrpDwn" style="font-size:11px;">
													<!--TODO: get all schools from selected province-->
													<option>-- Select School --</option>
													<option>School 1</option>
													<option>School 2</option>
													<option>School 3</option>
													<option>School 4</option>
													<option>School 5</option>
													<option>School 6</option>
													<option>School 7</option>
													<option>...</option>
												</select>&nbsp;&nbsp;
										<input type="text" size="30" style="font-size:11px;"/> <input type="button" value="Search" style="font-size:12px;" onclick="javascript:alert('School Not Found');"/>
									</div>
								</td>
							</tr>
							
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
												80% 80 pts Passed
											</td>
											<td width="20%" align="center" > 
												60% 60 pts Failed
											</td>
											<td width="20%" align="center" > 
												89% 89 pts Passed
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
									<br/>
									<input type="button" value="Print" style="font-size:12px;" onclick="javascript:alert('Print');"/>
									<input type="button" value="Save" style="font-size:12px;" onclick="javascript:alert('Save to .pdf');"/>
									<input type="button" value="Archive" style="font-size:12px;" onclick="javascript:alert('Archive');"/>&nbsp;
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
					</table>
				</td>
			</tr>
		</table>
	
	</form>
	<? } ?>
	
	<? if ($rank == "School Rank") { ?>
	<form name="schoolRank" method="POST" enctype="multipart/form-data">
	
		 <table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" >
														
							<tr>
								<td align="left">
									<br/>
									<div style="font-size:13px;"> 
										
										<input name="rlist" type="submit" value="List" style="font-size:12px;" />
										<input name="rdetails" type="submit" value="Student Details" style="font-size:12px;"/>
										<input name="rank" type="submit" value="School Rank" style="font-size:12px;"/>
								
														
									</div>
								</td>
							</tr>
							
							
						
							<tr>
								<!--LIST OF TOP TEN SCHOOLS-->
								<td width="100%" align="left" class="bodyText" >
									LIST OF TOP TEN SCHOOLS
								</td>
							</tr>
							
														
							<tr>
								<td align="left">
									<br/>
									<input type="button" value="Archive" style="font-size:12px;" onclick="javascript:alert('Archive');"/>&nbsp;
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
					</table>
				</td>
			</tr>
		</table>
	</form>
	<? } ?>
								
		</table>
       <!-- InstanceEndEditable --> 
		</td>
      </tr>
    </table>
	<br />
	<br />
	</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#0099FF" class="borderline" background="mm_dashed_line.gif"> <img src="mm_dashed_line.gif" alt="&nbsp;" width="1" height="1" border="0" /> </td>
  </tr>
  <tr bgcolor="#0033FF">
  	<td height="20" colspan="3">
	<table width="190" border="0" id="navigationTop" align="left">
			<tr>	
				<td width="50" align="left"><a href="boncontact.php" class="navText">CONTACT US</a></td>
				<td width="1" align="left" id="tdS" ><a class="navText">|</a></td>
				<td width="15" align="left"><a href="bonhelp.php" class="navText">HELP</a></td>
			</tr>
	  </table>
	</td>
  </tr>
</table>
</body>
<!-- InstanceEnd --></html>

