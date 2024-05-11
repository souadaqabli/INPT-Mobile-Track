<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPT Mobile Track</title>
<!--------bootstrap css link-------->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" >
</head>
<body>
<?php  include './partials/connect.php'?>
<?php  include './partials/header.php'?>

<h1 class="text-center text-primary my-3" style="font-size: 36px; font-weight: bold; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">Welcome to INPT Mobile Track</h1>
<h2 class="text-center text-success mb-4" style="font-size: 28px; font-weight: bold;">Choose yours <i class="fas fa-bicycle" style="color: #34D399;"></i></h2>

<div  class="container">
    <div class="row">

    <!------------php code------------>
    <?php
$sql="SELECT * FROM  bikes";
$result=mysqli_query($con,$sql);
if($result){
    //$row=mysqli_fetch_assoc($result);
    while($row=mysqli_fetch_assoc($result)){
        $category_id=$row['category_id'];
        $category_name=$row['category_name'];
        $category_desc=$row['category_desc'];
        $category_price=$row['category_price'];
        $category_image=$row['category_image'];
        echo '<div class ="col-md-4  col-sm-6  col xm-12   mb-5">
        <div class="card" >
        <img class="card-img-top" src='.$category_image.'  alt="Card image cap"   style="height: 300px; object-fit=contain">
        <div class="card-body">
        <h5 class="card-title">'.$category_name.'</h5>
        <p class="card-text">'.Substr($category_desc,0,10).'...</p>
        <p>'.$category_price.'/~</p>
        <a href="details.php?details_id='.$category_id.'" class="btn btn-primary">Details</a>
        </div>
        </div>
        </div>';
    }
}






?>






        




        </div>
        <?php  include './partials/footer.php'?>
    </div>
</body>
