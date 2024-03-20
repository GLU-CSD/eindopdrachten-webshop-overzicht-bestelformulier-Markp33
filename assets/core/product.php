<div class="box">
  <div class="cdtext"> 
    <a href="bestelpagina.php?id=<?php echo $product["id"]?>">
      <img src="<?php echo isset($product["imageSrc"]) ? $product["imageSrc"] : '' ?>" alt="<?php echo isset($product["name"]) ? $product["name"] : '' ?>" height="200" width="200">
    </a>
    <div class="name"><?php echo isset($product["name"]) ? $product["name"] : '' ?></div>
    <div class="price"><?php echo isset($product["price"]) ? $product["price"] : '' ?></div>
    <div class="prodinfo"><?php echo isset($product["prodinfo"]) ? $product["prodinfo"] : '' ?></div>
  </div>
</div>
