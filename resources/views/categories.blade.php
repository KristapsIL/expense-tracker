<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
</head>
<body>
    @foreach($categories as $category)
        <p>{{$category->id}}</p>
        <p>{{$category->name}}</p>
        <p>{{$category->hex_color}}</p>
    @endforeach
</body>
</html>