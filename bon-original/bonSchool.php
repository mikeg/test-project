<?php
	$edit = $_POST['edit'];
	$edit1 = $_POST['edit1'];
	$add = $_POST['add'];
	$search = $_POST['search'];
	$search1 = $_POST['search1'];
	$reg = $_POST['reg'];
	$schoolName = $_POST['schoolName'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/bon.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>BoN Online System - School Entry</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<script language="JavaScript" type="text/javascript" src="js/schools.js"></script>
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
        <td width="900" class="pageName"><!-- InstanceBeginEditable name="contentName" -->SCHOOL ENTRY<!-- InstanceEndEditable --> </td>
      </tr>
      <tr>
        <td class="bodyText"><!-- InstanceBeginEditable name="content" -->
		<table width="100%">
		  <td>
				<form  method="POST" enctype="multipart/form-data" >	
					<input name="search" type="submit" value="Search"/>
					&nbsp;<input type="submit" name="edit" value="Edit"/>		
					&nbsp;<input type="submit" value="Add School" name="add" >
				</form>			
		<? if ($add=="Add School"){ ?>
			<form name="addSchool" method="post" enctype="multipart/form-data" action="bonschool.php">
		<table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
							<tr>
								<td width="100%" align="left" class="bodyText" >
									<table width="100%" bordercolor="#0000FF" cellpadding="1" cellspacing="0" align="center">
										<tr>
											
											<th width="25%" class="thead"><div align="left">Add School</div></th>
											<th width="85%" class="thead">&nbsp;  </th>
										</tr>
									
										<tr>
										<td width="15%" align="right"> <br/> School Name:<br/><br/></td> 
										<td width="85%" align="left"> <br/> <input type="text" size="45" name="schoolName"><br/><br/></td>
										</tr>
										
										<tr>
											<td width="15%" align="right"> Status:</td> 
											<td width="85%" align="left"> <input type="radio" name="schoolStatus" value="Active" /><font color="#006600"><strong/>Active</font></input>
											</td>
										</tr>
										
										<tr>
										<td width="15%" align="right"><br/><br/></td> 
										<td width="85%" align="left"><input type="radio" name="schoolStatus" value="Closed" /><font color="#FF0000"><strong/>Closed</input></font><br/><br/></td>
										</tr>
										
										<tr>
										<td width="15%" align="right">PRC School Code:<br/><br/></td> 
										<td width="85%" align="left"><input type="text" size="25" name="prcSchoolCode"/><br/><br/></td>
										</tr>
										
										<tr>
										<td width="15%" align="right">PRC Address:<br/><br/></td> 
										<td width="85%" align="left"><input type="text" size="45" name="prcAddress"/><br/><br/></td>
										</tr>
										
										<tr>
										
										<td width="15%" align="right">PRC Address Code:<br/><br/></td> 
										<td width="85%" align="left"><input type="text" size="25" name="prcAddressCode"/><br/><br/></td>
										</tr>
												
										<tr>
										<div style="font-size:13px;">
											<td width="15%" align="right"> Location: </td> 
											
											<td width="40%" align="left"> <select name="selRegion"  id="selRegion" onchange="select_province();" style="font-size:11px;"> <option >--Select Region--</option>
											</select>
											
											
											&nbsp; <select name="selProvince"  id="selProvince" onchange="select_city();" style="font-size:11px;"> <option >--Select Province--</option>
											</select>
											
											
											&nbsp; <select name="selMunicipalityCity"  id="selMunicipalityCity" onchange=="select_zipcode();"  style="font-size:11px;"> <option >--Select Municipality / City--</option>
											</select>
											
											
											&nbsp;  <select name="ZipCode" id="ZipCode" style="font-size:11px;"> <option >--Select Zip Code--</option>
											</select>
								
											</td>
											</div>
											
										</tr>
										
										
										<tr>
											
											<td width="15%" align="right">Registrar Entry:
											</td>
											<td width="85%" align="left">
											
												<br/><table id='addRegTable' border="3" width="100%" bordercolor="#0099FF" cellspacing="5">																
														<tr>
															<td align="right" width="12%">Registrar 1:</td>  
															<td>Firstname: <input type="text" size="30" id="addRegFrst0"></input><br/>Lastname: <input type="text" size="30" id="addRegLst0"></input></td>
															<td align="left">Username: <input type="text" size="30" id="addRegUser0"></input><br/>Password: <input type="password" size="30" id="addRegPass0"></input></td>						
															<td align="center">&nbsp;Access: <input type="checkbox" id="addRegChk0"></input></td>
														</tr>
														
														<tr>
															<td align="right" width="12%">Registrar 2:</td> 
															<td>Firstname: <input type="text" size="30" id="addRegFrst1"></input><br/>Lastname: <input type="text" size="30" id="addRegLst1"></input></td>
															<td align="left">Username: <input type="text" size="30" id="addRegUser1"></input><br/>Password: <input type="password" size="30" id="addRegPass1"></input></td>						
															<td align="center">&nbsp;Access: <input type="checkbox" id="addRegChk1" ></input></td>
															
														</tr>
												</table>			
											</td>	
										
										</tr>
										
										<tr>
										
										<td width="15%" align="right"><br/><br/></td> 
										
										<td width="100%" align="left">
									      <div align="left">
									        <input type="button" name="reg" value="Add Registrar" onclick="addReg()">
								          </div></td>
										</tr>
									
		
												<td align="right"></td><br/>
												<td align="left"><div align="center">
											      <input type="reset" value="CANCEL" onclick = "removeReg()">
											      <input type="submit" value="SAVE">
												</div></td>
										
										
										
									</table>
								
							</tr>
					</table>
				</td>
			</tr>
		</table>
			</form>
		<? } ?>
		
		<? if ($edit=="Edit"){ ?>
				<table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
							<tr>
								<td width="100%" align="left" class="bodyText" >
									<table width="100%" border="1px" bordercolor="#0000FF" cellpadding="1" cellspacing="0" align="center">
										<tr>
											
											<th width="85%" class="thead"><div align="left">Edit School</div></th>
											<th colspan="1" width="1%" class="thead">&nbsp;  </th>
										</tr>
										<form name="editSchool" method="post" enctype="multipart/form-data" action="#">
											
											<tr>
												
												<div style="font-size:13px;">
											<td width="60%" align="left"> <select name="selRegion"  style="font-size:11px;"> <option >--Select Region--</option>
											<option>Region 1</option>
											<option>Region 2</option>
											<option>Region 7</option> </select>
											
											
											&nbsp; <select name="selProvince"  style="font-size:11px;"> <option >--Select Province--</option>
											<option>Cebu</option>
											<option>Bohol</option>
											<option>Isabela</option> </select>
											
											
											&nbsp; <select name="selMunicipalityCity"  style="font-size:11px;"> <option >--Select Municipality / City--</option>
											<option>Cebu</option>
											<option>Tagbilaran</option>
											<option>Mandaue</option> </select>
											
											
											&nbsp; <select name="selSchool"  style="font-size:11px;"> <option >--Select School--</option>
											<option>UP Cebu College</option>
											<option>University of the Visayas</option>
											<option>University of San Carlos</option> </select>
											
											</td>
											</div>
										<td width="1%" align="center" class="tcontent"><input onclick="javascript:alert('Please select school');" type="button" id="edit" value="EDIT"/></td>
										</tr>
									  </form>
									</table>
								</td>
							</tr>
					</table>
				</td>
			</tr>
		</table>
		<? } ?>
		
		<? if ($search=="Search"){ ?>
			<form name="searchSchool" method="post" enctype="multipart/form-data" action="">
		<table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
							<tr>
								<td width="100%" align="left">
									<table width="100%" cellspacing="0" align="center">
										
									
										<tr>
									
											<div style="font-size:13px;">
											<td width="85%" align="left"><select name="selRegion"  style="font-size:11px;"> <option >--Select Region--</option>
											<option>Region 1</option>
											<option>Region 2</option>
											<option>Region 7</option> </select>
											
											
											&nbsp; <select name="selProvince"  style="font-size:11px;"> <option >--Select Province--</option>
											<option>Cebu</option>
											<option>Bohol</option>
											<option>Isabela</option> </select>
											
											
											&nbsp;  <select name="selMunicipalityCity"  style="font-size:11px;"> <option >--Select Municipality / City--</option>
											<option>Cebu</option>
											<option>Tagbilaran</option>
											<option>Mandaue</option> </select>
											
											&nbsp; School Name: <input name="schoolName" type="text" id="schoolName">
												<input type="submit" name="search1" value="SEARCH"/>
											</td>
											</div>
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
		
		<? if ($search1=="SEARCH"  && $schoolName!="" ){ ?>
			<form name="search2School" method="post" enctype="multipart/form-data" action="">
		<table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
							<tr>
								<td width="100%" align="left">
									<table width="100%" cellspacing="0" align="center">
									
										
										<tr>
									
											<div style="font-size:14px;">
											<td width="85%" align="left"><select name="selRegion"  style="font-size:11px;"> <option >--Select Region--</option>
											<option>Region 1</option>
											<option>Region 2</option>
											<option>Region 7</option> </select>
											
											
											&nbsp; <select name="selProvince"  style="font-size:11px;"> <option >--Select Province--</option>
											<option>Cebu</option>
											<option>Bohol</option>
											<option>Isabela</option> </select>
											
											
											&nbsp;  <select name="selMunicipalityCity"  style="font-size:11px;"> <option >--Select Municipality / City--</option>
											<option>Cebu</option>
											<option>Tagbilaran</option>
											<option>Mandaue</option> </select>
											
											&nbsp; School Name: <input name="schoolName" type="text" id="schoolName">
												<input type="button" name="search1" value="SEARCH"/>
											</td>
											</div>
										</tr>
									
									</table>
								</td>
							</tr>
							
							<tr>
								<td width="100%" align="left" class="bodyText" >
									<table width="100%" border="1px" bordercolor="#0000FF" cellpadding="1" cellspacing="0" align="center">
										<tr>
											
											<th width="18%" class="thead">School Name</th>
											<th width="15%" class="thead">PRC Code</th>
											<th colspan="4" width="28%" class="thead">Location</th>
											<th colspan="2" width="4%" class="thead">Status</th>
											<th colspan="1" width="1%" class="thead">Action</th>
										</tr>
										
										<? 
											for($i = 0; $i<1; $i++)
										{ ?>
											
											<td width="18%" align="center" class="tcontent">School Name School Name School Name</td>
											<td width="7%" align="center" class="tcontent"> PRC Code </td>
											<td width="5%" align="center" class="tcontent"> Region </td>
											<td width="7%" align="center" class="tcontent"> Province</td>
											<td width="11%" align="center" class="tcontent"> Municipaplty / City</td>
											<td width="5%" align="center" class="tcontent"> Zip Code</td>
											<td width="2%" align="center" class="tcontent"><input disabled name="active" type="radio" id="active" /><font color="#009900">active</font></td>
											<td width="2%" align="center" class="tcontent"><input disabled name="closed" type="radio" id="closed" /><font color="#FF0000">closed</font></td>
											<td width="1%" align="center" class="tcontent"><input name="edit1" type="button" id="edit" value="EDIT"/></td>
										
										<? }  ?>
										
									</table>
								</td>
							</tr>
					</table>
				</td>
			</tr>
		</table>
		</form>
	<? } ?>
		
		<? if ($search1=="SEARCH" && $schoolName==""){ ?>
			<form name="search3School" method="post" enctype="multipart/form-data" action="">
			<table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
							<tr>
								<td width="100%" align="left">
									<table width="100%" cellspacing="0" align="center">
										<tr>
									
											<div style="font-size:14px;">
											<td width="85%" align="left"><select name="selRegion"  style="font-size:11px;"> <option >--Select Region--</option>
											<option>Region 1</option>
											<option>Region 2</option>
											<option>Region 7</option> </select>
											
											
											&nbsp; <select name="selProvince"  style="font-size:11px;"> <option >--Select Province--</option>
											<option>Cebu</option>
											<option>Bohol</option>
											<option>Isabela</option> </select>
											
											
											&nbsp;  <select name="selMunicipalityCity"  style="font-size:11px;"> <option >--Select Municipality / City--</option>
											<option>Cebu</option>
											<option>Tagbilaran</option>
											<option>Mandaue</option> </select>
											
											&nbsp; School Name: <input name="schoolName" type="text" id="schoolName">
												<input type="button" name="search1" value="SEARCH"/>
											</td>
											</div>
										</tr>
									
									</table>
								</td>
							</tr>
							
							<tr>
								<table align="center">
								<td align="center"> <br/> <br/ > No results found! </td>
								</table>
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

