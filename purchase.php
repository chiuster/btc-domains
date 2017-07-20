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
      <h1>Purchase <?php echo $_GET['domain']; ?></h1>
      <a href="#" class="btn btn-lg">
        Buy/Bid on GoDaddy
      </a>
      <a href="#" class="btn btn-lg">
        Buy/Bid on Afternic
      </a>
      <p style="font-size: 20px;">
        Bitcoin and altcoins are also accepted. If you would like to pay with these, please send an email to <a href="chris@strategydomains.com">chris@strategydomains.com</a> with your contact
        information. Include the domain name in the subject line.
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