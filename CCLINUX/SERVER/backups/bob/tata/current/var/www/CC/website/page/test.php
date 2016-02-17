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
      <!--<section>
          <h1>Bienvenue sur Backito !</h1>
          <div class="content_text">
            <center>-->
             <div id="mascotte">
              <img id="backito" src="style/img/backitobody.png" width="100%"/>
              <img id="queue" src="style/img/backitoqueue.png" width="80%"/>
            </div>
            <!--</center>
          </div>
        </section>-->
      </div>
      <div class="col-md-offset-1 col-md-4">
        <section>
            <h1>Inscription</h1>
            <div class="content_text">
              <form method="post" class="unhide" id="inscription">
                <input class="form-control" type="text" name="login" id="login" placeholder="Nom d'utilisateur" style="margin-bottom:2px;"/>
                <input class="form-control" type="email" name="email" id="email" placeholder="example@test.fr" style="margin-bottom:2px;"/>
                <input class="form-control" type="password" name="pass" id="pass" placeholder="Mot de passe" style="margin-bottom:2px;"/>
                <input class="form-control" type="password" name="verifPass" id="passConf" placeholder="Confirmation du mot de passe" style="margin-bottom:2px;"/>
            </form>
            <input class="form-control btn btn-primary btn-success" type="submit" onclick="
            $('#connexion').animate({height: 'hide'}, 500)
            $('#inscription').animate({height: 'show'}, 500)" value="S'inscrire">
            <div class="hr">Ou</div>
            <form method="post" class="hide" id="connexion">
              <input class="form-control" type="text" name="login" id="login" placeholder="Nom d'utilisateur" style="margin-bottom:2px;"/>
              <input class="form-control" type="email" name="email" id="email" placeholder="example@test.fr" style="margin-bottom:2px;"/>
              <input class="form-control" type="password" name="pass" id="pass" placeholder="Mot de passe" style="margin-bottom:2px;"/>
              <input class="form-control" type="password" name="verifPass" id="passConf" placeholder="Confirmation du mot de passe" style="margin-bottom:2px;"/>
            </form>
            <input class="form-control btn btn-default" type="submit" onclick="$('#inscription').animate({height: 'hide'}, 500)" value="Connexion">
            </div>
          </section>
      </div>
    </div>
  </div>
</div>
