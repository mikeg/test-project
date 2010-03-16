function addReg(){

		var my_div = document.getElementById("addRegTable");
		
		var i = 1;
		var table = document.getElementById("addRegTable");
	
		var count = table.rows.length;
		
		var rowUserId = "addRegUser" + count.toString();
		var rowPassId = "addRegPass" + count.toString();
		var rowFrstId = "addRegFrst" + count.toString();
		var rowLstId = "addRegLst" + count.toString();
		var rowAccId = "addRegAcc" + count.toString();
		
		var newReg = "<tr>";
			newReg += "<td width='15%' align='right'>Registrar:<br/><br/></td>";
			newReg += "<td>&nbsp;Firstname: <input type='text' size='25' id=" + rowFrstId + "> </input> &nbsp;<br/>Lastname: <input type='text' size='25' id=" + rowLstId + "></input></td>";
			newReg += "<td align = 'center'>&nbsp;Username: <input type='text' size='25' id=" + rowUserId + "> </input> &nbsp;<br/>Password: <input type='password' size='25' id=" + rowPassId + "></input></td>";
			newReg += "<td align = 'center'>&nbsp;Access: <input type='checkbox' id=" + rowAccId + "> </input> </td>";
			newReg += "</tr>";
			
		my_div.innerHTML += newReg;
		
}



function removeReg(){

		var table = document.getElementById("addRegTable");
		var count = table.rows.length;
			
			for (var i =0; i < count;i++){
				
				var rowUserId = "addRegUser" + i.toString();
				var rowPassId = "addRegPass" + i.toString();
				var rowFrstId = "addRegFrst" + i.toString();
				var rowLstId = "addRegLst" + i.toString();
				var rowAccId = "addRegAcc" + i.toString();
				
				var userText = document.getElementById(rowUserId);
				var userPass = document.getElementById(rowPassId);
				var userFrst = document.getElementById(rowFrstId);
				var userLst =  document.getElementById(rowLstId);
				var userAcc = document.getElementById(rowAccId);
		
				userText.value="";
				userPass.value="";
				userFrst.value="";
				userLst.value="";
			
				
				
	
	}
}

