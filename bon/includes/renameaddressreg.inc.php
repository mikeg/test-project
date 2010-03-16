<!--fill in table in changing Region


-->

	<tr>
	<td>
     Region: <select name="renRegion">
                                                            <option value="0"> --Select Region-- </option>
                                                            <?php
															$sql = 'SELECT DISTINCT Region FROM addresses ORDER BY Region'; 
	if (!@mysql_query($sql)){
	
	}else{
		$q=mysql_query($sql);
		
                                                            while($row=mysql_fetch_array($q)){
                                                            ?>
                                                            <option value = '<?php echo $row['Region'] ;?>' <?php if($_GET['selRegion']==$row['Region']){echo "selected";}?>> <?php echo "".$row['Region'] ;?></option>
                                                            <?php } }?></select>
    </td>
    <td>
    Region's new name: <input type = 'text' name = 'changeRegion'></input>
    </td>
    <td>
    <input type = 'submit' value='SUBMIT' name='renameReg'> </input>
    </td>
   </tr>
<?php 
	$reg=$_GET['renRegion'];
	$newreg=$_GET['changeRegion'];
	if($reg!="0" && $_GET['renameReg']=="SUBMIT" && $newreg!=""){
		$qrenameReg = "update addresses set Region ='$newreg' where region ='$reg'";	
		if(!@mysql_query($qrenameReg))
		{
			exit('<p>ERROR INSERTING ADDRESS</p><p>'.mysql_error().'</p>');
			$message ="<p>Error inserting address</p>";				 
		}
		else{
			$message = "$reg has been changed to $newreg.";
			echo $message;
		}
	}else
	{
		echo "No changes made. Please select Region in the dropdown.";	
	}

?>



