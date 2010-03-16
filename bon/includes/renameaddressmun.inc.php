<!--fill in table in changing mun
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
    <td >Province: <select name = 'renProvince'  onchange="renameRegion.submit()"> <option value="0"> --Select Province-- </option> 
                                                       <?php
													   		$qprov = "select distinct province from addresses where region = '".$_GET['renRegion']."' and province is not null";										
																				 
                                                            $q1=mysql_query($qprov);
															while($row1=mysql_fetch_array($q1)){
                                                            ?>
                                                            <option value = '<?php echo $row1['province'] ;?>' <?php if($_GET['renProvince']==$row1['province']){echo "selected";}?>> <?php print($row1['province']);?></option>
                                                            <?php } ?></select>
                                                           </td>
                                                           <td >Municipality  City: <select name = 'renMunicipalityCity' > <option value="0"> --Select Municipality / City-- </option> <?php
													   		$qmun = "select distinct city_town from addresses where  province = '".$_GET['renProvince']."' and region ='".$_GET['renRegion']."' and city_town is not null";
															//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                            $q2=mysql_query($qmun);
															while($row3=mysql_fetch_array($q2)){
                                                            ?>
                                                            <option value = '<?php echo $row3['city_town'] ;?>' <?php if($_GET['renMunicipalityCity']==$row3['city_town']){echo "selected";}?>> <?php echo " ".$row3['city_town'] ;?></option>
                                                            <?php } ?></select>
                                                        </td>
                                                        <td > Municipality / City's new name: <input type = 'text' value = "<?php $newmun=$_GET['newMunicipalityCity'];?>" name = 'newMunicipalityCity'> </input></td>
                                                            
    <td > <input type = 'submit' value='SUBMIT'  name='renameMun'> </input></td>
   </tr>
<?php 
	$mun=$_GET['renMunicipalityCity'];
	$reg=$_GET['renRegion'];
	$prov = $_GET['renProvince'];
	$newmun=$_GET['newMunicipalityCity'];
	if($mun!="0" && $reg!="0" && $prov!="0" && $_GET['renameMun']=="SUBMIT" && $newmun!=""){
		$qrenameReg = "update addresses set city_town ='$newmun' where city_town ='$mun' and region = '$reg' and  province ='$prov'";	
		
		if(!@mysql_query($qrenameReg))
		{
			exit('<p>ERROR INSERTING ADDRESS</p><p>'.mysql_error().'</p>');
			$message ="<p>Error inserting address</p>";				 
		}
		else{
			$message = "$mun has been changed to $newmun.";
			echo $message;
		}
	}else
	{
		echo "Please select the city/municipality in the dropdown.";	
	}

?>



