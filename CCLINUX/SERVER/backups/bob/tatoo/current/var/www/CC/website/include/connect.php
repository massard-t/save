<?php
/*
** connect.php for connect.php in /private/var/folders/0b/_nssthn11mxcdv80q42ht5th1d_q77/T/e27d72d8-6bb4-4411-b51c-7ba97ce88c50/var/www/CC/website/include/connect.php
**
** Made by MOREAU Julien
** Login   <moreau_j@etna-alternance.net>
**
** Started on Mon Jan 25 09:08:39 2016 MOREAU Julien
** Last update Mon Jan 25 09:08:39 2016 MOREAU Julien
*/
/* Connexion bdd*/
if (file_exists("config/config.php"))
  require_once("config/config.php");
else
  require_once("../config/config.php");
try
{
  global $bdd;
  $bdd = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $user, $passwd);
  $bdd->query("SET NAMES utf8");
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}
