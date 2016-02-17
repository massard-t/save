<?php
/*
**backups.php for backups.php in C:\Users\Julien\AppData\Local\Temp\scp49669\var\www\CC\website\page\backups.php
**
** Made by MOREAU Julien
** Login   <moreau_j@etna-alternance.net>
**
** Started on  Fri Oct 16 07:08:39 2015 MOREAU Julien
** Last update Sat Oct 17 15:35:34 2015 MOREAU Julien
*/

$idBackup = isset($_GET['id']) ? intval($_GET['id']) : -1;
if ($idBackup == -1)
die();
else
{
  $backup = new Backup($idBackup, $bdd);
  ?>
  <div id="content-home">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <section>
            <h1>Détails du projet</h1>
            <div class="content_text">
              <a class="list-group-item">Nom : <?php echo $backup->get_name(); ?></a>
              <a class="list-group-item">Crée le : <?php echo $backup->get_create(); ?></a>
              <a class="list-group-item">Propriétaire : <?php echo get_info($backup->get_prop(), $bdd)["name"]; ?></a>
              <?php if (!$backup->isPublic()) {?>
                <a class="list-group-item">Type du backup : Privé</a>
                <a class="list-group-item">Permissions accordés à :</a>
                <?php
                $perc = round(((10485760 - $backup->get_size()) * 100 / 10485760), 2);
                $userList = $backup->get_users();
                foreach ($userList as $userID)
                {
                  $username = $bdd->query("SELECT * FROM users WHERE id = '{$userID}'");
                  $result = $username->fetch();
                  echo "<a class='list-group-item center'>{$result['name']}</a>";
                }
                echo "<a href='' class='list-group-item center'>Ajouter un membre autorisé</a>";
              }
              else
              echo '<a class="list-group-item">Type du backup : Privé</a>';
              ?>
              <a class="list-group-item">
                <span><center>Espace de stockage restant</center></span>
                <div class="progress">
                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $perc; ?>%">
                    <span><?php echo $perc."%";?></span>
                  </div>
                </div></a>
                <br/>
                <a href='?p=download&id=<?php echo $idBackup; ?>' class='list-group-item center'>Télécharger le backup</a>
              </div>
            </section>
          </div>
          <div class="col-md-9">
            <section>
              <!--<h1>Contenu du projet</h1>
              <div class="content_text">
              <div class="alert alert-warning center" role="alert">Choisi un de tes backups sur le menu de gauche !</div>-->
              <ol class="breadcrumb">
                <?php
                $url = $backup->get_name();
                if (isset($_GET["file"]))
                  $url .= $_GET["file"];
              ?>
              <li class="active"><?php echo $url; ?></li>
            </ol>
            <div class="content_text">
              <div class="list-group">
              <?php
                $req = $bdd->prepare("SELECT * FROM modification WHERE backup = ?");
                $req->execute(array($idBackup));
                $last = "null";
                if (empty($_GET["file"]))
                  $_GET["file"] = "null";
                while ($file = $req->fetch())
                {
                  if ($file["Type"] == 0)
                  {
                    if (strpos($file["Path"], $last) == 0)
                    {
                      if ($_GET["file"] == $file["Path"])
                      {
                        $act = true;
                        echo '<a href="?p=backups&id=' . $idBackup . '&file=' . $file["Path"] . '" class="list-group-item"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> ';
                      }
                      else
                      {   $act = false;
                          echo '<a href="?p=backups&id=' . $idBackup . '&file=' . $file["Path"] . '" class="list-group-item"><span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span> ';
                      }
                        echo $file["Path"] . "</a>";
                    }
                    $last = $file["Path"];
                  }
                  else if ($act)
                    echo "<a href='?p=backups&id=" . $idBackup . "&file=" . $file['Path'] . "' class='list-group-item'>&nbsp;&nbsp;&nbsp;&nbsp;<span class='glyphicon glyphicon-file' aria-hidden='true'></span> " . $file["Path"] . "</a>";
                }
                ?>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
