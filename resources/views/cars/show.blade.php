<!DOCTYPE html>
<html>
<head>
    <title>Car {{ $car['id']}}</title>
</head>
<body>
<h1>Car {{ $car['id'] }}</h1>
<ul>
    <li>Make: {{ $car['name'] }}</li>
    <li>Model: {{ $car['year_public'] }}</li>
</ul>
</body>
</html>