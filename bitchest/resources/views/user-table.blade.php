<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BitChest</title>
</head>
<body>
<table>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->nom }}</td>
            <td>{{ $user->prenom }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->echange }}</td>
            <td>{{ $user->envoye }}</td>
            <td>{{ $user->recu }}</td>
        </tr>
    @endforeach
</table>

</body>
</html>
