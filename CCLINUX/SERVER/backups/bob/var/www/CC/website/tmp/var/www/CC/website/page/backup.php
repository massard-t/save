<?php
/*
** backup.php for backup.php in /private/var/folders/0b/_nssthn11mxcdv80q42ht5th1d_q77/T/e27d72d8-6bb4-4411-b51c-7ba97ce88c50/var/www/CC/website/page/backup.php
**
** Made by MOREAU Julien
** Login   <moreau_j@etna-alternance.net>
**
** Started on Mon Jan 25 09:08:39 2016 MOREAU Julien
** Last update Mon Jan 25 09:08:39 2016 MOREAU Julien
*/
if (isConnect() == -1)
  die();
else
{
$id = isConnect();
?>
<div id="content-home">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
            <section>
              <h1>Ma liste de projets</h1>
              <div class="content_text">
                <?php
                  $list = $bdd->prepare("SELECT * FROM backup WHERE User = :user");
                  $list->execute(array('user' => secu($id)));
                  $a = 0;
                  while ($donnees = $list->fetch())
                  {
                    echo '<a href="?p=backups&id=' . $donnees['ID'] . '" class="list-group-item">Backups - ' . $donnees['Name']. '</a>';
                    $a++;
                  }
                  if ($a == 0)
                    echo '<div class="alert alert-warning" role="alert">Oups ! Il semblerait que tu n\'ais aucunnes données sauvegardés sur notre serveur de sauvegarde. <br /><a href="#" class="alert-link center"><center>Comment en faire ?</center></a></div>';
                ?>
              </div>
        </section>
      </div>
      <div class="col-md-9">
            <section>
                <h1>Détails du projet </h1>
              <div class="content_text">
                <div class="alert alert-warning center" role="alert">Choisi un de tes backups sur le menu de gauche !</div>
<!--
                <ol class="breadcrumb">
  <li><a href="#">Name</a></li>
  <li><a href="#">File</a></li>
  <li class="active">Test</li>
  </ol>
              <div class="content_text">
                <div class="list-group">
                  <html>
                  <pre><code>
                    $("#deconnexion").click(function(){
                      alert("Deconnexion");
                    })
                  </code></pre>
                </div>-->
              </div>
        </section>
      </div>
    </div>
  </div>
</div>
<?php } ?>
