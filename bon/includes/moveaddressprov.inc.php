<!--fill in table in moving zip
this is working under the form movetoaddress in bonaddress.php


-->

	<tr><td>
    FROM:
    </td>
	<td>
     Region: <select name="movRegion" onChange="movetoaddress.submit()">
                                                            <option value="0" > --Select Region-- </option>
                                                            <?php
															$sql = 'SELECT DISTINCT Region FROM addresses ORDER BY Region'; 
	if (!@mysql_query($sql)){
	
	}else{
		$q=mysql_query($sql);
		
                                                            while($row=mysql_fetch_array($q)){
                                                            ?>
                                                            <option value = '<?php echo $row['Region'] ;?>' <?php if($_GET['movRegion']==$row['Region']){echo "selected";}?>> <?php echo "".$row['Region'] ;?></option>
                                                            <?php } }?></select>
    </td>
    <td >Province: <select name = 'movProvince' > <option value="0"> --Select Province-- </option> 
                                                       <?php
													   		$qprov = "select distinct province from addresses where region = '".$_GET['movRegion']."' and province is not null";										
																				 
                                                            $q1=mysql_query($qprov);
															while($row1=mysql_fetch_array($q1)){
                                                            ?>
                                                            <option value = '<?php echo $row1['province'] ;?>' <?php if($_GET['movProvince']==$row1['province']){echo "selected";}?>> <?php print($row1['province']);?></option>
                                                            <?php } ?></select></td>
    <td >&nbsp;</td>
                                                        
    <td > <input type = 'submit' value='SUBMIT'  name='subProv'> </input></td>
   </tr>
   
   <tr>
   <td>
   TO:
  </td>
	<td>
     Region: <select name="tomovRegion">
                                                            <option value="0" > --Select Region-- </option>
                                                            <?php
															$sql = 'SELECT DISTINCT Region FROM addresses ORDER BY Region'; 
	if (!@mysql_query($sql)){
	
	}else{
		$q=mysql_query($sql);
		
                                                            while($row=mysql_fetch_array($q)){
                                                            ?>
                                                            <option value = '<?php echo $row['Region'] ;?>' <?php if($_GET['tomovRegion']==$row['Region']){echo "selected";}?>> <?php echo "".$row['Region'] ;?></option>
                                                            <?php } }?></select>
                                                              </td>
                                                           <td>
                                                        </td>
    <td ></td>
   </tr>
   
<?php 
    
	$prov = $_GET['movProvince'];
	$toreg=$_GET['tomovRegion'];
	$reg = $_GET['movRegion'];
	
	if($reg!="0" && $prov!="0" && $_GET['subProv']=="SUBMIT" && $toreg!="0"){
		$qrenameReg = "update addresses set region ='$toreg' where region = '$reg' and  province ='$prov'";	
		//echo $qrenameReg;
		if(!@mysql_query($qrenameReg))
		{
			exit('<p>ERROR INSERTING ADDRESS</p><p>'.mysql_error().'</p>');
			$message ="<p>Error</p>";				 
		}
		else{
			$message = "$prov has been moved";
			echo $message;
		}
	}else
	{
		//echo "Please select the zip code in the dropdown."; //instruction here	
	}

?>



