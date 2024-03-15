<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BitChest</title>
</head>
<body>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Titre</th>
            <th scope="col">Texte</th>
            <th scope="col">Auteur</th>
            <th scope="col">Photo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($news as $newsItem)
            <tr>
                <td>{{ $newsItem->title }}</td>
                <td>{{ $newsItem->text }}</td>
                <td>{{ $newsItem->author }}</td>
                <td><img src="{{ asset('storage/' . $newsItem->photo) }}" alt="Photo"></td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
