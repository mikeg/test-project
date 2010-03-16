<?php
	$edit = $_POST['edit'];
	$edit1 = $_POST['edit1'];
	$edit2 = $_POST['edit2'];
	$add = $_POST['add'];
	$search = $_POST['search'];
	$search1 = $_POST['search1'];
	$search2 = $_POST['search2'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/bon.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>BoN Online System - Foster</title>
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
        <td width="900" class="pageName"><!-- InstanceBeginEditable name="contentName" -->FOSTER<!-- InstanceEndEditable --> </td>
      </tr>
      <tr>
        <td class="bodyText"><br /><!-- InstanceBeginEditable name="content" -->
			<table width="100%">
			
		  <td>
				<form method="POST" enctype="multipart/form-data" >	
					<input type="submit" name="edit" value="Edit Search"/>
					&nbsp;<input type="submit" value="Add Foster" name="add" >			
				</form>
		 </td>
			
	
		<? if ($add=="Add Foster" || $edit1=="EDIT"){ ?>
		<form name="addFoster" method="post" enctype="multipart/form-data" action="#">
		<table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
							<tr>
								<td width="100%" align="left" class="bodyText" >
									<table width="100%" bordercolor="#0000FF" cellpadding="1" cellspacing="0" align="center">
										<tr>
											
											<th width="15%" class="thead">Add Foster</th>
											<th width="85%" class="thead"></th>
										</tr>
										
										<tr>
											<td width="15%" align="right"> <br/>Fostername:<br/><br/></td> 
											<td width="85%" align="left"><br/> <input type="text" size="40" name="fosterName"><br/><br/></td>
										</tr>
										
										<tr>
											<td width="15%" align="right">Affiliation<br/><br/></td> 
											<td width="85%" align="left"><input type="text" size="30"/><br/><br/></td>
										</tr>
										
										<tr>
											<div style="font-size:13px;">
											<td width="15%" align="right"> Location Handled:</td> 
											
											<td width="40%" align="left"><select name="location"  style="font-size:11px;"/> <option >--Select Region--</option>
											<option>Region 1</option>
											<option>Region 2</option>
											<option>Region 7</option>
											</select>
											
											
											&nbsp; <select name="location"  style="font-size:11px;"/> <option >--Select Province--</option>
											<option>Cebu</option>
											<option>Bohol</option>
											<option>Isabela</option>
											</select>
											</td>
											</div>	
										</tr>
										
										<tr>
									
										<td width="15%" align="right"><br/>Username:<br/><br/></td> 
										<td width="85%" align="left"><br/><input type="text" size="25"/><br/><br/></td>
										</tr>
										
											
										<tr>
										<td width="15%" align="right">Password:<br/><br/></td> 
										<td width="85%" align="left"><input type="password" size="25"/><br/><br/></td>
										</tr>
										
										<tr>
										<td width="15%" align="right">Access:</td> 
										<td width="85%" align="left"><input type="radio" name="enableAcc"><font color="#00FF00"><strong/>enable</font></input>&nbsp;<input type="radio" name="enableAcc"><font color="#FF0000">disable</font></input></td>
										</tr>
										
										
		
										<table width="100%">
												<td width="50%" align="right"><input type="reset" value="CANCEL"></td><br/>
												<td width="50%" align="left"><input type="submit" value="SAVE"></td>
										</table>
										
											
									</table>
								</td>
							</tr>
					</table>
				</td>
			</tr>
		</table>
		</form>
		<? } ?>
		
		<? if ($edit=="Edit Search" || $edit2=="EDIT" || $search2 =="SEARCH"){ ?>
				 <table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
					
						<tr>
								<td width="100%" align="left">
									<table width="100%" cellspacing="0" align="center">
											<td align="right"><br/>
												<form name="search"enctype="multipart/form-data" method="post">
												Region: <select name="region">
												<option>--Select Region--</option>
												<option>Region 1</option>
												<option>Region 2</option>
												<option>Region 7</option>
												</select>
												&nbsp;Province: <select name="region">
												<option>--Select Province--</option>
												<option>Cebu</option>
												<option>Bohol</option>
												<option>Isabela</option>
												</select>
												&nbsp;Firstname/Lastname: <input type="text" name="cashierName" size="30">
												&nbsp;<input type="submit" name="search2" value="SEARCH" />
												</form>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td width="100%" align="left" class="bodyText" >
									<table width="100%" border="1px" bordercolor="#0000FF" cellpadding="1" cellspacing="0" align="center">
										<tr>
											
											<th width="12%" class="thead">Foster Name</th>
											<th width="3%" class="thead">Access</th>
											<th colspan="2" width="12%" class="thead">Location Handled</th>
											<th colspan="2" width="2%" class="thead">Action</th>
										</tr>
										
										<? 
											for($i = 0; $i<1; $i++)
										{ ?>
											<form name="cashiers" method="post" enctype="multipart/form-data" action="#">
											<tr>
												
											<td width="12%" align="center" class="tcontent">Foster Name</td>
											<td width="3%" align="center" class="tcontent"><input name="access" type="checkbox" id="access" /></td>
											<td width="5%" align="center" class="tcontent">Region</td>
											<td width="7%" align="center" class="tcontent">Province</td>
											<td width="1%" align="center" class="tcontent"><input name="edit1" type="button" id="edit" value="EDIT"/></td>
											<td width="1% " align="center" class="tcontent"><input name="save" type="submit" id="save" value="SAVE"/></td>
											</tr>
											</form>
										<? }  ?>
									</table>
								</td>
							</tr>
					</table>
				</td>
			</tr>
		</table>
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

