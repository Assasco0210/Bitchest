<!DOCTYPE html>
<html>
<head>
    <title>Réinitialisation du mot de passe</title>
</head>
<body>
    <h1>Réinitialisation du mot de passe</h1>

    <p>Bonjour,</p>

    <p>Vous recevez cet e-mail parce que nous avons reçu une demande de réinitialisation de mot de passe pour votre compte.</p>

    <p><a href="{{ url('/reset-password/' . $token) }}">Cliquez ici pour réinitialiser votre mot de passe</a></p>

    <p>Si vous n'avez pas demandé de réinitialisation de mot de passe, aucune autre action n'est nécessaire.</p>

    <p>Cordialement,</p>

    <p>L'équipe BITCHEST</p>
</body>
</html>
