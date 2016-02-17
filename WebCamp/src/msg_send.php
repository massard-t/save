<?php
    require "../includes/connectdb.php";
    $name 	= $_SESSION['email'];
    $dest 	= $_POST['dest'];
    $titre 	= $_POST["titre"];
    $msg 	= $_POST['msg'];
    $query 	= "INSERT INTO data_base.messages(email_exp, email_dest, titre, msg) VALUES('" . $name ."','" . $dest ."','" . $titre ."','". $msg."');";
    $result = mysqli_query($dtb, $query);
        header("location: msg.php");
?>