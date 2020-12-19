<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="{{ route('adminupdate') }}">
		@csrf
		<input type="hidden" name="id" value="{{ $product->id }}">
		<input type="text" name="name" value="{{ $product->name }}">
		<img src="{{ $product->image }}">
		<textarea name="img" value="new image"></textarea>
		<textarea name="textarea" value="{{ $product->description }}"></textarea>

		<button>save</button>
	</form>
</body>
</html>