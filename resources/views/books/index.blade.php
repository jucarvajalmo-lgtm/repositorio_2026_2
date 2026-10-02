<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de la Página</title>
</head>
<body> 
<table border=5> 
    <thead>
        <tr>
            <th>nombre  </th>

            <th>autor  </th>

            <th>precio  </th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->price }}</td>
        </tr>
        @endforeach
    </tbody>


    <div> 
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <input type="text" name="title">
        <input type="text" name="author">
        <input type="number" name="price">
        <button type="submit">guardar</button>
    </form>
        
    </div>
</table>

</body>
</html>