function addProv(){
		
		var my_divAddr= document.getElementById("addAddressTable");
		
		var i = 0;
		var table = document.getElementById("addAddressTable");
		
	
		//var count = table.rows.length;
		//var rowProvId = "addProv" + count.toString();
		
		//var rowUserId = "addRegUser" ;
		//var rowPassId = "addRegPass" ;
		var newAdd = "<tr>";
			//newAdd += "<td width='85%' align='left'> Region: <select> <br/> <input type='password' size='25' id=" + rowPassId + "> Password</input> <br/><br/></td>";
			newAdd += "<td > Region: <select id = 'selRegion'> <option> --Select Region-- </option> <option> Region 1 </option> <option> Region 7 </option> <option> Region 5 </option>  </td>";
			newAdd += "<td > Province to be added: <input type = 'text' id = 'addProvince'> </input></td>";
			//newAdd += "<td > Province: <select> <option> --Select Province-- </option> <option> Cebu </option> <option> Bohol </option> <option> Isabela </option> </td>";
			//newAdd += "<td > Municipality: <select> <option> --Select Municipality-- </option> <option> Mandaue </option> <option> Cebu </option> <option> Tagbilaran </option></td>";
			//newAdd += "<td > School: <select> <option> --Select School-- </option> <option> UPVCC </option> <option> CDU </option> <option> USC </option> </td>";
			newAdd += "<td > <input type = 'submit' value='SUBMIT' id='saveProv'> </input>";
			newAdd += "</tr>";
		my_divAddr.innerHTML = newAdd;
		
}
function addMun(){
		
		var my_divAddr = document.getElementById("addAddressTable");
		
		var i = 1;
		var table = document.getElementById("addAddressTable");
	
		//var count = table.rows.length;
		
		var rowMunId = "addMun" ;
		//var rowPassId = "addRegPass" ;
		var newAdd = "<tr>";
			//newAdd += "<td width='85%' align='left'> Region: <select> <br/> <input type='password' size='25' id=" + rowPassId + "> Password</input> <br/><br/></td>";
			newAdd += "<td > Region: <select id = 'selRegion'> <option> --Select Region-- </option> <option> Region 1 </option> <option> Region 7 </option> <option> Region 5 </option>  </td>";
			newAdd += "<td > Province: <select id = 'selProvince'> <option> --Select Province-- </option> <option> Bohol </option> <option> Isabela </option> <option> Cebu </option>  </td>";
			newAdd += "<td > Municipality / City to be added: <input type = 'text' id = 'addMunicipalityCity'> </input></td>";
			//newAdd += "<td > Province: <select> <option> --Select Province-- </option> <option> Cebu </option> <option> Bohol </option> <option> Isabela </option> </td>";
			//newAdd += "<td > Municipality: <select> <option> --Select Municipality-- </option> <option> Mandaue </option> <option> Cebu </option> <option> Tagbilaran </option></td>";
			//newAdd += "<td > School: <select> <option> --Select School-- </option> <option> UPVCC </option> <option> CDU </option> <option> USC </option> </td>";
			newAdd += "<td > <input type = 'submit' value='SUBMIT' id='saveMun'> </input>";
			newAdd += "</tr>";
		my_divAddr.innerHTML = newAdd;
		
}
function addZip(){
		
		var my_divAddr = document.getElementById("addAddressTable");
		
		var i = 1;
		var table = document.getElementById("addAddressTable");
	
		//var count = table.rows.length;
		
		var rowMunId = "addMun" ;
		//var rowPassId = "addRegPass" ;
		var newAdd = "<tr>";
			//newAdd += "<td width='85%' align='left'> Region: <select> <br/> <input type='password' size='25' id=" + rowPassId + "> Password</input> <br/><br/></td>";
			newAdd += "<td > Region: <select id = 'selRegion'> <option> --Select Region-- </option> <option> Region 1 </option> <option> Region 7 </option> <option> Region 5 </option>  </td>";
			newAdd += "<td > Province: <select id = 'selProvince'> <option> --Select Province-- </option> <option> Bohol </option> <option> Isabela </option> <option> Cebu </option>  </td>";
			newAdd += "<td > Municipality / City: <select id = 'selMunicipalityCity'> <option> --Select Municipality / City-- </option> <option> Mandaue </option> <option> Tagbilaran </option> <option> Manila </option>  </td>";
			newAdd += "<td > Zip Code to be added: <input type = 'text' id = 'addZipCode'> </input></td>";
			//newAdd += "<td > Province: <select> <option> --Select Province-- </option> <option> Cebu </option> <option> Bohol </option> <option> Isabela </option> </td>";
			//newAdd += "<td > Municipality: <select> <option> --Select Municipality-- </option> <option> Mandaue </option> <option> Cebu </option> <option> Tagbilaran </option></td>";
			//newAdd += "<td > School: <select> <option> --Select School-- </option> <option> UPVCC </option> <option> CDU </option> <option> USC </option> </td>";
			newAdd += "<td > <input type = 'submit' value='SUBMIT' id='saveZip'> </input>";
			newAdd += "</tr>";
		my_divAddr.innerHTML = newAdd;
		
}

