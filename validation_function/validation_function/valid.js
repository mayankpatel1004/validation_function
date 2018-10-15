function validate()
{
	var reason ="";
	reason += first_name();
	reason += middle_name();
	reason += last_name();
	reason += address();
	reason += phone_number();
	reason += email();
	reason += password();
	reason += confirm_password();
	reason += continent();
	reason += country();
	reason += state();
	reason += url();
	//reason += select_multiple();
	reason += year();
	reason += month();
	reason += day();
	reason += industry_type();
	reason += file_type();
	
	if(reason !="")
	{
		return false;
	}
	return true;
}

function first_name()
{
	var error ="";
	var input = document.frm_register.first_name.value;
	if(input == "")
	{
		error = document.getElementById('display_firstname_error').innerHTML ="Enter First Name Here";
		
		return error;
	}
	else if(!isNaN(input))
	{
		error = document.getElementById('display_firstname_error').innerHTML ="Enter Char Only";
		return error;
	}
	else
	{
		error = document.getElementById('display_firstname_error').innerHTML ="";
		return error;
	}
}
function middle_name()
{
	var error ="";
	var input = document.frm_register.middle_name.value;
	if(input == "")
	{
		error = document.getElementById('display_middlename_error').innerHTML ="Enter Middle Name Here";
		return error;
	}
	else if(!isNaN(input))
	{
		error = document.getElementById('display_middlename_error').innerHTML ="Enter Char Only";
		return error;
	}
	else
	{
		error = document.getElementById('display_middlename_error').innerHTML ="";
		return error;
	}
}
function last_name()
{
	var error ="";
	var input = document.getElementById('getlastname').value;
	if(input == "")
	{
		error = document.getElementById('display_lastname_error').innerHTML ="Enter Last Name Here";
		return error;
	}
	else if(!isNaN(input))
	{
		error = document.getElementById('display_lastname_error').innerHTML ="Enter Char Only";
		return error;
	}
	else
	{
		error = document.getElementById('display_lastname_error').innerHTML ="";
		return error;
	}
}
function address()
{
	var error = "";
	var input = document.frm_register.address.value.length;
	if(input==0)
	{
		error = document.getElementById('display_address_error').innerHTML ="Enter your Address";
		return error;
	}
	else
	{
		error = document.getElementById('display_address_error').innerHTML ="";
		return error;
	}
}
function phone_number()
{
	var error ="";
	var input = document.frm_register.phone_number.value;
	if(input == "")
	{
		error = document.getElementById('display_phonenumber_error').innerHTML ="Enter Your Phone Number";
		return error;
	}
	else if(isNaN(input))
	{
		error = document.getElementById('display_phonenumber_error').innerHTML ="Enter Numbers Only";
		return error;
	}
	else
	{
		error = document.getElementById('display_phonenumber_error').innerHTML ="";
		return error;
	}
}
function email()
{
	var error ="";
	var input = document.frm_register.email.value;
	if(input == "")
	{
		error = document.getElementById('display_email_error').innerHTML ="Enter Your Email ID";
		return error;
	}
	else if(isNaN(input))
	{
		error = document.getElementById('display_email_error').innerHTML ="Enter Valid Email Address";
		return error;
	}
	else
	{
		error = document.getElementById('display_email_error').innerHTML ="";
		return error;
	}
}
function password()
{
    var error = "";
    var illegalChars = /[\W_]/; // allow only letters and numbers 
 	var input=document.frm_register.password.value;
    if (input == "")
	{
		error = document.getElementById('display_password_error').innerHTML ="Enter Password";
    }
	else if ((input.length < 7) || (input.length > 15))
	{
		error = document.getElementById('display_password_error').innerHTML ="Enter Min 7 characters &max 15";
    }
	else if (illegalChars.test(input)) 
	{
		error = document.getElementById('display_password_error').innerHTML ="Illegal characters are not allow in password";
    }
	else if (!((input.search(/(a-z)+/)) && (input.search(/(0-9)+/)))) 
	{
        error = document.getElementById('display_password_error').innerHTML ="Please enter atleast one numeric";
    }
	return error;
}
function confirm_password()
{
	var error = "";
	var inputc=document.frm_register.cpassword.value;
	if(inputc =='')
	{
		error = document.getElementById('display_cpassword_error').innerHTML ="Please enter confirm password";
		return error;
	}
	else if(document.frm_register.cpassword.value != document.frm_register.password.value)
	{
		error = document.getElementById('display_cpassword_error').innerHTML ="password mismatch";
		return error;
	}
}
function continent()
{
	var error = "";
	if(document.frm_register.continent.selectedIndex == 0)
	{
		error=document.getElementById('display_continent_error').innerHTML="Please Select Continent";
	}
	else
	{
		error=document.getElementById('display_continent_error').innerHTML="";
	}
	return error;
}
function country()
{
	var error = "";
	if(document.frm_register.country.selectedIndex == 0)
	{
		error=document.getElementById('display_country_error').innerHTML="Please Select Country";
	}
	else
	{
		error=document.getElementById('display_conuntry_error').innerHTML="";
	}
	return error;
}
function state()
{
	var error = "";
	if(document.frm_register.state.selectedIndex == 0)
	{
		error=document.getElementById('display_state_error').innerHTML="Please Select State";
	}
	else
	{
		error=document.getElementById('display_State_error').innerHTML="";
	}
	return error;
}
function url()
{
	var error ="";
	var input = document.frm_register.url.value;
	if(input == "")
	{
		error = document.getElementById('display_url_error').innerHTML ="Enter URL";
		return error;
	}
	else
	{
		error = document.getElementById('display_url_error').innerHTML ="";
		return error;
	}
}
/*function select_multiple()
{
	
	var error = "";
	var input=document.getElementsById('games').value.length;
		alert(input);return false;
	if(input=='')
	{
		error=document.getElementById('display_game_error').innerHTML="Please Select Games";
		return error;
	}
	else
	{
		error=document.getElementById('display_game_error').innerHTML="";
		return error;
	}
}*/
function year()
{
	var error = "";
	if(document.frm_register.year.selectedIndex == 0)
	{
		error=document.getElementById('display_year_error').innerHTML="Please Select Year of Date";
	}
	else
	{
		error=document.getElementById('display_year_error').innerHTML="";
	}
	return error;
}
function month()
{
	var error = "";
	if(document.frm_register.month.selectedIndex == 0)
	{
		error=document.getElementById('display_month_error').innerHTML="Please Select month of Date";
	}
	else
	{
		error=document.getElementById('display_month_error').innerHTML="";
	}
	return error;
}
function day()
{
	var error = "";
	if(document.frm_register.day.selectedIndex == 0)
	{
		error=document.getElementById('display_day_error').innerHTML="Please Select day of Date";
	}
	else
	{
		error=document.getElementById('display_day_error').innerHTML="";
	}
	return error;
}
function industry_type()
{
	var error = "";
	if(document.frm_register.i_type.selectedIndex == 0)
	{
		error=document.getElementById('display_itype_error').innerHTML="Please Select Industry";
	}
	else
	{
		error=document.getElementById('display_itype_error').innerHTML="";
	}
	return error;
}
function file_type()
{
	var error ="";
	var input = document.frm_register.image.value;
	if(input == "")
	{
		error = document.getElementById('display_file_error').innerHTML ="Select Image";
		return error;
	}
	else
	{
		error = document.getElementById('display_file_error').innerHTML ="";
		return error;
	}
}
