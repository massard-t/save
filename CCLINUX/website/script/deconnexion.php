<?php
/*
** deconnexion.php for deconnexion.php in /private/var/folders/0b/_nssthn11mxcdv80q42ht5th1d_q77/T/e27d72d8-6bb4-4411-b51c-7ba97ce88c50/var/www/CC/website/script/deconnexion.php
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
if (isset($_SESSION["connect_ID"]))
  session_destroy();
