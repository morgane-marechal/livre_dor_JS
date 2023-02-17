<?php
class User{
    private $id;
    public $login, $password;

    function __construct($login, $password) {
        $this->login = $login;
        $this->password = $password;
    }

    public function register(){
        global $bdd;
        
        $check_login = $bdd ->prepare("SELECT count(*) as count FROM utilisateurs where login = '$this->login'");
        $check_login->execute();
        $res = $check_login->fetch(PDO::FETCH_ASSOC);        
        $count = intval($res['count']);
        if ($count>0){           
        return "Un utilisateurs avec ce login existe déjà ! ";
        }else{
                $newPeople = $bdd->prepare("INSERT INTO utilisateurs ( login, password)
                 VALUES(?,? )");
               $newPeople->execute(array($this->login,$this->password));
               return "Vous avez ajouté un nouvel utilisateur avec succès";
        }
    }

}

//echo "lien : class UserRegister <br>";

?>