function renameRegion(){
		
		var my_divRename= document.getElementById("renameAddressTable");
		
		var i = 0;
		var table = document.getElementById("renameAddressTable");
		
	
		//var count = table.rows.length;
		//var rowProvId = "addProv" + count.toString();
		
		//var rowUserId = "addRegUser" ;
		//var rowPassId = "addRegPass" ;
		var newAdd = "<tr>";
			//newAdd += "<td width='85%' align='left'> Region: <select> <br/> <input type='password' size='25' id=" + rowPassId + "> Password</input> <br/><br/></td>";
			newAdd += "<td > Region: <select id = 'selRegion'> <option> --Select Region-- </option> <option> Region 1 </option> <option> Region 7 </option> <option> Region 5 </option>  </td>";
			newAdd += "<td > Region's new name: <input type = 'text' id = 'changeRegion'> </input></td>";
			//newAdd += "<td > Province: <select> <option> --Select Province-- </option> <option> Cebu </option> <option> Bohol </option> <option> Isabela </option> </td>";
			//newAdd += "<td > Municipality: <select> <option> --Select Municipality-- </option> <option> Mandaue </option> <option> Cebu </option> <option> Tagbilaran </option></td>";
			//newAdd += "<td > School: <select> <option> --Select School-- </option> <option> UPVCC </option> <option> CDU </option> <option> USC </option> </td>";
			newAdd += "<td > <input type = 'submit' value='SUBMIT' id='renameRegion'> </input>";
			newAdd += "</tr>";
		my_divRename.innerHTML = newAdd;
		
}

function renameProv(){
		
		var my_divRename= document.getElementById("renameAddressTable");
		
		var i = 0;
		var table = document.getElementById("renameAddressTable");
		
	
		//var count = table.rows.length;
		//var rowProvId = "addProv" + count.toString();
		
		//var rowUserId = "addRegUser" ;
		//var rowPassId = "addRegPass" ;
		var newAdd = "<tr>";
			//newAdd += "<td width='85%' align='left'> Region: <select> <br/> <input type='password' size='25' id=" + rowPassId + "> Password</input> <br/><br/></td>";
			newAdd += "<td > Region: <select id = 'selRegion'> <option> --Select Region-- </option> <option> Region 1 </option> <option> Region 7 </option> <option> Region 5 </option>  </td>";
			newAdd += "<td > Province: <select id = 'selProvince'> <option> --Select Province-- </option> <option> Cebu </option> <option> Isabela </option> <option> Bohol </option>  </td>";
			newAdd += "<td > Province's new name: <input type = 'text' id = 'changeProvince'> </input></td>";
			//newAdd += "<td > Province: <select> <option> --Select Province-- </option> <option> Cebu </option> <option> Bohol </option> <option> Isabela </option> </td>";
			//newAdd += "<td > Municipality: <select> <option> --Select Municipality-- </option> <option> Mandaue </option> <option> Cebu </option> <option> Tagbilaran </option></td>";
			//newAdd += "<td > School: <select> <option> --Select School-- </option> <option> UPVCC </option> <option> CDU </option> <option> USC </option> </td>";
			newAdd += "<td > <input type = 'submit' value='SUBMIT' id='renameProv'> </input>";
			newAdd += "</tr>";
		my_divRename.innerHTML = newAdd;
		
}

function renameMun(){
		
		var my_divRename= document.getElementById("renameAddressTable");
		
		var i = 0;
		var table = document.getElementById("renameAddressTable");
		
	
		//var count = table.rows.length;
		//var rowProvId = "addProv" + count.toString();
		
		//var rowUserId = "addRegUser" ;
		//var rowPassId = "addRegPass" ;
		var newAdd = "<tr>";
			//newAdd += "<td width='85%' align='left'> Region: <select> <br/> <input type='password' size='25' id=" + rowPassId + "> Password</input> <br/><br/></td>";
			newAdd += "<td > Region: <select id = 'selRegion'> <option> --Select Region-- </option> <option> Region 1 </option> <option> Region 7 </option> <option> Region 5 </option>  </td>";
			newAdd += "<td > Province: <select id= 'selProvince'> <option> --Select Province-- </option> <option> Cebu </option> <option> Isabela </option> <option> Bohol </option>  </td>";
			newAdd += "<td > Municipality / City: <select id = 'selMunicipalityCity'> <option> --Select Municipality / City-- </option> <option> Mandaue </option> <option> Tagbilaran </option> <option> Manila </option>  </td>";
			newAdd += "<td > Municipality / City's new name: <input type = 'text' id = 'changeMunicipalityCity'> </input></td>";
			//newAdd += "<td > Province: <select> <option> --Select Province-- </option> <option> Cebu </option> <option> Bohol </option> <option> Isabela </option> </td>";
			//newAdd += "<td > Municipality: <select> <option> --Select Municipality-- </option> <option> Mandaue </option> <option> Cebu </option> <option> Tagbilaran </option></td>";
			//newAdd += "<td > School: <select> <option> --Select School-- </option> <option> UPVCC </option> <option> CDU </option> <option> USC </option> </td>";
			newAdd += "<td > <input type = 'submit' value='SUBMIT' id='renameMun'> </input>";
			newAdd += "</tr>";
		my_divRename.innerHTML = newAdd;
		
}

