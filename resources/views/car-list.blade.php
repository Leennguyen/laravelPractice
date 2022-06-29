<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <title>Document</title>
</head>

<body class="container-md">
    <script>
        var mess = '{{ Session::get('alert') }}';
        var close = '{{ Session::get('alert') }}';
        if (close) {
            alert(mess);
        }
    </script>
    <h2>Danh sách xe</h2>
    <a href="/car-create">add</a>

    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name Car</th>
                {{-- <th scope="col">Producer</th> --}}
                <th scope="col">Price</th>
                <th scope="col">Img</th>
                <th scope="col" colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td>{{ $car->id }}</td>
                    <td>{{ $car->name_car }}</td>
                    {{-- <td>{{ $car->producer->producer_name }}</td> --}}
                    <td>{{ $car->price }}</td>
                    <td><img width="200" height="200" style="object-fit:cover" src="/images/{{ $car->img }}"
                            alt=""></td>
                    <td><a href="{{ route('cars.edit', $car->id) }}"><button type="submit">Update</button></a></td>
                    <td>
                        <form method="post" action="{{ route('cars.destroy', $car->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
