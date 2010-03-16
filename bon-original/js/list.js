function add_option(selectbox, value, text)
{
	var option = document.createElement("OPTION");
	option.text = text;
	option.value = value;
	
	selectbox.options.add(option);
}

function remove_options(selectbox)
{
	var i;
	for(i=selectbox.options.length-1;i>=0;i--)
	{
		//selectbox.options.remove(i);
		selectbox.remove(i);
	}
}

function fill_region(){
	// this function will fill the region in the school list
	add_option(document.drop_list.selRegion, "Region 1", "Region 1", "");
	add_option(document.drop_list.selRegion, "Region 2", "Region 2", "");
	add_option(document.drop_list.selRegion, "Region 2", "Region 3", "");
}

function select_province()
{
	remove_options(document.drop_list.selProvince);
	add_option(document.drop_list.selProvince, "", "Province", "");
	
	if(document.drop_list.selRegion.value == "Region 1")
	{
		add_option(document.drop_list.selProvince, "Province 1A", "Province 1A");
		add_option(document.drop_list.selProvince, "Province 1B", "Province 1B");
		add_option(document.drop_list.selProvince, "Province 1C", "Province 1C");
	}
	
	if(document.drop_list.selRegion.value == "Region 2")
	{
		add_option(document.drop_list.selProvince, "Province 2A", "Province 2A");
		add_option(document.drop_list.selProvince, "Province 2B", "Province 2B");
		add_option(document.drop_list.selProvince, "Province 2C", "Province 2C");
	}
	
	if(document.drop_list.selRegion.value == "Region 3")
	{
		add_option(document.drop_list.selProvince, "Province 3A", "Province 3A");
		add_option(document.drop_list.selProvince, "Province 3B", "Province 3B");
		add_option(document.drop_list.selProvince, "Province 3C", "Province 3C");
	}
}

function select_city()
{
	remove_options(document.drop_list.selMunicipalityCity);
	add_option(document.drop_list.selMunicipalityCity, "", "City", "");
	
	if(document.drop_list.selProvince.value == "Province 1A")
	{
		add_option(document.drop_list.selMunicipalityCity, "City 1Aa", "City 1Aa");
		add_option(document.drop_list.selMunicipalityCity, "City 1Ab", "City 1Ab");
		add_option(document.drop_list.selMunicipalityCity, "City 1Ac", "City 1Ac");
	}
	
	if(document.drop_list.selProvince.value == "Province 1B")
	{
		add_option(document.drop_list.selMunicipalityCity, "City 1Ba", "City 1Ba");
		add_option(document.drop_list.selMunicipalityCity, "City 1Bb", "City 1Bb");
		add_option(document.drop_list.selMunicipalityCity, "City 1Bc", "City 1Bc");
	}
	
	if(document.drop_list.selProvince.value == "Province 1C")
	{
		add_option(document.drop_list.selMunicipalityCity, "City 1Ca", "City 1Ca");
		add_option(document.drop_list.selMunicipalityCity, "City 1Cb", "City 1Cb");
		add_option(document.drop_list.selMunicipalityCity, "City 1Cc", "City 1Cc");
	}
	
	if(document.drop_list.selProvince.value == "Province 2A")
	{
		add_option(document.drop_list.selMunicipalityCity, "City 2Aa", "City 2Aa");
		add_option(document.drop_list.selMunicipalityCity, "City 2Ab", "City 2Ab");
		add_option(document.drop_list.selMunicipalityCity, "City 2Ac", "City 2Ac");
	}
	
	if(document.drop_list.selProvince.value == "Province 2B")
	{
		add_option(document.drop_list.selMunicipalityCity, "City 2Ba", "City 2Ba");
		add_option(document.drop_list.selMunicipalityCity, "City 2Bb", "City 2Bb");
		add_option(document.drop_list.selMunicipalityCity, "City 2Bc", "City 2Bc");
	}
	
	if(document.drop_list.selProvince.value == "Province 2C")
	{
		add_option(document.drop_list.selMunicipalityCity, "City 2Ca", "City 2Ca");
		add_option(document.drop_list.selMunicipalityCity, "City 2Cb", "City 2Cb");
		add_option(document.drop_list.selMunicipalityCity, "City 2Cc", "City 2Cc");
	}
	
	if(document.drop_list.selProvince.value == "Province 3A")
	{
		add_option(document.drop_list.selMunicipalityCity, "City 3Aa", "City 3Aa");
		add_option(document.drop_list.selMunicipalityCity, "City 3Ab", "City 3Ab");
		add_option(document.drop_list.selMunicipalityCity, "City 3Ac", "City 3Ac");
	}
	
	if(document.drop_list.selProvince.value == "Province 3B")
	{
		add_option(document.drop_list.selMunicipalityCity, "City 3Ba", "City 3Ba");
		add_option(document.drop_list.selMunicipalityCity, "City 3Bb", "City 3Bb");
		add_option(document.drop_list.selMunicipalityCity, "City 3Bc", "City 3Bc");
	}
	
	if(document.drop_list.selProvince.value == "Province 3C")
	{
		add_option(document.drop_list.selMunicipalityCity, "City 3Ca", "City 3Ca");
		add_option(document.drop_list.selMunicipalityCity, "City 3Cb", "City 3Cb");
		add_option(document.drop_list.selMunicipalityCity, "City 3Cc", "City 3Cc");
	}
}

