<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</head>

<body class="container-md">
    <form enctype="multipart/form-data" method="post" action="{{route('cars.update', $car->id)}}">
        @csrf
        @method('PUT')
         <a href="/car-list">trở về</a>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Car name</label>
            <input type="text" class="form-control" name="nameCar" value="{{$car->name_car}}">
            {{-- <label for="exampleInputEmail1" class="form-label">Choose Producer</label>
            <select name="producerId" class="form-select">
                @foreach ($producers as $producer)
                    <option value="{{$producer->id}}">{{$producer->producer_name}}</option>
                @endforeach
            </select> --}}
            <label for="exampleInputEmail1" class="form-label">Enter Price</label>
            <input type="text" class="form-control" name="price" value="{{$car->price}}">
            <label for="exampleInputEmail1" class="form-label">Enter Img</label>
            <input type="file" class="form-control" name="img" value="{{$car->img}}">
            <img width="200" height="200" style="object-fit:cover" src="/images/{{ $car->img }}"alt="">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</body>

</html>
