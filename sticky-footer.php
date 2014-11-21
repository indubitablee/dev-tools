<html>
<header>
	<title>Sticky Footer</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" />

	<script src="https://code.jquery.com/jquery-1.11.1.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<style>
		html, body {
			height: 100%;
		}
		.wrapper {
			min-height: 100%;
			height: auto !important;
			height: 100%;
			margin: 0 auto -4em;
		}
		.footer, .push {
			height: 4em;
		}
	</style>
</header>
<body>
	<div class="wrapper text-center">
		<p> my stuff goes here</p>
		<div class="push"></div>
	</div>
	<div class="footer text-center" style="background-color:black; color:white;">
		<p>my footer text here</p>
	</div>	
</body>
</html>