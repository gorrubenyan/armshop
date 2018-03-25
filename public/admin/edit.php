<?php 

$id = $_GET['id'];
$conn = mysqli_connect('localhost','root','usbw','shop');

mysqli_set_charset($conn,'utf8');

$sql = "SELECT * FROM `products` WHERE `id`=$id";

$res = mysqli_query($conn,$sql);

$arr = mysqli_fetch_all($res, MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style_admin.css">
	<meta charset="utf-8">
	<title>EDIT</title>
</head>
<body>

<main class="admin">
	<form action="action.php" method="post" class="insertTable" enctype="multipart/form-data">
	<h1>Edit item</h1>
	<table>
		<tr>
			<td>ID:</td>
			<td><input type="text" name="aydi" value="<?php echo $arr[0]['id'] ?>" readonly></td>
		</tr>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="anun" value="<?php echo $arr[0]['name'] ?>"></td>
		</tr>
		<tr>
			<td>Price:</td>
			<td><input type="number" name="gin" value="<?php echo $arr[0]['price'] ?>"></td>
		</tr>
		<tr>
			<td>Image:</td>
			<td><input type="file" name="nkar" value="<?php echo $arr[0]['img'] ?>"></td>
		</tr>
		<tr>
			<td>Text:</td>
			<td><textarea name="nkaragrutyun"><?php echo $arr[0]['description'] ?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="edit" value="Edit.."></td>
		</tr>
	</table>
</form>


</body>
</html>