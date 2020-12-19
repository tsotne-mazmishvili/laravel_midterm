<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@foreach ($products as $product)
		<div>
			<div>{{ $product->name }}</div>
			<div>{{ $product->description }}</div>
			<div>{{ $product->image }}</div>
		</div>
		@endforeach
</body>
</html>