function select_zipcode()
{
	remove_options(document.drop_list.ZipCode);
	add_option(document.drop_list.ZipCode, "", "Zipcode", "");
	
	if(document.drop_list.selMunicipalityCity.value == "City 1Aa")
	{
		add_option(document.drop_list.ZipCode, "Code 1Aa1", "Code 1Aa1");
		add_option(document.drop_list.ZipCode, "Code 1Aa2", "Code 1Aa2");
		add_option(document.drop_list.ZipCode, "Code 1Aa3", "Code 1Aa3");
	}
	
	if(document.drop_list.selMunicipalityCity.value == "City 1Ab")
	{
		add_option(document.drop_list.ZipCode, "Code 1Ab1", "Code 1Ab1");
		add_option(document.drop_list.ZipCode, "Code 1Ab2", "Code 1Ab2");
		add_option(document.drop_list.ZipCode, "Code 1Ab3", "Code 1Ab3");
	}
	
	if(document.drop_list.selMunicipalityCity.value == "City 1Ac")
	{
		add_option(document.drop_list.ZipCode, "Code 1Ac1", "Code 1Ac1");
		add_option(document.drop_list.ZipCode, "Code 1Ac2", "Code 1Ac2");
		add_option(document.drop_list.ZipCode, "Code 1Ac3", "Code 1Ac3");
	}
	
	if(document.drop_list.selMunicipalityCity.value == "City 1Ba")
	{
		add_option(document.drop_list.ZipCode, "Code 1Ba1", "Code 1Ba1");
		add_option(document.drop_list.ZipCode, "Code 1Ba2", "Code 1Ba2");
		add_option(document.drop_list.ZipCode, "Code 1Ba3", "Code 1Ba3");
	}
	
	if(document.drop_list.selMunicipalityCity.value == "City 1Bb")
	{
		add_option(document.drop_list.ZipCode, "Code 1Bb1", "Code 1Bb1");
		add_option(document.drop_list.ZipCode, "Code 1Bb2", "Code 1Bb2");
		add_option(document.drop_list.ZipCode, "Code 1Bb3", "Code 1Bb3");
	}
	
	if(document.drop_list.selMunicipalityCity.value == "City 1Bc")
	{
		add_option(document.drop_list.ZipCode, "Code 1Bc1", "Code 1Bc1");
		add_option(document.drop_list.ZipCode, "Code 1Bc2", "Code 1Bc2");
		add_option(document.drop_list.ZipCode, "Code 1Bc3", "Code 1Bc3");
	}
	
	if(document.drop_list.selMunicipalityCity.value == "City 1Ca")
	{
		add_option(document.drop_list.ZipCode, "Code 1Ca1", "Code 1Ca1");
		add_option(document.drop_list.ZipCode, "Code 1Ca2", "Code 1Ca2");
		add_option(document.drop_list.ZipCode, "Code 1Ca3", "Code 1Ca3");
	}
	
	if(document.drop_list.selMunicipalityCity.value == "City 1Cb")
	{
		add_option(document.drop_list.ZipCode, "Code 1Cb1", "Code 1Cb1");
		add_option(document.drop_list.ZipCode, "Code 1Cb2", "Code 1Cb2");
		add_option(document.drop_list.ZipCode, "Code 1Cb3", "Code 1Cb3");
	}
	
	if(document.drop_list.selMunicipalityCity.value == "City 1Cc")
	{
		add_option(document.drop_list.ZipCode, "Code 1Cc1", "Code 1Cc1");
		add_option(document.drop_list.ZipCode, "Code 1Cc2", "Code 1Cc2");
		add_option(document.drop_list.ZipCode, "Code 1Cc3", "Code 1Cc3");
	}
	
	if(document.drop_list.selMunicipalityCity.value == "City 2Aa")
	{
		add_option(document.drop_list.ZipCode, "Code 2Aa1", "Code 2Aa1");
		add_option(document.drop_list.ZipCode, "Code 2Aa2", "Code 2Aa2");
		add_option(document.drop_list.ZipCode, "Code 2Aa3", "Code 2Aa3");
	}
	
	if(document.drop_list.selMunicipalityCity.value == "City 2Ab")
	{
		add_option(document.drop_list.ZipCode, "Code 2Ab1", "Code 2Ab1");
		add_option(document.drop_list.ZipCode, "Code 2Ab2", "Code 2Ab2");
		add_option(document.drop_list.ZipCode, "Code 2Ab3", "Code 2Ab3");
	}
	
	if(document.drop_list.selMunicipalityCity.value == "City 2Ac")
	{
		add_option(document.drop_list.ZipCode, "Code 2Ac1", "Code 2Ac1");
		add_option(document.drop_list.ZipCode, "Code 2Ac2", "Code 2Ac2");
		add_option(document.drop_list.ZipCode, "Code 2Ac3", "Code 2Ac3");
	}
	
	if(document.drop_list.selMunicipalityCity.value == "City 2Ba")
	{
		add_option(document.drop_list.ZipCode, "Code 2Ba1", "Code 2Ba1");
		add_option(document.drop_list.ZipCode, "Code 2Ba2", "Code 2Ba2");
		add_option(document.drop_list.ZipCode, "Code 2Ba3", "Code 2Ba3");
	}
	
	if(document.drop_list.selMunicipalityCity.value == "City 2Bb")
	{
		add_option(document.drop_list.ZipCode, "Code 2Bb1", "Code 2Bb1");
		add_option(document.drop_list.ZipCode, "Code 2Bb2", "Code 2Bb2");
		add_option(document.drop_list.ZipCode, "Code 2Bb3", "Code 2Bb3");
	}
	
	if(document.drop_list.selMunicipalityCity.value == "City 2Bc")
	{
		add_option(document.drop_list.ZipCode, "Code 2Bc1", "Code 2Bc1");
		add_option(document.drop_list.ZipCode, "Code 2Bc2", "Code 2Bc2");
		add_option(document.drop_list.ZipCode, "Code 2Bc3", "Code 2Bc3");
	}
	
	if(document.drop_list.selMunicipalityCity.value == "City 2Ca")
	{
		add_option(document.drop_list.ZipCode, "Code 2Ca1", "Code 2Ca1");
		add_option(document.drop_list.ZipCode, "Code 2Ca2", "Code 2Ca2");
		add_option(document.drop_list.ZipCode, "Code 2Ca3", "Code 2Ca3");
	}
	
	if(document.drop_list.selMunicipalityCity.value == "City 2Cb")
	{
		add_option(document.drop_list.ZipCode, "Code 2Cb1", "Code 2Cb1");
		add_option(document.drop_list.ZipCode, "Code 2Cb2", "Code 2Cb2");
		add_option(document.drop_list.ZipCode, "Code 2Cb3", "Code 2Cb3");
	}
	
	if(document.drop_list.selMunicipalityCity.value == "City 2Cc")
	{
		add_option(document.drop_list.ZipCode, "Code 2Cc1", "Code 2Cc1");
		add_option(document.drop_list.ZipCode, "Code 2Cc2", "Code 2Cc2");
		add_option(document.drop_list.ZipCode, "Code 2Cc3", "Code 2Cc3");
	}
	
	if(document.drop_list.selMunicipalityCity.value == "City 3Aa")
	{
		add_option(document.drop_list.ZipCode, "Code 3Aa1", "Code 3Aa1");
		add_option(document.drop_list.ZipCode, "Code 3Aa2", "Code 3Aa2");
		add_option(document.drop_list.ZipCode, "Code 3Aa3", "Code 3Aa3");
	}
	
	if(document.drop_list.selMunicipalityCity.value == "City 3Ab")
	{
		add_option(document.drop_list.ZipCode, "Code 3Ab1", "Code 3Ab1");
		add_option(document.drop_list.ZipCode, "Code 3Ab2", "Code 3Ab2");
		add_option(document.drop_list.ZipCode, "Code 3Ab3", "Code 3Ab3");
	}
	
	if(document.drop_list.selMunicipalityCity.value == "City 3Ac")
	{
		add_option(document.drop_list.ZipCode, "Code 3Ac1", "Code 3Ac1");
		add_option(document.drop_list.ZipCode, "Code 3Ac2", "Code 3Ac2");
		add_option(document.drop_list.ZipCode, "Code 3Ac3", "Code 3Ac3");
	}
	
	if(document.drop_list.selMunicipalityCity.value == "City 3Ba")
	{
		add_option(document.drop_list.ZipCode, "Code 3Ba1", "Code 3Ba1");
		add_option(document.drop_list.ZipCode, "Code 3Ba2", "Code 3Ba2");
		add_option(document.drop_list.ZipCode, "Code 3Ba3", "Code 3Ba3");
	}
	
	if(document.drop_list.selMunicipalityCity.value == "City 3Bb")
	{
		add_option(document.drop_list.ZipCode, "Code 3Bb1", "Code 3Bb1");
		add_option(document.drop_list.ZipCode, "Code 3Bb2", "Code 3Bb2");
		add_option(document.drop_list.ZipCode, "Code 3Bb3", "Code 3Bb3");
	}
	
	if(document.drop_list.selMunicipalityCity.value == "City 3Bc")
	{
		add_option(document.drop_list.ZipCode, "Code 3Bc1", "Code 3Bc1");
		add_option(document.drop_list.ZipCode, "Code 3Bc2", "Code 3Bc2");
		add_option(document.drop_list.ZipCode, "Code 3Bc3", "Code 3Bc3");
	}
	
	if(document.drop_list.selMunicipalityCity.value == "City 3Ca")
	{
		add_option(document.drop_list.ZipCode, "Code 3Ca1", "Code 3Ca1");
		add_option(document.drop_list.ZipCode, "Code 3Ca2", "Code 3Ca2");
		add_option(document.drop_list.ZipCode, "Code 3Ca3", "Code 3Ca3");
	}
	
	if(document.drop_list.selMunicipalityCity.value == "City 3Cb")
	{
		add_option(document.drop_list.ZipCode, "Code 3Cb1", "Code 3Cb1");
		add_option(document.drop_list.ZipCode, "Code 3Cb2", "Code 3Cb2");
		add_option(document.drop_list.ZipCode, "Code 3Cb3", "Code 3Cb3");
	}
	
	if(document.drop_list.selMunicipalityCity.value == "City 3Cc")
	{
		add_option(document.drop_list.ZipCode, "Code 3Cc1", "Code 3Cc1");
		add_option(document.drop_list.ZipCode, "Code 3Cc2", "Code 3Cc2");
		add_option(document.drop_list.ZipCode, "Code 3Cc3", "Code 3Cc3");
	}
}