function renameZip(){
		
		var my_divRename= document.getElementById("renameAddressTable");
		
		var i = 0;
		var table = document.getElementById("renameAddressTable");
		
	
		//var count = table.rows.length;
		//var rowProvId = "addProv" + count.toString();
		
		//var rowUserId = "addRegUser" ;
		//var rowPassId = "addRegPass" ;
		var newAdd = "<tr>";
			//newAdd += "<td width='85%' align='left'> Region: <select> <br/> <input type='password' size='25' id=" + rowPassId + "> Password</input> <br/><br/></td>";
			newAdd += "<td > Region: <select id ='selRegion'> <option> --Select Region-- </option> <option> Region 1 </option> <option> Region 7 </option> <option> Region 5 </option>  </td>";
			newAdd += "<td > Province: <select id = 'selProvince'> <option> --Select Province-- </option> <option> Cebu </option> <option> Isabela </option> <option> Bohol </option>  </td>";
			newAdd += "<td > Municipality / City: <select id = 'selMunicipalityCity'> <option> --Select Municipality / City-- </option> <option> Mandaue </option> <option> Tagbilaran </option> <option> Manila </option>  </td>";
			newAdd += "<td > Zip Code: <select id ='selZipCode'> <option> --Select Zip Code-- </option> <option> 6014 </option> <option> 6000 </option> <option> 0726 </option>  </td>";
			newAdd += "<td > Zip Code's new name: <input type = 'text' id ='changeZipCode'> </input></td>";
			//newAdd += "<td > Province: <select> <option> --Select Province-- </option> <option> Cebu </option> <option> Bohol </option> <option> Isabela </option> </td>";
			//newAdd += "<td > Municipality: <select> <option> --Select Municipality-- </option> <option> Mandaue </option> <option> Cebu </option> <option> Tagbilaran </option></td>";
			//newAdd += "<td > School: <select> <option> --Select School-- </option> <option> UPVCC </option> <option> CDU </option> <option> USC </option> </td>";
			newAdd += "<td > <input type = 'submit' value='SUBMIT' id='renameZip'> </input>";
			newAdd += "</tr>";
		my_divRename.innerHTML = newAdd;
		
}

