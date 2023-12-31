<?php
include 'theme.php';
class Question
{
    private $idQ;
    private $question;
    private Theme $theme;

    public function __construct()
    {
        $this->theme = new Theme();
    }
    public function __get($prop)
    {
        return $this->$prop;
    }

    public function __set($prop, $value)
    {
        $this->$prop = $value;
    }

    public static function GetAllQuestion()
    {
        $sql = Db::connexion()->query('SELECT * from question JOIN theme where question.id_theme = theme.id_theme');
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        $arrayQuestion = array();

        foreach ($result as $row) {
            $question = new Question();

            $question->__set('idQ', $row['id_question']);
            $question->__set('question', $row['question']);
            $question->theme->__set('idTheme', $row['id_theme']);
            $question->theme->__set('theme', $row['theme']);


            array_push($arrayQuestion, $question);
        }

        return $arrayQuestion;
    }
    public function getQuestion()
    {
        $idQ = $this->idQ['id_question'];

        $sql = db::connexion()->query("SELECT * FROM question join theme where question.id_theme = theme.id_theme AND  id_question = $idQ ");
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        $this->idQ = $result[0]['id_question'];
        $this->question = $result[0]['question'];
        $this->theme->idTheme = $result[0]['id_theme'];
        $this->theme->theme = $result[0]['theme'];
    }
}

$a = Question::GetAllQuestion();
// print_r()
