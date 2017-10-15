<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ini Mahasiswa</title>
</head>
<body>
	<ol>
		@foreach($dmahasiswa as $data)
		<li>{{$data->nama}} alamat: {{$data->alamat}}</li>
		@endforeach

	</ol>
	
</body>
</html>