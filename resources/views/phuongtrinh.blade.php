<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Giải phương trình bậc nhất ax + b =0</h1>
    <form action="{{route('phuongtrinh.post')}}" method="post">
        @csrf
        <label for=""><input name="a" value="{{isset($a)?$a:''}}" type="text" placeholder="nhap so a "> x + </label>@error('a')
        <label>{{$message}}</label>
        @enderror
         
        <label for=""><input name="b" value="{{isset($b)?$b:''}}" type="text" placeholder="nhap so b ">= 0</label>
        @error('b')
        <label>{{$message}}</label>
        @enderror
        <button type="submit">Giải</button>
        <h4>{{isset($kq)?$kq:''}}</h4>
    </form>
</body>
</html>