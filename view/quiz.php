<?php
session_start();
include '../connexion.php';

include '../model/gameQuestion.php';
include '../model/answer.php';
if ($_SESSION['username'] = "") {
    header('location: index.php');
} else {

    // print_r($_SESSION);
    echo $_SESSION["quiz"];
    $idQ = $_SESSION['question'][$_SESSION["quiz"]];
    $question = new Question();
    $question->__set("idQ", $idQ);
    $question->getQuestion();
    $Answers = Answer::getAnswer($question);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>


    <title>AWS Cloud Practitioner</title>
</head>

<body>
    <header class="h-screen bg-[radial-gradient(ellipse_at_right,_var(--tw-gradient-stops))] from-gray-900 to-gray-600 bg-gradient-to-r  flex justify-center items-center  ">
        <div class="w-3/4 my-5 	">
            <!-- <div class="flex justify-between items-center w-3/4 m-auto" >
                <img src="../media/aws.webp" alt="">
                <p>1/10</p>
            </div> -->
            <div class="my-5 w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700 ">
                <div class="bg-blue-600 h-2.5 rounded-full" style="width:<?php echo $_SESSION['quiz'] * 10 ?>%"></div>
            </div>
            <div class="h-28	 bg-yellow-200 border-2 border-zinc-50 p-5 rounded-full  border-2 m_auto shadow-[0_0_2px_#fff,inset_0_0_2px_#fff,0_0_5px_#08f,0_0_15px_#08f,0_0_30px_#08f]">
                <h1 class="text-center  m-auto  text-lg font-extrabold leading-none tracking-tight  md:text-xl lg:text-2xl"><?php echo $question->__get('question')  ?>
                </h1>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <?php
                $lettre = "A";
                foreach ($Answers as $Answer) {
                    // print_r($Answer);


                ?>
                    <div class="h-24 m-5 bg-slate-200 p-5 rounded-3xl">

                        <h2 class="text-center w-3/4 m-auto  text-xs font-bold leading-none tracking-tight text-black md:text-xl lg:text-sm  ">
                            <?php echo $lettre ?> /<span><?php echo $Answer->__get('answer') ?></span>
                        </h2>

                    </div>

                <?php
                    $lettre++;
                }
                ?>

            </div>

            <div class="flex justify-between items-center ">
                <div>
                    <?php
                    if (@$_GET['error']) {

                    ?>
                        <div class=' bg-red-600 flex justify-center items-center p-5 rounded-xl'>
                            <h2 class='text-sm font-medium text-gray-100'>
                                &#x26A0; s'il vous plait veuillez selectionner labonne reponse
                            </h2>
                        </div>
                    <?php
                    }
                    ?>

                </div>
                <form action="./../controller/quiz.php" method="post" class="bg-green-500 rounded-xl p-5 ">


                    <label for="" class="  text-sm font-medium text-gray-100">Selectionez la bonne reponse</label>
                    <select name="correction" id="" class="  p-2  text-sm text-gray-900 border border-gray-300 rounded-lg ">
                        <option value="">--</option>
                        <?php
                        $lettre = 'A';
                        foreach ($Answers as $Answer) {
                            // print_r($Answer);
                        ?>
                            <option value="<?php echo $Answer->correction; ?>"><?php echo $lettre ?></option>
                        <?php
                            $lettre++;
                        }
                        ?>
                    </select>

                    <input type="submit" name="go" value="<?php echo $_SESSION['button'] ?>" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5  ">
                </form>

            </div>



        </div>


    </header>


</body>

</html>