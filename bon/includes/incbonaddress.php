<?php
##includes in bonaddress.php for mysql quesries
include("../../includes/connection.php");
##function for getting province list - used in bon/bonaddress.php
function getProvince(){
	
	$sql = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
	if (!@mysql_query($sql)){
		exit('<p>ERROR GETTING REGIONS</p>' .
		mysql_error() . '</p>');
	}else{
		$q=mysql_query($sql);
		$region_array=$q_array[$rows];
		?>
<form id="form1" name="form1" method="post" action="_SELF">

Region:
<select name="selRegion" id = 'selRegion'>
  <option> --Select Region-- </option>
  <?php
		while($row=mysql_fetch_array($q)){			
		?>
  <option value = '<?php echo $row['Region'] ;?>'> <?php echo "".$row['Region'] ;?></option>
 
  <?php } ?>
</select>
<?php
				
	}
	
}
getProvince();

?>
 <td ><p>Province: 
     <select id = 'selProvince'> 
       <option> --Select Province-- </option>
       <?php
													   		$q="select distinct province from addresses where  region = ".$_GET['selRegion'];
															$sql=mysql_query($q);
															if (!mysql_query($q)){
																exit('<p>ERROR GETTING Provinces</p>'.mysql_error().'</p>');
															}else{
																$sql=mysql_query($q);
                                                            while($row=mysql_fetch_array($sql)){
                                                            ?> 
       <option value = '<?php echo $row['province'] ;?>' <?php if($_GET['selProvince']==$row['province']){echo "selected";}?>> <?php echo "".$row['province'] ;?></option>
       <?php }} ?> 
     </select> 
                                                       </p>
   <p>
     <label>
       <input name="textfield" type="text" id="textfield" value="asd" />
     </label>
   </p></td >
