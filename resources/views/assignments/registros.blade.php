<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="w-100 d-flex p-5">
        <form action="{{ route('curso.registrarDog') }}" method="POST"
            class="d-flex flex-column align-items-center">
            @csrf
            <div class="d-flex flex-column w-100 mb-3">
                <label class="fs-5 mb-1" for="txtnombre">Nombre</label>
                <input type="text" name="txtnombre">
            </div>
            <div class="d-flex flex-column w-100 mb-3">
                <label class="fs-5 mb-1" for="txtraza">Raza</label>
                <input type="text" name="txtraza">
            </div>
            <div class="d-flex flex-column w-100 mb-3">
                <label class="fs-5 mb-1" for="txtpeso">Peso (Kg)</label>
                <input type="number" name="txtpeso">
            </div>
            <input type="submit" class="btn btn-dark" value="Registrar">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
