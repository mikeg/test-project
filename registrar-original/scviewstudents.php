<?php
	$search = $_POST['search'];
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/school.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>BoN Online System - Students</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<script language="JavaScript" type="text/javascript" src="../js/schools.js"></script>
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
        <td width="900" class="pageName"><!-- InstanceBeginEditable name="contentName" -->STUDENTS<!-- InstanceEndEditable --> </td>
      </tr>
      <tr>
        <td class="bodyText"><br /><!-- InstanceBeginEditable name="content" -->
        <table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" >
							<tr>
								<td align="left">
									<form name="viewType" action="scviewstudents.php" enctype="multipart/form-data" method="post">
									<input type="button" name="Add" value="Add Student" onclick="window.location='scstudentprofile.php'"/>		&nbsp;<input type="submit" name="search" value="Search"/>
									</form>
								</td>
							</tr>
							<? if ($search=="Search")
							{ ?>
								<tr>
									<td align="left">
										<form name="search" action="scstatusreport.php" enctype="multipart/form-data" method="post">
										<input type="hidden" name="yearlevel" value=<? echo $viewType ?> />
										Student Name: <input type="text" name="studentName" value="" size="30"/>&nbsp;
										Year Level: <select name="yearlevel">
										<option value="0" selected>All</option>
										<option value="4" >4th Year</option>
										<option value="4Ir" >4th Year Irregular</option>
										<option value="3" >3rd Year</option>
										<option value="3Ir" >3rd Year Irregular</option>
										<option value="2" >2nd Year</option>
										<option value="2Ir" >2nd Year Irregular</option>
										<option value="1" >1st Year</option>
										</select>&nbsp;
										<input type="submit" name="search" value="SEARCH" />
										</form>
									</td>
								</tr>
							<? } ?>
							<tr>
								<td width="100%" align="left" class="bodyText" >
									<table width="100%" border="1px" bordercolor="#0000FF" cellpadding="1" cellspacing="0">
										<tr>
											<th width="21%" class="thead">Student Name</th>
											<th width="4%"  class="thead">Year</th>
											<th width="5%" class="thead">NAF Form </th>
											<th width="5%" class="thead">T.O.R.</th>
											<th width="5%" class="thead">SRLE</th>
											<th width="6%" class="thead">O.R.D.R. Cases</th>											
											<th width="7%" class="thead">NSO Birth Certificate</th>
											<th width="7%" class="thead">NSO Marriage Contract</th>
										    <th width="5%" class="thead">Foreign</th>
											<th width="7%" class="thead">Passport Picture</th>
											<th width="6%" class="thead">Window Envelope</th>
											<th width="5%" class="thead">Stamp</th>
											<th width="5%" class="thead">Cedula</th>
											<th width="5%" class="thead">Paid</th>
											<th width="7%"  class="thead">Edit</th>
										</tr>
										
										<? $i=0;
											for (; $i<5; $i++)
										{ ?>
									    <form name="studentInfo" method="post" enctype="multipart/form-data" action="scstudentprofile.php">
										<tr>
											<td width="21%" align="left"   valign="top" class="tcontent">Student Name</td>
											<td width="4%" align="center" valign="top" class="tcontent">1</td>
										  
											<td width="5%" align="center" valign="top" class="tcontent"><input type="checkbox" name="nafForm" />
										    <a href="" onclick="window.location='nafform.php'" >View</a></td>
											<td width="5%" align="center" valign="top" class="tcontent"><input type="checkbox" name="tor" /> <a href="" onclick="window.location='tor.php'" >View</a></td>
										  <td width="5%" align="center" valign="top" class="tcontent"><input type="checkbox" name="learningExp" /> <a href="" onclick="window.location='srleform.php'" >View</a></td>
										  <td width="6%" align="center" valign="top" class="tcontent"><input type="checkbox" name="ordr" /> <a href="" onclick="window.location='ordrform.php'" >View</a></td>
										  <td width="7%" align="center" valign="top" class="tcontent"><input type="checkbox" name="nsoBirth" /></td>
										  <td width="7%" align="center" valign="top" class="tcontent"><input type="checkbox" name="nsoMarriage"/></td>
										  <td width="5%" align="center" valign="top" class="tcontent"><input type="checkbox" name="foreign" /></td>
										  <td width="7%" align="center" valign="top" class="tcontent"><input type="checkbox" name="passportPics"/></td>
										  <td width="6%" align="center" valign="top" class="tcontent"><input type="checkbox" name="envelope" /></td>
										  <td width="5%" align="center" valign="top" class="tcontent"><input type="checkbox" name="stamp" /></td>
										  <td width="5%" align="center" valign="top" class="tcontent"><input type="checkbox" name="cedula" /></td>
										  <td width="5%" align="center" valign="top" class="tcontent"><input type="checkbox" name="paid" /></td>
										  <td width="7%"  align="center" class="tcontent"><input type="submit" name="submit" value="Profile" /></td>
										</tr>
										</form>
										<? } ?>
									</table>
								</td>
							</tr>
					</table>
				</td>
			</tr>
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

