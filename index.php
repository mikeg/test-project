<?php 
       session_start(); 

         if (isset($_POST['userid']) && isset($_POST['password'])) 
         { 
           // if the user has just tried to log in 

    	    include("includes/connection.php");
		  //  $username = $_GET['userid'];
 //				$password = $_GET['password'];
			 $userid = $_POST['userid']; 
   			 $password = $_POST['password']; 
			$query = "SELECT * from users where username ='$userid' and Password = '$password'";

           $result = mysql_query($query); 
		    while($row=mysql_fetch_array($result)){
    $role = $row['Role_ID'];
	//$quser = $row['username'];
	//$qupass = $row['Password'];
	$quserf = $row['user_first'];
	$quserl = $row['user_last'];
	$qschid = $row['school_id'];
	$qstat = $row['active'];
	$quid = $row['User_ID'];
	
	
	}
          
		   if (mysql_num_rows($result)) 
           { 
              // if they are in the database register the user id 
       	
			 $_SESSION['valid_user'] = $userid; 
			   $_SESSION['valid_user1'] = $quserf; 
			     $_SESSION['valid_user2'] = $quserl;
				  $_SESSION['valid_user3'] = $role;
				   $_SESSION['valid_schid'] = $qschid;
				    $_SESSION['valid_isactive'] = $qstat;
					$_SESSION['valid_userid'] = $quid;
				  
             
			 // session_register('valid_user'); 
           } 
         } 
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
        <td width="300" class="pageName" align="center"> <strong>WELCOME!</strong> </td>
      </tr>
      <tr>
        <td class="bodyText" align="center">
		
		<?php 
	       if ( isset($_SESSION['valid_user']) && $qstat==1 ) 	
  				//if (session_is_registered('valid_user')) 
  { 
    echo 'You are <font color="#009900"><strong>SUCCESSFULLY</strong></font> logged in <strong>'.$_SESSION['valid_user1'].' '.$_SESSION['valid_user2'].'</strong>. <br />'; 
    // echo 'You are logged in as: $valid_user <br>'; 
     
            if( $_SESSION['valid_user3']=="1") {
			 echo '<br/> Go to <a href="bon"><strong><em>BoN Admin Page >></em></strong></a><br>'; 
			} else
			if($_SESSION['valid_user3']=="2"){
			 echo '<br/> Go to <a href="registrar"><em><strong>School Registrar Page >></strong></em></a><br>'; 
			}else
			if($_SESSION['valid_user3']=="3"){
			 echo '<br/> Go to <a href="cashier"><em><strong>PRC Cashier Page >></strong></em></a><br>'; 
			}else
			if($_SESSION['valid_user3']=="4"){
			 echo '<br/> Go to <a href="noa"><strong><em>NOA Personnel Page >></em></strong></a><br>'; 
			}
	       	
			//echo '<br/><br/><br/><a href="logout.php">Log out</a><br>'; 
   } 
  else 
  { 
     if (isset($userid)) 
     { 
       // if they’ve tried and failed to log in 
       echo '<font color="#FF0000">Could not log you in.</font>'; 
     } 
     else 
     { 
       // they have not tried to log in yet or have logged out 
       echo '<font color="#FF0000">You are not logged in.</font><br>'; 
     } 

     // provide form to log in 
     echo '<form  method="POST" action="index.php">'; 
     echo '<br/><table align = "center">'; 
     echo '<tr><td align="right">Username:</td>'; 
     echo '<td><input type="text" name="userid"></td></tr>'; 
     echo '<tr><td align="right">Password:</td>'; 
     echo '<td><input type="password" name="password"></td></tr>'; 
     echo '<tr><td colspan=2 align=right>'; 
     echo '<input type="submit" value= "Log in"></td></tr>'; 
     echo '</table></form>'; 
   } 
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

