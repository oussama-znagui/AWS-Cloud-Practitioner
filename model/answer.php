<?php
// include '../connexion.php';
// include 'question.php';

class Answer
{
    private $id_answer;
    private Question $question;
    private $answer;
    private $correction;
    private $explication;

    public function __construct($ida, $q, $answer, $correc, $exp)
    {
        $this->id_answer = $ida;
        $this->question = $q;
        $this->answer = $answer;
        $this->correction = $correc;
        $this->explication = $exp;
    }

    public function __get($prop)
    {
        return $this->$prop;
    }

    public function __set($prop, $value)
    {
        $this->$prop = $value;
    }

    public static function getAnswer($question)
    {
        $idq = $question->idQ;
        $sql = db::connexion()->query("SELECT * FROM `answer` JOIN question WHERE answer.id_question = question.id_question AND question.id_question = $idq");
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        $arrayAnswers = array();

        foreach ($result as $row) {
            $answer = new Answer($row["id_answer"], $question, $row['answer'], $row['correction'], $row['explication']);
            array_push($arrayAnswers, $answer);
        }
        return $arrayAnswers;
    }
}

// $q = new Question();
// $q->__set("idQ", 4);
// print_r(Answer::getAnswer($q));
