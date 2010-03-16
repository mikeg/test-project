
<script type="text/JavaScript" language="JavaScript">


function show(id)
{
     if (document.getElementById(id).style.display == 'none')
     {
          document.getElementById(id).style.display = '';
     }
}

function hide(id)
{
          document.getElementById(id).style.display = 'none';
}

</script>

<form method="GET" enctype="multipart/form-data" name="form" action="srstudent.php" >


									<table width="100%" cellspacing="0" cellpadding="5" align="center" bgcolor="#C0C0C0"> 
										<tr>
										  
											<th width="25%" class="thead"><div align="left">NURSES' APPLICATION FORM</div></th>
											<th width="75%" class="thead" align="left"> </th>
										</tr>
										
										<tr>
											<td width="25%" align="right"> <br/>Application No.:
											<input name="add" type="hidden" id="add" value="Add Profile" />
											<input name="reseter" type="hidden"/></td> 
											<td width="75%" align="left"><br/><input type="text" readonly="" size="15"> 
											</td>
										</tr>
										
										<tr>
											<td width="25%" align="right">PERRC No.</td> 
											<td width="75%" align="left"><input type="text" readonly="" size="15"/></td>
										</tr>
										
										<tr>
											<td width="25%" align="right">Examinee Type:</td> 
											<td width="75%" align="left">
		<input type="radio" name="exType" value="new" onChange="hide('nle');return true;" id="new"  />
       1ST TIMER(NEW) 
		<br/>
		<input type="radio" name="exType" value="rep" onChange="show('nle');return true;" id="rep" />
		REPEATER
		<br/>
		<input type="radio" name="exType" value="cond" onChange="show('nle');return true;" id="cond" />
		CONDITIONED													 
	</td>
										</tr>
									
														
										<tr>
											<td width="25%" align="right">Degree:</td> 
											<td width="75%" align="left"> 
		<input type="radio" name="deg" value="rNur" onChange="hide('withDeg');return true;" id="rNur"  />
       	Regular B.S. Nursing 
		<br/>
		<input type="radio" name="deg" value="wDeg" onChange="show('withDeg');return true;" id="wDeg" />
		With Other Degree/s
									       
</td>
										</tr>
										
										
										
										<tr>
											<td width="25%" align="right">Date of Examination:</td> 
											<td width="75%" align="left"> <input type="text" size="15" readonly=""/></td>
										</tr>
										
											<tr>
											<td width="25%" align="right">Place of Examination:</td> 
											<td width="75%" align="left"> <input type="text" size="15" readonly=""></td>
										</tr>
										
											<tr>
											
											<th width="25%" class="thead"> <div align="left">PERSONAL INFORMATION</div></th>
											<th width="75%" class="thead" align="left"> </th> 
										</tr>
										
										
										<tr>
											<td width="25%" align="right"><br/>Surname/Family Name:</td> 
											<td width="75%" align="left"><br/><input type="text" size="30" name="lastName" value="<?php echo $_GET['lastName'];?>"> </input></td>
										</tr>
										
										<tr>
											<td width="25%" align="right">Given Name:</td> 
											<td width="75%" align="left"><input type="text" size="30"/></td>
										</tr>
										
										<tr>
											<td width="25%" align="right">Family Name:</td> 
											<td width="75%" align="left"><input type="text" size="30"/></td>
										</tr>
										
										<tr>
											<td width="25%" align="right">M.I.:</td> 
											<td width="75%" align="left"><input type="text" size="5"/></td>
										</tr>
										
														
										<tr>
											<td width="25%" align="right">Sex:</td> 
											<td width="75%" align="left"> <label>
			  <input type="radio" name="sex" value="radio" />
