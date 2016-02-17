<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <title>Pimp my fractale</title>
  <link rel="stylesheet" type="text/css" href="dist/components/reset.css">
  <link rel="stylesheet" type="text/css" href="dist/components/site.css">

  <link rel="stylesheet" type="text/css" href="dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="dist/components/grid.css">
  <link rel="stylesheet" type="text/css" href="dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="dist/components/image.css">
  <link rel="stylesheet" type="text/css" href="dist/components/menu.css">

  <link rel="stylesheet" type="text/css" href="dist/components/divider.css">
  <link rel="stylesheet" type="text/css" href="dist/components/segment.css">
  <link rel="stylesheet" type="text/css" href="dist/components/form.css">
  <link rel="stylesheet" type="text/css" href="dist/components/input.css">
  <link rel="stylesheet" type="text/css" href="dist/components/button.css">
  <link rel="stylesheet" type="text/css" href="dist/components/list.css">
  <link rel="stylesheet" type="text/css" href="dist/components/message.css">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
  <script src="dist/components/form.js"></script>
  <script src="dist/components/transition.js"></script>

  <style type="text/css">
  body {
    background-color: #2c3e50;
    /*#ecf0f1*/
  }
  body > .grid {
      /*
        Separation from the bottom. 60% is the min acceptable value. Put it to 100%
        will align center the content. Put it to <50 % will put the content out of the screen.
        */
        height: 60%;
      }
      .image {
        margin-top: -100px;
      }
      .column {
        max-width: 450px;
      }
      </style>
    </head>
    <body>

      <div class="ui middle aligned center aligned grid">
        <div class="column">
          <h2 class="ui orange header">
            <div class="content">
              Pimp my fractale
            </div>
          </h2>
          <form class="ui large form" method="POST" action="indexi.php">
            <div class="ui tall stacked orange segment">
              <div class="field">
                <?php
                if (count($_POST) != 0)
                  print_r($_POST);
                else {
                  ?>

                  <div class="ui left icon input">
                   <i class="icon fa fa-refresh"></i>
                   <input type="number" name="n" placeholder="Nombre d'itération">
                 </div>
               </div>
               <div class="field">
                <div class="ui left icon input">
                  <i class="icon fa fa-pie-chart"></i>
                  <input type="number" name="k" placeholder="Degré">
                </div>
              </div>
              <br />
              <input type="submit" class="ui basic orange submit button" value="Generate">
              <?php } ?>
            </div>
          </form>

          <br />
          <div class="ui orange message">
            <!-- PLACE TO ERROR MANAGEMENT -->
            Message d'erreur si définis
          </div>
        </div>
      </div>

    </body>

    </html>