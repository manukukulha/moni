<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Message Was Received from {{ env('APP_URL') }}</title>
</head>
<body>
	<h1>New message was received from the site {{ env('APP_URL') }}</h1>

	<p>Name: {{ $data->name }}</p>
	<p>Email: {{ $data->email }}</p>
	<p>Phone Number: {{ $data->phone }}</p>
	<p>Message: {{ $data->body }}</p>
</body>
</html>