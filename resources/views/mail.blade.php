<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Email: {{ $data['email'] }}</p>
    <p>Fullname: {{ $data['fullname'] }}</p>
    <p>Phone: <a href="tel:{{$data['phone']}}">+84 {{ $data['phone'] }}</a></li></p>
    <p>Nội dung: {{ $data['content'] }}</p>
</body>
</html>