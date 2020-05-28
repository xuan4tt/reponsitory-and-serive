<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index Product</title>
</head>
<body>
	@if(session('mess'))
	<div><h3>{{session('mess')}}</h3></div>
	@endif
	<table border="1">
		<tr>
			<th>Name</th>
			<th>Price</th>
			<th><a href="{{route('Product.add')}}">ADD</a></th>

		</tr>
		@foreach ($products as $value)
			<tr>
				<td>{{$value->name}}</td>
				<td>{{$value->price}}</td>
				<td><a href="{{route('Product.remove', ['id'=>$value->id])}}" onclick="return window.confirm('DELETE?')">DELETE</a></td>
				<td><a href="{{route('Product.edit', ['id'=>$value->id])}}">EDIT</a></td>
			</tr>
		@endforeach
	</table>

</body>
</html>