<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>wordPot</title>

    <!-- Bootstrap core CSS -->
    <link href="/wordPot/assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/wordPot/assets/css/main.css" rel="stylesheet">
    <link href="/wordPot/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/wordPot/Rateit/src/rateit.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="/wordPot/assets/js/chart.js"></script>
    <script src="/wordPot/Rateit/src/jquery.rateit.min.js"></script>

    <script>
    $(function() {
        $(".rateit1").rateit();
    });
    </script>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img style="width:70px;" src="/wordPot/word Pot.png" /></a>
        <ul style="list-style:none;">
          
          <li class="headlink" >
            <a style="font-size:14px; margin-right: 18px;" class="headanchor nav navbar-nav">my page</a>
          </li>
          <li class="headlink">
            <a style="font-size:14px; margin-right: 18px;" class="headanchor nav navbar-nav">あなたの単語帳</a>
          </li>
          <li class="navbar-right">
            <button type="submit">ログアウト</button>
          </li>
        </ul>
      </div>
    </div>

    <?php echo $this->Flash->render(); ?>

	<?php echo $this->fetch('content'); ?>

    <div id="f">
      <div class="container">
        <div class="row">
          <p>Copyright 2015 Team wordPot&nbsp;/&nbsp;Crafted with <i class="fa fa-heart"></i> by BlackTie.co.</p> 	
        </div>
      </div>
    </div>




  <script src="/wordPot/assets/js/bootstrap.js"></script>
  <?php echo $this->element('sql_dump'); ?>

  </body>
</html>