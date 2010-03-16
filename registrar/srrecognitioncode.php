<?php 
  session_start(); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/school.dwt" codeOutsideHTMLIsLocked="true" --> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Nursing System - Registrar</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<?php
	
	if (session_is_registered("valid_user")) {
		$addEdit = $_GET['addEdit'];
	}
	else {
		echo '<script language="javascript">window.location = "../index.php"</script>';
	}
?>



<script language="JavaScript" type="text/javascript" src="js/schools.js"></script>
<!-- InstanceEndEditable -->
<script language="JavaScript" type="text/javascript" src="js/utilities.js"></script>
<link rel="stylesheet" href="css/default.css" type="text/css" />
</head>

<body bgcolor="#F4FFE4">
<table width="1050" border="0" cellspacing="0" cellpadding="0" align="center" id="tablebody">
  <tr bgcolor="#0033FF">
    <td height="100" colspan="2" align="CENTER" nowrap="nowrap" class="logo"> <div align="left">
      <? include("../registrar/include/logo.php") ?>
    </div>
    </td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#0099FF" class="borderline" background="Templates/mm_dashed_line.gif"><img src="Templates/mm_dashed_line.gif" alt=" &nbsp; " width="4" height="3" border="0" /></td>
  </tr>

  <tr bgcolor="#0033FF">
  	<td height="20" colspan="3">
			<? include("../registrar/include/header.php") ?>
			</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#0099FF" class="borderline" background="Templates/mm_dashed_line.gif"><img src="Templates/mm_dashed_line.gif" alt="&nbsp;" width="4" height="3" border="0" /></td>
  </tr>

 <tr>
    <td width="150" valign="top" bgcolor="#6699FF">
	<br />
	<? include("../registrar/include/menu.php") ?>
	<br /><br />
  	&nbsp;<br /> 	</td>
    <td width="880" valign="top" ><br />
	&nbsp;<br />
	<table cellspacing="15" cellpadding="0" width="900" align="center">
      <tr>
        <td width="900" class="pageName"><!-- InstanceBeginEditable name="contentName" -->CHED RECOGNITION/BOARD RESOLUTION<!-- InstanceEndEditable --> </td>
      </tr>
      <tr>
        <td class="bodyText"><!-- InstanceBeginEditable name="content" -->
						<table width="100%">
	 <tr>
	   <td>
	
	 <table>
		 <tr>
		   <td>
				<form method="GET" enctype="multipart/form-data">	
					<input type="submit" value="Add / Edit" name="addEdit" />		
				</form>
		<br/>
		</td>		 
		
	</tr>
	 </table>

   
		<? if ($addEdit=="Add / Edit"){ ?>
				<? include("include/srrecognitioncode.inc.php") ?>	
		<? } ?>
		
		
		
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
  <? include("../registrar/include/footer.php") ?>
  </tr>
</table>
</body>
<!-- InstanceEnd --></html>

