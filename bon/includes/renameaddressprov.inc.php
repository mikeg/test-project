<!--fill in table in changing province
this is working under the form renameRegion in bonaddress.php


-->

	<tr>
	<td>
     Region: <select name="renRegion" onChange="renameRegion.submit()">
                                                            <option value="0" > --Select Region-- </option>
                                                            <?php
															$sql = 'SELECT DISTINCT Region FROM addresses ORDER BY Region'; 
	if (!@mysql_query($sql)){
	
	}else{
		$q=mysql_query($sql);
		
                                                            while($row=mysql_fetch_array($q)){
                                                            ?>
                                                            <option value = '<?php echo $row['Region'] ;?>' <?php if($_GET['renRegion']==$row['Region']){echo "selected";}?>> <?php echo "".$row['Region'] ;?></option>
                                                            <?php } }?></select>
    </td>
    <td >Province: <select name = 'renProvince' > <option value="0"> --Select Province-- </option> 
                                                       <?php
													   		$qprov = "select distinct province from addresses where region = '".$_GET['renRegion']."' and province is not null";										
																				 
                                                            $q1=mysql_query($qprov);
															while($row1=mysql_fetch_array($q1)){
                                                            ?>
                                                            <option value = '<?php echo $row1['province'] ;?>' <?php if($_GET['renProvince']==$row1['province']){echo "selected";}?>> <?php print($row1['province']);?></option>
                                                            <?php } ?></select>
                                                           </td>
    <td > Province's new name: <input type = 'text' value = "<?php echo $_GET['changeProvince']?>"name = 'changeProvince'> </input></td>
    <td > <input type = 'submit' value='SUBMIT' target name='renameProv'> </input></td>
   </tr>
<?php 

	$reg=$_GET['renRegion'];
	$prov = $_GET['renProvince'];
	$newprov=$_GET['changeProvince'];
	if($reg!="0" && $prov!="0" && $_GET['renameProv']=="SUBMIT" && $newprov!=""){
		$qrenameReg = "update addresses set province ='$newprov' where province ='$prov' and region = '$reg'";	
		
		if(!@mysql_query($qrenameReg))
		{
			exit('<p>ERROR INSERTING ADDRESS</p><p>'.mysql_error().'</p>');
			$message ="<p>Error inserting address</p>";				 
		}
		else{
			$message = "$prov has been changed to $newprov.";
			echo $message;
		}
	}else
	{
		echo "Please select the province in the dropdown.";	
	}

?>



