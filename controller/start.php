<?php
include '../connexion.php';
include '../model/gameQuestion.php';




if (empty($_POST['username'])) {
    header('Location: ../view/index.php');
} else {
    $Username = $_POST['username'];
    $user = new User(null, $Username);
    if ($user->chekUser()) {
        $user->addNewUser();
        $_SESSION['username'] = $user->__get("name");

        // header("Location: quiz.php");
    } else {
        $user = $user->selectUser();
        // print_r($user);
        $game = new Game(NULL, 0, $user->__get("id_user"), $user->__get("name"));
        $game->newGame();
        // $question = new Question();

        $questions = Question::GetAllQuestion();
        shuffle($questions);
        // print_r($questions);
        foreach ($questions as $question) {
            $gameQuestion = new gameQuestion(null, $game, $question, null);
            
        }


        

        // print_r($gameQuestion);



        $_SESSION['username'] = $user->__get("name");
        // header("Location: ../view/quiz.php");
    }
}
