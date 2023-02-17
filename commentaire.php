<?php session_start(); ?>

    <?php require('db_connect.php'); ?>
    <?php require('Services/Comment/ManageComment.php'); ?>
    <?php require('Services/User/ConnexionUser.php'); ?>
    <?php 

    if(!empty($_POST)&& $_POST['comment']) {

        //pour avoir la date
        $mydate=getdate(date("U"));
        $myhour=date("H:i:s");
        //valeur de la date pour le type sql datetime YYYY-MM-DD
        $date="$mydate[year]/$mydate[mon]/$mydate[mday] $myhour";
        $_SESSION['login'] = $login;
        $_SESSION['password'] = $password;
        $comment = htmlspecialchars($_POST['comment']);
        $testUser = new User($login,$password);
        $idUser = $_SESSION['id'];        
        //$date = "2023-02-09 00:00:00";
        $test = new Comment($comment, $idUser, $date);
        echo $test->addComment();
        
    }
    ?>


    <form id="comment_form" action="" method="post">
        <h3>Laisser un commentaire</h3>
        <input class= "comment" type="text" name="comment" id="comment" placeholder="Ajouter un commentaire*" required minlength="20">
        </select>
        <input class="submit" id="submit" type="submit" value="Envoyer">
        <i class="small">* Champs obligatoires avec 20 caractères minimum</i>
    </form>
