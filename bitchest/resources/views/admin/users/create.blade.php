<!DOCTYPE html>
<html lang="en">
<head>
    <title>BitChest</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Celia&display=swap');

        body {
            font-family: 'Celia', sans-serif;
            background-color: #01FF19;
            color: #FFFFFF;
        }

        form {
            background-color: #38618C;
            padding: 20px;
            border-radius: 8px;
        }

        div {
            margin-bottom: 10px;
        }

        label {
            display: block;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #FF5964;
            color: #FFFFFF;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <form action="/ajouter-client" method="post">
        <div>
            <label for="nom">Nom:</label><br>
            <input type="text" id="nom" name="nom"><br>
        </div>

        <div>
            <label for="prenom">Prénom:</label><br>
            <input type="text" id="prenom" name="prenom"><br>
        </div>

        <div>
            <label for="username">Nom d'utilisateur:</label><br>
            <input type="text" id="username" name="username"><br>
        </div>

        <div>
            <label for="age">Age:</label><br>
            <input type="number" id="age" name="age"><br>
        </div>

        <div>
            <label for="ville">Ville:</label><br>
            <input type="text" id="ville" name="ville"><br>
        </div>

        <div>
            <label for="adresse">Adresse:</label><br>
            <input type="text" id="adresse" name="adresse"><br>
        </div>

        <input type="submit" value="Ajouter">
    </form>
</body>
</html>
