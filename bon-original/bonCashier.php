<?php
	$edit = $_POST['edit'];
	$edit1 = $_POST['edit1'];
	$add = $_POST['add'];
	$search = $_POST['search'];
	$search2 = $_POST['search1'];
	$reg = $_POST['reg'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/bon.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>BoN Online System - PRC Cashier</title>
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
    <td height="100" colspan="2" align="CENTER" nowrap="nowrap" class="logo"> <div align="left">
      <table width="75%" height="100" cellspacing="5" class="logo">
        <tr>
          <td width="11%" align="center" valign="middle"><div align="center"><img src="images/bongif.gif" width="100" height="100" /></div></td>
          <td width="89%"><span class="logo">NURSING SYSTEM </span><br />
            <span class="tagline">Philippine Nursing Online System</span></td>
        </tr>
      </table>
    </div>
    </td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#0099FF" class="borderline" background="mm_dashed_line.gif"><img src="mm_dashed_line.gif" alt=" &nbsp; " width="4" height="3" border="0" /></td>
  </tr>

  <tr bgcolor="#0033FF">
  	<td height="20" colspan="3">
		<table width="1050" border="0" id="navigationTop">
			<tr>
				<td align="left" width="10"></td>	
				<td width="37" align="left"><a href="bonhome.php" class="navText">HOME</a></td>
				<td align="left" id="separator">|</td>
				<td width="52" align="left"><a href="#" class="navText"><font color="#660000">LOGOUT</font></a></td>
			  	<td width="933" align="right" id="dateformat">Today: <script language="javascript">document.write(getDate())</script></td>
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
        <td width="900" class="pageName"><!-- InstanceBeginEditable name="contentName" -->PRC CASHIER<!-- InstanceEndEditable --> </td>
      </tr>
      <tr>
        <td class="bodyText"><!-- InstanceBeginEditable name="content" -->
  
   	<table width="100%">
	 
		  <td>
				<form method="POST" enctype="multipart/form-data" action="boncashier.php" name="cashier" >	
					<input type="submit" value="Add Cashier" name="add" >
					&nbsp;<input type="submit" name="edit" value="Edit"/>	
					&nbsp;<input type="button" value="PRC Location" name="addLocation" onclick="javascript:window.location='bonlocation.php'" />		
				</form>

		
				<? if ($add=="Add Cashier" || $edit1=="EDIT"){ ?>
<form name="schools" method="post" enctype="multipart/form-data" action="#">
		<table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
							<tr>
								<td width="100%" align="left" class="bodyText" >
									<table width="100%" bordercolor="#0000FF" cellpadding="1" cellspacing="0" align="center">
										<tr>
											<th width="15%" class="thead">Add Cashier</th>
											<th width="85%" class="thead"></th>
										</tr>
										<tr>
											<td width="15%" align="right"><br/> Cashier Name:<br/><br/></td> 
											<td width="85%" align="left"><br/> <input type="text" size="50" name="cashiertName"><br/><br/></td>
										</tr>
										<tr>
											<td width="15%" align="right"> Location:</td> 
											<td width="85%" align="left"><select name="selRegion"/> <option >--Select Region--</option>
											<option>Region 1</option>
											<option>Region 2</option>
											<option>Region 7</option>
											</select>
											</td>
										</tr>
										
										<tr>
										<td width="15%" align="right"> <br/> Employee No.:<br/><br/></td> 
										<td width="85%" align="left"> <br/><input type="text" size="25" name="employeeNo"/><br/><br/></td>
										</tr>
										
										<tr>
										<td width="15%" align="right">Position:<br/><br/></td> 
										<td width="85%" align="left"><input type="text" size="30" name="position"/><br/><br/></td>
										</tr>
									
										<tr>
										<td width="15%" align="right">Username:<br/><br/></td> 
										<td width="85%" align="left"><input type="text" size="25" name="username"/><br/><br/></td>
										</tr>
										
											
										<tr>
										<td width="15%" align="right">Password:<br/><br/></td> 
										<td width="85%" align="left"><input type="password" size="25" name="password"/><br/><br/></td>
										</tr>
										
										<tr>
										<td width="15%" align="right">Access:</td> 
										<td width="85%" align="left"><input type="radio" name="enableAcc"><font color="#006600"><strong/>enable</font></input>&nbsp;<input type="radio" name="enableAcc"><font color="#FF0000">disable</font></input></td>
										</tr>		
									</table>
								</td>
							</tr>
					</table>
				</td>
			</tr>
		</table>
		<table width="100%">
			<td width="50%" align="right"><input type="reset" value="CANCEL" name="reset"/></td><br/>
			<td width="50%" align="left"><input type="button" value="SAVE" name="save"/></td>							
		</table>
		</form>
		<? } ?>
		
		
		<? if ($edit=="Edit" || $edit2=="EDIT" || $search2 =="SEARCH"){ ?>
		<form name="editCashier"enctype="multipart/form-data" method="post">
		 <table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
						<tr>
								<td width="100%" align="left">
									<table width="100%" cellspacing="0" align="center">
											<td align="right">
												
												Region:<select name="selRegion"/>
												<option>--Select Region--</option>
												<option>Region 1</option>
												<option>Region 7</option>
												<option>Region 12</option>
												&nbsp;<input type="submit" name="search2" value="SEARCH" />
												
											</td>
									</table>
								</td>
						</tr>
							
								<td width="100%" align="left" class="bodyText" >
									<table width="100%" border="1px" bordercolor="#0000FF" cellpadding="1" cellspacing="0" align="center">
										<tr>
											
											<th width="12%" class="thead">Cashier Name</th>
											<th width="3%" class="thead">Access</th>
											<th colspan="2" width="1%"class="thead">Action</th>
										</tr>
										
										<? 
											for($i = 0; $i<5; $i++)
										{ ?>
										
											<tr>
												
											<td width="12%" align="center" class="tcontent">Cashier Name</td>
											<td width="3%" align="center" class="tcontent"><input name="access" type="checkbox" id="access" /></td>
											<td align="center" class="tcontent"><input name="edit1" type="button" id="edit" value="EDIT"/></td>
											<td align="center" class="tcontent"><input name="save" type="submit" id="save" value="SAVE"/></td>
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
		</table>
	<!-- InstanceEndEditable -->		</td>
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
	<table width="100%" border="0" id="navigationTop" align="left">
			<tr>
				<td align="left" width="9"></td>	
				<td width="91" align="left"><a href="boncontact.php" class="navText">CONTACT US</a></td>
				<td align="left" id="separator" >|</td>
				<td width="33" align="left"><a href="bonhelp.php" class="navText">HELP</a></td>
			    <td width="890" align="left"><div align="right">&copy; 2009 | V.1.0</div></td>
			</tr>
	  </table>
	</td>
  </tr>
</table>
</body>
<!-- InstanceEnd --></html>

