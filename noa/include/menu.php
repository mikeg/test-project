

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<table border="0" cellspacing="0" cellpadding="0" width="150" id="navigation" align="center">
		<tr>
			<td style="padding-left:5px;" align="center"><strong> 
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
          <td width="150" class="menuname" valign="middle">NOA
		  <br /></td>
        </tr>       
		 <tr>
          <td width="150"><a href="noaentry.php" class="navText">noa entry</a></td>
         </tr>
</table>