function moveProv(){
		
		var my_divMove= document.getElementById("moveAddressTable");
		
		var i = 0;
		var table = document.getElementById("moveAddressTable");
		
	
		//var count = table.rows.length;
		//var rowProvId = "addProv" + count.toString();
		
		//var rowUserId = "addRegUser" ;
		//var rowPassId = "addRegPass" ;
		var newAdd = "<tr>";
			//newAdd += "<td width='85%' align='left'> Region: <select> <br/> <input type='password' size='25' id=" + rowPassId + "> Password</input> <br/><br/></td>";
			newAdd += "<td > From Region: <select id ='selFromRegion'> <option> --Select Region-- </option> <option> Region 1 </option> <option> Region 7 </option> <option> Region 5 </option>  </td>";
			newAdd += "<td > This Province: <select id = 'selThisProvince'> <option> --Select Province-- </option> <option> Cebu </option> <option> Isabela </option> <option> Bohol </option>  </td>";
			newAdd += "<td > Move To Region: <select id ='selToRegion'> <option> --Select Region-- </option> <option> Region 1 </option> <option> Region 7 </option> <option> Region 5 </option>  </td>";
			//newAdd += "<td > Province's new name: <input type = 'text'> </input></td>";
			//newAdd += "<td > Province: <select> <option> --Select Province-- </option> <option> Cebu </option> <option> Bohol </option> <option> Isabela </option> </td>";
			//newAdd += "<td > Municipality: <select> <option> --Select Municipality-- </option> <option> Mandaue </option> <option> Cebu </option> <option> Tagbilaran </option></td>";
			//newAdd += "<td > School: <select> <option> --Select School-- </option> <option> UPVCC </option> <option> CDU </option> <option> USC </option> </td>";
			newAdd += "<td > <input type = 'submit' value='SUBMIT' id='moveProv'> </input>";
			newAdd += "</tr>";
		my_divMove.innerHTML = newAdd;
		
}

function moveMun(){
		
		var my_divMove= document.getElementById("moveAddressTable");
		
		var i = 0;
		var table = document.getElementById("moveAddressTable");
		
	
		//var count = table.rows.length;
		//var rowProvId = "addProv" + count.toString();
		
		//var rowUserId = "addRegUser" ;
		//var rowPassId = "addRegPass" ;
		var newAdd = "<tr>";
			//newAdd += "<td width='85%' align='left'> Region: <select> <br/> <input type='password' size='25' id=" + rowPassId + "> Password</input> <br/><br/></td>";
			newAdd += "<td > From Region: <select id ='selFromRegion'> <option> --Select Region-- </option> <option> Region 1 </option> <option> Region 7 </option> <option> Region 5 </option>  </td>";
			newAdd += "<td > From Province: <select id = 'selFromProvince'> <option> --Select Province-- </option> <option> Cebu </option> <option> Isabela </option> <option> Bohol </option>  </td>";
			newAdd += "<td > This Municipality / City: <select id ='selThisMunicipalityCity'> <option> --Select Municipality / City-- </option> <option> Mandaue </option> <option> Tagbilaran </option> <option> Manila </option>  </td>";
			newAdd += "<td > Move To Region: <select id = 'selToRegion'> <option> --Select Region-- </option> <option> Region 1 </option> <option> Region 7 </option> <option> Region 5 </option>  </td>";
			newAdd += "<td > Move To Province: <select id ='selToProvince'> <option> --Select Province-- </option> <option> Cebu </option> <option> Isabela </option> <option> Bohol </option>  </td>";
			//newAdd += "<td > Municipality / City: <select> <option> --Select Municipality / City-- </option> <option> Mandaue </option> <option> Tagbilaran </option> <option> Manila </option>  </td>";			
			//newAdd += "<td > Province: <select> <option> --Select Province-- </option> <option> Cebu </option> <option> Bohol </option> <option> Isabela </option> </td>";
			//newAdd += "<td > Municipality: <select> <option> --Select Municipality-- </option> <option> Mandaue </option> <option> Cebu </option> <option> Tagbilaran </option></td>";
			//newAdd += "<td > School: <select> <option> --Select School-- </option> <option> UPVCC </option> <option> CDU </option> <option> USC </option> </td>";
			newAdd += "<td > <input type = 'submit' value='SUBMIT' id='moveMun'> </input>";
			newAdd += "</tr>";
		my_divMove.innerHTML = newAdd;
		
}

