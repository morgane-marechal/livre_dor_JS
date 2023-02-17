<?php session_start(); ?>
<?php require('db_connect.php'); ?>
<?php require('Services/User/SetLogin.php'); ?>
<?php //require('Services/User/SetPassword.php'); ?>

<?php 


$login=$_SESSION['login'];
$password = $_SESSION['password'];
//$newlogin = htmlspecialchars($_POST['newlogin']);

if((!empty($_POST)) && $_POST['newlogin']){
    $newlogin = htmlspecialchars($_POST['newlogin']);
    $update = new User($login,$password);
    $update->setLogin($newlogin);
    }

    if((!empty($_POST)) && $_POST['newpassword']){
        $newpassword = htmlspecialchars($_POST['newpassword']);
        $updatePW = new User($login,$password);
        $updatePW->setPassword($newpassword);
        }
?>

<form id="profil_form" action="" method="post">
        <h3>Modification du compte</h3>
        <input type="text" name="newlogin" id="newlogin" placeholder="nouveau login" minlength="3">
        <input type="password" name="newpassword" id="newpassword" placeholder="*****" minlength="3">
        </select>
        <input class="submit" id="submit-profil" type="submit" value="Envoyer">
        <i class="small">* Champs obligatoires avec 3 caractères minimum</i>       
</form>