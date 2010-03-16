<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<form name="acceptTransfer" method="post" enctype="multipart/form-data" action="#">
		<table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
					
							<tr>			
								<th align="left" class="thead">Search Outside: Accept Transfer</th>
							</tr>
							<tr>
								<td align="left" bgcolor="#6699FF" style="padding-left:5px; font:14px; color:#FFFFFF;">SEARCH OPTIONS: (please fill-up to search the student)</td>
							</tr>
							<tr>
								<td align="left" bgcolor="#6699FF">
									
									Name: &nbsp;<input type="text" name="name" align="left" size="50" /> <br/>
									
									Region: <select>
									<option>--Select Region--</option>
									<option>Region 7</option> 
									</select>
									
									Province: <select>
									<option>--Select Province--</option>
									<option>Cebu</option> 
									</select>
									
									School: <select>
									<option>--Select School--</option>
									<option>School</option> 
									</select>
										
										<input type="button" name="search" value="Search" />
								
								</td>
							</tr>
							<tr>
								<td width="100%" align="left" class="bodyText" >
								<br/>
									Search Results:
								<table width="100%" border="1px" bordercolor="#0000FF" cellpadding="2" cellspacing="1">
										<tr>
											<th width="40%" class="thead">Student Name</th>
											<th width="10%" class="thead">Year Level</th>
											<th width="5%" class="thead">Release Status</th>
											<th width="15%"  class="thead">Date</th>
											<th width="40%"  class="thead">Releasing School</th>
										</tr>
										<? $i=0;
											for (; $i<5; $i++)
										{ ?>
										
										<tr>
											<th width="40%" align="left" class="tcontent">Name</th>
											<th width="10%" align="left" class="tcontent">Year Level</th>
											<th width="5%" align="center" class="tcontent">Yes/No</th>
											<th width="15" align="center" class="tcontent"><input type="text"></th>
											<th width="40%" align="left" class="tcontent">Releasing School</th>
										</tr>
										
										<? } ?>
								  </table>
								</td>
							</tr>
					</table>
				</td>
			</tr>
		</table>
		<br/>
		<table align="center">
		<td width="50%" align="right"> <input type="reset" value="CANCEL"> </td>
		<td width="50%" align="left"> <input type="button" value="ACCEPT"> </td>
		</table>
		</form>