function moveZip(){
		
		var my_divMove= document.getElementById("moveAddressTable");
		
		var i = 0;
		var table = document.getElementById("moveAddressTable");
		
		var newAdd = "<tr>";
			newAdd += "<td > From Region: <select id ='selFromRegion'> <option> --Select Region-- </option> <option> Region 1 </option> <option> Region 7 </option> <option> Region 5 </option> </select> </td>";
			newAdd += "<td > From Province: <select id ='selFromProvince'> <option> --Select Province-- </option> <option> Cebu </option> <option> Isabela </option> <option> Bohol </option> </select> </td>";
			newAdd += "<td > From Municipality / City: <select id ='selFromMunicipalityCity'> <option> --Select Municipality / City-- </option> <option> Mandaue </option> <option> Tagbilaran </option> <option> Manila </option> </select>  </td>";
			newAdd += "<td > This Zip Code: <select id = 'selThisZipCode'> <option> --Select Zip Code-- </option> <option> 6014 </option> <option> 6000 </option> <option> 0726 </option> </select> </td> ";
			newAdd += "</tr>";
			newAdd += "<tr>";
			newAdd += "<td > Move To Region: <select id =''selToRegion> <option> --Select Region-- </option> <option> Region 1 </option> <option> Region 7 </option> <option> Region 5 </option> </select> </td>";
			newAdd += "<td > Move To Province: <select id='selToProvince'> <option> --Select Province-- </option> <option> Cebu </option> <option> Isabela </option> <option> Bohol </option> </select>  </td>";
			newAdd += "<td > Move To Municipality / City: <select id = 'selToMunicipality'> <option> --Select Municipality / City-- </option> <option> Mandaue </option> <option> Tagbilaran </option> <option> Manila </option> </select> </td>";
			newAdd += "<td align = 'center' > <input type = 'submit' value='SUBMIT' id='moveZip'> </input>";
			newAdd += "</tr>";
	
		my_divMove.innerHTML = newAdd;
		
}

function mergeRegion(){
		
		var my_divMerge= document.getElementById("mergeAddressTable");
		
		var i = 0;
		var table = document.getElementById("mergeAddressTable");
		
	
		//var count = table.rows.length;
		//var rowProvId = "addProv" + count.toString();
		
		//var rowUserId = "addRegUser" ;
		//var rowPassId = "addRegPass" ;
		var newAdd = "<tr>";
			//newAdd += "<td width='85%' align='left'> Region: <select> <br/> <input type='password' size='25' id=" + rowPassId + "> Password</input> <br/><br/></td>";
			newAdd += "<td > This Region: <select id ='selThisRegion'> <option> --Select Region-- </option> <option> Region 1 </option> <option> Region 7 </option> <option> Region 5 </option>  </td>";
			newAdd += "<td > Merge With Region: <select id ='selWithThisRegion'> <option> --Select Region-- </option> <option> Region 1 </option> <option> Region 7 </option> <option> Region 5 </option>  </td>";
			//newAdd += "<td > Merge With This Region: <input type = 'text'> </input></td>";
			//newAdd += "<td > Province: <select> <option> --Select Province-- </option> <option> Cebu </option> <option> Bohol </option> <option> Isabela </option> </td>";
			//newAdd += "<td > Municipality: <select> <option> --Select Municipality-- </option> <option> Mandaue </option> <option> Cebu </option> <option> Tagbilaran </option></td>";
			//newAdd += "<td > School: <select> <option> --Select School-- </option> <option> UPVCC </option> <option> CDU </option> <option> USC </option> </td>";
			newAdd += "<td > <input type = 'submit' value='SUBMIT' id='mergeReg'> </input>";
			newAdd += "</tr>";
		my_divMerge.innerHTML = newAdd;
		
}

