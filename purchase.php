<?php
  $godaddy_banned_list = ["blackjack.how", "pkr.chat", "coin.exchange", "coins.exchange", "tlv.chat", "coin.industries", "coin.mn", "qtum.venture", "pkr.ai", "pkr.gd", "neo.poker", "moj.ee", "iota.us.com", "eos.pojer", "eos.build", "burst.money", "burst.observer", "gnosispm.poker", "gnosispm.pro", "gnosispm.football", "gnosis.football", "gno.poker", "gno.ooo",
  "gno.network", "gno.football", "gno.chat", "gno.build", "bancor.ae", "bancor.cm", "bancor.com.sg", "bancor.ee", "bancor.id", "bancor.is", "bancor.li", "bancor.lt", "bancor.lu", "bancor.pm", "bancor.sc", "bancor.sg", "bancor.st", "bancor.tel", "bnt.ai", "bnt.co.ee", "bnt.com.ee", "bnt.com.hk", "bnt.com.sg", "bnt.do", "bnt.ec",
  "bnt.lc", "bnt.nz", "bnt.pm", "bnt.re", "bnt.sg", "bnt.st", "bnt.sx", "bnt.tn", "bnt.wf", "bnt.yt", "asch.sh", "asch.city", "asch.ac", "antshares.system", "ans.loan", "ans.poker", "ans.chat", "ans.city", "ans.cash", "token.al", "token.cd", "token.cm", "token.cx", "token.ec", "token.ee",
  "token.lc", "token.li", "token.lv", "token.net.ec", "token.net.ru", "token.org.sl", "token.pm", "token.ps", "token.qa", "token.re", "token.sc", "token.sl", "token.sx", "token.tel", "token.tj", "token.tn", "token.wf", "ans.co.com", "ans.army", "tge.pm", "tge.sg", "tge.vc", "tge.nz", "ico.wf", "tge.ae",
  "tge.ai", "tge.cm", "tge.co.il", "tge.do", "tge.ee", "tge.hk", "tge.im", "tge.is", "tge.jp", "ico.tf", "ico.tj", "ico.ug", "ico.do", "ico.qa", "ico.sb", "ico.ae", "ico.africa.com", "rarepepe.in", "golem.cam", "xmr.poker", "xmrindia.in", "moneroindia.in", "monero.im", "monero.tel", "erc20.in",
  "ethslots.chat", "eth.software", "eth.land", "eth.chat", "eth.builders", "eth.army", "xbu.cash", "btu.im", "btc.uy", "btc.vlaanderen", "btc.vu", "btc.webcam", "btc.wf", "btcc.cm", "btc.saarland", "btc.sc", "btc.ruhr", "btc.media", "btc.co.ee", "btc.cologne", "btc.consulting", "btc.brussels", "blkch.in", "blckcha.in", "blckch.in",
  "bits.co.com", "bitmessages.im", "bitmessages.in", "btc.army", "civic.chat", "lisk.click", "lisk.link", "bch.chat", "bitcoincash.sh", "bitcoincash.ac", "bitcoincash.observer"];

  $nogodaddy = true;

  if (in_array($_GET['domain'], $godaddy_banned_list)) {
    $nogodaddy = true;
  } else {
    $nogodaddy = false;
  }

  $godaddy = "https://auctions.godaddy.com/trpItemListing.aspx?&domain=".$_GET['domain'];
  $afternic = "https://www.afternic.com/domain/".$_GET['domain'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CryptoDomains</title>
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
            <a class="navbar-brand" href="index.html">
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
            <ul class="nav navbar-nav navbar-right">
              <!-- Any nav links would go here -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- END nav bar -->

      <!-- BEGIN header information -->
      <h1>Purchase <?php echo $_GET["domain"]; ?></h1>
      <?php if ($nogodaddy) { echo "<!--"; } ?>
      <a href=<?php echo $godaddy; ?> class="btn btn-lg" target="_blank">
        Buy/Bid on GoDaddy
      </a>
      <?php if ($nogodaddy) { echo "-->"; } ?>
      <a href=<?php echo $afternic; ?> class="btn btn-lg" target="_blank">
        Buy/Bid on Afternic
      </a>
      <p style="font-size: 20px;">
        Bitcoin and altcoins are also accepted. If you would like to pay with these, please send an email to <a href="mailto:chris@strategydomains.com">chris@strategydomains.com</a> with your contact
        information and include the domain name in the subject line.
      </p>
    </div>
    <!-- END jumbotron -->

    <!-- START footer -->
    <footer class="footer">
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <p>Copyright &copy; 2017. All rights reserved.
        </p>
      </div>
    </div>
    </footer>
    <!-- END footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
