<?php session_start(); ?>

<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="style.css" />
        <meta http-equiv="x-ua-compatible" content="IE=edge" />
        <title>Livre d'or</title>

</head>

<body>
    <?php require('header.php');?>
    <div id="welcome">
        <?php 
        //echo "Session id : ".$_SESSION['id']."<br>";
        if (isset($_SESSION['login'])&& !empty($_SESSION['login'])){
        echo "Bonjour ".$_SESSION['login'].". Voulez-vous ajouter un commentaire ?<br>";
        echo   "<div id='buttons'>
        <button id='commentaire-button'>Laisser un commentaire</button>
        </div>";
        }else{
            echo "Veuillez vous connecter pour laisser un commentaire.";
        }
        ?>
    </div>



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