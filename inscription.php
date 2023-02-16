<?php session_start(); ?>
<?php require('db_connect.php'); ?>
<?php require('Services/User/RegisterUser.php'); ?>
<?php

if(!empty($_POST)) {
$login = htmlspecialchars($_POST['login']);
$password = htmlspecialchars($_POST['password']);
echo "<br> login = ".$login;
echo "<br> password = ".$password;
$test = new User($login,$password);
$test->register();
}

?>





                    <form id="inscription_form" action="" method="post">
                        <h3>Création de compte</h3>
                        <input type="text" name="login" id="login" placeholder="Login*" required minlength="3">
                        <input type="password" name="password" id="password" placeholder="Password*" required minlength="3">
                        </select>
                        <input class="submit" id="submit" type="submit" value="Envoyer">
                        <i class="small">* Champs obligatoires avec 3 caractères minimum</i>       
                    </form>


               
 

