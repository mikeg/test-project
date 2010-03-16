<?php 
  session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/bon.dwt" codeOutsideHTMLIsLocked="true" --> <head >
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Nursing System - BoN Admin</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->

<?php
	
	if (session_is_registered("valid_user")) {
		 ##need to fix dropdown.. add java script checkers
		include("../includes/connection.php");
		include("../includes/queries.php");
			
		 $skul = $_GET["skul"];
		 $code = $_GET["prccode"];
		 $reg = $_GET["reg"];
		 $prov = $_GET["prov"]; 
		 $city = $_GET["city"];
		 $zip = $_GET["zip"];
		 $rur = $_GET["rurban"];
	
	}
	else {
		echo '<script language="javascript">window.location = "../index.php"</script>';
	}
?>

<!-- InstanceEndEditable -->
<script language="JavaScript" type="text/javascript" src="js/utilities.js"></script>
<link rel="stylesheet" href="css/default.css" type="text/css" />

</head>

<body bgcolor="#F4FFE4">
<table width="1050" border="0" cellspacing="0" cellpadding="0" align="center" id="tablebody">

  <tr bgcolor="#0033FF">
    <td height="100" colspan="2" align="CENTER" nowrap="nowrap" class="logo"> <div align="left">
      <? include("../bon/includes/logo.php") ?>
    </div>
    </td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#0099FF" class="borderline" background="Templates/mm_dashed_line.gif"><img src="Templates/mm_dashed_line.gif" alt=" &nbsp; " width="4" height="3" border="0" /></td>
  </tr>

  <tr bgcolor="#0033FF">
  	<td height="20" colspan="3">
			<? include("../bon/includes/header.php") ?>
			</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#0099FF" class="borderline" background="Templates/mm_dashed_line.gif"><img src="Templates/mm_dashed_line.gif" alt="&nbsp;" width="4" height="3" border="0" /></td>
  </tr>

 <tr>
    <td width="150" valign="top" bgcolor="#6699FF">
	<br />
	<? include("../bon/includes/menu.php") ?>
	<br /><br />
  	&nbsp;<br /> 	</td>
    <td width="880" valign="top" ><br />
	&nbsp;<br />
	<table cellspacing="15" cellpadding="0" width="900" align="center">
      <tr>
        <td width="900" class="pageName"><!-- InstanceBeginEditable name="contentName" -->SCHOOL ENTRY<!-- InstanceEndEditable --> </td>
      </tr>
      <tr>
        <td class="bodyText"><!-- InstanceBeginEditable name="content" -->
			<table width="100%">
		  <tr>
		    <td>
							
				
	
      <form method="get" enctype="multipart/form-data" name="form" id="form">
				<table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
							<tr>
								<td width="100%" align="left" class="bodyText" >
									<table width="100%"  bordercolor="#0000FF" cellpadding="1" cellspacing="0" align="center">
		
                                        <tr>
											<th width="25%" class="thead">Edit School</th>
											<th width="85%" class="thead">&nbsp;</th>
										</tr>
                                        
								
										<tr>
										<td width="15%" height="83" align="right"><br/> 
										  <br/>School Name:
										  <input name="add" type="hidden" id="add" value="Add School" />
										  <input name="reseter" type="hidden"/>
										  <br/><br/></td> 
										<td width="85%" align="left"><br/> <br/> <input name="schoolName" type="text"  value='<?php print $skul ?> <?php echo $_GET['schoolName'];?>'size="45" />
										<br/><br/></td>

										</tr>
										
										<tr>
											<td width="15%" align="right"> Status:</td> 
										  <td width="85%" align="left"> <input name="schoolStatus" type="radio" value="1" <?php if($_GET['schoolStatus'] == "1"){?> checked="checked" <?php }?>/><font color="#00FF00"><strong/></strong>Active</font></input>
											</td>
										</tr>
										
										<tr>
											<td width="15%" align="right"><br/><br/></td> 
											<td width="85%" align="left"><input type="radio" name="schoolStatus" value="0" <?php if($_GET['schoolStatus'] == "0"){?> checked="checked" <?php }?>/><font color="#FF0000"><strong/></strong>Closed</input></font><br/>
											<br/></td>
										</tr>
										
										<tr>
										<td width="15%" align="right">PRC School Code:<br/><br/></td> 
										<td width="85%" align="left"><input name="prcSchoolCode" type="text" value="<?php echo $code ?> <?php echo $_GET['prcSchoolCode'];?>" size="25"/><br/><br/></td>
										</tr>
										
										<tr>
										<td width="15%" align="right">Street Address:<br/><br/></td> 
										<td width="85%" align="left"><input name="streetAddress" type="text" value="<?php echo $_GET['streetAddress'];?>" size="45"/><br/><br/></td>
										</tr>
										
										<tr>
										
										<!-- <td width="15%" align="right">PRC Address Code:<br/><br/></td> 
										<td width="85%" align="left"><input name="prcAddressCode" type="text" value="<?php echo $_GET['prcAddressCode'];?>" size="25"/><br/><br/></td> -->
										</tr>
												
										<tr>
										<div style="font-size:13px;">
											<td width="15%" align="right"> Location: </td> 
											
										  <td width="40%" align="left"><select name= 'selRegion' onchange="form.submit()">
										   <option value="0"> --Select Region-- </option>
                                           
                                            <?php
												$sql = 'SELECT DISTINCT Region FROM addresses ORDER BY Region'; 
												if (!@mysql_query($sql)){
												
												}
														else{
														$q=mysql_query($sql);
		
                                                         while($row=mysql_fetch_array($q)){
                                                            ?>
															
                                            <option value = '<?php echo $row['Region'] ;?>' <?php if($_GET['selRegion']==$row['Region']){echo "selected";}?>> <?php echo "".$row['Region'] ;?></option>
                                            <?php } }?>
										    </select>
										    &nbsp;
											  <select name = 'selProvince'  onchange="form.submit()">
                                                <option value="0"> --Select Province-- </option>
                                                <?php
													   		$qprov = "select distinct province from addresses  where region = '".$_GET['selRegion']."' and province is not null";													 
                                                            $q1=mysql_query($qprov);
															while($row1=mysql_fetch_array($q1)){
                                                            ?>
                                                            <option value = '<?php echo $row1['province'] ;?>' <?php if($_GET['selProvince']==$row1['province']){echo "selected";}?>> <?php print($row1['province']);?></option>
                                                            <?php } ?></select>
											  &nbsp;
											  <select name = 'selMunicipalityCity'  onchange="form.submit()">
                                                <option value="0"> --Select Municipality / City-- </option>
                                                <?php
													   		$qmun = "select distinct city_town from addresses where  province = '".$_GET['selProvince']."' and region ='".$_GET['selRegion']."' and city_town is not null";
															//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                            $q2=mysql_query($qmun);
															while($row3=mysql_fetch_array($q2)){
                                                            ?>
                                                <option value = '<?php echo $row3['city_town'] ;?>' <?php if($_GET['selMunicipalityCity']==$row3['city_town']){echo "selected";}?>> <?php echo " ".$row3['city_town'] ;?></option>
                                                <?php } ?>
										      </select>
											  &nbsp; <br/><br/>
											  Zip Code: <input name = 'selZip' size="10" readonly=""
                                              
                                                <?php
													   		$qmun = "select distinct zip_code from addresses where  province = '".$_GET['selProvince']."' and region ='".$_GET['selRegion']."' and city_town ='".$_GET['selMunicipalityCity']."'and city_town is not null";
															//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                            $q2=mysql_query($qmun);

															while($row3=mysql_fetch_array($q2)){
                                                 ?>
                                               value = '<?php echo $row3['zip_code'] ;?>' />
											  
                                               <?php } ?>
										    </input >
											
											Rurban Code: <input name = 'selRur' size="10" readonly=""
                                              
                                                <?php
													   		$qmun = "select distinct rurban_code from addresses where  province = '".$_GET['selProvince']."' and region ='".$_GET['selRegion']."' and city_town ='".$_GET['selMunicipalityCity']."'and city_town is not null";
															//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                            $q2=mysql_query($qmun);
															while($row3=mysql_fetch_array($q2)){
                                                ?>
                                               value = '<?php echo $row3['rurban_code'] ;?>
											 
                                               <?php } ?>' />
										    </input >
											
											<input type="hidden" name= 'add_id'
											 <?php
													   		$qaid = "select distinct address_id from addresses where  province = '".$_GET['selProvince']."' and region ='".$_GET['selRegion']."' and city_town ='".$_GET['selMunicipalityCity']."'and city_town is not null";
															//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                            $q2=mysql_query($qaid);
															while($row3=mysql_fetch_array($q2)){
											?>
										  	value = '<?php echo $row3['address_id'] ;?>
                                            <?php } ?>' />
											
											</input>
											
												  
											  
											
										  </td>
											
											
										  </div>
											
										</tr>
										
										<tr>
											
											<td width="15%" align="right"><br/>Registrar Entry:
											</td>
											<td width="85%" align="left">
											
												<br/><table id='addRegTable' border="3" width="100%" bordercolor="#0099FF">																
														
														<?php $reg = 1;
														$regcount=$_GET['addreg'];
														while($reg<=$regcount){
														$registrarname='registrarname'.$reg;
														$registrarlastname='registrarlastname'.$reg;
														$username='username'.$reg;
														$pwd = 'userpass'.$reg;
														$chkbox='enabled'.$reg;
														?><tr>
															<td align="right" width="15%">Registrar <?php echo $reg; ?>:</td>  
															<td>&nbsp;Firstname: <input name="registrarname<?php echo $reg; ?>" type="text" value="<?php echo $_GET[$registrarname];?>" size="25" />
															</input><br/>&nbsp;Lastname: <input name="registrarlastname<?php echo $reg; ?>" type="text"  value="<?php echo $_GET[$registrarlastname];?>" size="25" />
															</input></td>
															<td align="center">&nbsp;Username: <input name="username<?php echo $reg; ?>" type="text" value="<?php echo $_GET[$username];?>" size="25" />
															</input><br/>&nbsp;Password: <input type="password" name = "userpass<?php echo $reg; ?>"value="<?php echo $_GET['$pwd'];?>" size="25" />
															</input></td>						
															<td align="center">&nbsp;Access: <input name="enabled<?php echo $reg; ?>"  <?php if($_GET[$chkbox]=="on"){echo 'checked';}?> type="checkbox" />
															</input></td>
														</tr>
														<?php $reg++;} ?>
												</table>			
											</td>	
										
										</tr>
										
										<tr>
										
										<td width="15%" align="right"><p>&nbsp;</p>
										  </td> 
										
										<td width="85%" align="left">
										Number of Registrar(s)
										  <select name="addreg" id="addreg" onchange="form.submit();">
										  <option value="" selected="selected"></option>
										  <?php 
										  $registrylimit = 5;
										  for($rl==0;$rl<=$registrylimit;$rl++){
										  
										  ?>
										   <option value="<?php echo $rl?>" <?php if($_GET['addreg']==$rl){echo 'selected="selected"';}?>><?php echo $rl?></option>
											<?php 
											}
											
											?>
									      </select>
										  </td>
										</tr>
								  </table>
								</td>
							</tr>
					</table>
				</td>
			</tr>
			</table>
									
		
										<table width="100%">
												<tr>
												  <td width="50%" align="right"><input type="reset" value="CANCEL" /></td><br/>
												<td width="50%" align="left"><input type="submit" value="SAVE" name ="submitx" /></td>
										</tr>
										</table>
											
				  </form>
								
									
		 
		
	
		
			</td>
		</tr>
			</table>
       <!-- InstanceEndEditable -->		</td>
      </tr>
    </table>
	<br />
	<br />
	</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#0099FF" class="borderline" background="Templates/mm_dashed_line.gif"> <img src="Templates/mm_dashed_line.gif" alt="&nbsp;" width="1" height="1" border="0" /> </td>
  </tr>
  <tr bgcolor="#0033FF">
  <? include("../bon/includes/footer.php") ?>
  </tr>
</table>
</body>
<!-- InstanceEnd --></html>
	

