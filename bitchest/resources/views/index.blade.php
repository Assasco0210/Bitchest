<!DOCTYPE html>
<html>

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Celias&display=swap');

        body {
            /* Utilisez l'URL de l'image comme image d'arrière-plan */
            background-image: url('/images/f1d7cbe8d9a34ada593e9355a0b68535965a681a.webp');
            background-size: cover;
            /* Ajustez la taille de l'image d'arrière-plan pour couvrir toute la zone */
            background-repeat: no-repeat;
            /* Empêchez l'image d'arrière-plan de se répéter */
            font-family: 'Celias', sans-serif;
            color: #FFFFFF;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        h1 {
            font-size: 36px;
        }

        p {
            font-size: 24px;
        }

        a {
            background-color: #FF5964;
            color: #FFFFFF;
            border: none;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 12px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Bienvenue sur notre plateforme de trading</h1>
        <p>Nous offrons une plateforme de trading sécurisée et facile à utiliser. Commencez dès aujourd'hui et rejoignez des milliers de traders qui utilisent notre plateforme.</p>
        <a href="{{ url('/inscription') }}" class="btn btn-primary">c'est parti !</a>

    </div>
</body>

</html>
