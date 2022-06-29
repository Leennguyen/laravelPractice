<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Bài Toán Lớp 1</h2>
    <form action="{{route('pheptinh.post')}}" method="post">
        @csrf
        <label for=""><input name="a" value="{{isset($a)?$a:''}}" type="text" placeholder="Nhap so a"></label>@error('a')
        <label>{{$message}}</label>
        @enderror
        <select name="c" id="">
            <option value="cong" >+</option>
            <option value="tru">-</option>
            <option value="nhan" >*</option>
            <option value="chia">/</option>
        </select>
        <label for=""><input name="b" value="{{isset($b)?$b:''}}"type="text" placeholder="Nhap so a"></label>@error('b')
        <label>{{$message}}</label>
        @enderror
        <button type="submit">Tính</button>
        <h4>{{isset($kq)?$kq:''}}</h4>
    </form>
</body>
</html>