<meta charset="utf-8">
<?php  

echo '<h5>$_POST սուպերգլոբալ</h5>';
echo "<pre>";
print_r($_POST);
echo "</pre>";

echo '<h5>$_FILES սուպերգլոբալ</h5>';
echo "<pre>";
print_r($_FILES);
echo "</pre>";

echo '<h5>$_GET սուպերգլոբալ</h5>';
echo "<pre>";
print_r($_GET);
echo "</pre>";




// կապ ենք հաստատում բազայի հետ
$conn = mysqli_connect('localhost','root','usbw','shop');

// Սահմանում ենք բազայի հետ <<խոսելու լեզուն>>
mysqli_set_charset($conn,'utf8');






// ____ԱՊՐԱՆՔՆԵՐԻ ՆԵՐՄՈՒԾՈՒՄ____

if( isset($_POST['ins']) ){
$anun = $_POST['anun'];
$gin = $_POST['gin'];
$nkaragrutyun = $_POST['nkaragrutyun'];
$img_src = $_FILES["nkar"]["name"];
$sql = "INSERT INTO `products`
		(`name`, `price`, `image`, `description`) 
	VALUES
		('$anun', '$gin', '$img_src', '$nkaragrutyun')";
move_uploaded_file($_FILES["image"]["tmp_name"], "../".$img_src);
mysqli_query($conn,$sql);
}	





//  ____ԱՊՐԱՆՔՆԵՐԻ ՋՆՋՈՒՄ____

if( isset($_GET['del']) ){

$id =$_GET["del"];
$del = mysqli_query
($conn,"DELETE FROM `Products`
 WHERE `id` = '$id'");



}	



// ____ԱՊՐԱՆՔՆԵՐԻ ԹԱՐՄԱՑՈՒՄ____

if( isset($_POST['edit']) ){
	$iid = $_POST['aydi'];
$anun = $_POST['anun'];
$gin = $_POST['gin'];
$nkaragrutyun = $_POST['nkaragrutyun'];
$img_src = $_FILES["nkar"]["name"];


$sqli = "
UPDATE `Products`
 SET `name`='$anun',`price`='$gin',
 	`image`='$img_src',`description`='$nkaragrutyun' 
WHERE `id` = '$iid'";

mysqli_query($conn,$sqli);




}	


?>















