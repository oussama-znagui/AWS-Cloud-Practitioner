<?php
session_start();
$_SESSION["quiz"]++;
print_r($_SESSION);
header("Location: ../view/quiz.php");
