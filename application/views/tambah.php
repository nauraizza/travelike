<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="http://localhost/travelike/codeigniter/index.php/User/prosesadd" method="post">
		<input type="text" name="username" placeholder="Nama">
		<input type="password" name="password" placeholder="password">
		<input type="text" name="fullname" placeholder="fullname">
		<select name="level">
			<option value="admin">admin</option>
			<option value="user">user</option>
		</select>
		<input type="submit" name="kirim" value="Kirim">

	</form>
</body>
</html>