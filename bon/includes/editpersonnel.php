<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
	
	 <table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
						<tr>
								<td width="100%" align="left">
									<br/><table width="100%" cellspacing="0" align="center">
											<td align="left">
												<form name="search"enctype="multipart/form-data" method="post">
												Region:<select name="selRegion">
												<option>--Select Region--</option>
												<option>Region 1</option>
												<option>Region 7</option>
												<option>Region 12</option> </select>
												&nbsp;<input type="submit" name="search2" value="SEARCH" />
												</form>
											</td>
									</table>
								</td>
						</tr>
							
								<td width="100%" align="left" class="bodyText" > 
									<table width="100%" border="1px" bordercolor="#0000FF" cellpadding="1" cellspacing="0" align="center">
										<tr>
											<th width="12%" class="thead">Personnel Name</th>
											<th width="3%" class="thead">Access</th>
											<th colspan="2" width="1%"class="thead">Action</th>
										</tr>
										
										<? 
											for($i = 0; $i<5; $i++)
										{ ?>
											<form name="cashiers" method="post" enctype="multipart/form-data" action="#">
											<tr>
												
											<td width="12%" align="center" class="tcontent">Personnel Name</td>
											<td width="3%" align="center" class="tcontent"><input name="access" type="checkbox" id="access" /></td>
											<td align="center" class="tcontent"><input name="edit1" type="button" id="edit" value="EDIT"/></td>
											<td align="center" class="tcontent"><input name="save" type="submit" id="save" value="SAVE"/></td>
											</tr>
											</form>
										<? } ?>
									</table>
								</td>
						
					</table>
				</td>
			</tr>
		</table>