<!DOCTYPE html>
<html>
  <head>
    <title>Cryptocurrency Domains -- Our Domains Are Money</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    type="text/css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />

    <!-- TopCoin CSS -->
    <link rel="stylesheet" href="style.css" type="text/css" />

    <!-- Roboto Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,400i,700,900" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<!-- START jumbotron -->
<div class="jumbotron">
  <!-- BEGIN nav bar -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          <img src="logo.png" />
        </a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigationbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="navbar-collapse collapse" id="navigationbar">
        <!--<ul class="nav navbar-nav navbar-right">
          <li><a href="#bitcoin">Cryptocurrencies</a></li>
          <li><a href="#how">Exchanges</a></li>
        </ul>-->
      </div>
    </div>
  </nav>
  <!-- END nav bar -->

  <!-- BEGIN header information -->
  <h1>CryptoDomains for Sale</h1>
  <p>
    Any inquiries can be addressed to Chris via email <a href="mailto:chris@strategydomains.com" style="font-weight: bold;">chris@strategydomains.com</a> or over the phone at (650)-690-2583 during business hours (Mon-Fri 8AM-5PM PDT)
  </p>

  <div class="col-sm-4 col-md-4">
    <h3>Currencies</h3>
    <p style="font-size: 18px !important;">
      <a href="#bitcoin" style="color:#FFF;">Bitcoin</a><br />
      <a href="#bitcoincash" style="color:#FFF;">Bitcoin Cash</a><br />
      <a href="#ethereum" style="color:#FFF;">Ethereum</a><br />
      <a href="#litecoin" style="color:#FFF;">Litecoin</a><br />
      <a href="#monero" style="color:#FFF;">Monero</a><br />
      <a href="#decred" style="color:#FFF;">Decred</a><br />
      <a href="#golem" style="color:#FFF;">Golem</a><br />
      <a href="#lisk" style="color:#FFF;">Lisk</a><br />
      <a href="#lykke" style="color:#FFF;">Lykke</a><br />
      <a href="#stratis" style="color:#FFF;">Stratis</a>
    </p>
  </div>
  <div class="col-sm-4 col-md-4">
    <h3>ICOs/Recent Coins</h3>
    <p style="font-size: 18px !important;">
      <a href="#0x" style="color:#FFF;">0x</a><br />
      <a href="#jcoin" style="color:#FFF;">J-Coin</a><br />
      <a href="#icotge" style="color:#FFF;">ICO/TGE Domains</a><br />
      <a href="#token" style="color:#FFF;">"Token" Names</a><br />
      <a href="#pillar" style="color:#FFF;">Pillar</a><br />
      <a href="#asch" style="color:#FFF;">ASCH</a><br />
      <a href="#bancor" style="color:#FFF;">Bancor</a><br />
      <a href="#civic" style="color:#FFF;">Civic</a><br />
      <a href="#gnosis" style="color:#FFF;">Gnosis</a><br />
      <a href="#spank" style="color:#FFF;">Spank</a><br />
      <a href="#rchain" style="color:#FFF;">RChain</a><br />
      <a href="#coinname" style="color:#FFF;">[Coin Name].com</a>
    </p>
  </div>
  <div class="col-sm-4 col-md-4">
    <h3>Applications</h3>
    <p style="font-size: 18px !important;">
      <a href="#exchanges" style="color:#FFF;">Exchanges</a><br />
      <a href="#casinos" style="color:#FFF;">Casinos/Gambling</a><br />
      <a href="#accelerator" style="color:#FFF;">Tx Accelerators</a><br />
      <a href="#miscellaneous" style="color:#FFF;">Miscellaneous</a>
    </p>
  </div>
</div>
<!-- END jumbotron -->


