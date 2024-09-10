<html>

<head>
	<title>Beranda - IndoEvents</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
	<div style="width: 50%; margin-top: 96px">
		<h1>Masuk</h1>
		<br>
		<br>
		<input type="email" placeholder="Alamat E-Mail" style="width: 75%; height: 32px; padding: 10px;">
		<br>
		<br>
		<input type="password" placeholder="Sandi" style="width: 75%; height: 32px; padding: 10px;">
		<br>
		<br>
		<br>
		<div>
			<input class="bg-color-red bold color-white no-border" type="submit" value="Lanjut" style="width: 75%; height: 40px; font-size: 24px">
			<br>
			<br>
			<br>
			<div class="color-gray" style="width: 75%; text-align: center">
				atau
			</div>
			<br>
			<br>
			<button class="color-gray" style="width: 75%; display: flex; align-items: center; justify-content: center">
				<img src="{{ asset('assets/icons/Google.svg') }}" width="24px" style="padding-right: 8px">
				Sign in with Google
			</button>
		</div>
	</div>
	<img src="{{ asset('assets/covers/Login.jpg') }}" style="width: 50%; height: 100%; object-fit: cover; position: absolute; top: 0px; right: 0px;">
</body>

</html>