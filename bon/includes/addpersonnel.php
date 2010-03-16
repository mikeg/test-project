 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<form name="schools" method="post" enctype="multipart/form-data" action="#">
		<table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
							<tr>
								<td width="100%" align="left" class="bodyText" >
								<br/>
									<table width="100%" bordercolor="#0000FF" cellpadding="1" cellspacing="0" align="center">
										<tr>
											
											<th width="15%" class="thead">Add Personnel</th>
											<th width="85%" class="thead"></th>
										</tr>
										
										<tr>
										<td width="15%" align="right"><br/> Firstname:<br/><br/></td> 
										<td width="85%" align="left"><br/> <input type="text" size="30" name="firstName"><br/><br/></td>
										</tr>
										
										<tr>
										<td width="15%" align="right"> Lastname:<br/><br/></td> 
										<td width="85%" align="left"> <input type="text" size="30" name="lastName"><br/><br/></td>
										</tr>
										
										<tr>
											<td width="15%" align="right"> Location:</td> 
											<td width="85%" align="left"><select name="selRegion"/> <option >--Select Region--</option>
											<option>Region 1</option>
											<option>Region 2</option>
											<option>Region 7</option>
											</select>
											</td>
										</tr>
										
										<tr>
										<td width="15%" align="right"> <br/> Employee No.:<br/><br/></td> 
										<td width="85%" align="left"> <br/><input type="text" size="25" name="employeeNo"/><br/><br/></td>
										</tr>
										
										<tr>
										<td width="15%" align="right">Position:<br/><br/></td> 
										<td width="85%" align="left"><input type="text" size="30" name="position"/><br/><br/></td>
										</tr>
										
						
											
										<tr>
										<td width="15%" align="right">Username:<br/><br/></td> 
										<td width="85%" align="left"><input type="text" size="25" name="username"/><br/><br/></td>
										</tr>
										
											
										<tr>
										<td width="15%" align="right">Password:<br/><br/></td> 
										<td width="85%" align="left"><input type="password" size="25" name="password"/><br/><br/></td>
										</tr>
										
										<tr>
										<td width="15%" align="right">Access:<br/><br/></td> 
										<td width="85%" align="left"><input type="radio" name="enableAcc"><font color="#00FF00"><strong/>enable</font></input>&nbsp;<input type="radio" name="enableAcc"><font color="#FF0000">disable</font></input></td>
										</tr>
											
									</table>
								</td>
							</tr>
					</table>
				</td>
			</tr>
		</table>
		
		<table width="100%">
			<td width="50%" align="right"><input type="reset" value="CANCEL" name="reset"/></td><br/>
			<td width="50%" align="left"><input type="button" value="SAVE" name="save"/></td>							
		</table>
		</form>
