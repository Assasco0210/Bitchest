<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITCHEST</title>
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

