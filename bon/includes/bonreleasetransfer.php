<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<form name="releaseTransfer"enctype="multipart/form-data" method="post">
		<table align="center" width="100%" >
			<tr>
				<td width="100%" align="right">
					<table width="100%" align="right">
							<tr>
								<br/>			
								<th align="left" class="thead">Search Within: Release Student</th>
							</tr>
							<tr>
								<td align="left" bgcolor="#6699FF" style="padding-left:5px; font:14px; color:#FFFFFF;">SEARCH OPTIONS: (please fill-up to search the student)</td>
							</tr>
							<tr>
								<td align="left" bgcolor="#6699FF">
									
									Name <input type="text" name="name" align="left" size="50" />
									
									Year level <select>
									<option>4th year</option>
									<option>4th year irregular</option>
									<option>3rd year</option>
									<option>3rd year irregular</option>
									<option>2nd year</option>
									<option>2nd year irregula</option>
									<option>1st year</option>
									<option>1st year irregula</option>
									</select>
									
									<input type="button" name="searchStudent" value="Search"> </input>								
									
										
								
								
								</td>
							</tr>
							
							<tr>
						
								<td width="100%" align="left" class="bodyText" >
										<br/> Search Results:
									<table width="100%" border="1px" bordercolor="#0000FF" cellpadding="1" cellspacing="0">
										<tr>
											<th width="40%" class="thead">Name</th>
											<th width="10%" class="thead">Year Level</th>
											<th width="5%" class="thead">Release Status</th>
											<th width="15%"  class="thead">Date</th>
											<th width="40%"  class="thead">Accepting School</th>
										</tr>
										<? $i=0;
											for (; $i<5; $i++)
										{ ?>
										
										<tr>
											<th width="40%" align="left" class="tcontent">Name</th>
											<th width="10%" align="left" class="tcontent">Year Level</th>
											<th width="5%" align="center" class="tcontent"><input type="checkbox"></th>
											<th width="15" align="center" class="tcontent"><input type="text"></th>
											<th width="40%" align="left" class="tcontent">Accepting School</th>
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
		<td width="50%" align="left"> <input type="button" value="SAVE"> </td>
		</table>
	
		</form>