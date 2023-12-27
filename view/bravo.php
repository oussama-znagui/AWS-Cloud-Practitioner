<?php
session_start();
if ($_SESSION['quiz'] != 10) {
    die('errooor');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Bravooo</title>
</head>

<body>
    <header class="w-full h-screen bg-[radial-gradient(ellipse_at_right,_var(--tw-gradient-stops))] from-gray-900 to-gray-600 bg-gradient-to-r  flex justify-center items-center flex-col">


        <?php
        if ($_SESSION['score'] > 65) {


        ?>
            <div class="w-56 h-56 bg-green-700 rounded-full flex justify-center items-center ">
                <div class="w-52 h-52 bg-green-500 rounded-full flex justify-center items-center flex-col">
                    <h1 class="my-3 text-gray-200 text-5xl font-black">
                        <?php echo $_SESSION['score'] ?>%
                    </h1>
                    <h2 class="text-gray-200 font-black text-2xl">
                        score : <?php echo $_SESSION['score'] ?>
                    </h2>

                </div>

            </div>

            <h1 class="my-3 text-gray-200 text-5xl font-black">Félécitation !!</h1>

        <?php
        } else {


        ?>


            <div class="w-56 h-56 bg-red-700 rounded-full flex justify-center items-center ">
                <div class="w-52 h-52 bg-red-500 rounded-full flex justify-center items-center flex-col">
                    <h1 class="my-3 text-gray-200 text-5xl font-black">
                        <?php echo $_SESSION['score'] ?>%
                    </h1>
                    <h2 class="text-gray-200 font-black text-2xl">
                        score : <?php echo $_SESSION['score'] ?>
                    </h2>

                </div>

            </div>

            <h1 class="my-3 text-gray-200 text-5xl font-black">oooooooooooooooh !!</h1>

        <?php

        }
        ?>
    </header>

</body>

</html>