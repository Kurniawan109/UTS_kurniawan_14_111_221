@extends('templates.index')
@section('content')
<article>
		<table border="1" width="75%" align="center">
			<tr>
				<th>Tambah Data</th>
			</tr>
			<tr>
				<td>No</td>
				<td>:</td>
				<td><input type="text" name="no" size="70"></input></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" size="70"></input></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" size="70"></input></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" size="70"></input></td>
			</tr>
			<tr>
				<td>Aksi</td>
				<td>:</td>
				<td><input type="text" name="aksi" size="70"></input></td>
			</tr>
			<tr>

				<td colspan="3"><input type="button" value="UPDATE"></input><input type="button" value="BATAL"></input><a 
				href="index.php"><button type="submit">KEMBALI</button></a></td>
			</tr>
		</table>
	</article>
@stop
