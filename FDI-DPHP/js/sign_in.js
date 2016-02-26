function	regex_username (username) {
	var re = /[A-z]{4,}/;
	if (!re.test(username)){
		return (false);
	}
	else {
		return (true);
	}
}

function	regex_password (password) {
	var re = /.{6,18}/;
	if (password.length < 6){
		return (false);
	}
	else if (password.length > 18){
		return (false);
	}
	else if (!re.test(password)) {
		return (false);
	}
	else {
		return (true);
	}
}

function	passwd_match (pass1, pass2) {
	if (pass1 != pass2) {
		return (false);
	}
	else {
		return (true);
	}
}

function	regex_names (firstname, lastname) {
	var re = /[A-z]+[-]?[A-z]+/;
	var re_last = /[A-z]+[ ]?[A-z]+/;
	if (!re.test(firstname)) {
		return (false);
	}
	else if (!re_last.test(lastname)) {
		return (false);
	}
	else {
		return (true);
	}
}

function	regex_mail (email) {
	var re = /[\w][\w-]*@[\w]+.[\w]+/;
	if (!re.test(email)) {
		return (false);
	}
	else {
		return (true);
	}
}

function	regex_birthdate (birthdate) {
	var re = /[0-3]{2}\/[0-1][0-9]\/[1-2][0-9]{3}/;
	if (!re.test(birthdate)) {
		return (false);
	}
	else {
		return (true);
	}
}

function	regex_country (country) {
	var re = /[A-Z]?[A-z]+/;
	if (!re.test(country)) {
		return (false);
	}
	else {
		return (true);
	}
}

function	regex_city (city) {
	var re = /([A-z]+[- ]?){1,}/;
	if (!re.test(city)) {
		return (false);
	}
	else {
		return (true);
	}
}

function	regex_zipcode (zipcode) {
	var re = /[0-9]{5}/;
	if (!re.test(zipcode)) {
		return (false);
	}
	else {
		return (true);
	}
}

function	form () {
	console.log('hey');
	if (regex_username($("[name=username]").val())) {
		if (regex_password($("[name=password]").val())) {
			if (passwd_match($("[name=password]").val(), $("[name=confirmpass]").val())) {
				if (regex_names(($("[name=firstname]").val()), ($("[name=lastname]").val()))) {
					if (regex_mail($("[name=email]").val())) {
						if (regex_birthdate($("[name=birthday]").val())) {
							if (regex_country($("[name=country]").val())) {
								if (regex_city($("[name=city]").val())) {
									if (regex_zipcode($("[name=zipcode]").val())) {
										alert('HEYOOOO');
										self.location("../index.php");
									}
									else {
										alert("Use a correct zipcode format: 12345");
										return (false);
									}
								}
								else {
									alert("Enter a valid city name.");
									return (false);
								}
							}
							else {
								alert("Enter a valid country name.");
								return (false);
							}
						}
						else {
							alert("Use a correct syntax: DD/MM/YYYY");
							return (false);
						}
					}
					else {
						alert("Enter a valid email: john@doe.com");
						return (false);
					}
				}
				else {
					alert("Enter valid names.");
					return (false);
				}
			}
			else {
				alert("Password missmatched.");
				return (false);
			}
		}
		else {
			alert("Enter a valid password (Between 6 and 18 characters)");
			return (false);
		}
	}
	else {
		alert("Enter a valid username.");
		return (false);
	}	
}
$('submit').on('click', function () {form();});