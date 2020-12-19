<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table,tr,td,th{
			border:solid 2px black;
			border-collapse: collapse;
			padding: 8px;
		}

	</style>
</head>
<body>
	<table>
		<tr>
			<td>#</td>
			<td>name</td>
			<td>store</td>
			<td>image</td>
			<td>action</td>
		</tr>

		@foreach ($products as $product)
			<tr>
				<td>{{ ++$loop->index}}</td>
				<td><a href="{{ route("adminshow",["id"=>$product->id]) }}">{{ $product->name}}</a></td>
				{{--

				<td>{{ $store::find($product->store_id)->select('store_name')}}</td>
				--}}
				<td>{{ $product->store_id}}</td>
				<td><img src="{{ $product->image}}"></td>

				<td>
					<form method="POST" action="{{ route("admindelete") }}">
						@csrf
						<input  type="hidden" name="id" value="{{ $product->id }}">
						<button>წაშლა</button>
					</form>
					<a href="{{ route("adminedit",["id"=>$product->id]) }}">ჩასწორება</a>

					
				</td>
			</tr>
		@endforeach

	</table>
</body>
</html>