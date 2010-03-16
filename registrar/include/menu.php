

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
          <td width="150" class="menuname" valign="middle">REGISTRAR
		  <br /></td>
        </tr>        <tr>
          <td width="150"><a href="srstudent.php" class="navText">students</a></td>
        </tr>
		 <tr>
          <td width="150"><a href="srstatusreport.php" class="navText">status report</a></td>
        </tr>
		 <tr>
          <td width="150"><a href="srnle.php" class="navText">nle</a></td>
        </tr>
        <tr>
          <td width="150"><a href="srtransfers.php" class="navText">transfers</a></td>
        </tr>
		 <tr>
          <td width="150"><a href="srrecognitioncode.php" class="navText">ched recogniton/<br/>board resolution
         </a></td>
        </tr>
      </table>
	  
