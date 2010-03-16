<!--fill in table in changing zip
this is working under the form renameRegion in bonaddress.php


-->

	<tr>
	<td> <br/>
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
    <td> <br/> Province: <select name = 'renProvince'  onchange="renameRegion.submit()"> <option value="0"> --Select Province-- </option> 
                                                       <?php
													   		$qprov = "select distinct province from addresses where region = '".$_GET['renRegion']."' and province is not null";										
																				 
                                                            $q1=mysql_query($qprov);
															while($row1=mysql_fetch_array($q1)){
                                                            ?>
                                                            <option value = '<?php echo $row1['province'] ;?>' <?php if($_GET['renProvince']==$row1['province']){echo "selected";}?>> <?php print($row1['province']);?></option>
                                                            <?php } ?></select>
      </td> 
      
	  <td> <br/> Municipality  City: <select name = 'renMunicipalityCity' onchange="renameRegion.submit()"> <option value="0" selected="selected"> --Select Municipality / City-- </option> <?php
													   		$qmun = "select distinct city_town from addresses where  province = '".$_GET['renProvince']."' and region ='".$_GET['renRegion']."' and city_town is not null";
															//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                            $q2=mysql_query($qmun);
															while($row3=mysql_fetch_array($q2)){
                                                            ?>
                                                            <option value = '<?php echo $row3['city_town'] ;?>' <?php if($_GET['renMunicipalityCity']==$row3['city_town']){echo "selected";}?>> <?php echo " ".$row3['city_town'] ;?></option>
                                                            <?php } ?>
                                                           </select>
                                                        </td>
														<?php $qprczip = "select `Zip_Code` , `Rurban_Code` , `Area_Code`  FROM `addresses` WHERE Region ='".$_GET['renRegion']."' AND Province = '".$_GET['renProvince']."' and City_Town = '".$_GET['renMunicipalityCity']."'";
														//echo $qprczip;
														$q3=mysql_query($qprczip);
														$prczip=mysql_fetch_array($q3);
														?>
   </tr>
   <tr>
                                                       <td >  <br/> Zip Code:
                                                          <input name="renZip" type="text" id="renZip" value="<?php if($_GET['renameZip']=="SUBMIT" ){
														  echo $_GET['renZip'];
														  }else{ echo $prczip['Zip_Code'];}?>" /></td>
                                                      <td >  <br/> PRC Code: <input name ='renPrc' type = 'text' id="renPrc" value = "<?php if($_GET['renameZip']=="SUBMIT" ){
														  echo $_GET['renPrc'];}else{														  
														   echo $prczip['Rurban_Code'];}?>"> 
                                                      </input>
													  </td>
													   <td >  <br/> Area Code: <input name ='renArea' type = 'text' id="renArea" value = "<?php if($_GET['renameZip']=="SUBMIT" ){
														  echo $_GET['renArea'];}else{														  
														   echo $prczip['Area_Code'];}?>"> 
                                                      </input>
													  </td>
</tr>
                                                       
      <tr> 
	  <td>
	  </td>
	  
	  <td>
	  <table align="right">                                                     
   	 <td align="right"> <br/><input type = 'submit' value='SUBMIT'  name='renameZip'> </input> </td>
	</table>
	</td>
	 <td>
	  </td>
	</tr>

<?php 
    $mun=$_GET['renMunicipalityCity'];
	$reg=$_GET['renRegion'];
	$prov = $_GET['renProvince'];
	$newzip=$_GET['renZip'];
	$newprc = $_GET['renPrc'];
	$newarea = $_GET['renArea'];
	
	if($mun!="0" && $reg!="0" && $prov!="0" && $_GET['renameZip']=="SUBMIT" && $newzip!=""){
	$qrenameReg = "update addresses set zip_code ='$newzip', Rurban_Code = '$newprc', Area_Code = '$newarea'  where city_town ='$mun' and region = '$reg' and  province ='$prov'";	
		#renRegion=Region+I&renProvince=asd&renMunicipalityCity=no+more+test&renZip=4564&newZip=6660&renameZip=SUBMIT
		if(!@mysql_query($qrenameReg))
		{
			exit('<p>ERROR RENAMING ADDRESS</p><p>'.mysql_error().'</p>');
			$message ="<p>Error inserting address</p>";				 
		}
		else{
			$message = "CHANGES HAS BEEN MADE";
			echo $message;
		}
	}else
	{
		echo "Change the values of the codes you want to rename.";	
	}

?>



