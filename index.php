<!doctype html>
<html lang="en">
<head>
<title>Imgur Roulette</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.2.0/pure-min.css">
<link rel="stylesheet" href="assets/css/app.css">
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="assets/js/masonry.pkgd.min.js"></script>
</head>
<body>
<div id="indicator"></div>
<div class="pure-g-r">
	<div class="header pure-u-1">
		<div class="pure-menu pure-menu-open pure-menu-horizontal">
			<a class="pure-menu-heading" href="<?php echo $_SERVER["PHP_SELF"]; ?>">Imgur Roulette</a>
			<ul>
				<li><a id="loadmore" href="#">Load more</a></li>
			</ul>
		</div>
	</div>
	<div class="content pure-u-1">
		<div id="container"></div>
	</div>
</div>
<script type="text/javascript" src="assets/js/app.js"></script
</body>
</html>