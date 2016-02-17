<?php if(!class_exists('raintpl')){exit;}?><!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Bonanza</title>
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
      /*$('.ui.sidebar')
        .sidebar('attach events', '.open-sidebar.item')
      ;*/
      $('.ui.sidebar')
        .sidebar('attach events', '.open-sidebar.item');

    })
  ;
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
        <!--<a href="/../index.php"><img src="./../images/logo.png" width="100px"></img></a><br />-->
      </h1>
    </div>
  </div>
  
  <div class="ui vertical stripe segment">
    <div class="ui middle aligned stackable grid container">
      <div class="row">
        <div class="twenty wide column">
          <h3 class="ui header">
            <b>
              Choix du site
            </b>
          </h3>
              <form class="ui form" method="post" action="test_auto_comple.php" style="display: inline;">

                  
                    <button class="ui submit button colored blue large" type="submit" name="submit" value="0" style="margin-bottom: 10px; background-color: #167e95; opacity: 0.85;">Air France</button>
                  
                  
                    <button class="ui submit button colored blue large" type="submit" name="submit" value="1" style="margin-bottom: 10px; background-color: #167e95; opacity: 0.85">Kap Stage</button>
                  
                  
                    <button class="ui submit button colored blue large" type="submit" name="submit" value="2" style="margin-bottom: 10px; background-color: #167e95; opacity: 0.85">Apec</button>
              </form>
        </div>
      </div>
    </div>
  </div>

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
