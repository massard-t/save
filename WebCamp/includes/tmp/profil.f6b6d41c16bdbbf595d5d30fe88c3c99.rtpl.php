<?php if(!class_exists('raintpl')){exit;}?><!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title><?php echo $user;?></title>
  <link rel="stylesheet" type="text/css" href="./../includes/components/reset.css">
  <link rel="stylesheet" type="text/css" href="./../includes/components/site.css">

  <link rel="stylesheet" type="text/css" href="./../includes/components/container.css">
  <link rel="stylesheet" type="text/css" href="./../includes/components/grid.css">
  <link rel="stylesheet" type="text/css" href="./../includes/components/header.css">
  <link rel="stylesheet" type="text/css" href="./../includes/components/image.css">
  <link rel="stylesheet" type="text/css" href="./../includes/components/menu.css">

  <link rel="stylesheet" type="text/css" href="./../includes/components/divider.css">
  <link rel="stylesheet" type="text/css" href="./../includes/components/dropdown.css">
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
        })
      ;

      // create sidebar and attach to menu open
      $('.ui.sidebar')
        .sidebar('attach events', '.open-sidebar.item')
      ;

    })
  ;
  </script>
</head>
<body>

<div class="ui fullscreen modal login transition fly up">
  <div class="close icon"><i class="fa fa-close"></i></div>
  <div class="header">Se connecter</div>
  <div class="content">
    <div class="ui inverted form">
      <div class="two fields">
        <div class="field">
          <label style="color: black; text-align: center"><i class="fa fa-envelope"></i> Adresse email</label>
          <input name="mail" placeholder="john.doe@exemple.com" type="text">
        </div>
        <div class="field">
          <label style="color: black; text-align: center"><i class="fa fa-lock"></i> Mot de passe</label>
          <input name="password" placeholder="******" type="password">
        </div>
      </div>
      <div class="inline field">
        <div class="ui slider checkbox">
          <input name="check_terms" class="hidden" tabindex="0" type="checkbox">
          <label style="color: black">Je suis en accord avec les conditions generales d'utilisation du site.</label>
        </div>
      </div>
      <br />
      <br />
      <center><div class="ui submit button inverted colored green large" type="submit" name="login_submit">Se connecter</div></center>
    </div>
  </div>
</div>

<div class="ui fullscreen modal register transition fly up">
  <div class="close icon"><i class="fa fa-close"></i></div>
  <div class="header">S'inscrire</div>
  <div class="content">
    <div class="ui inverted form">
   
        <div class="field">
          <label style="color: black;"><i class="fa fa-"></i> Prenom</label>
          <input name="mail" placeholder="john.doe@exemple.com" type="text">
        </div>
        <div class="field">
          <label style="color: black;"><i class="fa fa-"></i> Nom</label>
          <input name="mail" placeholder="john.doe@exemple.com" type="text">
        </div>
        <div class="field">
          <label style="color: black;"><i class="fa fa-"></i> Date de naissance</label>
          <input name="mail" placeholder="john.doe@exemple.com" type="text">
        </div>
        <div class="field">
          <label style="color: black;"><i class="fa fa-envelope"></i> Adresse email</label>
          <input name="mail" placeholder="john.doe@exemple.com" type="text">
        </div>
        <div class="field">
          <label style="color: black;"><i class="fa fa-"></i> Adresse postale</label>
          <input name="mail" placeholder="john.doe@exemple.com" type="text">
        </div>
        <div class="field">
          <label style="color: black;"><i class="fa fa-"></i> Empty</label>
          <input name="mail" placeholder="john.doe@exemple.com" type="text">
        </div>
        <div class="field">
          <label style="color: black;"><i class="fa fa-"></i> Empty</label>
          <input name="mail" placeholder="john.doe@exemple.com" type="text">
        </div>
        <div class="field">
          <label style="color: black;"><i class="fa fa-"></i> Empty</label>
          <input name="mail" placeholder="john.doe@exemple.com" type="text">
        </div>
        <div class="field">
          <label style="color: black;"><i class="fa fa-"></i> Empty</label>
          <input name="mail" placeholder="john.doe@exemple.com" type="text">
        </div>
        <div class="field">
          <label style="color: black;"><i class="fa fa-"></i> Empty</label>
          <input name="mail" placeholder="john.doe@exemple.com" type="text">
        </div>
        <div class="field">
          <label style="color: black;"><i class="fa fa-"></i> Empty</label>
          <input name="mail" placeholder="john.doe@exemple.com" type="text">
        </div>
        <div class="field">
          <label style="color: black;"><i class="fa fa-"></i> Empty</label>
          <input name="mail" placeholder="john.doe@exemple.com" type="text">
        </div>
        <div class="field">
          <label style="color: black;"><i class="fa fa-"></i> Empty</label>
          <input name="mail" placeholder="john.doe@exemple.com" type="text">
        </div>
        <div class="field">
          <label style="color: black;"><i class="fa fa-"></i> Empty</label>
          <input name="mail" placeholder="john.doe@exemple.com" type="text">
        </div>

      <div class="inline field">
        <div class="ui slider checkbox">
          <input name="check_terms" class="hidden" tabindex="0" type="checkbox">
          <label style="color: black">Je suis en accord avec les conditions generales d'utilisation du site.</label>
        </div>
      </div>
      <br />
      <br />
      <center><div class="ui submit button inverted colored blue large" type="submit" name="login_submit">S'inscrire</div></center>
    </div>
  </div>
</div>
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

