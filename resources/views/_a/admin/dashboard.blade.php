<html>

<head>
	<title>Dashboard - IndoEvents</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
	<link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
	<style>
		* {
			font-family: 'DM Sans';
		}

		body {
			background-color: #F4F7FE;
		}

		#sidebar {
			align-items: center;
			flex-direction: column;
			width: 240px; 
			height: 100%; 
			position: fixed; 
			top: 0; 
			left: 0; 
			padding: 20px 20px; 
			z-index: 1; 
			background-color: #FFFFFF;
		}

		.icon-container {
			width: 24px;
			height: 24px;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.color-paleblue {
			color: #A3AED0;
		}
	</style>
</head>
<body>
	<div style="display: flex; flex-direction: row; height: 100%">
		<div id="sidebar">
			<div class="center-contents">
				<img src="{{ asset('assets/Logo.png') }}" width="128px" height="128px">
			</div>
			<br>
			<div style="display: flex; align-items: center">
				<div class="color-red bold" style="display: flex; align-items: center">
					<div class="icon-container">
						{!! file_get_contents(public_path('assets/icons/Dashboard.svg')) !!}
					</div>
					<span style="margin-left: 10px">Dasbor</span>
				</div>
				<div class="color-red" style="position: absolute; right: 0;">
					{!! file_get_contents(public_path('assets/icons/Spacer.svg')) !!}
				</div>
			</div>
			<br>
			<br>
			<div class="color-paleblue" style="display: flex; align-items: center">
				<div class="icon-container">
					{!! file_get_contents(public_path('assets/icons/Event.svg')) !!}
				</div>
				<span style="margin-left: 10px">Acara</span>
			</div>
			<br>
			<br>
			<div class="color-paleblue" style="display: flex; align-items: center">
				<div class="icon-container">
					{!! file_get_contents(public_path('assets/icons/Account.svg')) !!}
				</div>
				<span style="margin-left: 10px">Akun</span>
			</div>
			<br>
			<br>
			<div class="color-paleblue" style="display: flex; align-items: center">
				<div class="icon-container">
					{!! file_get_contents(public_path('assets/icons/Requests.svg')) !!}
				</div>
				<span style="margin-left: 10px">Permintaan</span>
			</div>
			<br>
			<br>
			<div class="color-paleblue" style="display: flex; align-items: center">
				<div class="icon-container">
					{!! file_get_contents(public_path('assets/icons/Report.svg')) !!}
				</div>
				<span style="margin-left: 10px">Laporan</span>
			</div>
			<br>
			<br>
			<div class="color-paleblue" style="display: flex; align-items: center">
				<div class="icon-container">
					{!! file_get_contents(public_path('assets/icons/Logout.svg')) !!}
				</div>
				<span style="margin-left: 10px">Keluar</span>
			</div>
		</div>

		<div style="margin-left: 240px; padding: 40px 5px">
			<h1 class="color-redder">Dasbor</h1>
			<div style="display: flex; flex-direction: row;">
				<div class="bg-color-purewhite" style="display: flex; flex-direction: row; border-radius: 20px; padding: 20px 80px 20px 20px; margin-right: 30px">
					<div class="color-red" style="display: flex; background-color: #F4F7FE; border-radius: 100%; width: 48px; height: 48px; align-items: center; justify-content: center">
						{!! file_get_contents(public_path('assets/icons/Chart.svg')) !!}
					</div>
					<div style="display: flex; flex-direction: column; margin-left: 15px">
						<span style="color: #A3AED0">Pendapatan</span>
						<span class="bold" style="color: #EA4335; font-size: 26px">Rp 1 jt</span>
					</div>
				</div>
				<div class="bg-color-purewhite" style="display: flex; flex-direction: row; border-radius: 20px; padding: 20px 80px 20px 20px; margin-right: 30px">
					<div class="color-red" style="display: flex; background-color: #F4F7FE; border-radius: 100%; width: 48px; height: 48px; align-items: center; justify-content: center">
						{!! file_get_contents(public_path('assets/icons/Event.svg')) !!}
					</div>
					<div style="display: flex; flex-direction: column; margin-left: 15px">
						<span style="color: #A3AED0">Total Acara</span>
						<span class="bold" style="color: #EA4335; font-size: 26px">50</span>
					</div>
				</div>
				<div class="bg-color-purewhite" style="display: flex; flex-direction: row; border-radius: 20px; padding: 20px 80px 20px 20px; margin-right: 30px">
					<div class="color-red" style="display: flex; background-color: #F4F7FE; border-radius: 100%; width: 48px; height: 48px; align-items: center; justify-content: center">
						{!! file_get_contents(public_path('assets/icons/Account.svg')) !!}
					</div>
					<div style="display: flex; flex-direction: column; margin-left: 15px">
						<span style="color: #A3AED0">Total Akun</span>
						<span class="bold" style="color: #EA4335; font-size: 26px">200</span>
					</div>
				</div>
			</div>

			<div style="display: flex; flex-direction: row;">
				<div class="bg-color-purewhite" style="display: flex; flex-direction: column; border-radius: 20px; padding: 20px; margin-top: 20px">
					<div class="color-paleblue" style="display: flex; background-color: #F4F7FE; padding: 10px 30px 10px 10px; border-radius: 7px; max-width: 90px">
						{!! file_get_contents(public_path('assets/icons/Calendar.svg')) !!}
						<span style="margin-left: 10px">Bulan Ini</span>
					</div>
					<div style="display: flex; flex-direction: row">
						<div style="display: flex; flex-direction: column; margin-top: 50px">
							<span class="bold" style="color: #EA4335; font-size: 26px">Rp 1 jt</span>
							<span style="color: #A3AED0">Pendapatan</span>
						</div>
						<img src="{{ asset('assets/Chart.png') }}">
					</div>
				</div>
			</div>

		</div>
	</div>
</body>

</html>