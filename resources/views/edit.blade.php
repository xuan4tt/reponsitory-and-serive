<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('xuan',['id'=>$product->id])}}">
        {{ csrf_field() }}
        <p>
            <label for="name">Name</label><br>
            <input type="text" name="name" value="{{$product->name}}">
        </p>
    
        <p>
            <label for="price">Price</label><br>
            <input type="number" name="price" value="{{$product->price}}">
        </p>
    
    
        <p>
            <button type="submit">Submit</button>
        </p>
    </form>
</body>
</html>