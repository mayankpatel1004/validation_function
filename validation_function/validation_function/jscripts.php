<html>
<head>
<title>Javascript Example</title>
<script type="text/javascript">
function sb()
{
	var reason ="";
	reason += fname();
	reason += lname();
	reason += lang();
	reason += radiobutton();
	reason += cntry();
	
	if(reason !="")
	{
		return false;
	}
	return true;
}
function fname()
{
	var error ="";
	var input = document.getElementById('gfnm').value;
	if(input == "")
	{
		error = document.getElementById('nm').innerHTML ="Enter Name Here";
		return error;
	}
	else if(!isNaN(input))
	{
		error = document.getElementById('nm').innerHTML ="Enter Char Only";
		return error;
	}
	else
	{
		error = document.getElementById('nm').innerHTML ="";
		return error;
	}
}

function lname()
{
	var error ="";
	var input = document.getElementById('glnm').value;
	if(input == "")
	{
		error = document.getElementById('lnm').innerHTML ="Enter Last Name Here";
		return error;
	}
	else if(!isNaN(input))
	{
		error = document.getElementById('lnm').innerHTML ="Enter Char Only";
		return error;
	}
	else
	{
		error = document.getElementById('lnm').innerHTML ="";
		return error;
	}	
}
function lang()
{
	var error ="";
	if(!document.getElementById('lan1').checked && !document.getElementById('lan2').checked)
	{
		
		error=document.getElementById('rlanguage').innerHTML="Select at least one language";
		return error;
	}
	else
	{
		error=document.getElementById('rlanguage').innerHTML="";
		return true;
	}
}
function radiobutton()
{
	var error="";
	var c=0;
	for(var i=0;i<document.form1.gender.length;i++)
	{
		if(document.form1.gender[i].checked)
		{
			c=1;
		document.getElementById('rradio').innerHTML="";
		return true;
		}
	}
	if(c==0)
	{
		document.getElementById('rradio').innerHTML="select gender";
		return false;
	}
	return true;
}
function cntry()
{
	var error="";
	if(document.form1.cntry.selectedIndex == 0)
	{
		error=document.getElementById('rcountry').innerHTML="please select country";
		return error;
	}
	else
	{
		document.getElementById('rcountry').innerHTML=" ";
		return true;
	}
}
</script>
</head>
<body>
	<form name="form1" action="" method="post" onSubmit="return sb()" >
	<table align="center" border="1">
		<tr>
			<td>First Name</td>
			<td><input type="text" id="gfnm" /><label id="nm" ></label></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><input type="text" id="glnm" /><label id="lnm" ></label></td>
		</tr>
		<tr>
			<td>Select Language</td>
			<td><input type="checkbox" id="lan1" value="english">English
			<input type="checkbox" id="lan2" value="gujarati">Gujarati
			<label id='rlanguage'></label></td>
		</tr>
		<tr>
			<td>Select Gander</td>
			<td><input type="radio" name="gender" id="radio" value="male">Male
			<input type="radio" name="gender" id="radio" value="female">Female
			<label id="rradio"></td>
		</tr>
		<tr>
			<td>select country</td>
			<td><select name="cntry" id="gcountry">
			<option selected="selected">select country</option>
			<option>India</option>
			<option>USA</option>
			<option>UK</option>
			</select>
			<label id='rcountry'></label></td>
		</tr>
		
		<tr>
			<td align="center" colspan="2"><input type="submit" name="btnSubmit" value="submit" /></td>
		</tr>
	</table>
	</form>
</body>
</html>