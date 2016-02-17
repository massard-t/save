<?php
	session_start();
    include "vendor/rain.tpl.php";
    $t = new RainTPL();
    raintpl::configure ("tpl_dir", "./");
    $dtb = mysqli_connect("localhost", "bonanza", "mot de passe bonanza", "data_base");
    if ($dtb ===false) {
        echo "error " . mysqli_connect_errno();
    }
    $query      = 'SELECT * FROM Site';
    $result     = mysqli_query($dtb, $query);
    $site       = mysqli_fetch_assoc($result);

    // GESTION DES ERREURS //////////////////////////////
    $error = 0;
    if (isset($_GET['valid'])) {
        $error = 1;
        $t->assign('error', $error);
        $t->assign('error_message', "
                <div class='ui negative message'>
                  <div class='close icon'><i class='fa fa-close'></i></div>
                  <div class='header'>
                    Erreur de connexion
                  </div>
                  <p>Vous n'avez pas validé votre email
                </p></div>
        ");
    }
    /*if ((empty($_GET['valid'])) && (isset($_GET['valid']))) {
        $error = 1;
        $t->assign('error', $error);
        $t->assign('error_message', "
                <div class='ui positive message'>
                  <div class='close icon'><i class='fa fa-close'></i></div>
                  <div class='header'>
                    Connexion Réussie !
                  </div>
                  <p>Vous avez maintenant accès au site. 
                </p></div>
        ");
    }*/
    ////////////////////////////////////////////////////

    $co = 0;
    if (isset($_SESSION['ID']))
    	$co = 1;
    $t->assign('co',$co);
    $t->assign('nom_du_site', $site['name']);
    $t->assign('description', $site['description']);
    $t->assign('nom_complet', "".$_SESSION['firstname']." ".$_SESSION['lastname']."");
    $t->draw('accueil');
    ////////////////////////////////////////////////

?>