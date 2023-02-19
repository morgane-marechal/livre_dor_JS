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
           $_SESSION['login'] = $login;
           $_SESSION['password'] = $password;

           $allInfo = $bdd -> prepare("SELECT * FROM utilisateurs WHERE login = '$this->login'");
            $allInfo -> execute();
            $result = $allInfo->fetch(PDO::FETCH_ASSOC);
            $resultId = $result ['id'];
            $_SESSION['id'] = $resultId;
            
            
        }else{
            echo "Problème d'identifiant ou de mot de passe";
        }
    }
}

?>