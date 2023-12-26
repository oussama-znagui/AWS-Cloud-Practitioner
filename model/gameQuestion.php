<?php

include 'game.php';
include 'question.php';
class gameQuestion
{
    private $id_gameQuestion;
    private Game $game;
    private Question $question;
    private $userAnswer;

    public function __construct($id, $game, $question, $userAnswer)
    {
        $this->id_gameQuestion = $id;
        $this->game = $game;
        $this->question = $question;
        $this->userAnswer = $userAnswer;
    }

    public function addGameQuestion()
    {
        // $sq
    }
}

// $a = new gameQuestion(1, 1, 0, 1, "oussama", 1, "question", 1, "allo", null);
// print_r($a);
