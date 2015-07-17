<?php

$header = <<<EOT
		  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		  <!--[if IE]>

		  <script src="js/html5shiv.js"></script>

		  <![endif]-->

		  <!--////////// CSS Stylesheet  ///////////-->

		  <link rel="stylesheet" href="css/style.css">

		  <!--////////// jQuery Source  ///////////-->

		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

		  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

		  <!--////////// Layerslider files  ///////////-->

		  <script src="layerslider/js/greensock.js" type="text/javascript"></script>

		  <script src="layerslider/js/layerslider.transitions.js" type="text/javascript"></script>

		  <script src="layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script> 

		   

		</head>

		<body id="section-home">

		<div class="doc-loader"></div>

		  <!--/////////// HEADER SECTION //////////-->

		  <header>

			<nav role="navigation">

			  <div class="container">

				<!-- Brand and toggle get grouped for better mobile display -->

				<div class="navbar-header">

				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

					<i class="fa fa-th-list iconmobile"></i>

				  </button>

				</div>

				<div id="main-nav" class="collapse navbar-collapse navbar-collapse">          

				  <ul class="nav navbar-nav navbar-right">

					<!--////////// NAVIGATION MENU //////////-->

					<li><a href="index.php"><span>Home</span></a></li>
					<li><a href="faq.php"><span>FAQ/About</span></a></li>

					<li class="dropdown">

					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"> Mining Pools</a>

					  <ul class="dropdown-menu">

						<li><a href="p2pool.website:8776/static/p2pool-node-status"><span>P2P Pool</span></a></li>

						<li><a href="http://bcrp2pool.website:8776/static/p2pool-node-status"><span>BCR P2Pool</span></a></li>



					  </ul>

					</li>

					<li><a href="solutions.php"><span>Banking</span></a></li>

					<li><a href="support.php"><span>Support</span></a></li>
					
					<li class="dropdown">
					
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"> Exchanges</a>

					<ul class="dropdown-menu">

						<li><a href="www.empoex.com/trade/BCR-BTC"><span>EmpoEx</span></a></li>

						<li><a href="bittrex.com/Market/Index?MarketName=BTC-BCR"><span>Bittrex</span></a></li>



					  </ul>
					  
					</li>

					<li><a href="#"><span>Block Explorer</span></a></li>

					<li><a href="https://github.com/bitcreditscc/bitcreditswin/tree/plus-wallet"><span>DOWNLOAD</span></a></li>

					<li><a href="https://github.com/bitcreditscc/bicreditsnew"><span>Source Code</span></a></li>          

					<li><a href="contact.php"><span>Contact</span></a></li>

					

				  </ul>

				</div>

				<!-- /navbar-collapse --></div><!-- /container -->

			</nav>

		  </header>
EOT;
echo $header;
?>
