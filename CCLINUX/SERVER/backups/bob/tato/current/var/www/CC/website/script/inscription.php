<?php
/*
** inscription.php for inscription.php in /private/var/folders/0b/_nssthn11mxcdv80q42ht5th1d_q77/T/e27d72d8-6bb4-4411-b51c-7ba97ce88c50/var/www/CC/website/script/inscription.php
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
if (empty($_POST["login"]) || empty($_POST["pass"]) || empty($_POST["verifPass"]))
  echo "Erreur : Tous les champs n'ont pas été envoyés.";
else
{
  $login = secu($_POST["login"]);
  $pass = secu($_POST["pass"]);
  $verifPass = secu($_POST["verifPass"]);
  if ($_POST["login"] == "" || $_POST["pass"] == "" || $_POST["verifPass"] == "")
    echo "Erreur : Au moins un des champs n'est pas rempli";
  else if (loginExist($login, $bdd) == 1)
    echo "Erreur : Le pseudo existe déjà";
  else if ($pass != $verifPass)
    echo "Erreur : Les mots de passes ne correspondent pas.";
  else if(strlen($pass) < 6 || strlen($pass) > 20)
    echo "Erreur : Le mot de passe doit contenir entre 6 et 20 caractères.";
  else
    {
      $req = $bdd->prepare("INSERT INTO `users` (`name`, `password`) VALUES (:login, :password)");
      $send = $req->execute(array('login' => $login, 'password' => md5($pass)));
      $ID = $bdd->lastInsertId();
      if (empty($_SESSION['connect_ID']))
        $_SESSION['connect_ID'] = $ID;
      echo "Inscription confirmée, redirection..";
    }
}
