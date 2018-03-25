<!DOCTYPE html>
<html>
    <head>
        <title>Shop</title>
        <link rel="stylesheet" type="text/css" href="tstyle.css">
         <meta charset="utf-8">
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
    .shop{
        max-height: 280px;
        overflow: auto;
        display: inline;
        font-family: Comic Sans MS;
    }
    .sho:hover{
        background-color: orange;
    color: black;
    border: solid;
    width: 340px;
    height: 320px;
    
    display:inline-block;
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

.nkimg{width: 400px;
        height: 400px;
        display:inline-block;}
        .h1anun{
            background-color: #BDBDBD;
            color: black;
            border: solid #848484;
            max-width: 1300px;
            min-width: 800px;
            height: 100px;
            border-radius: 90px;
            text-align: center;
            font-size: 80px;    
            font-family: Comic Sans MS;
        }
        .h2gin{
            background-color: #E6E6E6;
            color: black;
            border: solid #848484;
            width: 300px;
          
            border-radius: 90px;
            text-align: center;
            font-size: 40px;
                display:inline-block;
                position:absolute;
    top:410px;
    right:20px;
        }
        .h3nkg{
            display:inline-block;
             background-color: #E6E6E6;
            color: black;
            border: solid #848484;
            min-width: 300px;
           max-width: 400px;
            border-radius: 90px;
            text-align: center;
            font-size: 20px;
            display:inline-block;
            position:absolute;
            top:500px;
            right:20px;
            font-family: Comic Sans MS;
            
        }
    </style>
    </head>

    <body>
    <div class="main">
        <div class="header">
            <div class="hdax">
                 <img src="tumo.png" alt="Mountain View" width="400" height="200"  class="imgt">
            </div>
            <div class="haj">
                Phone 1 <br>Phone2
            </div>
           
        </div>

         <div class="menu">
               <?php include 'menu.php'; ?>
        </div>
        <div class="content">
            
<?php 
	$link =	mysqli_connect("localhost", "root", "usbw", "shop");

	$id = $_GET['id'];
	$sql = "SELECT * FROM `products` WHERE id = $id";

	$res = mysqli_query($link,$sql);
	$r = mysqli_fetch_assoc($res);

// Սահմանում ենք բազայի հետ <<խոսելու լեզուն>>
mysqli_set_charset($link,'utf8');

 ?> 
<div class = "h1anun"><?php echo $r['name']; ?></div>
<img class = "nkimg"; src="images/<?php echo $r['image'] ?>">
<div class = "h2gin"><?php echo $r['price'].'$'; ?></div>
<div class = "h3nkg"><?php echo $r['description']; ?></div>	

<div class = "urisapr">
 <?php 
    $link = mysqli_connect("localhost", "root", "usbw", "shop");

    $sql = "SELECT * FROM `products`";

    $res = mysqli_query($link,$sql);
    $r = mysqli_fetch_all($res, MYSQLI_ASSOC);


    // echo "<pre>";
    // print_r($r);
    // echo "</pre>";

 ?> 

<div class = "shop"> 
<?php 
$a=0;
while ($a<count($r)) { ?>
<a href="page.php?id=<?php echo $r[$a]['id'];; ?>"  style="text-decoration: none;" >
   <div class = "sho">
    <h3><?php echo $r[$a]['name']; ?></h3>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <img src="images/<?php echo $r[$a]['image'] ?>">
<div class = "giny" ><?php echo $r[$a]['price'].'$'; ?></div>   
</div>
</a>

<?php 
$a++;

}
 ?>

</div>



</div>	
  

         </div>
        <div class="footer">
            <br><br>Copyryght\TUMO\&nbsp;&nbsp;&nbsp; Made in Armenia &nbsp;&nbsp;&nbsp;Made in Tumo
        </div>
    </div>  
    </body>

</html>

