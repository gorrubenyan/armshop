<!DOCTYPE html>
<!-- saved from url=(0051)file:///Users/user/Desktop/test%20web%201/home.html -->
<html><head>
        <title>Online shoping</title>
        <link rel="stylesheet" type="text/css" href="tstyle.css">
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
   
	<style>
	
	.sho{
		background-color: #5858FA;
	color: black;
	border: solid;
	width: 290px;
	height: 270px;
	margin: 5px;
	border-radius: 20px;
	display:inline-block;
	}
	.sho:hover{
		background-color: orange;
	color: black;
	border: solid;
	width: 340px;
	height: 320px;

	}
	img{width: 150px;
		height: 150px;}
		
		.giny{
			background-color: #BDBDBD;
			color: black;
			border: solid #848484;
			width: 270px;
			height: 30px;
			border-radius: 90px;
			text-align: center;
			font-size: 25px;
		}
	</style>
    </head>

    <body>
  <div class="main">
    <div class="header">
            <div class="hdax">
                 <img src="tumo.png" alt="Mountain View" width="400" height="200" class="imgt">
            </div>
            <div class="haj">
            	<a href="http://localhost:8080/test%20web%202/admin" style = "text-decoration:none"> Phone 1</a><br>
            	<a href="http://localhost:8888/test%20web%202/admin" style = "text-decoration:none"> Phone 2</a>
                
            </div>
           
        </div>

     <div class="menu">
               <?php include 'menu.php'; ?>
        </div>
    <div class="content">




 <?php 
	$link =	mysqli_connect("localhost", "root", "usbw", "shop");
	// Սահմանում ենք բազայի հետ <<խոսելու լեզուն>>
	mysqli_set_charset($link,'utf8');
	$sql = "SELECT * FROM `products`";

	$res = mysqli_query($link,$sql);
	$r = mysqli_fetch_all($res, MYSQLI_ASSOC);


	// echo "<pre>";
	// print_r($r);
	// echo "</pre>";

 ?> 


<?php 
$a=0;
while ($a<count($r)) { ?>
<a href="page.php?id=<?php echo $r[$a]['id'];; ?>"  style="text-decoration: none;" >
	<div class = "sho">
	<h3><?php echo $r[$a]['name']; ?></h3>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<img src="images/<?php echo $r[$a]['image'] ?>">
<div class = "giny" ><?php echo $r[$a]['price'].'$'; ?></div>	
</div>
</a>

<?php 
$a++;

}
 ?>







      </div>
        <div class="footer">
            <br><br>Copyryght\TUMO\&nbsp;&nbsp;&nbsp; Made in Armenia &nbsp;&nbsp;&nbsp;Made in Tumo
        </div>
  </div>  
    



</body></html>






















