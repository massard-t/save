<?php
/*
** index.php for index.php in /private/var/folders/0b/_nssthn11mxcdv80q42ht5th1d_q77/T/73281e1e-5652-46fd-b4aa-4756f5f28c47/var/www/CC/website/index.php
**
** Made by MOREAU Julien
** Login   <moreau_j@etna-alternance.net>
**
** Started on Mon Jan 25 09:08:39 2016 MOREAU Julien
** Last update Mon Jan 25 09:08:39 2016 MOREAU Julien
*/
if (empty($_SESSION))
  session_start();
require_once("include/connect.php");
require_once("include/function.php");
require_once("include/head.php");
require_once("include/header.php");
require_once("include/file.php");
require_once("class/backup.php");
if (empty($_GET['p']))
  $_GET['p'] = "home";
if (!file_exists('page/' . $_GET['p'] . '.php'))
  $_GET['p'] = "404";
include('page/' . $_GET['p'] . '.php');
require_once("include/footer.php");
