<?php  

$conn = mysqli_connect('localhost','root','usbw','shop');

mysqli_set_charset($conn,'utf8');

$sql = "SELECT * FROM `products`";

$res = mysqli_query($conn,$sql);

$arr = mysqli_fetch_all($res, MYSQLI_ASSOC);

// echo "<pre>";
// print_r($arr);
// echo "</pre>";

?>

<!DOCTYPE html>
<html>
<head>
	<title>INSERT / DELETE</title>
	<link rel="stylesheet" type="text/css" href="style_admin.css">
	<meta charset="utf-8">
</head>
<body>



<main class="admin">
	<form action="action.php" method="post" class="insertTable" enctype="multipart/form-data">
	<h1>Insert item</h1>
	<table>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="anun"></td>
		</tr>
		<tr>
			<td>Price:</td>
			<td><input type="number" name="gin"></td>
		</tr>
		<tr>
			<td>Image:</td>
			<td><input type="file" name="nkar" 	></td>
		</tr>
		<tr>
			<td>Text:</td>
			<td><textarea name="nkaragrutyun"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="ins" value="Add"></td>
			<a href="../shop.php" style = "text-decoration:none">OK</a>
		</tr>
	</table>
</form>







<table border="1" cellpadding="15" class="prod_table">
	<tr>
		<th>Name</th>
		<th>Price</th>
		<th>Delete</th>
		<th>Edit</th>
	</tr>

	<?php  
	$i = 0;
	while($i<count($arr)){
	?>
	<tr>
		<td><?php echo $arr[$i]['name'] ?></td>
		<td><?php echo $arr[$i]['price'] ?></td>
		<td>
			<a href="action.php?del=<?php echo $arr[$i]['id'] ?>">
				<img src="adm_images/del.png" width="50px">
			</a>
		</td>
		<td>
			<a href="edit.php?id=<?php echo $arr[$i]['id'] ?>">
				<img src="adm_images/ed.jpg" width="50px">
			</a>
		</td>
	</tr>

	<?php
		$i++;
	}

	?>

	
</table>




</main>

</body>
</html>




















