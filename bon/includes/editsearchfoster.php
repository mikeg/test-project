<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
			 <table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
					
						<tr>
								<td width="100%" align="left">
									<table width="100%" cellspacing="0" align="center">
											<td align="left"><br/>
												<form name="search"enctype="multipart/form-data" method="GET">
												Region: <select name="region">
												<option>--Select Region--</option>
												<option>Region 1</option>
												<option>Region 2</option>
												<option>Region 7</option>
												</select>
												&nbsp;Province: <select name="region">
												<option>--Select Province--</option>
												<option>Cebu</option>
												<option>Bohol</option>
												<option>Isabela</option>
												</select>
												&nbsp;Firstname/Lastname: <input type="text" name="cashierName" size="30">
												&nbsp;<input type="submit" name="search2" value="SEARCH" />
												</form>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td width="100%" align="left" class="bodyText" >
									<table width="100%" border="1px" bordercolor="#0000FF" cellpadding="1" cellspacing="0" align="center">
										<tr>
											
											<th width="12%" class="thead">Foster Name</th>
											<th width="3%" class="thead">Access</th>
											<th colspan="2" width="12%" class="thead">Location Handled</th>
											<th colspan="2" width="2%" class="thead">Action</th>
										</tr>
										
										<? 
											for($i = 0; $i<1; $i++)
										{ ?>
											<form name="cashiers" method="GET" enctype="multipart/form-data" action="#">
											<tr>
												
											<td width="12%" align="center" class="tcontent">Foster Name</td>
											<td width="3%" align="center" class="tcontent"><input name="access" type="checkbox" id="access" /></td>
											<td width="5%" align="center" class="tcontent">Region</td>
											<td width="7%" align="center" class="tcontent">Province</td>
											<td width="1%" align="center" class="tcontent"><input name="edit1" type="button" id="edit" value="EDIT"/></td>
											<td width="1% " align="center" class="tcontent"><input name="save" type="submit" id="save" value="SAVE"/></td>
											</tr>
											</form>
										<? }  ?>
									</table>
								</td>
							</tr>
					</table>
				</td>
			</tr>
		</table>