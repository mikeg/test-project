<?php 
  session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/bon.dwt" codeOutsideHTMLIsLocked="true" --> <head >
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title> Nursing System - BoN Admin </title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<?php

	if (session_is_registered("valid_user")) {
		 ##need to fix dropdown.. add java script checkers
		include("../includes/connection.php");
		include("../includes/queries.php");
		##temp values for user
		$user = 1;
		$edit = $_GET['editSchool'];
		$edit1 = $_GET['edit1'];
		$add = $_GET['add'];
		$search = $_GET['search'];
		$search1 = $_GET['search1'];
		$reg = $_GET['reg'];
		$schoolName = $_GET['schoolName'];
	}
	else {
		echo '<script language="javascript">window.location = "../index.php"</script>';
	}
	
?>

<!-- InstanceEndEditable -->
<script language="JavaScript" type="text/javascript" src="js/utilities.js"></script>
<link rel="stylesheet" href="css/default.css" type="text/css" />

</head>

<body bgcolor="#F4FFE4">
<table width="1050" border="0" cellspacing="0" cellpadding="0" align="center" id="tablebody">

  <tr bgcolor="#0033FF">
    <td height="100" colspan="2" align="CENTER" nowrap="nowrap" class="logo"> <div align="left">
      <? include("../bon/includes/logo.php") ?>
    </div>
    </td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#0099FF" class="borderline" background="Templates/mm_dashed_line.gif"><img src="Templates/mm_dashed_line.gif" alt=" &nbsp; " width="4" height="3" border="0" /></td>
  </tr>

  <tr bgcolor="#0033FF">
  	<td height="20" colspan="3">
			<? include("../bon/includes/header.php") ?>
			</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#0099FF" class="borderline" background="Templates/mm_dashed_line.gif"><img src="Templates/mm_dashed_line.gif" alt="&nbsp;" width="4" height="3" border="0" /></td>
  </tr>

 <tr>
    <td width="150" valign="top" bgcolor="#6699FF">
	<br />
	<? include("../bon/includes/menu.php") ?>
	<br /><br />
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
		  <tr>
		    <td>
				<form  method="get" enctype="multipart/form-data" >	
					<input name="search" type="submit" value="Edit / Search"/>
			<!--		&nbsp;<input type="submit" name="edit" value="Edit"/> -->
						
					&nbsp;<input type="submit" value="Add School" name="add" />
				</form>			
				
	
        <?php if ($add=="Add School"){
		 	include("includes/addschool.inc.php");
		 }
		?>
		 
		
	<!--	<? if ($edit=="Edit"){ ?>
				<table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
							<tr>
								<td width="100%" align="left" class="bodyText" >
									<table width="100%" border="1px" bordercolor="#0000FF" cellpadding="1" cellspacing="0" align="center">
										<tr>
											
											<th width="85%" class="thead">Edit School</th>
											<th colspan="1" width="1%" class="thead"></th>
										</tr>
										<form name="schools" method="GET" enctype="multipart/form-data" action="#">
											
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
		<? } ?> -->
		
		<? if ($search=="Edit / Search"){
		include("includes/searchschool.inc.php");
		} ?>
		
			
	
		
			</td>
		</tr>
		</table>
       <!-- InstanceEndEditable -->		</td>
      </tr>
    </table>
	<br />
	<br />
	</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#0099FF" class="borderline" background="Templates/mm_dashed_line.gif"> <img src="Templates/mm_dashed_line.gif" alt="&nbsp;" width="1" height="1" border="0" /> </td>
  </tr>
  <tr bgcolor="#0033FF">
  <? include("../bon/includes/footer.php") ?>
  </tr>
</table>
</body>
<!-- InstanceEnd --></html>
	

