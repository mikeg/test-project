<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/school.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<script language="JavaScript" type="text/javascript" src="..js/schools.js"></script>
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
        <td width="900" class="pageName"><!-- InstanceBeginEditable name="contentName" -->PRINT APPLICATION FORMS<!-- InstanceEndEditable --> </td>
      </tr>
      <tr>
        <td class="bodyText"><br /><!-- InstanceBeginEditable name="content" -->
        <table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
							<tr>
								<td width="30%" align="left">&nbsp;</td>
								<td width="30%" align="right" class="filter">
									Sort by : <select name="year" >
														<option value="0">All</option>
														<option value="1">Application No.</option>
														<option value="2">Last Name</option>
													</select>
								</td>
							</tr>
							<tr>
								<td colspan="2" width="100%" align="left" class="bodyText" >
									<table width="100%" border="1px" bordercolor="#0000FF" cellpadding="1" cellspacing="0">
										<tr>
											<th width="15%" class="thead">Application No</th>
											<th width="36%" class="thead">Student Name</th>
											<th width="16%"  class="thead">Date of Examination</th>
											<th width="14%" class="thead">Place of Examination</th>
											<th width="13%" class="thead">Status</th>
											<th width="6%"  class="thead">Action</th>
										</tr>
										<? $i=0;
											for (; $i<5; $i++)
										{ ?>
										<form name="studentInfo" method="post" enctype="multipart/form-data" action="">
										<tr>
											<td width="15%" align="center" class="tcontent">123456789012345</td>
											<td width="36%" align="left"   class="tcontent">Tamad, Juan C. </td>
											<td width="16%"  align="center" class="tcontent">05/22/2010</td>
											<td width="14%" align="center" class="tcontent">Cebu City </td>
											<td width="13%" align="center" class="tcontent">Approved</td>
											<td width="6%"  align="center" class="tcontent"><input type="submit" name="print" value="PRINT" /></td>
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

