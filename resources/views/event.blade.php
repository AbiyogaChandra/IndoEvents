<html>

<head>
	<title>Beranda - IndoEvents</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
	<div id="navbar" class="Montserrat bg-color-gray">
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
			<a style="margin-left: 45px" href="{{ url('my-events') }}">
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
	<br>
	<div id="content">
		<div id="header" style="width: 1152px; height: 389px; position: relative">
			<div style="width: 1152px; height: 389px; left: 0px; top: 0px; position: absolute; background: #EEEEEE; border-radius: 15px"></div>
			<img style="width: 1152px; height: 389px; left: 0px; top: 0px; position: absolute; border-radius: 15px; object-fit: cover" src="{{ asset('assets/covers/Event2.jpg') }}" />
		</div>
		<br>
		<br>
		<br>
		<div id="main" style="width: 1154px; height: 979px; position: relative">
			<div style="width: 639px; height: 50px; left: 2px; top: 0px; position: absolute; color: #555555; font-size: 24px; font-family: Roboto; font-weight: 400; word-wrap: break-word">Sabtu, 17 Agustus - 07:00</div>
			<div style="width: 727px; height: 88px; left: 2px; top: 50px; position: absolute; color: black; font-size: 24px; font-family: Roboto; font-weight: 700; word-wrap: break-word">JUDUL JUDUL JUDUL JUDUL JUDUL JUDUL JUDUL</div>
			<div style="width: 798px; height: 52px; left: 2px; top: 202px; position: absolute; color: #555555; font-size: 24px; font-family: Roboto; font-weight: 400; word-wrap: break-word">Lokasi</div>
			<div style="width: 727px; height: 129px; left: 2px; top: 250px; position: absolute; color: black; font-size: 20px; font-family: Roboto; font-weight: 400; word-wrap: break-word">ALAMAT ALAMAT ALAMAT ALAMAT ALAMAT</div>
			<div style="width: 727px; height: 88px; left: 2px; top: 97px; position: absolute; color: black; font-size: 20px; font-family: Roboto; font-weight: 400; word-wrap: break-word">DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI DESKRIPSI </div>
			<div style="width: 280px; height: 144px; left: 874px; top: 202px; position: absolute">
				<div style="width: 280px; height: 90.18px; left: 0px; top: 0px; position: absolute; background: rgba(255, 255, 255, 0); border: 1px #555555 solid"></div>
				<div style="width: 179.40px; height: 24.73px; left: 17.60px; top: 7.27px; position: absolute; color: #555555; font-size: 24px; font-family: Roboto; font-weight: 700; word-wrap: break-word">Harga Tiket</div>
				<div style="width: 179.40px; height: 24.73px; left: 17.60px; top: 50.91px; position: absolute; color: #555555; font-size: 20px; font-family: Roboto; font-weight: 400; word-wrap: break-word">Rp50.000</div>
				<div style="width: 280px; height: 34.91px; left: 0px; top: 109.09px; position: absolute">
				<div style="width: 280px; height: 34.91px; left: 0px; top: 0px; position: absolute; background: #FF6060"></div>
				<div style="width: 280px; height: 34.91px; left: 0px; top: 0px; position: absolute; text-align: center; color: white; font-size: 24px; font-family: Roboto; font-weight: 700; word-wrap: break-word">Beli</div>
				</div>
			</div>
			<div style="width: 280px; height: 158px; left: 874px; top: 0px; position: absolute">
				<div style="width: 280px; height: 158px; left: 0px; top: 0px; position: absolute; background: rgba(255, 255, 255, 0); border: 1px #555555 solid"></div>
				<div style="width: 280px; height: 29.79px; left: 0px; top: 8.76px; position: absolute; text-align: center; color: #555555; font-size: 24px; font-family: Roboto; font-weight: 700; word-wrap: break-word">Ulasan</div>
				<div style="width: 156.49px; height: 28.04px; left: 62.04px; top: 43.81px; position: absolute">
				<img style="width: 26.83px; height: 28.04px; left: 0px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
				<img style="width: 26.83px; height: 28.04px; left: 32.42px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
				<img style="width: 26.83px; height: 28.04px; left: 64.83px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
				<img style="width: 26.83px; height: 28.04px; left: 97.25px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
				<img style="width: 26.83px; height: 28.04px; left: 129.66px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
				</div>
				<div style="width: 54px; height: 28.04px; left: 113px; top: 80px; position: absolute; text-align: center; color: #555555; font-size: 24px; font-family: Roboto; font-weight: 700; word-wrap: break-word">5 / 5</div>
				<div style="width: 280px; height: 28.04px; left: 0px; top: 114.79px; position: absolute; text-align: center; color: #555555; font-size: 20px; font-family: Roboto; font-weight: 400; word-wrap: break-word">dari 123rb orang</div>
			</div>
			<div style="width: 1152px; height: 600px; left: 0px; top: 379px; position: absolute">
				<div style="width: 1152px; height: 548px; left: 0px; top: 52px; position: absolute; background: rgba(255, 255, 255, 0); border: 1px #555555 solid"></div>
				<div style="width: 798px; height: 52px; left: 0px; top: 0px; position: absolute; color: #555555; font-size: 24px; font-family: Roboto; font-weight: 400; word-wrap: break-word">Komentar</div>
			</div>
		</div>
	</div>

	<br>
	<br>
	<br>
	<br>
	<br>

</body>

</html>