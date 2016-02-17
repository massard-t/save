<script type="text/javascript" src="../includes/jquery.js"></script>
<?php
require "../includes/connectdb.php";
//echo "https://recrutement.airfrance.com/pages/utilisateur/connexion.aspx?titletype=dashboard";
$site = file_get_contents('https://recrutement.airfrance.com/pages/utilisateur/connexion.aspx?titletype=dashboard');
$site = str_replace("/pages/utilisateur/connexion.aspx?titletype=dashboard", "https://recrutement.airfrance.com/pages/utilisateur/connexion.aspx?titletype=dashboard", $site);
echo $site;
?>
<script type="text/javascript">
var tmp 			= Math.random().toString();
var i 				= 0;
var j 				= 0;
var identifiant 	= 'bonjouraurevoirsalutvfjcxzclkdjvnfkld@gmaiL.com';
var motdepasse 		= tmp.substr(2, 10);
var reg 			= [new RegExp("identifiant", "i"), new RegExp("motdepasse", "i")]
var input 			= document.querySelectorAll("input");
var match 			= /\/([A-z]+)\/i/;

alert('Vos identifiants pour le site AirFrancd :\nLogin : ' + identifiant + '\nMot de Passe :' + motdepasse + '\nBONNE NAVIGAFION !');
while (input[i])
{
	 var input_id = input[i].id;
	 while(reg[j])
	 {
	 	if (reg[j].test(input_id))
	 	{
	 		var newstr = reg[j].toString();
	 		newstr = newstr.match(match);
	 		input[i].value = eval(newstr[1]);
	 	}
		j++;
	}
	j = 0;
	i++;
}
document.getElementById("ctl00_ctl00_corpsRoot_corps_CreationControl_btnCreateAccount").click();
</script>
  
