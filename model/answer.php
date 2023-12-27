<?php
class Answer
{
    private $id_answer;
    private Question $question;
    private $answer;
    private $correction;
    private $explication;

    public function __construct($ida,$q,$answer,$correc,$exp){
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

    public static function getAnswer($question){
        $idq = $question->idQ;
        $sql = db::connexion()->query("SELECT * SELECT * FROM `answer` JOIN question WHERE answer.id_question = question.id_question AND question.id_question = $idq");
        
        


        
    }

    


    


    
}
