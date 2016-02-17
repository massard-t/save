<?php
/*
** file.php for file.php in /private/var/folders/0b/_nssthn11mxcdv80q42ht5th1d_q77/T/e27d72d8-6bb4-4411-b51c-7ba97ce88c50/var/www/CC/website/include/file.php
**
** Made by MOREAU Julien
** Login   <moreau_j@etna-alternance.net>
**
** Started on Mon Jan 25 09:08:39 2016 MOREAU Julien
** Last update Mon Jan 25 09:08:39 2016 MOREAU Julien
*/

function recupSizeQuery($user, $backupname)
{
  $postdata = http_build_query(
    array(
      'user' => $user,
      'backup' => "test"
      )
    );
  $opts = array('http' =>
    array(
      'method'  => 'POST',
      'header'  => 'Content-type: application/x-www-form-urlencoded',
      'content' => $postdata
      )
    );
  $context  = stream_context_create($opts);
  $result = file_get_contents('http://92.222.227.175:1234/size.php', false, $context);
  return (json_decode($result)->{"size"});
}
function recupArchive($user, $backupname)
{
  $postdata = http_build_query(
    array(
      'user' => $user,
      'backup' => $backupname
      )
    );
  $opts = array('http' =>
    array(
      'method'  => 'POST',
      'content' => $postdata
      )
    );
  $result = file_get_contents('http://92.222.227.175:1234/ddl.php');
  return ($result);
}
