<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body class="container-md">
    <a href="/car-list">trở về</a>
    <form method="post" action="{{ route('cars.store') }}" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Car name</label>
            <input type="text" class="form-control" name="nameCar">
            {{-- <label for="exampleInputEmail1" class="form-label">Choose Producer</label>
            <select name="producerId" class="form-select">
                @foreach ($producers as $producer)
                    <option value="{{$producer->id}}">{{$producer->producer_name}}</option>
                @endforeach
            </select> --}}
            <label for="exampleInputEmail1" class="form-label">Enter Price</label>
            <input type="text" class="form-control" name="price">
            <label for="exampleInputEmail1" class="form-label">Enter Img</label>
            <input type="file" class="form-control" name="img">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</body>

</html>
