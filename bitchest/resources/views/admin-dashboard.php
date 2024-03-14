<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de bord de l'administrateur</title>
    <!-- Ajoutez ici vos liens CSS -->
    <style>
        body {
    font-family: 'Célias', sans-serif;
    background-color: #38618C;
    color: #FFFFFF;
}

#sidebar {
    position: fixed;
    width: 200px;
    height: 100%;
    background-color: #35A7FF;
    padding: 20px;
    box-sizing: border-box;
}

#sidebar h1 {
    color: #01FF19;
    font-size: 24px;
}

#sidebar ul {
    list-style-type: none;
    padding: 0;
}

#sidebar ul li a {
    color: #FFFFFF;
    text-decoration: none;
}

#main {
    margin-left: 220px;
    padding: 20px;
    box-sizing: border-box;
}

form {
    background-color: #FF5964;
    padding: 20px;
    box-sizing: border-box;
}

form input[type="text"],
form textarea {
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
}

form input[type="submit"] {
    padding: 10px 20px;
    background-color: #01FF19;
    border: none;
    cursor: pointer;
}

    </style>
</head>
<body>
    <div id="sidebar">
        <h1>Dashboard</h1>
        <ul>
            <li><a href="/admin/users">Gérer les clients</a></li>
            <li><a href="/admin/users/create">Ajouter un nouvel utilisateur</a></li>
            <li><a href="/admin/cryptos">Consultation des cours des cryptomonnaies</a></li>
            <li><a href="/admin/news/create">Ajouter des actualités sur les cryptomonnaies</a></li>
            <li><a href="/admin/news">Voir la liste des actualités sur les cryptomonnaies</a></li>
        </ul>
    </div>

    <div id="main">
        <!-- Le contenu de chaque page sera affiché ici -->
    </div>
</body>
</html>
