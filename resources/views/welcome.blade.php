<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="text-center d-flex align-items-center justify-content-center vh-100">
    <div>
        <h1>Welcome 🖤</h1>
        <a href="{{ route('login') }}" class="btn btn-primary m-2">Login</a>
        <a href="{{ route('register') }}" class="btn btn-success m-2">Register</a>
    </div>
</body>
</html>
