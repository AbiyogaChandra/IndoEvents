<html>

<head>
	<title>Acara Saya - IndoEvents</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
	<div id="navbar" class="bg-color-gray Montserrat">
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
		<div class="bg-color-white center-contents circular-corners" style="margin-left: auto">
			<img class="circular-corners" src="{{ asset('assets/Person.png') }}" width="32px" height="32px">
			<span style="margin-left: 10px">John Doe</span>
			<img style="margin-left: 10px; margin-right: 10px" src="{{ asset('assets/icons/Dropdown.svg') }}" height="16px">
		</div>
	</div>
	<br>
	<div class="Roboto">
		<h1 class="color-gray">Acara Saya</h1>
		<div style="display: flex">
			<div class="bg-color-red color-white circular-corners" style="display: flex; align-items: center; width: min-content;">
				<img src="{{ asset('assets/icons/Add.svg') }}" height="48px">
				<span class="bold" style="margin-left: 10px; white-space: nowrap; margin-right: 25px;">Buat Acara</span>
			</div>
			<div style="display: flex; margin-left: auto;">
				<input type="text" placeholder="Cari acara" size="50">
				<button class="bg-color-red" type="submit" style="border: none; width: 48px; height: 48px;">
					<img src="{{ asset('assets/icons/SearchWhite.svg') }}" height="24px">
				</button>
			</div>
		</div>
		<br>
		<br>
		<div class="bg-color-white" style="box-shadow: 0px 2px 2px 2px rgba(0, 0, 0, 0.25); overflow-y: scroll; padding: 5px;">
			<div class="bg-color-purewhite" style="display: flex; box-shadow: 0px 2px 2px 2px rgba(0, 0, 0, 0.25);">
				<img src="{{ asset('assets/Cover.png') }}" height="84">
				<div style="margin-left: 15px; padding: 5px">
					<span class="bold">JUDUL JUDUL JUDUL JUDUL JUDUL JUDUL JUDUL</span>
					<br>
					<br>
					<div style="display: flex; align-items: center">
						<img src="{{ asset('assets/icons/Schedule.svg') }}" height="24px"><span class="color-gray" style="margin-left: 5px">Sabtu, 17 Agustus - 07:00</span>
					</div>
				</div>
				<div style="display: flex; align-items: center;">
					<svg width="2" height="72px" style="margin-left: 50px;">
						<rect x="0" y="0" width="2" height="100%" fill="#555555" />
					</svg>
				</div>
				<div style="margin-left: 15px; padding: 5px;">
					<div style="display: flex; align-items: center">
						<img src="{{ asset('assets/icons/User.svg') }}" height="24px"><span class="color-gray" style="margin-left: 5px">123rb pengikut</span>
					</div>
					<br>
					<div style="display: flex; align-items: center">
						<img src="{{ asset('assets/icons/Location.svg') }}" height="24px"><span class="color-gray" style="margin-left: 5px">ALAMAT ALAMAT ALAMAT ALAMAT ALAMAT</span>
					</div>
				</div>
				<div style="margin-left: 50px; display: flex; align-items: center">
					<img src="{{ asset('assets/icons/View.svg') }}" height="32px">
					<img style="margin-left: 35px;" src="{{ asset('assets/icons/Edit.svg') }}" height="32px">
					<img style="margin-left: 35px;" src="{{ asset('assets/icons/Trash.svg') }}" height="32px">
				</div>
			</div>
		</div>
	</div>
</body>

</html>