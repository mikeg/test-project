  <table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
							<tr>
								<td width="100%" align="left">
									<table width="100%" cellspacing="0">
										
											
										
										<? if ($viewType!="Year Level")
										{ ?>
										<tr>
											<td>
												<form name="search" action="scStatusReport.php" enctype="multipart/form-data" method="post">
												<input type="hidden" name="yearlevel" value=<? echo $viewType ?> />
												Student Name: <input type="text" name="studentName" value="" size="30"/>&nbsp;
												Year Level: <select name="yearlevel">
													<option value="0" selected>All</option>
													<option value="4" >4th Year</option>
													<option value="4Ir" >4th Year Irregular</option>
													<option value="3" >3rd Year</option>
													<option value="3Ir" >3rd Year Irregular</option>
													<option value="2" >2nd Year</option>
													<option value="2Ir" >2nd Year Irregular</option>
													<option value="1" >1st Year</option>
												</select>&nbsp;
												<input type="submit" name="search" value="SEARCH" />
												</form>
											</td>
										</tr>
										<? } ?>
									</table>
								</td>
							</tr>
							<tr>
								<td width="100%" align="left" class="bodyText" >
									<table width="100%" border="1px" bordercolor="#0000FF" cellpadding="2" cellspacing="1"  >
										<tr >
											
											<th width="18%" class="thead">Student Name</th>
											<th width="5%" class="thead">NAF Form</th>
											<th width="5%" class="thead">T.O.R.</th>
											<th width="5%" class="thead">SRLE</th>
											<th width="6%" class="thead">O.R.D.R. Cases</th>
											<th width="7%" class="thead">NSO Birth Certificate</th>
									  	  <th width="7%" class="thead">NSO Marriage Contract<br /></th>
										    <th width="5%" class="thead">Foreign</th>
											<th width="7%" class="thead">Passport Picture</th>
											<th width="6%" class="thead">Window Envelope</th>
											<th width="5%" class="thead">Stamp</th>
											<th width="5%" class="thead">Cedula</th>
											<th width="5%" class="thead"> Paid</th>
											<th width="7%" class="thead">Action</th>
										</tr>
										
										<? if($viewType=="Year Level")
										{
											for($i = 0; $i<5; $i++)
											{ ?>
											<form name="requirements" method="post" enctype="multipart/form-data" action="#">
											<tr>
												
												<td width="18%" align="left" class="tcontent">dela Cruz, Juan</td>
											  <td width="5%" align="center" class="tcontent"><input type="checkbox" name="naf" /></td>
											  <td width="7%" align="center" class="tcontent"><input type="checkbox" name="tor" /></td>
											  <td width="7%" align="center" class="tcontent"><input type="checkbox" name="learningExp" /></td>
											  <td width="5%" align="center" class="tcontent"><input type="checkbox" name="ordr" /></td>
											  
											  <td width="5%" align="center" class="tcontent"><input type="checkbox" name="nsoBirth" /></td>
											  <td width="5%" align="center" class="tcontent"><input type="checkbox" name="nsoMarriage"/></td>
											  <td width="6%" align="center" class="tcontent"><input type="checkbox" name="foreign" /></td>
											  <td width="7%" align="center" class="tcontent"><input type="checkbox" name="passportPics"/></td>
											  <td width="6%" align="center" class="tcontent"><input type="checkbox" name="envelope" /></td>
											  <td width="5%" align="center" class="tcontent"><input type="checkbox" name="stamp" /></td>
											  <td width="5%" align="center" class="tcontent"><input type="checkbox" name="cedula" /></td>
											  <td width="5%" align="center" class="tcontent"><input type="checkbox" name="paid" /></td>
											
											  <td width="7%" align="center" class="tcontent"><input type="submit" name="submit" value="Save"/></td>
											</tr>
											</form>
										<? 	} 
										} else { ?>
											<form name="requirements" method="post" enctype="multipart/form-data" action="#">
											<tr>
												
												<td width="18%" align="left" class="tcontent">dela Cruz, Juan</td>
											  <td width="5%" align="center" class="tcontent"><input type="checkbox" name="naf" /></td>
											  <td width="5%" align="center" class="tcontent"><input type="checkbox" name="nsoBirth" /></td>
											  <td width="5%" align="center" class="tcontent"><input type="checkbox" name="nsoMarriage"/></td>
											  <td width="6%" align="center" class="tcontent"><input type="checkbox" name="foreign" /></td>
											  <td width="7%" align="center" class="tcontent"><input type="checkbox" name="tor" /></td>
											  <td width="7%" align="center" class="tcontent"><input type="checkbox" name="learningExp" /></td>
											  <td width="5%" align="center" class="tcontent"><input type="checkbox" name="ordr" /></td>
											  <td width="7%" align="center" class="tcontent"><input type="checkbox" name="passportPics"/></td>
											  <td width="6%" align="center" class="tcontent"><input type="checkbox" name="envelope" /></td>
											  <td width="5%" align="center" class="tcontent"><input type="checkbox" name="stamp" /></td>
											  <td width="5%" align="center" class="tcontent"><input type="checkbox" name="cedula" /></td>
											  <td width="5%" align="center" class="tcontent"><input type="checkbox" name="paid" /></td>
											 
											  <td width="7%" align="center" class="tcontent"><input type="submit" name="submit" value="Save"/></td>
											</tr>
											</form>
										
										<? } ?>
								  </table>
								</td>
							</tr>
					</table>
				</td>
			</tr>
		</table>