function mergeProv(){
		
		var my_divMerge= document.getElementById("mergeAddressTable");
		
		var i = 0;
		var table = document.getElementById("mergeAddressTable");
		
	
		//var count = table.rows.length;
		//var rowProvId = "addProv" + count.toString();
		
		//var rowUserId = "addRegUser" ;
		//var rowPassId = "addRegPass" ;
		var newAdd = "<tr>";
			//newAdd += "<td width='85%' align='left'> Region: <select> <br/> <input type='password' size='25' id=" + rowPassId + "> Password</input> <br/><br/></td>";
			newAdd += "<td > Region: <select id ='selFromRegion'> <option> --Select Region-- </option> <option> Region 1 </option> <option> Region 7 </option> <option> Region 5 </option>  </td>";
			newAdd += "<td > This Province: <select id = 'selThisProvince'> <option> --Select Province-- </option> <option> Cebu </option> <option> Isabela </option> <option> Bohol </option>  </td>";
			newAdd += "<td > Region: <select id ='selWithRegion'> <option> --Select Region-- </option> <option> Region 1 </option> <option> Region 7 </option> <option> Region 5 </option>  </td>";
			newAdd += "<td > Merge With This Province: <select id ='selWithThisProvince'> <option> --Select Province-- </option> <option> Cebu </option> <option> Isabela </option> <option> Bohol </option>  </td>";
			
			//newAdd += "<td > Province's new name: <input type = 'text'> </input></td>";
			//newAdd += "<td > Province: <select> <option> --Select Province-- </option> <option> Cebu </option> <option> Bohol </option> <option> Isabela </option> </td>";
			//newAdd += "<td > Municipality: <select> <option> --Select Municipality-- </option> <option> Mandaue </option> <option> Cebu </option> <option> Tagbilaran </option></td>";
			//newAdd += "<td > School: <select> <option> --Select School-- </option> <option> UPVCC </option> <option> CDU </option> <option> USC </option> </td>";
			newAdd += "<td > <input type = 'submit' value='SUBMIT' id='mergeProv'> </input>";
			newAdd += "</tr>";
		my_divMerge.innerHTML = newAdd;
		
}

function mergeMun(){
		
		var my_divMerge= document.getElementById("mergeAddressTable");
		
		var i = 0;
		var table = document.getElementById("mergeAddressTable");
		
	
		//var count = table.rows.length;
		//var rowProvId = "addProv" + count.toString();
		
		//var rowUserId = "addRegUser" ;
		//var rowPassId = "addRegPass" ;
		var newAdd = "<tr>";
			//newAdd += "<td width='85%' align='left'> Region: <select> <br/> <input type='password' size='25' id=" + rowPassId + "> Password</input> <br/><br/></td>";
			newAdd += "<td > Region: <select id = 'selFromRegion'> <option> --Select Region-- </option> <option> Region 1 </option> <option> Region 7 </option> <option> Region 5 </option>  </td>";
			newAdd += "<td > Province: <select id ='selFromProvince'> <option> --Select Province-- </option> <option> Cebu </option> <option> Isabela </option> <option> Bohol </option>  </td>";
			newAdd += "<td > This Municipality / City: <select id = 'selThisMunicipalityCity'> <option> --Select Municipality / City-- </option> <option> Mandaue </option> <option> Tagbilaran </option> <option> Manila </option>  </td>";
			newAdd += "</tr>";
			newAdd += "<tr>";
			newAdd += "<td > Region: <select id ='selWithRegion'> <option> --Select Region-- </option> <option> Region 1 </option> <option> Region 7 </option> <option> Region 5 </option>  </td>";
			newAdd += "<td > Province: <select id = 'selWithProvince'> <option> --Select Province-- </option> <option> Cebu </option> <option> Isabela </option> <option> Bohol </option>  </td>";
			newAdd += "<td >  Merge With This Municipality / City: <select id ='selWithThisMunicipalityCity'> <option> --Select Municipality / City-- </option> <option> Mandaue </option> <option> Tagbilaran </option> <option> Manila </option>  </td>";
			newAdd += "<td > <input type = 'submit' value='SUBMIT' id='mergeMun'> </input>";
			newAdd += "</tr>";
		my_divMerge.innerHTML = newAdd;
		
}

















