<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="{{ route('adminstore') }}">
		@csrf
		<input type="text" name="name">
		<textarea name="desc"></textarea>
		<textarea name="img"></textarea>
		<textarea name="store_name"></textarea>
		<button>save</button>
	</form>
</body>
</html>