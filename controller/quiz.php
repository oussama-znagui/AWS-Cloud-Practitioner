<?php
session_start();
if (empty($_SESSION['button'])) {
    header("Location: ../view/quiz.php");
    exit;
    die('aloooo');
}


if (!is_numeric($_POST['correction'])) {
    header("Location: ../view/quiz.php?error=yes");

    // exit;
} else {
    $_SESSION["quiz"]++;
    // print_r($_SESSION);
    $correction =  $_POST['correction'];


    if ($correction == 1) {
        $_SESSION['score'] += 10;
    }
    if ($_SESSION["quiz"] == 10) {
        header("Location: ../view/bravo.php");
        exit;
        die('aloooo');
    }

    if ($_SESSION["quiz"] == 9) {
        $_SESSION['button'] = "Terminer";
    }

    header("Location: ../view/quiz.php");
}
