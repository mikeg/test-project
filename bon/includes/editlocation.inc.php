<table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
					
						<tr>
								<td width="100%" align="left">
									<br/><table width="100%" cellspacing="0" align="center">
											<tr>
											  <td align="left">
												<form method="GET" enctype="multipart/form-data" name="search" id="search">
												Region:<select name="selRegion"/>
												<option>--Select Region--</option>
												<option>Region 1</option>
												<option>Region 7</option>
												<option>Region 12</option>
												</select>
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
											
											<th width="12%" class="thead">PRC Name</th>
											<th width="3%" class="thead">Access</th>
											<th colspan="2" width="5%" class="thead">Action</th>
										</tr>
										
										<?php
											for($i = 0; $i<5; $i++)
										{ ?>
											<form action="#" method="GET" enctype="multipart/form-data" name="cashiers" id="cashiers">
											<tr>
												
											<td width="12%" align="center" class="tcontent">PRC Name</td>
											<td width="3%" align="center" class="tcontent"><input name="access" type="checkbox" id="access" /></td>
											<td width="1%" align="center" class="tcontent"><input name="edit1" type="button" id="edit" value="EDIT"/></td>
											<td width="1% " align="center" class="tcontent"><input name="save" type="button" id="save" value="SAVE"/></td>
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