<?php
/*
** function.php for function.php in /private/var/folders/0b/_nssthn11mxcdv80q42ht5th1d_q77/T/e27d72d8-6bb4-4411-b51c-7ba97ce88c50/var/www/CC/website/include/function.php
**
** Made by MOREAU Julien
** Login   <moreau_j@etna-alternance.net>
**
** Started on Mon Jan 25 09:08:39 2016 MOREAU Julien
** Last update Mon Jan 25 09:08:39 2016 MOREAU Julien
*/

function loginExist($login, $bdd)
{
  $req = $bdd->prepare('SELECT * FROM users WHERE name=?');
  $req->execute(array($login));
  $row = $req->fetchAll();
  if (count($row) == 0)
  return (0);
  return (1);
}

function secu($str)
{
  return htmlspecialchars($str);
}

function get_info($id, $bdd)
{
  $req = $bdd->prepare('SELECT * FROM users WHERE id=?');
  $req->execute(array($id));
  $row = $req->fetch();
  return $row;
}
function isConnect()
{
  if (isset($_SESSION['connect_ID']))
  return ($_SESSION['connect_ID']);
  else
  return -1;
}
function get_infoN($name, $bdd)
{
  $req = $bdd->prepare('SELECT * FROM users WHERE name=?');
  $req->execute(array($name));
  $row = $req->fetch();
  return $row;
}
