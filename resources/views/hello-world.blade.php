<!DOCTYPE html>
<html>
<head>
    <title>Hello World Package</title>
</head>
<body>

    @if(isset($name))
        <h1>Hello {{ ucfirst($name) }}!</h1>
    @else
        <h1>Hello World!</h1>
    @endif

    <h2>This is a Laravel Package</h2>

</body>
</html>
