<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITCHEST</title>
    <style>
        body {
            font-family: 'Celias', sans-serif;
            color: #FFFFFF;
            background-color: #38618C;
            /* Bleu foncé */
            margin: 0;
            padding: 0;
        }

        section {
            display: flex;
            justify-content: space-between;
            padding: 40px;
            background-color: #38618C;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #FFFFFF;
            /* Blanc */
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #01FF19;
            /* Vert fluo */
        }

        form input[type="text"],
        form input[type="email"],
        form input[type="password"],
        form input[type="file"],
        form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #35A7FF;
            /* Bleu clair */
            border-radius: 3px;
            box-sizing: border-box;
        }

        form button {
            background-color: #FF5964;
            /* Rose */
            color: #FFFFFF;
            /* Blanc */
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: #01FF19;
            /* Vert fluo */
        }

        .marketing-content {
            flex-basis: 40%;
            background-color: #35A7FF;
            /* Bleu clair */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .marketing-content h2 {
            color: #FFFFFF;
            /* Blanc */
            margin-bottom: 20px;
        }

        .marketing-content p {
            color: #FFFFFF;
            /* Blanc */
            line-height: 1.5;
        }

        h4 {
            color: #35A7FF;
            /* Blanc pour contraster avec l'arrière-plan */
            text-align: center;
            margin-top: 20px;
        }

        h4 a {
            color: #35A7FF;
            /* Bleu clair pour le lien */
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div>
        <img src="images/logo.jpeg" alt="" style="height: 200px; width:200px;">
    </div>
    <section>

        <form action="" method="get">

            <div>
                <label for="name">Entrez votre nom :</label>
                <input type="text" name="nom" id="nom">
            </div>

            <div>
                <label for="prenom">Entrez votre prénom :</label>
                <input type="text" name="prenom" id="prenom">
            </div>

            <div>
                <label for="email">Entrez votre email :</label>
                <input type="email" name="email" id="email">
            </div>

            <div>
                <label for="username">Entrez votre nom d'utilisateur :</label>
                <input type="text" name="username" id="nom_user">
            </div>

            <div>
                <label for="password">Entrez votre mot de passe :</label>
                <input type="password" name="password" id="password">
            </div>

            <div>
                <label for="photo">Photo d'identité :</label>
                <input type="file" id="photo" name="photo" accept=".jpg, .jpeg, .png">
            </div>

            <div>
                <label for="piece_identite">Pièce d'identité :</label>
                <input type="file" id="piece_identite" name="piece_identite" accept=".jpg, .jpeg, .png, .pdf">
            </div>

            <div>
                <label for="preuve_residence">Preuve de résidence :</label>
                <input type="file" id="preuve_residence" name="preuve_residence" accept=".jpg, .jpeg, .png, .pdf">
            </div>

            <div>
                <label for="carte_releve">Carte de crédit ou relevé bancaire :</label>
                <input type="file" id="carte_releve" name="carte_releve" accept=".jpg, .jpeg, .png, .pdf">
            </div>

            <button type="submit">S'enregistrer</button>

            <h4>Vous avez déjà un compte ? Alors <a href="./connection.blades.php">connectez-vous</a></h4>
        </form>


        <div class="marketing-content">
            <h2>Rejoignez la révolution du trading</h2>
            <p>Avec BITCHEST, tradez sur une plateforme sécurisée et avancée. Profitez d'outils de pointe pour une expérience de trading optimale.</p>
            <img src="images/TradingPlatforms.jpg" alt="" style="height: 400px; width: 560px;">  
        </div>
    </section>

    <footer style="display: flex;  justify-content: space-around;">
        <div style="display: flex; flex-direction:column">
            <h3>a propos de nous</h3>
        </div>
        <div>
            <h3>produits</h3>
        </div>
        <div>
            <h3>apprendre</h3>
        </div>
        <div>
            <h3>nous contacter</h3>
        </div>
        <div>
            <h3>assistance technique</h3>
        </div>
    </footer>
</body>

</html>