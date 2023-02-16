<?php
class User{
    private $id;
    public $login, $password;

    function __construct($login, $password) {
        $this->login = $login;
        $this->password = $password;
    }


    public function connect($login, $password){
        global $bdd;
        $this->password=$password;
        $this->login = $login;
        $check_login = $bdd ->prepare("SELECT count(*) as count FROM utilisateurs where login = '$this->login'");
        $check_login->execute();
        $res = $check_login->fetch(PDO::FETCH_ASSOC);
        //echo var_dump($res);
        $count = intval($res['count']);
        if($count!=0){
           echo "<br> Si ce message s'affiche c'est que vous vous êtes connecté avec succès<br>";
            $_SESSION['login'] = $login;
            echo "Voici vos identifiants de session: ".$login."<br>";
        }else{
            echo "Problème d'identifiant ou de mot de passe";
        }
    }


}

?>