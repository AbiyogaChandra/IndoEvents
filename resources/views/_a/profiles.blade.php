<html>

<head>
	<title>Beranda - IndoEvents</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="file">
		<button type="submit">Upload</button>
	</form>
	@foreach($profiles as $profile)
        <div style="width: 30%; border: 1px solid #ddd; border-radius: 8px; margin-bottom: 20px; box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.1); overflow: hidden;">
            <img src="{{ Storage::url($profile->profile_photo) }}" style="width: 100%; height: auto;" alt="{{ $profile->display_name }}">
            <div style="padding: 15px;">
                <h5 style="margin: 0 0 10px 0; font-size: 18px;">{{ $profile->display_name }}</h5>
                <p style="margin: 0 0 5px 0;">ID: {{ $profile->id }}</p>
                <p style="margin: 0 0 5px 0;">Created at: {{ $profile->created_at }}</p>
                <p style="margin: 0;">Updated at: {{ $profile->updated_at }}</p>
            </div>
        </div>
    @endforeach
</body>

</html>