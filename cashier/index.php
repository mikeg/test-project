<?php 
  session_start(); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/cashier.dwt" codeOutsideHTMLIsLocked="true" --> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Nursing System - Cashier</title>
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
     <? include("../cashier/include/logo.php") ?>
    </div>
    </td>
  <tr>
    <td colspan="2" bgcolor="#0099FF" class="borderline" background="Templates/mm_dashed_line.gif"><img src="Templates/mm_dashed_line.gif" alt="&nbsp;" width="4" height="3" border="0" /></td>
  </tr>

  <tr bgcolor="#0033FF">
  	<td height="20" colspan="3">
	<? include("../cashier/include/header.php") ?>
			</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#0099FF" class="borderline" background="Templates/mm_dashed_line.gif"><img src="Templates/mm_dashed_line.gif" alt="&nbsp;" width="4" height="3" border="0" /></td>
  </tr>

 <tr>
    <td width="150" valign="top" bgcolor="#6699FF">
	<br />
	<? include("../cashier/include/menu.php") ?>
	<br /><br />
  	&nbsp;<br /> 	</td>
    <td width="880" valign="top" ><br />
	&nbsp;<br />
	<table border="0" cellspacing="15" cellpadding="0" width="900" align="center">
      <tr>
        <td width="900" class="pageName"><!-- InstanceBeginEditable name="contentName" -->WELCOME MESSAGE<!-- InstanceEndEditable --> </td>
      </tr>
      <tr>
        <td class="bodyText"><br /><!-- InstanceBeginEditable name="content" -->
					<?php 
	       if (isset($_SESSION['valid_user'])) { 
    			//echo 'You are logged in as: '.$_SESSION['valid_user1'].' '.$_SESSION['valid_user2'].' <br />'; 
    			// echo 'You are logged in as: $valid_user <br>'; 
   				 echo '	<p> This Home Page layout makes a great starting point for your website. Virtually all of the content is customizable, including the images, the text, and the links. You can decide whether to keep the existing graphics or swap them out for pictures of your own </p>';
   				 echo ' <p> The text on this page is intended to help you jumpstart your design by suggesting the sortr of content you may want to includer, but dont let it limit you. The same is also true for the linkdsf text feel free to change the names of the links to better suit your particular needs. The Home Page layout can be used for multiple pages on your site, or you can choose from the Text, Catalogue, Product, or Calendar layouts as well. Dont be afraid to get creative and combine different page layouts to make your site as engaging as possible. If you have any questions about using Contribute to edit these pages, refer to the Read Me file included with the download or to the Contribute Help System. Have fun and make a great website!</p>';
  			}
			else {
				echo '<script language="javascript">window.location = "../index.php"</script>';
			}
	?>
		<!-- InstanceEndEditable --> </td>
      </tr>
    </table><br /><br /></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#0099FF" class="borderline" background="Templates/mm_dashed_line.gif"><img src="Templates/mm_dashed_line.gif" alt="&nbsp;" width="4" height="3" border="0" /></td>
  </tr>
  <tr bgcolor="#0033FF">
  <? include("../cashier/include/footer.php") ?>
  </tr>
</table>
</body>
<!-- InstanceEnd --></html>

