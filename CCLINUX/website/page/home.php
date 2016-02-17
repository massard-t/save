<?php
/*
** home.php for home.php in /private/var/folders/0b/_nssthn11mxcdv80q42ht5th1d_q77/T/73281e1e-5652-46fd-b4aa-4756f5f28c47/var/www/CC/website/page/home.php
**
** Made by MOREAU Julien
** Login   <moreau_j@etna-alternance.net>
**
** Started on Mon Jan 25 09:08:39 2016 MOREAU Julien
** Last update Mon Jan 25 09:08:39 2016 MOREAU Julien
*/
?>
<div id="content-home">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-1 col-md-5">
        <div id="mascotte" style="height: 400px;">
          <img id="backito" src="style/img/backitobody.png" width="100%"/>
          <img id="queue" src="style/img/backitoqueue.png" width="80%"/>
        </div>
      </div>
      <?php if (empty($_SESSION['connect_ID'])) { ?>
      <div class="col-md-offset-1 col-md-4">
        <section>
          <h1>Inscription</h1>
          <div class="content_text">
            <form method="post" class="unhide" id="inscription" data-info="active">
              <input class="form-control" type="text" name="login" id="login" placeholder="Nom d'utilisateur" style="margin-bottom:2px;"/>
              <input class="form-control" type="password" name="pass" id="pass" placeholder="Mot de passe" style="margin-bottom:2px;"/>
              <input class="form-control" type="password" name="verifPass" id="passConf" placeholder="Confirmation du mot de passe" style="margin-bottom:2px;"/>
              <div id="resultR"></div>
              <br />
            </form>
            <input class="form-control btn btn-primary btn-success" type="submit" onclick="
            if ($('#inscription').attr('data-info') != 'active')
            {
              $('#connexion').animate({height: 'hide'}, 500)
              $('#inscription').animate({height: 'show'}, 500)
              $('#connexion').attr('data-info', 'unactive')
              $('#inscription').attr('data-info', 'active')
              $('h1').text('Inscription')
            }
            else
            {
              var error = 0
              $('#inscription').children('input').each( function(){
                var node = $(this)
                if (node.val() == '')
                {
                  node.css({
                    'color':'#a94442',
                    'border-color': '#a94442',
                    '-webkit-box-shadow': 'inset 0 1px 1px rgba(0, 0, 0, .075)',
                    'box-shadow': 'inset 0 1px 1px rgba(0, 0, 0, .075)'
                  });
                  error++
                }
                else
                  node.css({
                    'color':'#3c763d',
                    'border-color': '#3c763d',
                    '-webkit-box-shadow': 'inset 0 1px 1px rgba(0, 0, 0, .075)',
                    'box-shadow': 'inset 0 1px 1px rgba(0, 0, 0, .075)'
                  });
              });
              if (error == 0)
              {
                $('#resultR').empty();
                $.ajax({
                  url : '../script/inscription.php',
                  type : 'POST',
                  data : 'login=' + $('#login').val() + '&pass=' + $('#pass').val() + '&verifPass=' +  $('#passConf').val(),
                  dataType : 'html',
                  success : function(response){
                    $('#resultR').empty();
                    if (response.indexOf('Erreur') == -1)
                    {
                      $('#resultR').append('<br /><div class=\'alert alert-success center\' role=\'alert\'> ' + response + '</div>')
                      setTimeout('location.reload()',2000);
                    }
                    else
                    {
                      if (response.indexOf('existe') != -1)
                      {
                        $('#login').css({
                          'color':'#a94442',
                          'border-color': '#a94442',
                          '-webkit-box-shadow': 'inset 0 1px 1px rgba(0, 0, 0, .075)',
                          'box-shadow': 'inset 0 1px 1px rgba(0, 0, 0, .075)'
                        });
                      }
                      else
                      {
                        $('#login').css({
                          'color':'#3c763d',
                          'border-color': '#3c763d',
                          '-webkit-box-shadow': 'inset 0 1px 1px rgba(0, 0, 0, .075)',
                          'box-shadow': 'inset 0 1px 1px rgba(0, 0, 0, .075)'
                        });
                        $('#pass').css({
                          'color':'#a94442',
                          'border-color': '#a94442',
                          '-webkit-box-shadow': 'inset 0 1px 1px rgba(0, 0, 0, .075)',
                          'box-shadow': 'inset 0 1px 1px rgba(0, 0, 0, .075)'
                        });
                        $('#passConf').css({
                          'color':'#a94442',
                          'border-color': '#a94442',
                          '-webkit-box-shadow': 'inset 0 1px 1px rgba(0, 0, 0, .075)',
                          'box-shadow': 'inset 0 1px 1px rgba(0, 0, 0, .075)'
                        });
                      }
                      $('#resultR').append('<br /><div class=\'alert alert-danger center\' role=\'alert\'> ' + response + '</div>')
                    }
                  }
                });
              }
            }
            " value="S'inscrire">
            <div class="hr">Ou</div>
            <form method="post" class="hide" id="connexion">
              <input class="form-control" type="text" name="login" id="loginC" placeholder="Nom d'utilisateur" style="margin-bottom:2px;"/>
              <input class="form-control" type="password" name="pass" id="passC" placeholder="Mot de passe" style="margin-bottom:2px;"/>
              <div id="resultC"></div>
              <br />
            </form>
            <input class="form-control btn btn-default" type="submit" onclick="
            if ($('#connexion').attr('data-info') != 'active')
            {
              $('#inscription').animate({height: 'hide'}, 500)
              $('#connexion').animate({height: 'show'}, 500)
              $('#connexion').attr('class', 'unhide')
              $('#connexion').attr('data-info', 'active')
              $('#inscription').attr('data-info', 'unactive')
              $('h1').text('Connexion')
            }
            else
            {
              var error = 0
              $('#connexion').children('input').each( function(){
                var node = $(this)
                if (node.val() == '')
                {
                  node.css({
                    'color':'#a94442',
                    'border-color': '#a94442',
                    '-webkit-box-shadow': 'inset 0 1px 1px rgba(0, 0, 0, .075)',
                    'box-shadow': 'inset 0 1px 1px rgba(0, 0, 0, .075)'
                  });
                  error++
                }
                else
                  node.css({
                    'color':'#3c763d',
                    'border-color': '#3c763d',
                    '-webkit-box-shadow': 'inset 0 1px 1px rgba(0, 0, 0, .075)',
                    'box-shadow': 'inset 0 1px 1px rgba(0, 0, 0, .075)'
                  });
              });
              if (error == 0)
              {
                $('#resultC').empty();
                $.ajax({
                  url : '../script/connexion.php',
                  type : 'POST',
                  data : 'loginC=' + $('#loginC').val() + '&passC=' +  $('#passC').val(),
                  dataType : 'html',
                  success : function(response){
                    $('#resultC').empty();
                    if (response.indexOf('Erreur') == -1)
                    {
                      $('#resultC').append('<br /><div class=\'alert alert-success center\' role=\'alert\'> ' + response + '</div>')
                      setTimeout('location.reload()',2000);
                    }
                    else
                    {
                      if (response.indexOf('existe') != -1)
                      {
                        $('#loginC').css({
                          'color':'#a94442',
                          'border-color': '#a94442',
                          '-webkit-box-shadow': 'inset 0 1px 1px rgba(0, 0, 0, .075)',
                          'box-shadow': 'inset 0 1px 1px rgba(0, 0, 0, .075)'
                        });
                      }
                      else
                      {
                        $('#loginC').css({
                          'color':'#3c763d',
                          'border-color': '#3c763d',
                          '-webkit-box-shadow': 'inset 0 1px 1px rgba(0, 0, 0, .075)',
                          'box-shadow': 'inset 0 1px 1px rgba(0, 0, 0, .075)'
                        });
                        $('#passC').css({
                          'color':'#a94442',
                          'border-color': '#a94442',
                          '-webkit-box-shadow': 'inset 0 1px 1px rgba(0, 0, 0, .075)',
                          'box-shadow': 'inset 0 1px 1px rgba(0, 0, 0, .075)'
                        });
                      }
                      $('#resultC').append('<br /><div class=\'alert alert-danger center\' role=\'alert\'> ' + response + '</div>')
                    }
                  }
                });
              }
            }
            " name="Connect" value="Connexion">
          </div>
          <?php } else { ?>
          <div class="col-md-offset-1 col-md-4">
            <section>
              <h1>Bonjour <?php echo get_info($_SESSION['connect_ID'], $bdd)["name"]; ?></h1>
              <div class="content_text">
                  <a href="#" class="list-group-item">Modifier mon profil</a>
                  <a href="#" class="list-group-item">Voir mes backups <span class="badge">4</span></a>
                  <a href="#" class="list-group-item">Paramètres de backups</a>
                  <a href="?p=deconnexion" class="list-group-item">Déconnexion</a>
              </div>
          <?php }?>
        </section>
      </div>
    </div>
    <div class="row">
      <section>
        <div class="content_text" style="margin-top:8px;">
          <div class="col-md-4">
            <center>
              <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
              <h2>Rapidité</h2>
              <p>Créez des copies de vos fichiers en sauvegarde de façon rapide et efficace ! Il suffit de faire vos réglages sur notre interface web ou notre client puis le tour est joué !</p>
            </center>
          </div><!-- /.col-lg-4 -->
          <div class="col-md-4" style="border-right: solid 1px white;border-left: solid 1px white;">
            <center>
              <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
              <h2>Efficacité</h2>
              <p>Copies locales, serveurs de stockages, cloud, subversion, git, faites vos sauvegarde dans le format que bon vous semble pour une plus grosse compatibilité.</p>
            </center>
          </div><!-- /.col-lg-4 -->
          <div class="col-md-4">
            <center>
              <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
              <h2>Sécurité</h2>
              <p>Ne prenez plus le risque de perdre des données en laissant son sac à vos amis. Les données sont automatiquement sauvegardées sur vos systèmes préférés comme bon vous semble.</p>
            </center>
          </div><!-- /.col-lg-4 -->
          <div style="clear:both"></div>
        </div>
      </section>
    </div>
  </div>
</div>
