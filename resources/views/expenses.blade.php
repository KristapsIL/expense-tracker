<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
</head>
<body>

    @foreach($expenses as $expense)
        <p>{{$expense->id}}</p>
        <p>{{$expense->expense_date}}</p>
        <p>{{$expense->amount}}</p>
        <p>{{$expense->category_id}}</p>
    @endforeach
</body>
</html>