MALE</label> <br/>
			  
			  <label>
			  <input type="radio" name="sex" value="radio" />
  FEMALE</label></td>
										</tr>
										
										
	<tr>
	<div style="font-size:13px;">
											<td width="25%" align="right"> Complete Mailing Address:</td> 
											
											<td width="75%" align="left">
											
											House No.,Street: <input type="text" size="35" class="smallText">  
		<select class="smallText">
		<option>Region&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
		</select> 
		
		<select class="smallText">
		<option>Province&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
		</select>  
		
		<select class="smallText" name="selMun">
		<option>CityMunicipality&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
		</select> <br/>
		 
		 Zip Code: <input name="text" type="text" class="smallText" readonly="" size="15" />		
         Rurban Code:<input class="smallText" type="text" readonly="" size="15">
		</td>
		</div>	
		</tr>
										
										<tr>
										<td width="25%" align="right"><br/>Citizenship:</td> 
										<td width="75%" align="left"><br/>
										<select name = 'selCit' onChange="form.submit()">
                                                <option value="0"> --Select Citizenship Country-- </option>
                                                <?php
													   		$qcit = "select distinct country from citizenship order by country ";
															//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                            $q2=mysql_query($qcit);
															while($row=mysql_fetch_array($q2)){
                                                            ?>
                                                <option value = '<?php echo $row['country'] ;?>' <?php if($_GET['selCit']==$row['country']){echo "selected";}?>> <?php echo " ".$row['country'] ;?></option>
                                                <?php } ?>
										      </select>
											  
											  <input type="hidden" name= 'cit_id'
											 <?php
													   		$qcid = "select distinct citizenship_id from citizenship where  country = '".$_GET['selCit']."' and  country is not null";
															//$qprov = 'SELECT `Region` FROM `addresses` WHERE Province is NULL ORDER BY `Region`'; 
                                                            $q3=mysql_query($qcid);
															while($row3=mysql_fetch_array($q3)){
											?>
										  	value = '<?php echo $row3['citizenship_id'] ;?>
                                            <?php } ?>'>
										</td>
										</tr>
										
										<tr>
										<td width="25%" align="right">E-mail Address:</td> 
										<td width="75%" align="left"><input type="text" size="25"/></td>
										</tr>
										
										<tr>
										<td width="25%" align="right">Landline No. (ex. 32 4353389):</td> 
										<td width="75%" align="left"><select name="areaCode">
										<option>code</option>
										</select> <input type="text" size="20"/></td>
										</tr>
										
										<tr>
										<td width="25%" align="right">Mobile No.(ex. 0927 4353389):</td> 
										<td width="75%" align="left"><input type="text" size="5"/> <input type="text" size="15"/></td>
										</tr>
										
										<tr>
									
										<td width="25%" align="right"><br/>Civil Status:</td> 
										<td width="75%" align="left">
		<input type="radio" name="civil" value="single" onChange="hide('withWife');hide('withWifeLbl');return true;" id="single"  />
       SINGLE 
	   <input type="radio" name="civil" value="widow" onChange="show('withWife');show('withWifeLbl');return true;" id="widow"  />
       WIDOW/ER 
	   <input type="radio" name="civil" value="divorced" onChange="show('withWife');show('withWifeLbl');return true;" id="divorced"  />
       DIVORCED 
		<br/>
	   <input type="radio" name="civil" value="married" onChange="show('withWife');show('withWifeLbl');return true;" id="married"  />
       MARRIED 
	   <input type="radio" name="civil" value="annulled" onChange="show('withWife');show('withWifeLbl');return true;" id="annulled"  />
       ANNULLED 
	   <input type="radio" name="civil" value="separated" onChange="show('withWife');show('withWifeLbl');return true;" id="separated"  />
       LEGALLY SEPARATED 
		</td>
										</tr>
										
										<tr>
										<td width="25%" align="right">Date of Birth (mm/dd/yyyy):</td> 
										<td width="75%" align="left"><select name="mm">
										<option>01</option>
										<option>02</option>
										<option>03</option>
										</select> <select name="dd">
										<option>01</option>
										<option>02</option>
										<option>03</option>
										</select> <select name="yyyy">
										<option>1900
										<option>1901                                        
										</select> </td>
										</tr>
										
										<tr>
											<div style="font-size:13px;">
											<td width="25%" align="right"> Place of Birth:</td> 
											
											<td width="75%" align="left">
											
											<select class="smallText">
		<option>Region&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
		</select> <select class="smallText">
		<option>Province&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
		</select>  <select class="smallText">
		<option>City/Municipality&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
		</select> 
		Zip Code: <input name="text" type="text" class="smallText" readonly="" size="12" />		
       Rurban Code:
		<input class="smallText" type="text" readonly="" size="12">
											</td>
											</div>	
										</tr>
										
										<tr>
										
										<td align="right">
										<table id="withWifeLbl" style="display:none;">
										<td>Spouse's Name & Citizenship:</td> 										
										</table>
										</td>
										
										<td align="left">
										<table id="withWife" style="display:none;">
										<td><input type="text" size="40"/> <select>
										<option>Citizenship</option> 
										</select></td>										
										</table>
										</td>
										</tr>
										
										<tr>
										<td width="25%" align="right">Father's Name & Citizenship:</td> 
										<td width="75%" align="left"><input type="text" size="40"/> <select>
										<option>Citizenship</option> 
										</select></td>
										</tr>
										
										<tr>
										<td width="25%" align="right">Mother's Name & Citizenship:</td> 
										<td width="75%" align="left"><input type="text" size="40"/> <select>
										<option>Citizenship</option> 
										</select></td>
										</tr>
										
										<tr>
										<td width="25%" align="right">Have you ever been convicted in a final judgment by any military tribunal or administrative body?</td> 
											<td width="75%" align="left"> 
  	 
	 
        <input type="radio" name="convict" value="yes" onChange="show('yesTbl');return true;" id="yes"  />
       	<font style="FONT-SIZE: 10pt; FONT-FAMILY: 'Verdana'">YES</font>
        <input type="radio" name="convict" value="no" onChange="hide('yesTbl');return true;" id="no" />
		<font style="FONT-SIZE: 10pt; FONT-FAMILY: 'Verdana'">NO</font>
   </td>
   </tr>
 
  	
