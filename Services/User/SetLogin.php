<?php
class User{
    private $id;
    public $login, $password;

    function __construct($login, $password) {
        $this->login = $login;
        $this->password = $password;
    }

    public function setLogin($newlogin){
        global $bdd;
        $login=$_SESSION['login']; //<- la fonction update ne fonctionne qui si un utilisateur est connecté
        $this->login = $newlogin;      
        $sqlupdate = $bdd -> prepare("UPDATE utilisateurs SET login = '$newlogin' WHERE login = '$login'");
        $sqlupdate->execute(array($this->login));
        $_SESSION['login'] = $newlogin;

        echo "Vous avez mis à jour votre profil.<br>";
    }

    public function setPassword($newpassword){
        global $bdd;
        $login=$_SESSION['login'];
        //$password=$_SESSION['password']; //<- la fonction update ne fonctionne qui si un utilisateur est connecté
        $this->password = $newpassword;      
        $sqlupdate = $bdd -> prepare("UPDATE utilisateurs SET password = '$newpassword' WHERE login = '$login'");
        $sqlupdate->execute(array($this->password));
        $_SESSION['password'] = $newpassword;

        echo "Vous avez mis à jour votre mot de passe.<br>";
    }

}

//echo "Connexion avec SetLogin";

?>