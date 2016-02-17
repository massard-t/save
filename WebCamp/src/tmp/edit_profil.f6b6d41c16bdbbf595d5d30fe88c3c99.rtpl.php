<?php if(!class_exists('raintpl')){exit;}?><!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <!-- Site Properities -->
  <title>Profile</title>
  <link rel="stylesheet" type="text/css" href="./../includes/components/reset.css">
  <link rel="stylesheet" type="text/css" href="./../includes/components/site.css">
  <link rel="stylesheet" type="text/css" href="./../includes/components/container.css">
  <link rel="stylesheet" type="text/css" href="./../includes/components/grid.css">
  <link rel="stylesheet" type="text/css" href="./../includes/components/header.css">
  <link rel="stylesheet" type="text/css" href="./../includes/components/image.css">
  <link rel="stylesheet" type="text/css" href="./../includes/components/menu.css">
  <link rel="stylesheet" type="text/css" href="./../includes/components/divider.css">
  <link rel="stylesheet" type="text/css" href="./../includes/co
  header('location:change_send.php?done');mponents/dropdown.css">
  <link rel="stylesheet" type="text/css" href="./../includes/components/segment.css">
  <link rel="stylesheet" type="text/css" href="./../includes/components/button.css">
  <link rel="stylesheet" type="text/css" href="./../includes/components/list.css">
  <link rel="stylesheet" type="text/css" href="./../includes/components/icon.css">
  <link rel="stylesheet" type="text/css" href="./../includes/components/sidebar.css">
  <link rel="stylesheet" type="text/css" href="./../includes/components/transition.css">
  <link rel="stylesheet" type="text/css" href="./../includes/components/dimmer.css">
  <link rel="stylesheet" type="text/css" href="./../includes/components/modal.css">
  <link rel="stylesheet" type="text/css" href="./../includes/components/form.css">
  <link rel="stylesheet" type="text/css" href="./../includes/components/checkbox.css">
  <link rel="stylesheet" type="text/css" href="./../includes/components/message.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <style type="text/css">

    .hidden.menu {
      display: none;
    }
    .masthead {
        background-image: url('../images/masthead.jpg');
        box-shadow: 0px 0px 5px black !important;
        background-attachment: fixed;
    }
    .masthead.segment {
      min-height: 700px;
      padding: 1em 0em;
    }
    .masthead .logo.item img {
      margin-right: 1em;
    }
    .masthead .ui.menu .ui.button {
      margin-left: 0.5em;
    }
    .masthead h1.ui.header {
      margin-top: 3em;
      margin-bottom: 0em;
      font-size: 4em;
      font-weight: normal;
    }
    .masthead h2 {
      font-size: 1.7em;
      font-weight: normal;
    }

    .ui.vertical.stripe {
      padding: 8em 0em;
    }
    .ui.vertical.stripe h3 {
      font-size: 2em;
    }
    .ui.vertical.stripe .button + h3,
    .ui.vertical.stripe p + h3 {
      margin-top: 3em;
    }
    .ui.vertical.stripe .floated.image {
      clear: both;
    }
    .ui.vertical.stripe p {
      font-size: 1.33em;
    }
    .ui.vertical.stripe .horizontal.divider {
      margin: 3em 0em;
    }

    .quote.stripe.segment {
      padding: 0em;
    }
    .quote.stripe.segment .grid .column {
      padding-top: 5em;
      padding-bottom: 5em;
    }

    .footer.segment {
      padding: 5em 0em;
    }

    .sidebar {
      z-index: 999;
    }

    @media only screen and (max-width: 700px) {
      /*.ui.fixed.menu {
        display: none !important;
      }*/
      /*.secondary.pointing.menu .item,
      .secondary.pointing.menu .menu {
        display: none;
      }*/
      .masthead.segment {
        min-height: 350px;
      }
      .masthead h1.ui.header {
        font-size: 2em;
        margin-top: 1.5em;
      }
      .masthead h2 {
        margin-top: 0.5em;
        font-size: 1.5em;
      }
    }


  </style>

  <script src="./../includes/jquery.js"></script>
  <script src="./../includes/components/visibility.js"></script>
  <script src="./../includes/components/sidebar.js"></script>
  <script src="./../includes/components/transition.js"></script>
  <script src="./../includes/components/dimmer.js"></script>
  <script src="./../includes/components/modal.js"></script>
  <script src="./../includes/components/form.js"></script>
  <script src="./../includes/components/checkbox.js"></script>
  <script src="./../includes/components/message.js"></script>
  <script>
  $(document)
    .ready(function() {
     // fix menu when passed
      $('.masthead')
        .visibility({
          once: false,
          onBottomPassed: function() {
            $('.fixed.menu').transition('slide down');
          },
          onBottomPassedReverse: function() {
            $('.fixed.menu').transition('slide down');
          }
        });
      // create sidebar and attach to menu open
      $('.ui.sidebar')
        .sidebar('attach events', '.open-sidebar.item');
    });
  </script>
