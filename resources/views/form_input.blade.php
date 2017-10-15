<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ini Input</title>

</head>
<body>
	ini akan ada form input
	<br>
	<br>

	<form action="/barang/input" method="POST">

	{{-- @if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif --}}

		{{ csrf_field()}}

		<label for="nbarang">Nama Barang</label>
		<input type="text" name="nbarang" id="nbarang" placeholder="Nama Barang" required><br>


		<label for="jumlah">Jumlah</label>
		<input type="number" name="jumlah" id="jumlah" placeholder="Jumlah" required><br>
		
		<label for="harga">Harga</label>
		<input type="number" name="harga" id="harga" placeholder="Harga" required><br>
		
		<label for="status">Status</label>
		<input type="radio" name="status" id="status" placeholder="banyak" required>Ready
		<input type="radio" name="status" id="status" placeholder="inden" required>Inden<br>

		<label for="status">Tanggal Beli</label>
		<select name="tanggal_beli" id="">
			<option value="1">15 Oktober 2017</option>
			<option value="2">16 Oktober 2017</option>
			<option value="3">18 Oktober 2017</option>
			<option value="4">19 Oktober 2017</option>
		</select>

		<input type="submit" name="submit" value="Simpan">
	</form>

	<script type="text/javascript">
		@if(session('session'))
		alert('Data ini tersimpan');
		@endif
	</script>
	
</body>
</html>