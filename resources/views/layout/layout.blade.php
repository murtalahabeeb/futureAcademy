<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="lib/bootstrap.min.css">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="asset/css/style.css">
	@yield("link")

	
	
	
	
</head>
<body>
	@yield("content")
	
	<script type="text/javascript" src="lib/jq.js"></script>
	<script type="text/javascript" src="lib/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/7898c5d0b6.js" crossorigin="anonymous"></script>
	<script src="{{ asset('js/app.js') }}" defer></script>
	<script type="text/javascript" src="asset/js/index.js"></script>
	
</body>
</html>