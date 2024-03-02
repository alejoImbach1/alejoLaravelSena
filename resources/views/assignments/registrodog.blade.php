<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
    @include('layouts.header')
    <div class="w-100 d-flex p-5 align-items-center">
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
</body>
</html>