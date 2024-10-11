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
		<div id="header" style="width: 1152px; height: 232px; position: relative">
			<div style="width: 1152px; height: 232px; left: 0px; top: 0px; position: absolute; background: #EEEEEE; border-radius: 15px"></div>
			<img style="width: 1152px; height: 232px; left: 0px; top: 0px; position: absolute; border-radius: 15px" src="{{ asset('assets/covers/Event.jpg') }}" />
			<div style="width: 1152px; height: 232px; left: 0px; top: 0px; position: absolute; background: linear-gradient(270deg, rgba(255, 255, 255, 0) 45%, #444444 75%); border-radius: 15px"></div>
			<div style="width: 248px; height: 29px; left: 30px; top: 32px; position: absolute; color: white; font-size: 24px; font-family: Montserrat; font-weight: 700; word-wrap: break-word">Acara terbaik di</div>
			<div style="width: 248px; height: 38px; left: 30px; top: 78px; position: absolute; color: white; font-size: 32px; font-family: Montserrat; font-weight: 700; word-wrap: break-word">MALANG</div>
			<div style="width: 380px; height: 38px; left: 30px; top: 133px; position: absolute; color: white; font-size: 20px; font-family: Montserrat; font-weight: 400; word-wrap: break-word">Mencari sesuatu yang ingin anda lakukan di Malang? Kami mempunyai banyak acara bagus</div>
		</div>
		<br>
		<br>
		<div id="main" style="width: 1152px; height: 792px; position: relative">
			<div style="width: 350px; height: 36px; left: 0px; top: 0px; position: absolute; color: #555555; font-size: 24px; font-family: Montserrat; font-weight: 700; word-wrap: break-word">Acara-acara sekitar Malang</div>
			<div style="width: 348px; height: 351px; left: 0px; top: 53px; position: absolute">
				<div style="width: 348px; height: 351px; left: 0px; top: 0px; position: absolute; background: #EEEEEE; border-radius: 15px"></div>
					<img style="width: 348px; height: 144.12px; left: 0px; top: 0px; position: absolute; border-radius: 15px" src="{{ asset('assets/covers/Event.jpg') }}" />
					<div style="width: 306.20px; height: 54.63px; left: 18.81px; top: 152.25px; position: absolute; color: black; font-size: 20px; font-family: Roboto; font-weight: 700; word-wrap: break-word">JUDUL JUDUL JUDUL JUDUL JUDUL JUDUL JUDUL JUDUL</div>
					<div style="width: 210.05px; height: 27.89px; left: 18.81px; top: 215.02px; position: absolute; color: black; font-size: 16px; font-family: Roboto; font-weight: 400; word-wrap: break-word">Sabtu, 17 Agustus - 07:00</div>
					<div style="width: 159.89px; height: 27.89px; left: 18.81px; top: 242.91px; position: absolute; color: #444444; font-size: 16px; font-family: Roboto; font-weight: 400; word-wrap: break-word">SMKN 4 Malang</div>
					<div style="width: 159.89px; height: 27.89px; left: 18.81px; top: 278.94px; position: absolute; color: black; font-size: 16px; font-family: Roboto; font-weight: 700; word-wrap: break-word">Rp15.000</div>
					<div style="width: 154.67px; height: 27.89px; left: 178.70px; top: 268.48px; position: absolute; text-align: right; color: #555555; font-size: 16px; font-family: Roboto; font-weight: 400; word-wrap: break-word">900 orang terdaftar</div>
					<div style="width: 79.42px; height: 37.19px; left: 253.95px; top: 302.19px; position: absolute">
					<div style="width: 79.42px; height: 37.19px; left: 0px; top: 0px; position: absolute; background: #FF6060; border-radius: 4px"></div>
					<div style="width: 79.42px; height: 37.19px; left: 0px; top: 8px; position: absolute; text-align: center; color: white; font-size: 16px; font-family: Roboto; font-weight: 700; word-wrap: break-word" onclick="location.href='{{ url('event') }}'">Lihat</div>
				</div>
				<div style="width: 142.13px; height: 27.89px; left: 18.81px; top: 311.48px; position: absolute">
				<img style="width: 25.08px; height: 27.89px; left: 0px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
				<img style="width: 25.08px; height: 27.89px; left: 29.26px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
				<img style="width: 25.08px; height: 27.89px; left: 58.52px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
				<img style="width: 25.08px; height: 27.89px; left: 87.78px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
				<img style="width: 25.08px; height: 27.89px; left: 117.05px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
				</div>
			</div>
			<div style="width: 348px; height: 351px; left: 402px; top: 53px; position: absolute">
				<div style="width: 348px; height: 351px; left: 0px; top: 0px; position: absolute; background: #EEEEEE; border-radius: 15px"></div>
					<img style="width: 348px; height: 144.12px; left: 0px; top: 0px; position: absolute; border-radius: 15px" src="{{ asset('assets/covers/Event.jpg') }}" />
					<div style="width: 306.20px; height: 54.63px; left: 18.81px; top: 152.25px; position: absolute; color: black; font-size: 20px; font-family: Roboto; font-weight: 700; word-wrap: break-word">JUDUL JUDUL JUDUL JUDUL JUDUL JUDUL JUDUL JUDUL</div>
					<div style="width: 210.05px; height: 27.89px; left: 18.81px; top: 215.02px; position: absolute; color: black; font-size: 16px; font-family: Roboto; font-weight: 400; word-wrap: break-word">Sabtu, 17 Agustus - 07:00</div>
					<div style="width: 159.89px; height: 27.89px; left: 18.81px; top: 242.91px; position: absolute; color: #444444; font-size: 16px; font-family: Roboto; font-weight: 400; word-wrap: break-word">SMKN 4 Malang</div>
					<div style="width: 159.89px; height: 27.89px; left: 18.81px; top: 278.94px; position: absolute; color: black; font-size: 16px; font-family: Roboto; font-weight: 700; word-wrap: break-word">Rp15.000</div>
					<div style="width: 154.67px; height: 27.89px; left: 178.70px; top: 268.48px; position: absolute; text-align: right; color: #555555; font-size: 16px; font-family: Roboto; font-weight: 400; word-wrap: break-word">900 orang terdaftar</div>
					<div style="width: 79.42px; height: 37.19px; left: 253.95px; top: 302.19px; position: absolute">
					<div style="width: 79.42px; height: 37.19px; left: 0px; top: 0px; position: absolute; background: #FF6060; border-radius: 4px"></div>
					<div style="width: 79.42px; height: 37.19px; left: 0px; top: 8px; position: absolute; text-align: center; color: white; font-size: 16px; font-family: Roboto; font-weight: 700; word-wrap: break-word" onclick="location.href='{{ url('event') }}'">Lihat</div>
				</div>
				<div style="width: 142.13px; height: 27.89px; left: 18.81px; top: 311.48px; position: absolute">
					<img style="width: 25.08px; height: 27.89px; left: 0px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
					<img style="width: 25.08px; height: 27.89px; left: 29.26px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
					<img style="width: 25.08px; height: 27.89px; left: 58.52px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
					<img style="width: 25.08px; height: 27.89px; left: 87.78px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
					<img style="width: 25.08px; height: 27.89px; left: 117.05px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
				</div>
			</div>
			<div style="width: 348px; height: 351px; left: 804px; top: 53px; position: absolute">
				<div style="width: 348px; height: 351px; left: 0px; top: 0px; position: absolute; background: #EEEEEE; border-radius: 15px"></div>
				<img style="width: 348px; height: 144.12px; left: 0px; top: 0px; position: absolute; border-radius: 15px" src="{{ asset('assets/covers/Event.jpg') }}" />
				<div style="width: 306.20px; height: 54.63px; left: 18.81px; top: 152.25px; position: absolute; color: black; font-size: 20px; font-family: Roboto; font-weight: 700; word-wrap: break-word">JUDUL JUDUL JUDUL JUDUL JUDUL JUDUL JUDUL JUDUL</div>
				<div style="width: 210.05px; height: 27.89px; left: 18.81px; top: 215.02px; position: absolute; color: black; font-size: 16px; font-family: Roboto; font-weight: 400; word-wrap: break-word">Sabtu, 17 Agustus - 07:00</div>
				<div style="width: 159.89px; height: 27.89px; left: 18.81px; top: 242.91px; position: absolute; color: #444444; font-size: 16px; font-family: Roboto; font-weight: 400; word-wrap: break-word">SMKN 4 Malang</div>
				<div style="width: 159.89px; height: 27.89px; left: 18.81px; top: 278.94px; position: absolute; color: black; font-size: 16px; font-family: Roboto; font-weight: 700; word-wrap: break-word">Rp15.000</div>
				<div style="width: 154.67px; height: 27.89px; left: 178.70px; top: 268.48px; position: absolute; text-align: right; color: #555555; font-size: 16px; font-family: Roboto; font-weight: 400; word-wrap: break-word">900 orang terdaftar</div>
				<div style="width: 79.42px; height: 37.19px; left: 253.95px; top: 302.19px; position: absolute">
				<div style="width: 79.42px; height: 37.19px; left: 0px; top: 0px; position: absolute; background: #FF6060; border-radius: 4px"></div>
				<div style="width: 79.42px; height: 37.19px; left: 0px; top: 8px; position: absolute; text-align: center; color: white; font-size: 16px; font-family: Roboto; font-weight: 700; word-wrap: break-word" onclick="location.href='{{ url('event') }}'">Lihat</div>
				</div>
				<div style="width: 142.13px; height: 27.89px; left: 18.81px; top: 311.48px; position: absolute">
				<img style="width: 25.08px; height: 27.89px; left: 0px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
				<img style="width: 25.08px; height: 27.89px; left: 29.26px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
				<img style="width: 25.08px; height: 27.89px; left: 58.52px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
				<img style="width: 25.08px; height: 27.89px; left: 87.78px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
				<img style="width: 25.08px; height: 27.89px; left: 117.05px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
				</div>
			</div>
			<div style="width: 348px; height: 351px; left: 0px; top: 441px; position: absolute">
				<div style="width: 348px; height: 351px; left: 0px; top: 0px; position: absolute; background: #EEEEEE; border-radius: 15px"></div>
				<img style="width: 348px; height: 144.12px; left: 0px; top: 0px; position: absolute; border-radius: 15px" src="{{ asset('assets/covers/Event.jpg') }}" />
				<div style="width: 306.20px; height: 54.63px; left: 18.81px; top: 152.25px; position: absolute; color: black; font-size: 20px; font-family: Roboto; font-weight: 700; word-wrap: break-word">JUDUL JUDUL JUDUL JUDUL JUDUL JUDUL JUDUL JUDUL</div>
				<div style="width: 210.05px; height: 27.89px; left: 18.81px; top: 215.02px; position: absolute; color: black; font-size: 16px; font-family: Roboto; font-weight: 400; word-wrap: break-word">Sabtu, 17 Agustus - 07:00</div>
				<div style="width: 159.89px; height: 27.89px; left: 18.81px; top: 242.91px; position: absolute; color: #444444; font-size: 16px; font-family: Roboto; font-weight: 400; word-wrap: break-word">SMKN 4 Malang</div>
				<div style="width: 159.89px; height: 27.89px; left: 18.81px; top: 278.94px; position: absolute; color: black; font-size: 16px; font-family: Roboto; font-weight: 700; word-wrap: break-word">Rp15.000</div>
				<div style="width: 154.67px; height: 27.89px; left: 178.70px; top: 268.48px; position: absolute; text-align: right; color: #555555; font-size: 16px; font-family: Roboto; font-weight: 400; word-wrap: break-word">900 orang terdaftar</div>
				<div style="width: 79.42px; height: 37.19px; left: 253.95px; top: 302.19px; position: absolute">
				<div style="width: 79.42px; height: 37.19px; left: 0px; top: 0px; position: absolute; background: #FF6060; border-radius: 4px"></div>
				<div style="width: 79.42px; height: 37.19px; left: 0px; top: 8px; position: absolute; text-align: center; color: white; font-size: 16px; font-family: Roboto; font-weight: 700; word-wrap: break-word" onclick="location.href='{{ url('event') }}'">Lihat</div>
				</div>
				<div style="width: 142.13px; height: 27.89px; left: 18.81px; top: 311.48px; position: absolute">
				<img style="width: 25.08px; height: 27.89px; left: 0px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
				<img style="width: 25.08px; height: 27.89px; left: 29.26px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
				<img style="width: 25.08px; height: 27.89px; left: 58.52px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
				<img style="width: 25.08px; height: 27.89px; left: 87.78px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
				<img style="width: 25.08px; height: 27.89px; left: 117.05px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
				</div>
			</div>
			<div style="width: 348px; height: 351px; left: 402px; top: 441px; position: absolute">
				<div style="width: 348px; height: 351px; left: 0px; top: 0px; position: absolute; background: #EEEEEE; border-radius: 15px"></div>
				<img style="width: 348px; height: 144.12px; left: 0px; top: 0px; position: absolute; border-radius: 15px" src="{{ asset('assets/covers/Event.jpg') }}" />
				<div style="width: 306.20px; height: 54.63px; left: 18.81px; top: 152.25px; position: absolute; color: black; font-size: 20px; font-family: Roboto; font-weight: 700; word-wrap: break-word">JUDUL JUDUL JUDUL JUDUL JUDUL JUDUL JUDUL JUDUL</div>
				<div style="width: 210.05px; height: 27.89px; left: 18.81px; top: 215.02px; position: absolute; color: black; font-size: 16px; font-family: Roboto; font-weight: 400; word-wrap: break-word">Sabtu, 17 Agustus - 07:00</div>
				<div style="width: 159.89px; height: 27.89px; left: 18.81px; top: 242.91px; position: absolute; color: #444444; font-size: 16px; font-family: Roboto; font-weight: 400; word-wrap: break-word">SMKN 4 Malang</div>
				<div style="width: 159.89px; height: 27.89px; left: 18.81px; top: 278.94px; position: absolute; color: black; font-size: 16px; font-family: Roboto; font-weight: 700; word-wrap: break-word">Rp15.000</div>
				<div style="width: 154.67px; height: 27.89px; left: 178.70px; top: 268.48px; position: absolute; text-align: right; color: #555555; font-size: 16px; font-family: Roboto; font-weight: 400; word-wrap: break-word">900 orang terdaftar</div>
				<div style="width: 79.42px; height: 37.19px; left: 253.95px; top: 302.19px; position: absolute">
				<div style="width: 79.42px; height: 37.19px; left: 0px; top: 0px; position: absolute; background: #FF6060; border-radius: 4px"></div>
				<div style="width: 79.42px; height: 37.19px; left: 0px; top: 8px; position: absolute; text-align: center; color: white; font-size: 16px; font-family: Roboto; font-weight: 700; word-wrap: break-word" onclick="location.href='{{ url('event') }}'">Lihat</div>
				</div>
				<div style="width: 142.13px; height: 27.89px; left: 18.81px; top: 311.48px; position: absolute">
				<img style="width: 25.08px; height: 27.89px; left: 0px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
				<img style="width: 25.08px; height: 27.89px; left: 29.26px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
				<img style="width: 25.08px; height: 27.89px; left: 58.52px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
				<img style="width: 25.08px; height: 27.89px; left: 87.78px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
				<img style="width: 25.08px; height: 27.89px; left: 117.05px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
				</div>
			</div>
			<div style="width: 348px; height: 351px; left: 804px; top: 441px; position: absolute">
				<div style="width: 348px; height: 351px; left: 0px; top: 0px; position: absolute; background: #EEEEEE; border-radius: 15px"></div>
				<img style="width: 348px; height: 144.12px; left: 0px; top: 0px; position: absolute; border-radius: 15px" src="{{ asset('assets/covers/Event.jpg') }}" />
				<div style="width: 306.20px; height: 54.63px; left: 18.81px; top: 152.25px; position: absolute; color: black; font-size: 20px; font-family: Roboto; font-weight: 700; word-wrap: break-word">JUDUL JUDUL JUDUL JUDUL JUDUL JUDUL JUDUL JUDUL</div>
				<div style="width: 210.05px; height: 27.89px; left: 18.81px; top: 215.02px; position: absolute; color: black; font-size: 16px; font-family: Roboto; font-weight: 400; word-wrap: break-word">Sabtu, 17 Agustus - 07:00</div>
				<div style="width: 159.89px; height: 27.89px; left: 18.81px; top: 242.91px; position: absolute; color: #444444; font-size: 16px; font-family: Roboto; font-weight: 400; word-wrap: break-word">SMKN 4 Malang</div>
				<div style="width: 159.89px; height: 27.89px; left: 18.81px; top: 278.94px; position: absolute; color: black; font-size: 16px; font-family: Roboto; font-weight: 700; word-wrap: break-word">Rp15.000</div>
				<div style="width: 154.67px; height: 27.89px; left: 178.70px; top: 268.48px; position: absolute; text-align: right; color: #555555; font-size: 16px; font-family: Roboto; font-weight: 400; word-wrap: break-word">900 orang terdaftar</div>
				<div style="width: 79.42px; height: 37.19px; left: 253.95px; top: 302.19px; position: absolute">
				<div style="width: 79.42px; height: 37.19px; left: 0px; top: 0px; position: absolute; background: #FF6060; border-radius: 4px"></div>
				<div style="width: 79.42px; height: 37.19px; left: 0px; top: 8px; position: absolute; text-align: center; color: white; font-size: 16px; font-family: Roboto; font-weight: 700; word-wrap: break-word" onclick="location.href='{{ url('event') }}'">Lihat</div>
				</div>
				<div style="width: 142.13px; height: 27.89px; left: 18.81px; top: 311.48px; position: absolute">
				<img style="width: 25.08px; height: 27.89px; left: 0px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
				<img style="width: 25.08px; height: 27.89px; left: 29.26px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
				<img style="width: 25.08px; height: 27.89px; left: 58.52px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
				<img style="width: 25.08px; height: 27.89px; left: 87.78px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
				<img style="width: 25.08px; height: 27.89px; left: 117.05px; top: 0px; position: absolute" src="{{ asset('assets/icons/Star.svg') }}" />
				</div>
			</div>
		</div>
	</div>
</body>

</html>