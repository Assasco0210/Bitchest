<!DOCTYPE html>
<html>
<head>
    <title>Tableau des utilisateurs</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Celia&display=swap');

        body {
            font-family: 'Celia', sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #38618C;
            padding: 8px;
            text-align: left;
            background-color: #01FF19;
            color: #FFFFFF;
        }

        button {
            background-color: #FF5964;
            color: #FFFFFF;
            border: none;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <table id="userTable">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Nom d'utilisateur</th>
            <th>Transaction</th>
            <th>Actions</th>
        </tr>
    </table>

    <script>
        var userTable = document.getElementById('userTable');

        function addUser(nom, prenom, email, username, echange, envoye, recu) {
            var row = userTable.insertRow(-1);
            row.insertCell(0).innerHTML = nom;
            row.insertCell(1).innerHTML = prenom;
            row.insertCell(2).innerHTML = email;
            row.insertCell(3).innerHTML = username;
            row.insertCell(4).innerHTML = echange;
            row.insertCell(5).innerHTML = envoye;
            row.insertCell(6).innerHTML = recu;
            row.insertCell(7).innerHTML = '<button onclick="modifyUser(this)">Modifier</button> <button onclick="deleteUser(this)">Supprimer</button>';
        }

        function modifyUser(btn) {
            var row = btn.parentNode.parentNode;
            var nom = prompt("Entrez le nouveau nom:");
            var prenom = prompt("Entrez le nouveau prénom:");
            var email = prompt("Entrez le nouvel email:");
            if (nom) {
                row.cells[0].innerHTML = nom;
            }
            if (prenom) {
                row.cells[1].innerHTML = prenom;
            }
            if (email) {
                row.cells[2].innerHTML = email;
            }
        }

        function deleteUser(btn) {
            var row = btn.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }

        // Exemple d'ajout d'un utilisateur
        addUser('Dupont', 'Jean', 'jean.dupont@example.com', 'jdupont', '100€', '50€', '25€');
    </script>
</body>
</html>