<!-- Following Menu -->
<div class="ui large top fixed hidden menu inverted blue">
  <div class="ui container">
    <a class="open-sidebar view-ui toc item"  style="border:none;">
        MENU&nbsp;<i class="fa fa-arrow-right"></i> 
    </a>
    <div class="right menu">
      <div class="item">
        <a class="ui button fade animated black inverted login_button">
          <div class="visible content">
            Se connecter
          </div>
          <div class="hidden content">
            <i class="fa fa-check"></i>
          </div>
        </a>
      </div>
      <div class="item">
        <a class="ui button fade animated black inverted register_button">
          <div class="visible content">
            S'inscrire
          </div>
          <div class="hidden content">
            <i class="fa fa-check"></i>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>



<!-- Sidebar Menu -->
<div class="ui vertical sidebar labeled icon menu">
  <a class="active item">
    <div class="icon"><i class="fa fa-search"></i></div>
    Stages
  </a>
  <a class="item">
    <div class="icon"><i class="fa fa-pie-chart"></i></div>
    Overview
  </a>
  <a class="item">
    <div class="icon"><i class="fa fa-sitemap"></i></div>
    Reseaux
  </a>
  <a class="item">
    <div class="icon"><i class="fa fa-bell-o"></i></div>
    Suivi des candidatures
  </a>
  <a class="item">
    <div class="icon"><i class="fa fa-child"></i></div>
    Profile
  </a>
  <a class="item">
    <div class="icon"><i class="fa fa-cogs"></i></div>
    Settings
  </a>
</div>


<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment">

    <div class="ui container">
      <div class="ui secondary large inverted pointing menu">

        <!--
        <a class="active item">Home</a>
        <a class="item">Work</a>
        <a class="item">Company</a>
        <a class="item">Careers</a>
        -->
        <a class="ui inverted open-sidebar view-ui item">
          MENU&nbsp;<i class="fa fa-arrow-right"></i> 
        </a>

        <div class="right item">
          <a class="ui inverted fade animated black button login_button">
            <div class="visible content">
              Connexion
            </div>
            <div class="hidden content">
              <i class="fa fa-check"></i>
            </div>
          </a>
          <a class="ui inverted fade animated black button register_button">
            <div class="visible content">
              Inscription
            </div>
            <div class="hidden content">
              <i class="fa fa-check"></i>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div class="ui text container">
      <h1 class="ui inverted header">
        <!--Bonanza !-->
        <?php echo $nom_du_site;?>

      </h1>
      <h2><small><?php $counter1=-1; if( isset($user) && is_array($user) && sizeof($user) ) foreach( $user as $key1 => $value1 ){ $counter1++; ?><?php } ?></small></h2>
    </div>
    <br /><br />
    <div class="ui animated colored green fade button large" tabindex="0">
      <div class="visible content">S'inscrire</div>
      <div class="hidden content">
        <i class="fa fa-arrow-right"></i>
      </div>
    </div>

  </div>

  <!--
  <div class="ui vertical stripe segment">
    <div class="ui middle aligned stackable grid container">
      <div class="row">
        <div class="eight wide column">
          <h3 class="ui header">We Help Companies and Companions</h3>
          <p>We can give your company superpowers to do things that they never thought possible. Let us delight your customers and empower your needs...through pure data analytics.</p>
          <h3 class="ui header">We Make Bananas That Can Dance</h3>
          <p>Yes that's right, you thought it was the stuff of dreams, but even bananas can be bioengineered.</p>
        </div>
        <div class="six wide right floated column">
          <!--<img src="./assets/images/wireframe/white-image.png" class="ui large bordered rounded image">-->
        <!--</div>
      </div>
      <div class="row">
        <div class="center aligned column">
          <a class="ui huge button">Check Them Out</a>
        </div>
      </div>
    </div>
  </div>


  <div class="ui vertical stripe quote segment">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class="column">
          <h3>"What a Company"</h3>
          <p>That is what they all say about us</p>
        </div>
        <div class="column">
          <h3>"I shouldn't have gone with their competitor."</h3>
          <p>
            <!--<img src="./assets/images/avatar/nan.jpg" class="ui avatar image"> <b>Nan</b> Chief Fun Officer Acme Toys-->
          <!--</p>
        </div>
      </div>
    </div>
  </div>

  <div class="ui vertical stripe segment">
    <div class="ui text container">
      <h3 class="ui header">Breaking The Grid, Grabs Your Attention</h3>
      <p>Instead of focusing on content creation and hard work, we have learned how to master the art of doing nothing by providing massive amounts of whitespace and generic content that can seem massive, monolithic and worth your attention.</p>
      <a class="ui large button">Read More</a>
      <h4 class="ui horizontal header divider">
        <a href="">Case Studies</a>
      </h4>
      <h3 class="ui header">Did We Tell You About Our Bananas?</h3>
      <p>Yes I know you probably disregarded the earlier boasts as non-sequitor filler content, but its really true. It took years of gene splicing and combinatory DNA research, but our bananas can really dance.</p>
      <a class="ui large button">I'm Still Quite Interested</a>
    </div>
  </div>
-->

  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <h4 class="ui inverted header">About</h4>
          <div class="ui inverted link list">
            <a href="" class="item">Sitemap</a>
            <a href="" class="item">Contact Us</a>
            <a href="" class="item">Religious Ceremonies</a>
            <a href="" class="item">Gazebo Plans</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Services</h4>
          <div class="ui inverted link list">
            <a href="" class="item">Banana Pre-Order</a>
            <a href="" class="item">DNA FAQ</a>
            <a href="" class="item">How To Access</a>
            <a href="" class="item">Favorite X-Men</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    $('.login_button').on('click', function() {
      $('.ui.fullscreen.modal.login').modal('show')
      ;
    });
    $('.register_button').on('click', function() {
      $('.ui.fullscreen.modal.register').modal('show')
      ;
    });

    $('.ui.slider.checkbox')
      .checkbox()
    ;
</script>
</body>

</html>