<?php
  // header("Location: index.html");

  $text = file_get_contents("list");
  $domain_array = explode("\n", $text);
  sort($domain_array);

  $misc = $domain_array;

  $categories = array(
    array("Bitcoin", "btc", "bitcoin", "bit"),
    array("Ethereum", "eth", "ethereum"),
    array("Litecoin", "ltc", "litecoin"),
    array("Monero", "xmr", "monero"),
    array("Decred", "decred"),
    array("Golem", "golem"),
    array("Lisk", "lsk", "lisk"),
    array("Lykke", "lykke"),
    array("Stratis", "stratis"),
    array("0x", "0x"),
    array("JCoin", "jcoin"),
    array("ICO/TGE", "ico", "tge"),
    array("Token", "token", "tkn"),
    array("Pillar", "pillar"),
    array("Asch", "asch"),
    array("Bancor", "bnt", "bancor"),
    array("Civic", "civic"),
    array("Gnosis", "gno"),
    array("Spank", "spank"),
    array("RChain", "rchain"),
    array("Coin Names", "coin"),
    array("Civic", "civic"),
    array("Exchanges", "exchange"),
    array("Gambling", "casino"),
    array("Accelerators", "acceler")
  );

  //foreach (array_filter($domain_array) as &$domain) {
  //  print("<a href='http://www.afternic.com/domain/$domain'>$domain</a><br />");
  //}

  foreach (array_filter($categories) as &$category) {
    $category_name = $category[0];
    $category_name_trimmed = str_replace("/", "", strtolower($category_name));
    print("<div class='row info' id='$category_name_trimmed'><h1>$category_name</h1>");

    // Find domains that pertain to the category
    $domains = array();
    for ($i=1; $i<count($category); $i++) {
      foreach (array_filter($domain_array) as &$domain) {
        if (strpos($domain, $category[$i]) !== false) {
          array_push($domains, $domain);
        }
      }
    }

    $misc = array_diff($misc, $domains);

    foreach (array_filter($domains) as &$domain) {
      print("<div class='col-sm-6 col-md-3'><a href='http://www.afternic.com/domain/$domain'>$domain</a></div>");
    }

    print("</div>");
  }

  print("<div class='row info' id='miscellaneous'><h1>Miscellaneous</h1>");
  foreach (array_filter($misc) as &$domain) {
    print("<div class='col-sm-6 col-md-3'><a href='http://www.afternic.com/domain/$domain'>$domain</a></div>");
  }
  print("</div>");

?>

<!-- START footer -->
<!--<footer class="footer">
<div class="row">
  <div class="col-sm-6 col-md-3">
    <p>Copyright &copy; 2017<br />
      All rights reserved.
    </p>
  </div>
  <div class="col-sm-6 col-md-3">
    <h3>Currencies</h3>
    <p>
      <a href="#bitcoin">Bitcoin</a><br />
      <a href="#bitcoincash">Bitcoin Cash</a><br />
      <a href="#ethereum">Ethereum</a><br />
      <a href="#litecoin">Litecoin</a><br />
      <a href="#monero">Monero</a><br />
      <a href="#decred">Decred</a><br />
      <a href="#golem">Golem</a><br />
      <a href="#lisk">Lisk</a><br />
      <a href="#lykke">Lykke</a><br />
      <a href="#stratis">Stratis</a><br />
      <a href="#pivxpepe">PIVX/PEPE</a>
    </p>
  </div>
  <div class="col-sm-6 col-md-3">
    <h3>ICOs/Recent Coins</h3>
    <p>
      <a href="#0x">0x</a><br />
      <a href="#jcoin">J-Coin</a><br />
      <a href="#icotge">ICO/TGE</a><br />
      <a href="#token">"Token" Names</a><br />
      <a href="#pillar">Pillar</a><br />
      <a href="#asch">ASCH</a><br />
      <a href="#bancor">Bancor</a><br />
      <a href="#civic">Civic</a><br />
      <a href="#gnosis">Gnosis</a><br />
      <a href="#coinname">[Coin Name].com</a><br />
      <a href="#other">Other Coins</a>
    </p>
  </div>
  <div class="col-sm-6 col-md-3">
    <h3>Applications</h3>
    <p>
      <a href="#exchanges">Exchanges</a><br />
      <a href="#casinos">Casinos/Gambling</a><br />
      <a href="#accelerator">Tx Accelerators</a><br />
      <a href="#miscellaneous">Miscellaneous</a>
    </p>
  </div>
</div>
</footer>-->
<!-- END footer -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
  /* Nav link animations */
  $(document).ready(function() {
    $(".jumbotron a, .footer a").on('click', function(e) {
      e.preventDefault();
      var hash = this.hash;
      $('body').animate({
        scrollTop: $(hash).offset().top
      }, 500, function() {
        window.location.hash = hash;
      });
    });
  });
</script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </body>
</html>
