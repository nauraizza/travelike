<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="http://localhost/travelike/codeigniter/index.php/user/add">Tambah</a>
	<table border="1">
		<tr> <!--td ke samping tr kebawah-->
			<td>id</td>
			<td>username</td>
			<td>password</td>
			<td>fullname</td>
			<td>level</td>
		</tr>
		<?php foreach ($isi->result() as $key): ?> <!--variable isi dihasilkan kemudian ditampung di $key foreach digunakan apabila ada data di dalam database maka akan ditampilkan atau akan ngloop sampai data ditampilkan semua -->
			<tr>
				<td><?php echo $key->id ?></td>
				<td><?php echo $key->username ?></td>
				<td><?php echo $key->password ?></td>
				<td><?php echo $key->fullname ?></td>
				<td><?php echo $key->level ?></td>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>