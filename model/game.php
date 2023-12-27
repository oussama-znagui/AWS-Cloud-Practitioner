<?php

include 'user.php';




class Game
{
    private $id_game;
    private $score;
    // private $id_user;
    private User $user;

    public function __construct($id_game, $score, $id_user, $name)
    {
        $this->user = new User($id_user, $name);
        $this->id_game = $id_game;
        $this->score = $score;
    }

    public function __get($prop)
    {
        return $this->$prop;
    }

    public function __set($prop, $value)
    {
        $this->$prop = $value;
    }

    public function newGame()
    {
        $sql = db::connexion()->prepare("INSERT into game values(:id,:score,:idUser)");
        $sql->bindParam(":id", $this->id_game);
        $sql->bindParam(":score", $this->score);
        $idUser = $this->user->__get("id_user");
        $sql->bindParam(":idUser", $idUser);
        $sql->execute();






        // $this->id_game = $idGame;
    }

    public  function selectLastGame()
    {
        $a = $this->user->id_user;
        $sql = db::connexion()->query("SELECT * FROM `game` WHERE id_user = $a  ORDER BY id_game DESC LIMIT 1");
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        $this->id_game = $result[0]['id_game'];
    }
}
// $game = new Game(NULL, 12222, 1, "oussama");
// $game->newGame();
// print_r($game);
// print_r($game->selectLastGame());
// print_r($game);
