<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://cdn.tailwindcss.com"></script>
      

    <title>AWS Cloud Practitioner</title>
</head>
<body>
    <header class="h-screen bg-[radial-gradient(ellipse_at_right,_var(--tw-gradient-stops))] from-gray-900 to-gray-600 bg-gradient-to-r  flex  ">
        <div class="w-3/4 m-auto flex flex-col justify-center items-center">
            <img class="w-1/5 m-auto" src="../media/logo.png" alt="">
            <h1 class="text-center w-3/4mb-4 text-3xl font-extrabold leading-none tracking-tight text-white md:text-4xl lg:text-5xl">"Quiz AWS : Testez Vos Connaissances sur Amazon Web Services"</h1>
            <p class="text-white text-center w-3/4 m-5 text-sm">Bienvenue sur Quiz AWS, votre destination pour tester et améliorer vos connaissances sur Amazon Web Services (AWS). Que vous soyez un débutant cherchant à explorer le cloud computing ou un professionnel AWS chevronné</p>
            <form action="./../controller/user.php" method="POST" class="w-3/5">
                <div class="flex w-full">
                <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 rounded-s-md  ">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                    </svg>
                </span>
              
                <input type="text" name="username" id="website-admin" class=" bg-gray-50 border text-gray-900   block flex-1 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="elonmusk">
                <input type="submit" name="go" value="Commencer le test" class="rounded-none rounded-e-lg  text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                </div>               

            </form>
        </div>

       
    </header>

    
</body>
</html>