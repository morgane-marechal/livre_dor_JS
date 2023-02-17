<?php session_start(); ?>

<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="style.css" />
        <meta http-equiv="x-ua-compatible" content="IE=edge" />
        <title>Livre d'or</title>

</head>

<body>
    <?php require('header.php');?>

    <?php 
    //echo "Session id : ".$_SESSION['id']."<br>"; 
    echo "Bonjour ".$_SESSION['login'].". Voulez-vous ajouter un commentaire ?<br>";
    ?>
    <button id="commentaire-button">Laisser un commentaire</button>


    <div id="commentaire-place"></div>

    <div id="display-comment">
    <?php require('db_connect.php'); ?>
    <?php require('Services/Comment/ManageComment.php'); ?>
    <?php 
            $idUser = $_SESSION['id'];        
            $date = "2023-02-09 00:00:00";
    $test2 = new Comment("hello", $idUser, $date);
    echo $test2->displayComment();
    ?>

    </div>

    <script type="text/javascript" src="scriptcomment.js"></script>
</body>