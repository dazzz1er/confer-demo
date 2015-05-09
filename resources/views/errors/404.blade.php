<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Confer - Laravel real-time chat demo</title>

		<link href="/css/app.css" rel="stylesheet">
	</head>
	<body>
		<div style="position: absolute; width: 50%; height: 40%; margin: auto; top: 0; left: 0; bottom: 0; right: 0; text-align: center;">
			<h1 style="font-size: 68px;">404, page not found.</h1>
			<small style="display: block; margin-top: 20px;">You will be redirected in five seconds...</small>
		</div>
		<script>

			setTimeout(function() {
				location.href = "{{ url('/') }}";
			}, 5000);

		</script>
	</body>
</html>