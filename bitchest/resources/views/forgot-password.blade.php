<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITCHEST</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Celias&display=swap');

        body {
            font-family: 'Celias', sans-serif;
            color: #FFFFFF; /* Blanc */
            background-color: #38618C; /* Bleu foncé */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #FFFFFF; /* Blanc */
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #01FF19; /* Vert fluo */
        }

        form input[type="text"],
        form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #35A7FF; /* Bleu clair */
            border-radius: 3px;
            box-sizing: border-box;
        }

        form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            background-color: #FF5964; /* Rose */
            color: #FFFFFF; /* Blanc */
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: #01FF19; /* Vert fluo */
        }

        form a {
            color: #01FF19; /* Vert fluo */
            text-decoration: none;
        }

        form a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <form action="{{ url('/forgot-password') }}" method="post">
        @csrf
        <div>
            <label for="username">Entrez votre nom d'utilisateur:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="new_password">Entrez votre nouveau mot de passe:</label>
            <input type="password" name="new_password" id="new_password" required>
        </div>
        <div>
            <label for="confirm_password">Confirmez votre nouveau mot de passe:</label>
            <input type="password" name="confirm_password" id="confirm_password" required>
        </div>
        <button type="submit">Changer le mot de passe</button>
    </form>
</body>
</html>