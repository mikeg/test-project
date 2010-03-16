<?php
## function for mysql queries

function insertstudents($Student_ID, $First_Name, $Last_Name, $Year, $Middle_Name, $Sex, $Street_Brgy, $Address_ID, $Citizenship, $Email_Address, $Telephone, $Mobile_Number, $Marital_Status, $Birth_Date, $Birth_Place, $Birth_Place_Add_id, $Spouse, $Spouse_Citizenship, $Father, $Father_Citizenship, $Mother, $Mother_Citizenship, $Convicted, $Created_By, $Created_Date, $Modified_By, $Last_Modified){

##insert students query
$sql = "INSERT INTO `students` (`Student_ID`, `First_Name`, `Last_Name`, `Year`, `Middle_Name`, `Sex`, `Street_Brgy`, `Address_ID`, `Citizenship`, `Email_Address`, `Telephone`, `Mobile_Number`, `Marital_Status`, `Birth_Date`, `Birth_Place`, `Birth_Place_Add_id`, `Spouse`, `Spouse_Citizenship`, `Father`, `Father_Citizenship`, `Mother`, `Mother_Citizenship`, `Convicted`, `Created_By`, `Created_Date`, `Modified_By`, `Last_Modified`) VALUES ($Student_ID, $First_Name, $Last_Name, $Year, $Middle_Name, $Sex, $Street_Brgy, $Address_ID, $Citizenship, $Email_Address, $Telephone, $Mobile_Number, $Marital_Status, $Birth_Date, $Birth_Place, $Birth_Place_Add_id, $Spouse, $Spouse_Citizenship, $Father, $Father_Citizenship, $Mother, $Mother_Citizenship, $Convicted, $Created_By, $Created_Date, $Modified_By, $Last_Modified);";
	
	if (@mysql_query($sql)) {
	echo '<p>table inserted</p>';
	} else {
	exit('<p>Error inserting data in students table </p>' .
	mysql_error() . '</p>');
	}

}

##insert address; 
function insertaddress($Address_ID, $Region, $Province, $City_Town, $Zip_Code, $Rurban_Code){
	$sql= "INSERT INTO `addresses` (`Address_ID`, `Region`, `Province`, `City_Town`, `Zip_Code`, `Rurban_Code`) VALUES ('$Address_ID', '$Region', '$Province', '$City_Town', '$Zip_Code', '$Rurban_Code');";
		
	if (@mysql_query($sql)) {
	echo '<p>table inserted</p>';
	} else {
	exit('<p>Error inserting data in address table </p>' .
	mysql_error() . '</p>');
	}
}

function  insertschool($School_Name, $Street_Brgy, $Address_ID, $PRC_School_Code, $Has_CHED, $Created_Date, $Created_By, $Last_Modified, $Modified_By, $Is_Active){
	$sql = 	"INSERT INTO `schools` (`School_Name`, `Street_Brgy`, `Address_ID`, `PRC_School_Code`, `Has_CHED`, `Created_Date`, `Created_By`, `Last_Modified`, `Modified_By`, `Is_Active`) VALUES ('$School_Name', '$Street_Brgy', '$Address_ID', '$PRC_School_Code', '$Has_CHED', '$Created_Date', '$Created_By', '$Last_Modified', '$Modified_By', '$Is_Active');";
	echo $sql;
	if (@mysql_query($sql)) {
	echo '<p>table inserted</p>';
	return true;
	} else {
	exit('<p>Error inserting data in address table </p>' .
	mysql_error() . '</p>');
	return false;
	}
}
?>