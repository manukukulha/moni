<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Message Was Received</title>
</head>
<body>
	<h1>Your message was received</h1>

	<p>Name: {{ $data->name }}</p>
	<p>Email: {{ $data->email }}</p>
	<p>Phone Number: {{ $data->phone }}</p>
	<p>Message: {{ $data->body }}</p>
</body>
</html>