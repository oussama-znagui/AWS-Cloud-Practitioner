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
}
// $test = new Game(null, 0, 1, 'oussama');
// echo $test->user->__get('name');
