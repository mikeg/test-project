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
		include("../includes/connection.php");
	$rename = $_GET['rename'];
	$move= $_GET['move'];
	$merge = $_GET['merge'];
	$edit1 = $_GET['edit1'];
	$add = $_GET['add'];
	$search = $_GET['search'];
	$search1 = $_GET['search1'];
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
        <td width="900" class="pageName"><!-- InstanceBeginEditable name="contentName" -->ADDRESS ENTRY<!-- InstanceEndEditable --> </td>
      </tr>
      <tr>
        <td class="bodyText"><!-- InstanceBeginEditable name="content" -->


	
	<table width="100%">
		  <tr>
		    <td>
				<form  method="get" enctype="multipart/form-data" >	
					<input type="submit" value="Add Address" name="add" />
					&nbsp;<input type="submit" name="rename" value="Rename"/>
					&nbsp;<input type="submit" name="move" value="Move To"/>
					&nbsp; 
				</form>
			
	
		<? if ($add=="Add Address" || isset($_GET['selRegion'])){ ?>
        
			<script language="JavaScript" type="text/JavaScript">
			var region = [];
			<?php 
			?> </script>
		
 <form action="bonaddress.php" method="get" name = "addAddress" id="addAddress">
      <input name="prov" type="hidden" value="add" />
		<table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
										
							<tr>
								<td width="100%" align="left" class="bodyText">
                                
                                	<table width="100%" bordercolor="#0000FF" cellpadding="1" cellspacing="0" align="center">
										<tr>
											<td width="100%">
                                               
												<table id='addAddressTable'>
                                                	<tr>
                                                    	<?php 
															include("includes/addaddress.inc.php");
														?>
                                                    </tr>	
                                                    <!--end of insert blank fields-->															
												</table>
                                               	
											</td>
										</tr>	
									</table>
																	
								</td>
							</tr>
					</table>
				</td>
			</tr>
		</table>
        </form>
		<? }?>
		
		<? if ($rename=="Rename" || isset($_GET['selectRename'])){ ?>
        
		<form id="renameRegion" name="renameRegion" method="get" action="bonaddress.php">
		
		<table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">			
							<tr>
							  <td>
							          <table width="100%" cellspacing="0" align="center">
										
										<tr><br/>
                                       
											<td align="left">Rename: <select name="selectRename" onchange="renameRegion.submit()">
											<option >--Select--</option>
											<option value = "reg" <?php if($_GET['selectRename'] == "reg"){echo "selected";}?>>Region</option>
											<option value = "prov" <?php if($_GET['selectRename'] == "prov"){echo "selected";}?>>Province</option>
											<option value = "mun" <?php if($_GET['selectRename'] == "mun"){echo "selected";}?>>Municipality / City</option>
											<option value = "zip" <?php if($_GET['selectRename'] == "zip"){echo "selected";}?>>Codes</option>
											</select>										
											</td>
                                         
										</tr>
											
									</table>
					
							</td>
							</tr>
							<tr>
								<td width="100%" align="left" class="bodyText" >
									<table width="100%" bordercolor="#0000FF" cellpadding="1" cellspacing="0" align="center">
										<tr>
											
											<th width="100%" class="thead" align="left">Rename Address</th>
										</tr>
										<tr>
											<td width="100%">
												<table id='renameAddressTable'>	
                                                <?php 
												switch($_GET['selectRename']){
													case "reg":
														include("includes/renameaddressreg.inc.php");
														break;
													case "prov":
														include("includes/renameaddressprov.inc.php");
														break;
													case "mun":
														include("includes/renameaddressmun.inc.php");
														break;
													case "zip":
														include("includes/renameaddresszip.inc.php");
														break;	
												}
												?>
                                                																
												</table>			
											</td>
										</tr>	
									</table>
								</td>
							</tr>
					</table>
				</td>
			</tr>
		</table>
        </form>
		<? } ?>
		
		<? if ($move=="Move To" || isset($_GET['selectMove'])){ ?>
        <form id="moveto" name="movetoaddress" method="get" action="bonaddress.php">
		<table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
						<tr>
							<td>
								<table width="100%" cellspacing="0" align="center">
										
										<tr><br/>
											<td align="left">Move <select onchange="movetoaddress.submit()" name="selectMove">
											<option >--Select--</option>
											<option value="prov"  <?php if($_GET['selectMove'] == "prov"){echo "selected";}?>>Province</option>
											<option value="mun"  <?php if($_GET['selectMove'] == "mun"){echo "selected";}?>>Municipality / City</option>
											<option value="zip"  <?php if($_GET['selectMove'] == "zip"){echo "selected";}?>>Zip Code</option>
											</select>
											To:										
											</td>
										</tr>
											
								</table>
					
							</td>
						</tr>
						<tr>
								<td width="100%" align="left" class="bodyText" >
									<table width="100%" bordercolor="#0000FF" cellpadding="1" cellspacing="0" align="center">
										<tr>
											
											<th width="100%" class="thead" align="left">Move To Address</th>
										</tr>
										<tr>
											<td width="100%">
                                        
												<table id='moveAddressTable'>
                                                <?php
												switch($_GET['selectMove']){
													case "prov":
														include("includes/moveaddressprov.inc.php");
														break;
													case "mun":
														include("includes/moveaddressmun.inc.php");
														break;
													case "zip":
														include("includes/moveaddresszip.inc.php");
														break;	
												}
												?>
												</table>			
											
                                            </td>
										</tr>	
									</table>
								</td>
							</tr>
					</table>

				</td>
			</tr>
		</table>
		<? } ?>
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
	

