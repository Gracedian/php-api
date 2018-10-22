<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
</head>
<body>
	<div class="judul">
		<h1></h1>
		<h2>Menampilkan data dari database</h2>
	</div>
	<br/>
	<a href="tabel.php">Lihat Semua Data</a>
	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post">
		<table>
      <tr>
        <td>Id</td>
        <td><input type="text" name="id"></td>
      </tr>
			<tr>
				<td>Username</td>
				<td><input required="username" type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input required="password" type="password" name="password"></td>
			</tr>
			<tr>
				<td>Level</td>
				<td><input required="level" type="text" name="level"></td>
			</tr>
      <tr>
				<td>Fullname</td>
				<td><input required="fullname" type="text" name="fullname"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>