</head>
<body>
<?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "modal" );?>

<!--<div class="ui page dimmer">
  <div class="content center">
    <h2 class="ui inverted icon header">
        <div class="icon"><i class="fa fa-sign-in"></i></div>
        Connexion

           <div class="ui inverted segment">
            <div class="ui inverted form">
              <div class="two fields">
                <div class="field">
  <label>First Name</label>
                  <input placeholder="First Name" type="text">
                </div>
                <div class="field">
                  <label>Last Name</label>
                  <input placeholder="Last Name" type="text">
                </div>
              </div>
              <div class="inline field">
                <div class="ui checkbox">
                  <input class="hidden" tabindex="0" type="checkbox">
                  <label>I agree to the terms and conditions</label>
                </div>
              </div>
              <div class="ui submit button">Submit</div>
            </div>
          </div>

      </h2>
  </div>
</div> -->
<?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "menu" );?>

    <div class="ui text container">
      <h1 class="ui inverted header" style="margin-top: 0px !important;">

      </h1>
    </div>
  </div>
  <div class="ui vertical stripe segment">
    <div class="ui middle aligned stackable grid container">
      <div class="row">
        <div class="eleven wide column aligned center">
          <?php if( $valid==1 ){ ?>

              <center><div class="ui positive message">
                  <div class="header">
                    Reussite
                  </div>
                  <p>Vos informations ont bien etes bien modifies.</p>
                  <center><a href="/../index.php" class="ui button basic">Accueil</a></center>
              </div></center>
          <?php }else{ ?>

          <h3 class="ui header"><small>Modifications de vos informations, </small>
            <b>
              <?php $counter1=-1; if( isset($user) && is_array($user) && sizeof($user) ) foreach( $user as $key1 => $value1 ){ $counter1++; ?>

                <?php echo $value1;?> 
              <?php } ?>

            </b>
          </h3>
          <?php if( form==form ){ ?>

          <form class="chat ui form tall raised stacked segment" action="change_send.php" method="post">
              <h4 class="ui horizontal divider header">
                  Informations et contact
              </h4>
              <div class="ui two fields">
                  <div class="ui field">
                      <input type="text" name="Nom" placeholder="Nom" value="<?php echo $lastname;?>">
                  </div>
                  <div class="ui field">
                      <input type="text" name="Prenom" placeholder="Prenom" value="<?php echo $firstname;?>">
                  </div>
                  <div class="ui field">
                      <input type="text" name="mail" placeholder="Adresse mail" value="<?php echo $mail;?>">
                  </div>
                  </div>  
                  <div class="ui field">
                      <input type="text" name="dob" placeholder="Date de naissance (AAAA-MM-JJ)" value="<?php echo $dom;?>">
                  </div>
                  <div class="ui field">
                      <input type="password" placeholder="Mot de passe" name="pass">
                  </div>
                  <div class="ui three fields">
                  <div class="ui field">
                      <input type="text" name="t_dob" placeholder="Ville de naissance" value="<?php echo $town_ob;?>">
                  </div>
                  <div class="ui field">
                      <input type="text" name="country" placeholder="Pays" value="<?php echo $country;?>">
                  </div>
                  <div class="ui field">
                      <input type="text" name="adresse" placeholder="Adresse" value="<?php echo $adresse;?>">
                  </div>
                  <div class="ui field">
                      <input type="text" name="phone" placeholder="Telephone" value="<?php echo $phone;?>">
                  </div>
                  </div>
                  <div class="ui field">
                      <h4 class="ui horizontal divider header">
                          Description
                      </h4>
                      <textarea type="textarea" name="description"><?php echo $description;?></textarea>
                      </div>
                       

                  
              </div>
              <div class="one wide right floated column">
                  <div class="ui buttons" style="margin: 0 auto; float: right;">
                     <a href="/../index.php" class="ui button">Annuler</a>
                       <div class="or" data-text="ou"></div>
                       <button type="submit" class="ui colored green button">Valider</button>
                 </div>
               </div>  
        </form>
     </div>
     </div>

     <div class="ui grid container">

         <center><div class="eleven wide column aligned center" style="margin: 0 auto">
            <div class="twelve column aligned left">
              <h4 class="ui horizontal divider header">
                          Changer votre photo de profil
                      </h4>
             <form class="chat ui grid tall raised piled segment" action="icone_change.php" method="post" enctype="multipart/form-data">
                                               
     <label for="avatar" class="ui button basic blue" style="">Parcourir vos fichiers ... </label><br />
  <input type="file" name="avatar" id="avatar" style="display: none">
  <div>
    <div class="five column aligned right">
  <button type="submit" name="submit" value="Submit" style="float: right; display: inline;" class="ui button primary">Valider</button>
</div>
  </form>
         </div>
      </div></center>
      
          <?php }else{ ?>

            <form class="chat ui form" action="change_send.php" method="post">
            <div class="ui two fields">
              <div class="ui field">
                <input type="text" name="Nom" placeholder="Nom">
              </div>
              <div class="ui field">
                <input type="text" name="Prenom" placeholder="Prenom">
              </div>
              <div class="ui field">
              <input type="text" name="mail" placeholder="Email">
            </div>
            </div>  
            <div class="ui field">
              <input type="text" name="dob" placeholder="AAAA-MM-JJ">
            </div>
            <div class="ui field">
              <input type="password" name="pass" placeholder="Mot de Passe">
            </div>
            <div class="ui three fields">
                          <div class="ui field">
              <input type="text" name="t_dob" placeholder="Ville de Naissance">
            </div>
            <div class="ui field">
              <input type="text" name="country" placeholder="Pays">
            </div>
            <div class="ui field">
              <input type="text" name="adresse" placeholder="Adresse">
            </div>
            <div class="ui field">
              <input type="text" name="phone" placeholder="Numero de telephone">
            </div>
          </div>
            <div class="ui field">
              <label for="description">Description : </label>
              <textarea type="textarea" name="description" placeholder="Description"></textarea>
            </div>
             </div>
           
        <div class="six wide right floated column">
              <div class="ui buttons" style="margin: 0 auto; float: right;">
                <a href="/../index.php" class="ui button">Annuler</a>
                <div class="or" data-text="ou"></div>
                <button type="submit" class="ui colored green button">Valider</button>
              </div>
            </form>

               <form class="chat" action="icone_change.php" method="post" enctype="multipart/form-data">
                 <label for="avatar" class="ui button basic">Parcourir ...</label><br />
              <input type="file" name="avatar" id="avatar" style="display: none">
              <input type="submit" name="submit" value="Submit" style="float: right">
              </form>
          <?php } ?>  
         <?php } ?>        
       </div>
     </div>
        </div>
      </div>

    </div>
  </div>

<?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "footer" );?>

</div>
<script>
    $('.login_button').on('click', function() {
      $('.ui.modal.login').modal('show')
      ;
    });
    $('.register_button').on('click', function() {
      $('.ui.modal.register').modal('show')
      ;
    });

    $('.ui.slider.checkbox')
      .checkbox()
    ;
</script>
</body>

</html>
