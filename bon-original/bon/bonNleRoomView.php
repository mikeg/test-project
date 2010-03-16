<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>BoN Online System - NLE</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
  <table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" >
					
							<tr>
								<td align="left">
									<br/>
									<div style="font-size:13px;">
										Testing Center:&nbsp;<span style="font-weight:bold">Name of Selected Testing Center</span><br/>
										Room Name:&nbsp;<span style="font-weight:bold">Name of Selected Room</span><br/>
										Date:&nbsp;<span style="font-weight:bold">Date</span><br/>
									</div>
								</td>
							</tr>	
							
							<tr>
								<!--LIST OF Examinees for selected testing center-->
								<td width="100%" align="left" class="bodyText" >
								<table width="70%" border="1px" bordercolor="#0000FF" cellpadding="1" cellspacing="0" >
									<tr>
										<th width="30%" align="center" >Seat No.</th>
										<th width="30%" align="center" >Examinee No.</th>
										<th width="40%" align="center" >ID Thumbnail</th>
									</tr>
									
									<!-- list here-->
									<? $i=0;
											for (; $i<5; $i++)
										{ ?>
									 
										<tr>
											<td width="30%" align="left">&nbsp;
												Room Name
											</td>
											<td width="30%" align="left" >&nbsp;
												Examinee Room Number
											</td>
											<td width="40%" align="left" >&nbsp;
												ID Thumbnail
											</td>
										 </tr>											
									<? } ?>									
								</table>
								</td>
							</tr>
							
							<tr>
								<td align="left">
									<br/>
									<input type="button" value="Print" style="font-size:12px;" onClick="javascript:alert('Print');"/>
									<input type="button" value="Save" style="font-size:12px;" onClick="javascript:alert('Save to .pdf');"/>
								</td>								
							</tr>
										
					</table>
				</td>
			</tr>
		</table>

</body>
</html>
