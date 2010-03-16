<?
session_start();
$old_user = $_SESSION['valid_user']; 
//$old_user = $valid_user;  // store  to test if they *were* logged in
unset($_SESSION['valid_user']);
//$result = session_unregister('valid_user');
session_destroy();
?>
         
	  

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> <!--TemplateInfo codeOutsideHTMLIsLocked="true"-->
<head>
<title>Nursing System</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />




<script language="JavaScript" type="text/javascript" src="bon/js/schools.js"></script>
<script language="JavaScript" type="text/javascript" src="bon/js/utilities.js"></script>
<link rel="stylesheet" href="bon/css/default.css" type="text/css" />
</head>

<body bgcolor="#F4FFE4">
<table width="300" height="400" border="0" align="center" cellpadding="5" cellspacing="0" id="tablebody">
  <tr bgcolor="#0033FF">
    <td height="150" colspan="2" align="CENTER" nowrap="nowrap" class="logo">
    <div align="center"><img src="bon/images/bongif.gif" width="100" height="100" />
    </div> 
	<br/>  <span class="logo">NURSING SYSTEM </span>  
	<br/>  <span class="tagline">Philippine Nursing Online System</span>   
    </td>
  </tr>
  <tr>
    <td colspan="1" bgcolor="#0099FF" class="borderline" background="bon/images/mm_dashed_line.gif"><img src="bon/images/mm_dashed_line.gif" alt=" &nbsp; " width="4" height="1" border="0" /></td>
  </tr>

  <tr bgcolor="#0033FF">
  	<td height="25" colspan="1" align="right" >
			<strong>Today is <script language="javascript">document.write(getDate())</script></strong>
	</td>
  </tr>
  <tr>
    <td colspan="1" bgcolor="#0099FF" class="borderline" background="bon/images/mm_dashed_line.gif"><img src="bon/images/mm_dashed_line.gif" alt="&nbsp;" width="4" height="1" border="0" /></td>
  </tr>

 <tr>
 
    <td width="350" valign="top" >

	<table cellspacing="15" cellpadding="0" width="500" align="center">
      <tr>
        <td width="300" class="pageName" align="center"><strong>LOG OUT</strong></td>
      </tr>
      <tr>
        <td class="bodyText" align="center">
		<?
			if (!empty($old_user)){
			// if they were logged in and are not logged out
			echo 'You are <font color="#006600"><strong>SUCESSFULLY</strong></font> logged out.<br>';
			}
			else {
				// they were logged in and could not be logged out
				//echo 'Could not log you out.<br>';

				// if they weren’t logged in but came to this page somehow
				echo '<font color="#FF0000">You were not logged in, and so have not been logged out.</font><br>';
			}
		
		echo '<br/><a href="index.php"><em><strong><< Back to login page</strong></em></a>';
		?>
     		
	 </td>
     </tr>
    </table>
	</td>
  </tr>
  <tr>
    <td colspan="1" bgcolor="#0099FF" class="borderline" background="bon/images/mm_dashed_line.gif"> <img src="bon/imgages/mm_dashed_line.gif" alt="&nbsp;" width="1" height="1" border="0" /> </td>
  </tr>
  
</table>
</body>
</html>

