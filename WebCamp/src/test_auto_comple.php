<html>
    <head>
        <title>Test facebook</title>
    </head>
    <body>
        <script type="text/javascript" src="../includes/jquery.js"></script>
        <?php
            session_start();
            require "../includes/connectdb.php";
            $base = array("https://recrutement.airfrance.com/pages/utilisateur/connexion.aspx?titletype=dashboard", "http://www.kapstages.com/inscription/stagiaire",
            "https://jd.apec.fr/home/mon-compte/creation-de-compte.html");
            $site = file_get_contents($base[$_POST['submit']]);
            if ($_POST['submit'] == "0")
            	$site = str_replace("/pages/utilisateur/connexion.aspx?titletype=dashboard", "https://recrutement.airfrance.com/pages/utilisateur/connexion.aspx?titletype=dashboard", $site);
            if ($_POST['submit'] == "1")
            	$site = str_replace("/inscription/stagiaire","http://www.kapstages.com/inscription/stagiaire", $site);
            if ($_POST['submit'] == "2")
            	$site = str_replace("/home/mon-compte/creation-de-compte.html", "https://jd.apec.fr/home/mon-compte/creation-de-compte.html", $site);
            echo $site;
        ?>
        <script type="text/javascript">
            function getRandomInt(min, max) {
              return Math.floor(Math.random() * (max - min +1)) + min;
            }
            function my_mdp()
            {
            	var result = new Array();
            	for(var i = 0; i < 9; i++)
            	{
            		var my_char = [getRandomInt(48, 57), getRandomInt(65, 90), getRandomInt(97, 122)];
            		var j = my_char[getRandomInt(0,2)];
            		result[i] = String.fromCharCode(j);
            	}
            	result = result.toString();
            	result = result.replace(/[^a-z0-9]/gi,'');
            	result = result.toString();
            	return (result);
            }
            var i = 0;
            var j = 0;
            var mail = <?php echo '"' . $_SESSION['email'] . '"' ?>;
            var identifiant = mail;
            var lastname = <?php echo '"' . $_SESSION['lastname'] . '"' ?>;
            var last = lastname;
            var nom = lastname;
            var firstname = <?php echo '"' . $_SESSION['firstname'] . '"' ?>;
            var first = firstname;
            var prenom = firstname;
            var pass = my_mdp();
            var motdepasse = pass;
            var dateNaissance = <?php echo '"' . str_replace("-", "/", $_SESSION['dob']) . '"' ?>;
            var Naissance_d = 20; 
            var Naissance_m = "07";
            var Naissance_y = 1996;
            var gender = 2;
            var civility = gender;
            var idNomCivilite = 20063; //homme 20063 == homme et 20064 == femme
            var adressenumero = <?php echo '"' . $_SESSION['address'] . '"' ?>;
            var codepostal = 92160;
            var ville = "Antony";
            var pays = 799; //france sur Apec;
            var dNomStatutActuel = "ETUDIANT";
            var accept = 1; //conditions d'utilistions
            var select = document.querySelectorAll("select");
            var input = document.querySelectorAll("input");
            var match = /\/([A-z]+)\/i/; //recupere uniquement les lettres du regex
            var reg = [new RegExp("idNomCivilite", "i"), new RegExp("civility", "i"), new RegExp("accept", "i"), new RegExp("last", "i"), new RegExp("first", "i"), 
            new RegExp("firstname", "i"), new RegExp("pass", "i"), new RegExp("lastname", "i"), new RegExp("mail", "i"),
            new RegExp("gender", "i"), new RegExp("identifiant", "i"), new RegExp("motdepasse", "i"), new RegExp("nom", "i"), new RegExp("prenom", "i"), new RegExp("adressenumero", "i"),
            new RegExp("codepostal", "i"), new RegExp("dateNaissance", "i"), new RegExp("ville", "i"), new RegExp("pays", "i"), new RegExp("dNomStatutActuel", "i"), new RegExp("Naissance_d", "i"),new RegExp("Naissance_m",
            "i"), new RegExp("Naissance_y", "i")];
            alert('Vos identifiants pour le site AirFrance :\nLogin : ' + mail + '\nMot de Passe :' + pass + '\nBONNE NAVIGATION !');
            while (input[i])
            {
            	 var input_id = input[i].name;
            	 var input_name = input[i].id;
            	 while(reg[j])
            	 {
            	 	if (reg[j].test(input_id) || reg[j].test(input_name ))
            	 	{
            	 		var newstr = reg[j].toString();
            			newstr = newstr.match(match);
            	 		if (input[i].type === "checkbox")
            	 			input[i].checked = true;
            	 		else if (input[i].type == "radio")
            	 		{
            	 			if (input[i].value == eval(newstr[1]))
            					input[i].checked = true;
            			}
            			else	 			
            		 		input[i].value = eval(newstr[1]);
            	 	}
            		j++;
            	}
            	j = 0;
            	i++;
            }
            i = 0;
            j = 0;
            while (select[i])
            {
            	 var select_id = select[i].name;
            	 var select_name = select[i].id;
            	 while(reg[j])
            	 {
            	 	if (reg[j].test(select_id) || reg[j].test(select_name))
            	 	{
            	 		console.log("lol");
            	 		var newstr = reg[j].toString();
            	 		newstr = newstr.match(match);
            	 		select[i].value = eval(newstr[1]);
            	 	}
            		j++;
            	}
            	j = 0;
            	i++;
            }
            
            var button = document.querySelectorAll("button");
            i = 0;
            while (button[i])
            {
            	if(button[i].name == "_eventId_do")
            		button[i].click();	
            	i++;
            }
            var button = [document.getElementById("ctl00_ctl00_corpsRoot_corps_CreationControl_btnCreateAccount"), document.getElementById("kps_valider-alerte-form"),
            document.getElementsByName("_eventId_do")];
            <?php
                echo "button[" . $_POST['submit'] . "].click();";
            ?>
        </script>
    </body>
</html>

