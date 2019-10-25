<?php

namespace InsertComment;

class InsertComment
{
    public $connect = false;

    /**
     * ForumRead constructor.
     *
     * Sprawdza czy jest połączenie z baza danych
     */
    public function __construct() {
        $db = mysqli_connect("mysql1.ugu.pl", "db696909", "zaq1@WSX");

        if($db == true){
            $this->connect = true;
        }else{
            $this->connect = false;
        }
    }

    public function insertStart($id, $commentContent){
        
		if ($this->connect == true){

			$this->insertComment($id, $commentContent);

        }else {
            echo "Błąd! Nie udało się nawiązać połączenia z bazą danych";
        }
		
    }

    public function insertComment($userId, $userComment){

        $id = $userId;
        $commentContent = $userComment;
        $data = date('Y-m-d');

        $db = mysqli_connect("mysql1.ugu.pl", "db696909", "zaq1@WSX");
        mysqli_query($db, "SET CHARSET utf8");
        mysqli_query($db, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
        mysqli_select_db($db, 'protectwomen');

        $question = "INSERT INTO post VALUES ('', '$id', '$commentContent', '$data')";
        mysqli_query($db, $question);

        mysqli_close($db);
    }

}
