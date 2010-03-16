<?php
	$rename = $_POST['rename'];
	$move= $_POST['move'];
	$merge = $_POST['merge'];
	$edit1 = $_POST['edit1'];
	$add = $_POST['add'];
	$search = $_POST['search'];
	$search1 = $_POST['search1'];
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/bon.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>BoN Online System - Address Entry</title>
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
        <td width="900" class="pageName"><!-- InstanceBeginEditable name="contentName" -->ADDRESS ENTRY<!-- InstanceEndEditable --> </td>
      </tr>
      <tr>
        <td class="bodyText"><!-- InstanceBeginEditable name="content" -->
			<table width="100%">
		  <td>
				<form  method="POST" enctype="multipart/form-data" >	
					<input type="submit" value="Add Address" name="add" >
					&nbsp;<input type="submit" name="rename" value="Rename"/>
					&nbsp;<input type="submit" name="move" value="Move To"/>
					&nbsp;<input type="submit" name="merge" value="Merge With"/>		
				</form>			
				
		
		<? if ($add=="Add Address"){ ?>
		<form name="addAddress"  method="POST" enctype="multipart/form-data" action="" >
		<table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
						<tr>
						<td width="100%" align="left" class="bodyText" >
							<table width="100%" cellspacing="0" align="center">
										
										<tr><br/>
											<td align="left">Add: <select name="selectAdd">
											<option >--Select--</option>
											<option onclick="addProv()" >Province</option>
											<option onclick="addMun()">Municipality / City</option>
											<option onclick="addZip()">Zip Code</option>
											</select>										
											</td>
										</tr>
											
									</table>
				
							<tr>
								<td width="100%" align="left" class="bodyText" >
									<table width="100%" bordercolor="#0000FF" cellpadding="1" cellspacing="0" align="center">
										<tr>
											
											<th width="100%" class="thead" align="left">Add Address</th>
										</tr>
										<tr>
											<td width="100%">
												<table id='addAddressTable'>																	
												</table>			
											</td>
										</tr>	
									</table>
							
							</tr>
					</table>
				</td>
			</tr>
		</table>
		</form>
		<? } ?>
		
		<? if ($rename=="Rename"){ ?>
		<form name="renameAddress"  method="POST" enctype="multipart/form-data" action="" >
		<table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
					<tr>
						<td width="100%" align="left" class="bodyText" >
							<table width="100%" cellspacing="0" align="center">
										
										<tr><br/>
											<td align="left">Rename: <select name="selectRename">
											<option >--Select--</option>
											<option onclick="renameRegion()" >Region</option>
											<option onclick="renameProv()" >Province</option>
											<option onclick="renameMun()">Municipality / City</option>
											<option onclick="renameZip()">Zip Code</option>
											</select>										
											</td>
										</tr>
											
									</table>
					
							<tr>
								<td width="100%" align="left" class="bodyText" >
									<table width="100%" bordercolor="#0000FF" cellpadding="1" cellspacing="0" align="center">
										<tr>
											
											<th width="100%" class="thead" align="left">Rename Address</th>
										</tr>
										<tr>
											<td width="100%">
												<table id='renameAddressTable'>																	
												</table>			
											</td>
										</tr>	
									</table>
								</td>
							</tr>
					</table>
				</td>
			</tr>
		</table>
		</form>
		<? } ?>
		
		<? if ($move=="Move To"){ ?>
		<form name="moveAddress"  method="POST" enctype="multipart/form-data" action="" >
		<table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
					<tr>
						<td width="100%" align="left" class="bodyText" >
							<table width="100%" cellspacing="0" align="center">
										
										<tr><br/>
											<td align="left">Move <select name="selectMove">
											<option >--Select--</option>
											<option onclick="moveProv()">Province</option>
											<option onclick="moveMun()">Municipality / City</option>
											<option onclick="moveZip()">Zip Code</option>
											</select>
											To:										
											</td>
										</tr>
											
									</table>
					
							<tr>
								<td width="100%" align="left" class="bodyText" >
									<table width="100%" bordercolor="#0000FF" cellpadding="1" cellspacing="0" align="center">
										<tr>
											
											<th width="100%" class="thead" align="left">Move To Address</th>
										</tr>
										<tr>
											<td width="100%">
												<table id='moveAddressTable'>																	
												</table>			
											</td>
										</tr>	
									</table>
								</td>
							</tr>
					</table>

				</td>
			</tr>
		</table>
		</form>
		<? } ?>
		
		<? if ($merge=="Merge With"){ ?>
		<form name="mergeAddress"  method="POST" enctype="multipart/form-data" action="" >
		<table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
					<tr>
						<td width="100%" align="left" class="bodyText" >
							<table width="100%" cellspacing="0" align="center">
										
										<tr><br/>
											<td align="left">Merge <select name="selectMerge">
											<option >--Select--</option>
											<option onclick="mergeRegion()" >Region</option>
											<option onclick="mergeProv()" >Province</option>
											<option onclick="mergeMun()">Municipality / City</option>
											</select>
											With:										
											</td>
										</tr>
											
									</table>
					
							<tr>
								<td width="100%" align="left" class="bodyText" >
									<table width="100%" bordercolor="#0000FF" cellpadding="1" cellspacing="0" align="center">
										<tr>
											
											<th width="100%" class="thead" align="left">Merge With Address</th>
										</tr>
										<tr>
											<td width="100%">
												<table id='mergeAddressTable'>																	
												</table>			
											</td>
										</tr>	
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

