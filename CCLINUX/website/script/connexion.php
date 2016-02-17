<?php
/*
** connexion.php for connexion.php in /private/var/folders/0b/_nssthn11mxcdv80q42ht5th1d_q77/T/e27d72d8-6bb4-4411-b51c-7ba97ce88c50/var/www/CC/website/script/connexion.php
**
** Made by MOREAU Julien
** Login   <moreau_j@etna-alternance.net>
**
** Started on Mon Jan 25 09:08:39 2016 MOREAU Julien
** Last update Mon Jan 25 09:08:39 2016 MOREAU Julien
*/
if (empty($_SESSION))
  session_start();
require_once("../include/connect.php");
require_once("../include/function.php");
if (empty($_POST["loginC"]) || empty($_POST["passC"]))
  echo "Erreur : Champs invalide.";
else
{
  $login = secu($_POST["loginC"]);
  $passwd = md5(secu($_POST["passC"]));
  if ($login == "" || $passwd == "")
    echo "Erreur : Au moins un des champs est vide.";
  else if (!loginExist($login, $bdd))
    echo "Erreur : Le login n'existe pas.";
  else if (get_infoN($login, $bdd)["password"] != $passwd)
    echo "Erreur : Le mot de passe ne correspond pas.";
  else
  {
    echo "Connexion Réussi.";
    $_SESSION["connect_ID"] = get_infoN($login, $bdd)["id"];
  }
}
?>
