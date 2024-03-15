<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BitChest</title>
    <style>
        body {
            font-family: 'Célias', sans-serif;
            background-color: #38618C;
            color: #FFFFFF;
        }
        h2 {
            color: #01FF19;
        }
        label {
            color: #FF5964;
        }
        input[type=text], textarea {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #01FF19;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=submit] {
            width: 100%;
            background-color: #01FF19;
            color: #FFFFFF;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #35A7FF;
        }
    </style>
</head>
<body>

<h2>Ajouter une nouvelle crypto-monnaie</h2>

<form action="/admin/news" method="post" enctype="multipart/form-data">
    <div>
        <label for="title">Titre:</label><br>
    <input type="text" id="title" name="title"><br>
    </div>
    <div>
<label for="text">Texte:</label><br>
    <textarea id="text" name="text"></textarea><br>
    </div>
    <div>
        <label for="author">Nom de l'auteur:</label><br>
    <input type="text" id="author" name="author"><br>
    </div>
    <div>
        <label for="photo">Photo:</label><br>
    <input type="file" id="photo" name="photo"><br>
    </div>
    
    
    <input type="submit" value="Publier">
</form>

</body>
</html>
