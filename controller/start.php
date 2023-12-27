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
        $game = new Game(NULL, 0, $user->__get("id_user"), $user->__get("name"));
        $game->newGame();
        $game->selectLastGame();
        // print_r($game);


        $questions = Question::GetAllQuestion();
        shuffle($questions);

        foreach ($questions as $question) {
            $gameQuestion = new gameQuestion(null, $game, $question, null);
            $gameQuestion->addGameQuestion();
        }

        session_start();
        $_SESSION['username'] = $user->__get("name");
        $_SESSION['game'] = $game->__get("id_game");
        $_SESSION['question'] = $gameQuestion->getQuestions();
        $_SESSION['quiz'] = 0;
        $_SESSION['score'] = 0;
        $_SESSION['button'] = "Suivant";
        



        header("Location: ../view/quiz.php");
    }
}
