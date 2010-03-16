<?php
	$search = $_POST['search'];
	$search1 = $_POST['search1'];
	$search2 = $_POST['search2'];
	$listpaid = $_POST['listpaid'];
	$edit = $_POST['edit'];
	$ctr =4;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/cashier.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>PRC Cashier - Cashier Entry</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<script language="JavaScript" type="text/javascript" src="js/schools.js"></script>
<!-- InstanceEndEditable -->
<script language="JavaScript" type="text/javascript" src="js/utilities.js"></script>
<link rel="stylesheet" href="css/default.css" type="text/css" />
</head>

<body bgcolor="#F4FFE4">
<table width="1050" border="0" cellspacing="0" cellpadding="0" align="center" id="tablebody">
  <tr bgcolor="#0033FF">
    <td height="100" colspan="2" align="CENTER" nowrap="nowrap" class="logo"> <div align="left">
      <table width="75%" height="100" cellspacing="5" class="logo">
        <tr>
          <td width="11%" align="center" valign="middle"><div align="center"><img src="images/bongif.gif" width="100" height="100" /></div></td>
          <td width="89%"><span class="logo">NURSING SYSTEM </span><br />
            <span class="tagline">Philippine Nursing Online System</span></td>
        </tr>
      </table>
    </div>
    </td>
  <tr>
    <td colspan="2" bgcolor="#0099FF" class="borderline" background="mm_dashed_line.gif"><img src="mm_dashed_line.gif" alt="&nbsp;" width="4" height="3" border="0" /></td>
  </tr>

  <tr bgcolor="#0033FF">
  	<td height="20" colspan="3">
		<table width="1050" border="0" id="navigationTop">
			<tr>	
				<td align="left" width="10"></td>	
				<td width="37" align="left"><a href="cashierhome.php" class="navText">HOME</a></td>
				<td align="left" id="separator">|</td>
				<td width="52" align="left"><a href="#" class="navText"><font color="#660000">LOGOUT</font></a></td>
			  	<td width="933" align="right" id="dateformat">Today: <script language="javascript">document.write(getDate())</script></td>
			</tr>
	  </table>	</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#0099FF" class="borderline" background="mm_dashed_line.gif"><img src="mm_dashed_line.gif" alt="&nbsp;" width="4" height="3" border="0" /></td>
  </tr>

 <tr>
    <td width="150" valign="top" bgcolor="#6699FF">
	<br />
	<table border="0" cellspacing="0" cellpadding="0" width="150" id="navigation" align="center">
		<tr>
			<td style="padding-left:5px;">Welcome!<br />Name of Cashier<br />&nbsp;
			</td>
		</tr>
        <tr>
          <td width="150" class="menuname" valign="middle">PRC CASHIER
		  <br /></td>
        </tr>       
		 <tr>
          <td width="150"><a href="cashierentry.php" class="navText">cashier entry</a></td>
         </tr>
      </table><br /><br />
  	&nbsp;<br /> 	</td>
    <td width="880" valign="top" ><br />
	&nbsp;<br />
	<table border="0" cellspacing="15" cellpadding="0" width="900" align="center">
      <tr>
        <td width="900" class="pageName"><!-- InstanceBeginEditable name="contentName" -->CASHIER ENTRY<!-- InstanceEndEditable --> </td>
      </tr>
      <tr>
        <td class="bodyText"><br /><!-- InstanceBeginEditable name="content" -->
		<table width="100%">
			
		  <td>
				<form method="POST" enctype="multipart/form-data" >	
					<input type="submit" value="Search" name="search" >
					&nbsp;<input type="submit" name="listpaid" value="List Paid"/>			
				</form>
	
			
		<? if ($search=="Search" || $search1=="SEARCH"){ ?>
		<form name="searchCashierEntry" method="POST" enctype="multipart/form-data" >
		<table align="left" width="100%" >
			<tr>
				<td align="right">
					<table width="100%" align="right">
					<tr>
					
				 <td align="left">
									<br/>
									<div style="font-size:13px;">
										Region: <select name="regiondDrpDwn" style="font-size:11px;">
													<!--TODO: get all regions-->

													<option>Region 1</option>
													<option>Region 2</option>
													<option>Region 3</option>
													<option>Region 4</option>
													<option>Region 5</option>
													<option>Region 6</option>

													<option>Region 7</option>
													<option>...</option>
												</select>&nbsp;&nbsp;
										Province: <select name="provinceDrpDwn" style="font-size:11px;">
													<!--TODO: get all province from selected region-->
													<option>-- Select Provice --</option>
													<option>Province 1</option>

													<option>Province 2</option>
													<option>Province 3</option>
													<option>Province 4</option>
													<option>Province 5</option>
													<option>Province 6</option>
													<option>Province 7</option>

													<option>...</option>
												</select>&nbsp;&nbsp;
										School: <select name="schoolDrpDwn" style="font-size:11px;">
													<!--TODO: get all schools from selected province-->
													<option>-- Select School --</option>
													<option>School 1</option>
													<option>School 2</option>

													<option>School 3</option>
													<option>School 4</option>
													<option>School 5</option>
													<option>School 6</option>
													<option>School 7</option>
													<option>...</option>

												</select>&nbsp;&nbsp;
										<input type="text" size="30" style="font-size:11px;"/> <input type="button" value="Search" style="font-size:12px;" onclick="javascript:alert('School Not Found');"/>
									</div>
								</td>
					</tr>
					<tr>

								<!--LIST OF STUDENTS-->
								<td width="100%" align="left" class="bodyText" >
								<table width="100%" border="1px" bordercolor="#0000FF" cellpadding="1" cellspacing="0" >
									<tr>
										<th width="22%" align="center" class="thead" >Name</th>
										<th width="15%" align="center" class="thead" >Amount Due</th>
										<th width="15%" align="center" class="thead" >Paid</th>

										<th width="20%" align="center" class="thead" >OR No.</th>
										<th width="18%" align="center" class="thead" >Date Paid</th>
										<th width="1%" align="center" class="thead" >Update</th>
										
									</tr>
									
									<!-- list here-->
									<? 
									
									$i=0;
										for (; $i<$ctr; $i++)
										{ ?>						 
										<tr>
											<td width="22%" align="center">
												Name
											</td>

											<td width="15%" align="center" >
												900
											</td>
										 	<td width="15%" align="center" > 
												<input type="checkbox" disabled checked name="chkPaidSearch"> </input>
											</td>
											<td width="20%" align="center" > 
												1234567890
											</td>
											<td width="20%" align="center" > 
												August 3, 2009
											</td>
											<td width="1%" align="center" > 
												
												<input type="submit" value="EDIT" name="edit">
											
											</td>
										 </tr>									
								<? } ?>																			
							</table>
						</td>

				</tr>
					<tr>
								<td align="left">
								<div style="font-size:13px;">
								TOTAL NUMBER OF STUDENTS:&nbsp;<span style="font-weight:bold"><? echo $ctr ?></span>
								</div>								
								</td>
							</tr>

							
					</table>
				</td>
			</tr>
		</table>
		</form>
		<? } ?>
		
		<? if ($edit == "EDIT"){ ?>
		<form name="searchCashierEntry" method="POST" enctype="multipart/form-data" >
		<table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
							<tr>
								<td width="100%" align="left" class="bodyText" >
									<table width="100%" bordercolor="#0000FF" cellpadding="1" cellspacing="0" align="center">
										<tr>
											<th align="right" width="20%" class="thead">Edit</th>
											<th align="right" width="25%" class="thead"></th>
											<th align="right" width="25%" class="thead"></th>
											<th width="100%" class="thead"></th>
										</tr>
										
										<tr>
									
											<tr>
												<td width="15%" align="right"><br/>Name:
												</td>
												<td width="75%" align="left"> <br/> &nbsp; &nbsp; Name of Student                                                                                               
											  </td>
											<tr>
											<tr>
												<td width="15%" align="right"><br/>School:
												</td>
												<td width="75%" align="left"> <br/>&nbsp; &nbsp; Name of School                                                                                        
											  </td>
											<tr>
											<tr>
												<td width="15%" align="right"><br/>Amount:
												</td>
												<td width="75%" align="left"> <br/>&nbsp; &nbsp; Php 900                                                                                              
											  </td>
											<tr>
											<tr>
												<td width="15%" align="right"><br/>OR.No.:
												</td>
												<td width="75%" align="left"> <br/>&nbsp; &nbsp; <input type="text">                                                                                             
											  </td>
											<tr>
											<tr>
												<td width="15%" align="right"><br/>Date:
												</td>
												<td width="75%" align="left"><br/> &nbsp; &nbsp; <script language="javascript">document.write(getDate())</script>                                                                                            
											  </td>
											<tr>
											<tr>
												<td width="15%" align="right"><br/>Issued by:
												</td>
												<td width="75%" align="left"><br/>&nbsp; &nbsp; Cashier Logged                                                                    
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
		
		<? if ($listpaid=="List Paid"){ ?>
		<form name="list" method="POST" enctype="multipart/form-data" >
		<table align="left" width="100%" >
			<tr>
				<td align="right">
					<table width="100%" align="right">
					<tr>
					
				 <td align="left">
									<br/>
									<div style="font-size:13px;">
										Region: <select name="regiondDrpDwn" style="font-size:11px;">
													<!--TODO: get all regions-->

													<option>Region 1</option>
													<option>Region 2</option>
													<option>Region 3</option>
													<option>Region 4</option>
													<option>Region 5</option>
													<option>Region 6</option>

													<option>Region 7</option>
													<option>...</option>
												</select>&nbsp;&nbsp;
										Province: <select name="provinceDrpDwn" style="font-size:11px;">
													<!--TODO: get all province from selected region-->
													<option>-- Select Provice --</option>
													<option>Province 1</option>

													<option>Province 2</option>
													<option>Province 3</option>
													<option>Province 4</option>
													<option>Province 5</option>
													<option>Province 6</option>
													<option>Province 7</option>

													<option>...</option>
												</select>&nbsp;&nbsp;
										School: <select name="schoolDrpDwn" style="font-size:11px;">
													<!--TODO: get all schools from selected province-->
													<option>-- Select School --</option>
													<option>School 1</option>
													<option>School 2</option>

													<option>School 3</option>
													<option>School 4</option>
													<option>School 5</option>
													<option>School 6</option>
													<option>School 7</option>
													<option>...</option>

												</select>&nbsp;<input type="button" value="Search" style="font-size:12px;" onclick="javascript:alert('School Not Found');"/>
									</div>
								</td>
					</tr>
					<tr>

								<!--LIST OF STUDENTS-->
								<td width="100%" align="left" class="bodyText" >
								<table width="100%" border="1px" bordercolor="#0000FF" cellpadding="1" cellspacing="0" >
									<tr>
										<th width="22%" align="center" class="thead" >Name</th>
										<th width="15%" align="center" class="thead" >Amount Due</th>
										<th width="15%" align="center" class="thead" >Paid</th>

										<th width="20%" align="center" class="thead" >OR No.</th>
										<th width="18%" align="center" class="thead" >Date Paid</th>
										
									</tr>
									
									<!-- list here-->
									<? $i=0;
										for (; $i<$ctr; $i++)
										{ ?>						 
										<tr>
											<td width="22%" align="center">
												Name
											</td>

											<td width="15%" align="center" >
												900
											</td>
										 	<td width="15%" align="center" > 
												<input type="checkbox" disabled checked name="chkPaidList"> </input>
											</td>
											<td width="20%" align="center" > 
												1234567890
											</td>
											<td width="20%" align="center" > 
												August 3, 2009
											</td>
										 </tr>									
								<? } ?>
								
									<tr>
								
								
							
							</tr>																				
										</table>
										<table>
										<td align="left">
									
								
								TOTAL NUMBER OF STUDENTS:&nbsp;<? echo $ctr ?>
							
															
								</td>
								</table>
								</td>
							</tr>	
					</table>
				</td>
			</tr>
		</table>
		
											<table width="100%">
												<td width="50%" align="right"><input type="button" value="PRINT" onclick="javascript:alert('Print')"></td><br/>
												<td width="50%" align="left"><input type="button" value="SAVE" onclick="javascript:alert('Save')"></td>
											</table>
		</form>
		<? } ?>
		
		</table>
        <!-- InstanceEndEditable --> </td>
      </tr>
    </table><br /><br /></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#0099FF" class="borderline" background="mm_dashed_line.gif"><img src="mm_dashed_line.gif" alt="&nbsp;" width="4" height="3" border="0" /></td>
  </tr>
  <tr bgcolor="#0033FF">
  	<td height="20" colspan="3">&nbsp;<br />
	<table width="1049" border="0" id="navigationTop" align="left">
		<tr>
				<td align="left" width="9"></td>	
				<td width="91" align="left"><a href="cashiercontact.php" class="navText">CONTACT US</a></td>
				<td align="left" id="separator" >|</td>
				<td width="33" align="left"><a href="cashierhelp.php" class="navText">HELP</a></td>
			    <td width="890" align="left"><div align="right">&copy; 2009 | V.1.0</div></td>
			
		</tr>
	</table>
	</td>
  </tr>
</table>
</body>
<!-- InstanceEnd --></html>