<tr>
	<td>
	</td>
	
	<td>
	 <table id="yesTbl" style="display:none;">
  	  <td width=699>
		&nbsp; &nbsp; (If yes, has submitted a copy of the decision?)
		 <input type="checkbox" name="hasDocs"></input> 
      </td>
 	 </table>	
	</td>  
</tr>
  
										
										
										<tr>
											
											<th width="25%" class="thead"> <div align="left">EDUCATIONAL INFORMATION</div></th>
											<th width="75%" class="thead" align="left"> </th> <br/> <br/>
										</tr>
										
										
										<tr>
											<td width="25%" align="right"><br/>Name of School:</td> 
											<td width="75%" align="left"><br/><input  type="text" size="30" readonly="" value="Name of School"/></td>
										</tr>
										
											<tr>
											<div style="font-size:13px;">
											<td width="25%" align="right"> School Address:</td> 
											
											<td width="75%" align="left">
											
											<input readonly="" type="text" size="35" class="smallText" name="street" value="Street Address"/>
											<input readonly="" type="text" size="12" class="smallText" name="region" value="Region"/>   
											<input readonly="" type="text" size="27" class="smallText" name="province" value="Province"/> 
											<input readonly="" type="text" size="35" class="smallText" name="city/municipality" value="City/Municipality"/><br/> 
		
		Zip Code: <input name="text" type="text" class="smallText" readonly="" size="15" value="Zip Code" />		
       Rurban Code:
		<input class="smallText" type="text" readonly="" size="15" value="Rurban Code"/>
											</td>
											</div>	
										</tr>
										
										
											
										<tr>
										<td width="25%" align="right">PRC School Code :</td> 
										<td width="75%" align="left"><input type="text" readonly="" size="15" value="School Code"/></td>
										</tr>
										
											<tr>
											<td width="25%" align="right">Degree/Course Obtained:</td> 
											<td width="75%" align="left"><input type="text" size="12" readonly="" value="B.S. Nursing"/></td>
										</tr>
										
											<tr>
											<td width="25%" align="right">PRC Course Code:</td> 
											<td width="75%" align="left"><input type="text" size="2" readonly="" value="4018"/></td>
										</tr>
										
										</tr>
										
											<tr>
											<td width="25%" align="right">Review School Attended:</td> 
											<td width="75%" align="left"><select name="reviewSchool">
											<option>Review School</option>
											</select></td>
										</tr>
										
											</tr>
										
											<tr>
											<td width="25%" align="right">Review Center Attended:</td> 
											<td width="75%" align="left"><select name="reviewCenter">
											<option>Review Center</option>
											</select></td>
										</tr>
										
																
									</table>
									
	
								
								
								<table id="withDeg" style="display:none;" width="100%" border="1px" cellpadding="1" cellspacing="0" bgcolor="#C0C0C0">
								
										<tr>
											<th width="20%" >Degree/Course Obtained <br/> <em>prior to BS Nursing</em></th>
											<th width="20%" >Name of School</th>
											<th width="6%" >PRC School Code</th>
											<th width="35%" >Address</th>
											<th width="20%"  >Date Graduated <br/> (<em>mm/dd/yyyy)</em></th>
										
										</tr>
										<? $i=0;
											for (; $i<3; $i++)
										{ ?>
										
										<tr>
											<th width="20%" align="center" class="tcontent"><select name="prevCourse">
											<option>Previous Course</option> 
											</select></th>
											<th width="20%" align="center" class="tcontent"><select>
											<option>Name of School</option>
											</select></th>
											<th width="6%" align="center" class="tcontent"><input  type="text" readonly="" name="prevCoursePrcCode" size="5"></th>
											<th width="35%" align="center" class="tcontent"><label>st. region province city zipcode rurban code</label></th>
											<th width="20%" align="center" class="tcontent"> <font size="-1"><select name="mm">
										<option>01</option>
										<option>02</option>
										<option>03</option>
										</select> <select name="dd">
										<option>01</option>
										<option>02</option>
										<option>03</option>
										</select> <select name="yyyy">
										<option>1900</option>
										<option>1901</option>
										</select></font></th>
											
										</tr>
										
										<? } ?>
									
									</table>
									
									<table width="100%" cellspacing="0" cellpadding="5" align="center" bgcolor="#C0C0C0"> 
										<tr>
											<th width="25%" class="thead"><div align="left">PREVIOUS NLE TAKEN</div></th>
											<th width="75%" class="thead" align="left"></th>
										
									</table>
									
									<table id="nle" style="display:none;" width="100%" border="1px" cellpadding="1" cellspacing="0" bgcolor="#C0C0C0">
								
							
										<tr>
											<th width="20%" >Name of Examination</th>
											<th width="15%" >Place of Examination</th>
											<th width="20%"  >Date Taken <br/> (<em>mm/dd/yyyy)</em></th>
											<th width="5%" >Rating</th>
											<th width="30%" >Result of Examination</th>
											<th width="8%" >Exam No.</th>
											
										
										</tr>
										<? $i=0;
											for (; $i<3; $i++)
										{ ?>
										
										<tr>
											<th width="20%" align="center" class="tcontent"><label>Name of Examination</label></th>
											<th width="15%" align="center" class="tcontent"><label>Place</label></th>
											<th width="20%" align="center" class="tcontent"> <label> Date of Examination</label></th>
											
											<th width="5%" align="center" class="tcontent"><label>Rating</label></th>
											
											<th width="30%" align="center" class="tcontent">										<label>
											  <label>
											  <input type="checkbox" name="resultOfExam" disabled >
  Passed</label>
											
											  <label>
											  <input type="checkbox" name="resultOfExam" disabled>
  Failed</label>
											 
											  <label>
											  <input type="checkbox" name="resultOfExam" checked disabled >
  Cond.</label>	  
												</label></th>
												<th width="8%" align="center" class="tcontent"><label>Exam No.</label></th>
											
										</tr>
										
										
										<? } ?>
									
										
</table>
									
									   <table width="100%" cellspacing="0" cellpadding="5" align="center" bgcolor="#C0C0C0"> 
										<tr>
											<td width="50%" align="left"> <br/>Type of Examination: <label>EX CODE </label></td> 
											<td width="50%" align="right"><br/>Number of Times Taken: <label>NX CODE </label></td> 	
										</tr>
										
										</table>
									<br/>
									<table width="100%">
									<td width="50%" align="right"> <input type="reset" value="CANCEL" name="resetx"> </input> </td>
									<td width="50%" align="left"> <input type="submit" value="SAVE" name="submitx"> </td>
									</table>
									
									
</form>
									
									
									
	