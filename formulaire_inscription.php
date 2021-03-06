
<?php
// Initialiser la session
session_start();
?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .body-bg {
        
        background-image: url("img/paysage2.jpg");
        background-size: cover;
        
    }
</style>
</head>
<body class="body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">
<header class="max-w-lg mx-auto">

</header>
<button class=" mx-5 px-5 bg-green-700 hover:bg-green-900 text-white font-bold py-2 rounded shadow-lg hover:shadow-2xl transition duration-200" type="submit">
    <a href="index.php">Revenir à l'accueil</a>
</button>
<main class="bg-white-500 max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
    <section>
        <h3 class="font-bold text-2xl text-white text-center">Inscription au GAME CLUB</h3>
    </section>

    <section class="mt-10">
        <form class="flex flex-col" method="POST" action="inscription_utilisateurs.php">
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="pseudo">Pseudo</label>
                <input type="text" id="pseudo" name="pseudo" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-700 transition duration-500 px-3 pb-3 shadow-outline">
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="email">Email</label>
                <input type="text" id="email" name="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-700 transition duration-500 px-3 pb-3 shadow-outline">
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="mdp">Mot de passe</label>
                <input type="password" id="mdp" name ="mdp" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-700 transition duration-500 px-3 pb-3">
            </div>
            
            <button class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit" name="inscription">S'inscrire</button>
        </form>
    </section>
</main>

<div class="max-w-lg mx-auto text-center mt-12 mb-6">
    <p class="text-white">Déjà un compte? <a href="test_connexion2.php" class="font-bold hover:underline">Se connecter</a>.</p>
</div>

<footer class="max-w-lg mx-auto flex justify-center text-white">
    <a href="#" class="hover:underline">Contact</a>
    <span class="mx-3">•</span>
    <a href="#" class="hover:underline">Privacy</a>
</footer>
</body>
</html>