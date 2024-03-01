<!doctype html>
<html class="no-js" lang="">

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
    <!-- header -->
    <header>
        <div class="topbar">
            <div class="languagebar">
                <p>Uw taal</p>
                <select name="language" id="">
                    <option value="dutch">Nederlands</option>
                    <option value="english">english</option>
                    <option value="espanljol">espanljol</option>
                </select>
            </div>
            <div>
                <div class="mijnaccount">
                    <P><a href="">Mijn account</a></P>
                </div>
                <div class="inloggen">
                    <P><a href="">Inloggen</a></P>
                </div>
                <div class="afrekenen">
                    <P><a href="">Afrekenen</a></P>
                </div>
            </div>
        </div>

        <div>
            <div>
                <p>
                    <img src="./assets/img/GOP.jpg" alt="GOPNIK"
                        style="float:left;width:70px;height:70px;margin-left: 35px;">
            </div>
            </p>
        </div>
        <div class="underbar">
            <a href="./index.html"><button class="home">Home</button></a>
            <a href="./shop.html"><button class="muurdecoratie">Aanstekers</button></a>
            <a href="./gasbranders.html"><button class="doos">Gasbranders</button></a>
            <a href="./vintage.html"><button class="opbergers">Vintage</button></a>
            <a href="./hightech.html"><button class="stools">Hightech</button></a>
            <a href="./gadgets.html"><button class="gadgets">Gadgets</button></a>

    </header>
    </div>
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

            <div class="kleindoosje">
                <h2>Nieuwsbrief</h2>
                <hr>
                <label for="site-search">Voer uw e-mail in:</label>
                <input type="search" id="site-search" name="q" />

                <button>Search</button>
            </div>

            <div class="kleindoosje">
                <h2>OVER ONS</h2>
                <hr>
                <h3>About Us: YourBox Solutions

                    Welcome to YourBox Solutions, where innovation meets packaging excellence! Established in 2010,
                    YourBox
                    Solutions has rapidly become a leading player in the packaging industry, dedicated to providing
                    top-notch
                    boxes tailored to meet the diverse needs of our valued customers.

                    Our Mission:
                    At YourBox Solutions, our mission is to redefine the way businesses perceive and utilize
                    packaging. We
                    strive to offer not just boxes but solutions that enhance your product presentation, protection,
                    and overall
                    brand image. We believe in the power of packaging to make a lasting impression, and we are
                    committed to
                    helping your brand stand out in the market.

                </h3>
            </div>

        </div>



        <div>
            <hr class="utopbar">
        </div>
        <!-- mainboxes -->
        <div class="main1">
    <div class="bestelformulier">
        <div class="bhead">
            <h3>Bestelformulier</h3>
        </div>
        <div class="type">
            <div class="block1"></div>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                Type bestelling:
                <label><input type="radio" name="type_bestelling"> Particulier</label>
                <label><input type="radio" name="type_bestelling"> Zakelijk</label>
                
            </form>
            <div class="block1"></div>
        </div>
                </div>
                <div class="aanhef">
                    <div class="block2"></div>
                    <form action="">
                        Aanhef:
                        <label><input type="radio" name="aanhef"> Dhr.</label>
                        <label><input type="radio" name="aanhef"> Mevr.</label>
                    </form>

                </div>

                


                
                
                <div class="land">Land: Nederland
                    <div class="block5"></div>
                </div>
                <div class="aflever">
                    <form action="">
                        Avleveradres:
                        <label><input type="radio" name="adres"> Op bovenstaand adres bezorgen</label>
                        <label><input type="radio" name="adres"> Op ander adres bezorgen</label>
                        <div class="block6"></div>
                </div>
               
               
              
                <div class="verzendwijze">
                    <form action="">
                        Verzendwijze factuur:
                        <label><input type="radio" name="verzendwijze"> Factuur per e-mail</label>
                        <label><input type="radio" name="verzendwijze"> Factuur geprint bij de bestelling</label>
                        <div class="block6"></div>
                </div>
                <div class="nieuwsbrief">
                    <input type="checkbox" id="nieuwsbrief" name="nieuw" value="nieuw">
                    <label for="vehicle1"> Ja, ik wil de Gopnik-nieuwsbrief met €5,- cadeaubon voor mijn volgende
                        bestelling</label><br>
                </div>
                
                     
                        
                        <input type="submit" value="Submit">

                </div>
            </div>
        </div>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">


        <?php




?>

