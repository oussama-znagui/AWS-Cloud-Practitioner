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
        $sql = db::connexion()->prepare("INSERT INTO gamequestion (id_game,id_question) values(:idgame,:idquestion)");
        $idg = $this->game->id_game;
        $idq = $this->question->idQ;
        $sql->bindParam(":idgame", $idg);
        $sql->bindParam(":idquestion", $idq);

        $sql->execute();
    }

    public function getQuestions()
    {
        $id = $this->game->id_game;
        $sql = db::connexion()->query("SELECT id_question from gamequestion where id_game = $id");
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}

// $a = new gameQuestion(1, 1, 0, 1, "oussama", 1, "question", 1, "allo", null);
// print_r($a);
