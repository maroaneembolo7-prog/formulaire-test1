<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- tailwind css -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- police google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Oswald:wght@200..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">


    <title>PAGE DE CONNEXION</title>

</head>


<body class ="`w-full box-border font-inter flex items-center justify-center  min-h-screen bg-[url('images/backgound.jpg')] bg-no-repeat bg-[length:100%_100%] text-white">

    <section class ="bg-transparent  p-6 flex flex-col backdrop-blur border border-gray-600 rounded-[5%] max-h-[700px] h-screen">
        <h1 class ="font-oswlad font-bold text-center underline text-[40px] text-[#24C6DC]">CONNEXION</h1>

        <form action="config.php" method="POST" class ="flex flex-col w-[900px] p-6 space-y-4  py-[60px]">
            <div class="">
                <label class="">Nom et Prenom :</label>
                <input type="text" name= "name" placeholder="     Veuillez entrer votre email.  (ex. Jean Dupont)" 
                class ="border border-white m-3 w-full max-w-[600px] h-[50px] p-2 border rounded-xl translate-x-3">
            </div>

            <div class="">
                <label class="">Adresse E-mail :</label>
                <input type="text" name= "email" minlegth="8" placeholder="     Veuillez entrer votre email (ex. jeanDupont@gmail.com)" 
                class ="border border-white m-3 max-w-[600px] w-full h-[50px] p-2 border rounded-xl translate-x-5">
            </div>
            <div class="">
                <label for="">Mot de Passe :</label>
                <input type="password" name= "mdp" placeholder="    Veuillez entrer votre mot de passe"
                class ="border border-white m-3 max-w-[600px] h-[50px] w-full p-2 border rounded-xl translate-x-8">
                <input type="">
            </div>
            <div class="">
                <label for="">Date de naissance :</label>
                <input type="date" 
                class="max-w-[300px] h-[50px] font-white w-full p-2 border rounded-xl translate-x-4">
            </div>
            <div class="py-2">
                <label for="">Pays :</label>
                <select name="" id="" class="text-black bg-white border rounded p-1.5 translate-x-28">
                    <option value="">ALLEMAGNE</option>
                    <option value="">ESPAGNE</option>
                    <option value="">ITALIE</option>
                    <option value="">ETATS-UNIS</option>
                    <option value="">RUSSIE</option>
                    <option value="">BELGIQUE</option>
                    <option value="">CANADA</option>
                    <option value="">CHINE</option>
                </select>
            </div>
            <div class="">
                <button type="submit"
                    class ="border border-white m-3 flex items-center justify-center hover:bg-[#DA22FF] bg-[#24C6DC] hover:translate-y-1 transition duration-300 w-full border rounded-xl max-w-[200px] h-[50px] translate-x-75">
                    Valider
                </button>
            </div>
        </form>
    </section>
</body>
</html>