<?php
$type_bestellingErr = $aanhefErr = $fnameErr = $postcodeErr = $huisnummerErr = $adresErr = $emailErr = $tellieErr = $gbdErr = $verzendwijzeErr = $nieuwErr = $wachtwoordErr = $bevestigErr = "";

$errors = array(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    
    if (empty($_POST["type_bestelling"])) {
        $errors[] = "Type bestelling is required";
    }

    
    if (empty($_POST["aanhef"])) {
        $errors[] = "Aanhef is required";
    }

    
    if (empty($_POST["fname"])) {
        $errors[] = "Name is required";
    }

    
    if (empty($_POST["postcode"])) {
        $errors[] = "Postcode is required";
    }

    
    if (empty($_POST["huisnummer"])) {
        $errors[] = "Huisnummer is required";
    }

    
    if (empty($_POST["adres"])) {
        $errors[] = "Adres is required";
    }

    
    if (empty($_POST["email"])) {
        $errors[] = "Email is required";
    }

    
    if (empty($_POST["tellie"])) {
        $errors[] = "Telefoonnummer is required";
    }

    
    if (empty($_POST["gbd"])) {
        $errors[] = "Geboortedatum is required";
    }

    
    if ($_POST["wachtwoord"] !== $_POST["bevestig"]) {
        $errors[] = "Wachtwoorden komen niet overeen";
    }

    
}
?>



<?php
// Display errors at the top of the page
if (!empty($errors)) {
    echo "<div style='color: red;'><strong>Please fix the following errors:</strong><ul>";
    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul></div>";
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">   
</form>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <br>

    
    <br>

    <div>
        Name: <input type="text" name="fname">
        <span class="error">* <?php echo $fnameErr;?></span>
    </div>
    <br>

    <div>
        Postcode: <input type="text" name="postcode">
        <span class="error">* <?php echo $postcodeErr;?></span>
    </div>
    <br>

    <div>
        Huisnummer: <input type="text" name="huisnummer">
        <span class="error">* <?php echo $huisnummerErr;?></span>
    </div>
    <br>

    <div>
        Adres: <input type="text" name="adres">
        <span class="error">* <?php echo $adresErr;?></span>
    </div>
    <br>

    <div>
        E-mail: <input type="text" name="email">
        <span class="error">* <?php echo $emailErr;?></span>
    </div>
    <br>

    <div>
        Telefoonnummer: <input type="text" name="tellie">
        <span class="error">* <?php echo $tellieErr;?></span>
    </div>
    <br>

    <div>
        Geboortedatum: <input type="text" name="gbd">
        <span class="error">* <?php echo $gbdErr;?></span>
    </div>
    <br>

    <div>
        Verzendwijze: <input type="text" name="verzendwijze">
        <span class="error">* <?php echo $verzendwijzeErr;?></span>
    </div>
    <br>

    <div>
        Nieuw: <input type="text" name="nieuw">
        <span class="error">* <?php echo $nieuwErr;?></span>
    </div>
    <br>

    <div>
        Wachtwoord: <input type="password" name="wachtwoord">
        <span class="error">* <?php echo $wachtwoordErr;?></span>
    </div>
    <br>

    <div>
        Bevestig Wachtwoord: <input type="password" name="bevestig">
        <span class="error">* <?php echo $bevestigErr;?></span>
    </div>
    <br>

    <div>
        <input type="submit" name="submit" value="Submit">
    </div>
</form>



        <!-- footer -->


        <footer>
            <div class="info">
                <div class="veiligbetalen">
                    <h2>VEILIG BETALEN</h2>
                    <li>Betaal in alle veiligheid</li>
                    <div>met onze partners</div>
                </div>
                <div class="leveringkosten">
                    <h2>LEVERING KOSTEN</h2>
                    <li>Transport tarieven</li>
                </div>
                <div class="klantenservice">
                    <h2>KLANTENSERVICE</h2>
                    <li>Paswoord vergeten</li>
                    <li>Veilige betaling</li>
                    <li>Levering</li>
                    <li>Annuleren, retourneren en</li>
                    <div>ruilen</div>
                </div>
                <div class="overons">
                    <h2>OVER ONS</h2>
                    <li>Over ons</li>
                    <li>Contactinformatie</li>
                    <li>Algemene voorwaarden</li>
                    <li>Privacy beleid</li>
                </div>
            </div>
            <div class="copyright">
                © 1999-2024 supergopnik.com b.v.
            </div>
        </footer>

















</body>

</html>