

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<table border="0" cellspacing="0" cellpadding="0" width="150" id="navigation" align="center">
		<tr>
			<td align="center" style="padding-left:5px;"><strong> 
			<?
				
				 if (isset($_SESSION['valid_user'])) {
					echo 'Welcome!<br/><br/>';
					echo ''.$_SESSION['valid_user1'].' '.$_SESSION['valid_user2'].' '; 
				 }
	
			 ?>
			<br /></strong>&nbsp;
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
          <td width="150"><a href="bonnoa.php" class="navText">NOA personnel</a></td>
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
