<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SuperGopnik</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <meta name="description" content="">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:image:alt" content="">

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/icon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="icon.png">

    <link rel="manifest" href="site.webmanifest">
    <meta name="theme-color" content="#fafafa">
    <script src="./assets/js/app.js" defer></script>
  </head>

  <body>
    <?php include_once("assets/core/header.php"); ?>
    
    <!-- sidebar -->

    <div>
      <div class="maincontent">
        <div class="kleindoosje">
          <h2>Aanstekers</h2>
          <hr>
          <ul>
            <li>Gasbranders</li>
            <li>Vintage</li>
            <li>Hightech</li>
          </ul>
        </div>

        <div class="kleindoosje">
          <h2>Uw selectie weergeven</h2>
          <hr>
          <h3>Soort</h3>
          <ul>
            <li>Benzine</li>
            <li>Kerosine</li>
            <li>Gas</li>
            <li>Elektrisch</li>
          </ul>
        </div>

        <div class="kleindoosje">
          <h2>Prijs</h2>
          <hr>
          <div class="slidecontainer">
            <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
          </div>
        </div>

        <div class="kleindoosje">
          <h2>Recent bekeken</h2>
          <hr>
          <div>
            <div class="recentblock">
              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
              <label for="vehicle1"> Metalen doosje</label><br>
              <div>
                <div class="prijs1">€ 20,95</div>
              </div>
              <div>
                <div class="prijs2">€ 19,95</div>
              </div>
            </div>
          </div>
        </div>

        <div class="newsletter">
          <h2>Subscribe to Our Newsletter</h2>
          <form action="./bestelformulier.php" method="get">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <button type="submit">Subscribe</button>
          </form>
        </div>
        
        <div class="kleindoosje">
          <h2>OVER ONS</h2>
          <hr>
          <h3>About Us: YourBox Solutions
            Welcome to YourBox Solutions, where innovation meets packaging excellence! Established in 2010, YourBox
            Solutions has rapidly become a leading player in the packaging industry, dedicated to providing top-notch
            boxes tailored to meet the diverse needs of our valued customers.

            Our Mission:
            At YourBox Solutions, our mission is to redefine the way businesses perceive and utilize packaging. We
            strive to offer not just boxes but solutions that enhance your product presentation, protection, and overall
            brand image. We believe in the power of packaging to make a lasting impression, and we are committed to
            helping your brand stand out in the market.
          </h3>
        </div>

      </div>
    </div>
      
  
    </div>



    <!-- mainboxes -->

    <div class="main">
      <?php 
        include_once("products.php");

          foreach ($products as $product){
            include("./assets/core/product.php");
          }
        
        ?>
    </div>

    <?php include_once("assets/core/footer.php"); ?>

  </body>
</html>


