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
    }
}
// $game = new Game(NULL, 0, 1, "oussama");
// $game->newGame();
