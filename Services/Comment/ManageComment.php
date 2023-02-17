<?php
class Comment{
    private $id;
    public $comment, $idUser, $date;

    function __construct($comment, $idUser, $date) {
        $this->comment = $comment;
        $this->idUser = $idUser;
        $this->date = $date;
    }

    public function addComment(){
        global $bdd;          
        $newComment = $bdd->prepare("INSERT INTO commentaires ( commentaires, id_utilisateurs, date)
        VALUES(?,?,? )");
        $newComment->execute(array($this->comment,$this->idUser, $this->date));
        return "Vous avez ajouté un commentaire avec succès";
        }

        public function displayComment(){
            global $bdd;
            $allComment = $bdd -> prepare("SELECT commentaires.commentaires, commentaires.date, utilisateurs.login from commentaires join utilisateurs on utilisateurs.id = commentaires.id_utilisateurs");
            $allComment -> execute();
            $result = $allComment->fetchAll(PDO::FETCH_ASSOC);
            //echo var_dump($result);
            //tableau html -->
            echo "<table>
            <thead><tr><td>Comment</td></tr></thead><tbody>";
            for ($i = 0; $i < count($result); $i++) {
            echo "<tr><td>Le ".$result[$i]['date']."<br> ".$result[$i]['commentaires']."<br>".$result[$i]['login']."</td></tr>";
            }
            echo "</tbody></table>";
        }
    
    }  
    


//echo "connect : Comment";

?>