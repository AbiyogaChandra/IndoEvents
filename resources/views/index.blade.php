<html>

<head>
	<title>Beranda - IndoEvents</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
<div id="navbar" class="bg-color-gray">
		<img src="{{ asset('assets/Logo.png') }}" height="64px">
		<div style="margin-left: 5px;">
			<span class="bold color-red font-size-24">Indo</span><span class="bold color-white font-size-24">Events</span>
		</div>
		<div class="center-contents bg-color-white circular-corners" style="margin-left: 40px">
			<img src="{{ asset('assets/icons/Search.svg') }}" height="24px" style="margin-left: 15px;">
			<span class="color-gray" style="margin-left: 5px; white-space: nowrap;">Cari acara</span>
			<svg width="1" height="25px" style="margin-left: 50px;">
				<rect x="0" y="0" width="1" height="100%" fill="#555555" />
			</svg>
			<img src="{{ asset('assets/icons/Location.svg') }}" height="24px" style="margin-left: 10px;">
			<span class="color-gray" style="margin-left: 5px;">Malang</span>
			<div class="center-contents bg-color-red circular-corners" style="margin-left: 50px; padding:5px;">
				<img src="{{ asset('assets/icons/SearchWhite.svg') }}" height="24px">
			</div>
		</div>
		<div class="color-white">
			<a style="margin-left: 45px" href="{{ url('') }}">
				Lihat Acara
			</a>
			<a style="margin-left: 45px" href="{{ url('register') }}">
				Buat Acara
			</a>
		</div>
		<div class="color-white" style="margin-left: auto">
			<a href="{{ url('login') }}">
				Masuk
			</a>
			<a style="margin-left: 45px;" href="{{ url('register') }}">
				Buat Akun
			</a>
		</div>
	</div>

	<?php
	
	?>

</body>

</html>