<?php
include_once("products.php");

$product = [];

foreach ($products as $curr_product) {
    if ($curr_product["id"] == $_GET["id"]) {
        $product = $curr_product;
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bestel.css">
    <title>Document</title>
</head>
<body>
    <?php include_once("assets/core/header.php"); ?>

    <div class="imgBlock-flex">
        <div class="imgBlock"><img class="imageSrc" id="bigImage" src="<?php echo $product["imageSrc"]?>" alt=""></div>
        <div class="infoBlock">
            <div class="title"><?php echo $product["name"]?></div>
            <div class="little-img-flex">
                <div class="little-img"><img class="lilimg" src="<?php echo $product["lilimg"]?>" alt=""></div>
                <div class="little-img"><img class="lilimg1" src="<?php echo $product["lilimg1"]?>" alt=""></div>
                <div class="little-img"><img class="lilimg2" src="<?php echo $product["lilimg2"]?>" alt=""></div>
            </div>
            <div class="info-product"><?php echo $product["info"]?></div> 
            <div class="price"></div>
            <div class="disPrice"></div>
            <button class="orderBtn">Add to order</button>
        </div>
    </div>

    <?php include_once("assets/core/footer.php"); ?> 


</body>
</html>
