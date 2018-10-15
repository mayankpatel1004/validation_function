<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registration Form</title>
<script type="text/javascript" language="javascript" src="valid.js"></script>
</head>

<body>
<form action="" name="frm_register" method="post" onsubmit="return validate();">
	<table align="center" border="0" cellpadding="0" cellspacing="0" width="40%">
		<tr>
			<td>First Name<font color="#FF0000">*</font></td>
			<td><input type="text" name="first_name" id="getfirstname"/><label id="display_firstname_error"></label></td>
		</tr>
		<tr height="10"><td></td></tr>
		
		<tr>
			<td>Middle Name<font color="#FF0000">*</font></td>
			<td><input type="text" name="middle_name" id="getmiddlename" /><label id="display_middlename_error"></label></td>
		</tr>
		<tr height="10"><td></td></tr>
		
		<tr>
			<td>Last Name<font color="#FF0000">*</font></td>
			<td><input type="text" name="last_name" id="getlastname"/><label id="display_lastname_error"></label></td>
		</tr>
		<tr height="10"><td></td></tr>
		
		<tr>
			<td>Address<font color="#FF0000">*</font></td>
			<td><textarea name="address" rows="4" cols="16" id="address"></textarea><label id="display_address_error" style="vertical-align:top"></label></td>
		</tr>
		<tr height="10"><td></td></tr>
		
		<tr>
			<td>Phone Number<font color="#FF0000">*</font></td>
			<td><input type="text" name="phone_number" id="phone_number"/><label id="display_phonenumber_error"></label></td>
		</tr>
		<tr height="10"><td></td></tr>
		
		<tr>
			<td>E-Mail<font color="#FF0000">*</font></td>
			<td><input type="text" name="email"/><label id="display_email_error"></label></td>
		</tr>
		<tr height="10"><td></td></tr>
		
		<tr>
			<td>Password<font color="#FF0000">*</font></td>
			<td><input type="password" name="password" id="password"/><label id="display_password_error"></label></td>
		</tr>
		<tr height="10"><td></td></tr>
		
		<tr>
			<td>Confirm Password<font color="#FF0000">*</font></td>
			<td><input type="password" name="cpassword" alt="PASSWORD~Confirm Password~DM" id="CONFIRMPWD~Confirm Password~DM"/><label id="display_cpassword_error"></label></td>
		</tr>
		<tr height="10"><td></td></tr>
		
		<tr>
			<td>Gander<font color="#FF0000">*</font></td>
			<td><input type="radio" name="gander" value="male" checked="checked"/>Male<input type="radio" name="gander" value="female"/>Female</td>
		</tr>
		<tr height="10"><td></td></tr>
		
		<tr>
			<td>Continent<font color="#FF0000">*</font></td>
			<td><select name="continent" id="NOBLANK~Continent~DM~">
					<option selected="selected" value="">- -Select Continent- -</option>
					<option value="asia">Asia</option>
					<option value="europe">Europe</option>
					<option value="africa">Africa</option>
				</select><label id="display_continent_error"></label>
			</td>
		</tr>
		<tr height="10"><td></td></tr>
		
		<tr>
			<td>Country<font color="#FF0000">*</font></td>
			<td><select name="country" id="NOBLANK~Country~DM~">
					<option selected="selected" value="">- -Select Country- -</option>
					<option value="india">India</option>
					<option value="kenya">Kenya</option>
					<option value="england">England</option>
				</select><label id="display_country_error"></label>
			</td>
		</tr>
		<tr height="10"><td></td></tr>
		
		<tr>
			<td>State<font color="#FF0000">*</font></td>
			<td><select name="state" id="NOBLANK~State~DM~">
					<option selected="selected" value="">- -Select State- -</option>
					<option value="gujarat">Gujarat</option>
					<option value="mahchester">Manchester</option>
					<option value="nairobi">Nairobi</option>
				</select><label id="display_state_error"></label>
			</td>
		</tr>
		<tr height="10"><td></td></tr>
		
		<tr>
			<td>Language Known<font color="#FF0000">*</font></td>
			<td><input type="checkbox" name="english" value="english" checked="checked"/>English
			<input type="checkbox" name="gujarati" value="gujarati"/>Gujarati
			<input type="checkbox" name="hindi" value="hindi"/>Hindi
			</td>
		</tr>
		<tr height="10"><td></td></tr>
		
		<tr>
			<td>Web Site<font color="#FF0000">*</font></td>
			<td><input type="text" name="url"/><label id="display_url_error"></label></td>
		</tr>
		<tr height="10"><td></td></tr>
		
		<tr>
			<td valign="top">Games<font color="#FF0000">*</font></td>
			<td><select multiple="multiple" name="games" id="games" style="width:65%">
					<option selected="selected" value="">Select Game</option>
					<option value="cricket">Cricket</option>
					<option value="tennis">Tennis</option>
					<option value="volleyball">Volleyball</option>
					<option value="basketball">Basketball</option>
					<option value="football">Football</option>
				</select><label id="display_game_error"></label>
			</td>
		</tr>
		<tr height="10"><td></td></tr>
		
		<tr>
			<td>Birth Date<font color="#FF0000">*</font></td>
			<td><select name="year">
					<option selected="selected" value="">Year</option>
					<?php
					for($i=1990;$i<2020;$i++)
					{
					?>
						<option value="<?php echo $i;?>"><?php echo $i;?></option>
					<?php
					}
					?>
				</select>
				<select name="month">
					<option selected="selected" value="">Month</option>
					<?php
					for($i=1;$i<13;$i++)
					{
					?>
						<option value="<?php echo $i;?>"><?php echo $i;?></option>
					<?php
					}
					?>
				</select>
				<select name="day">
					<option selected="selected" value="">Day</option>
					<?php
					for($i=1;$i<32;$i++)
					{
					?>
						<option value="<?php echo $i;?>"><?php echo $i;?></option>
					<?php
					}
					?>
				</select><label id="display_year_error"></label>
				<label id="display_month_error"></label>
				<label id="display_day_error"></label>
			</td>
		</tr>
		<tr height="10"><td></td></tr>
		
		<tr>
			<td>Industry Type<font color="#FF0000">*</font></td>
			<td><select name="i_type">
					<option selected="selected" value="">- -Select Industry- -</option>
					<option value="it">Information Technology</option>
					<option value="finance">Finance</option>
					<option value="marketing">Marketing</option>
					<option value="accountant">accountant</option>
				</select><label id="display_itype_error"></label>
			</td>
		</tr>
		<tr height="10"><td></td></tr>
		
		<tr>
			<td valign="top">Comments<font color="#FF0000">*</font></td>
			<td><textarea name="comments" rows="4" cols="15"></textarea></td>
		</tr>
		<tr height="10"><td></td></tr>
		
		<tr>
			<td>Image Upload<font color="#FF0000">*</font></td>
			<td><input type="file" name="image"/><label id="display_file_error"></label></td>
		</tr>
		<tr height="10"><td></td></tr>
		
		<tr>
			<td colspan="2" align="center"><input type="checkbox" name="chkAcc" value="">I Accept All Conditions
		</td>
		</tr>
		<tr height="10"><td></td></tr>
		
		<tr>
			<td align="right"><input type="submit" name="submit" value="submit" /></td>
			<td><input type="reset" name="reset" value="Cancel"/></td>
		</tr>
		<tr height="10"><td></td></tr>
</table>
</form>								
</body>
</html>