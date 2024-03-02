<!doctype html>
<html lang="en">
@include('layouts.head', ['titulo' => 'tallerhttp'])

<body>
    @include('layouts.header', ['titulo' => 'Taller de Http'])

    @if (session('mensaje'))
        <script>
            alert("<?php echo session('mensaje')[0]; ?>");
        </script>
    @endif

    <div class="d-flex flex-column w-100 align-items-center pt-5">
        <div>
            <span class="btn btn-dark me-3" data-bs-toggle="modal" data-bs-target="#modalPrimo">Primo</span>
            <span class="btn btn-dark me-3" data-bs-toggle="modal" data-bs-target="#modalAmigos">Amigos</span>
            <span class="btn btn-dark me-3" data-bs-toggle="modal" data-bs-target="#modalPromedio">Promedio</span>
            <span class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalCuadratica">Cuadrática</span>
        </div>
    </div>

    <!-- Modal primo -->
    <div class="modal fade" id="modalPrimo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog w-25">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Verificar número primo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('curso.verificarPrimo') }}" method="POST"
                        class="d-flex flex-column align-items-center">
                        @csrf
                        <div class="d-flex flex-column w-100 mb-3">
                            <label class="fs-5 mb-1" for="">Número a verificar</label>
                            <input type="number" name="numero">
                        </div>
                        <input type="submit" class="btn btn-dark" value="Verificar">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal amigos -->
    <div class="modal fade" id="modalAmigos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog w-25">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Verificar números amigos</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('curso.verificarAmigos') }}" method="POST"
                        class="d-flex flex-column align-items-center">
                        @csrf
                        <div class="d-flex flex-column w-100 mb-3">
                            <label class="fs-5 mb-1" for="">Primer número</label>
                            <input type="number" name="numero1">
                        </div>
                        <div class="d-flex flex-column w-100 mb-3">
                            <label class="fs-5 mb-1" for="">Segundo número</label>
                            <input type="number" name="numero2">
                        </div>
                        <input type="submit" class="btn btn-dark" value="Verificar">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal promedio -->
    <div class="modal fade" id="modalPromedio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog w-25">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Promedio de notas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('curso.calcularPromedio') }}" method="POST"
                        class="d-flex flex-column align-items-center">
                        @csrf
                        <div class="d-flex flex-column w-100 mb-3">
                            <label class="fs-5 mb-1" for="">Primera nota</label>
                            <input type="number" name="nota1">
                        </div>
                        <div class="d-flex flex-column w-100 mb-3">
                            <label class="fs-5 mb-1" for="">Segunda nota</label>
                            <input type="number" name="nota2">
                        </div>
                        <div class="d-flex flex-column w-100 mb-3">
                            <label class="fs-5 mb-1" for="">Tercera nota</label>
                            <input type="number" name="nota3">
                        </div>
                        <input type="submit" class="btn btn-dark" value="calcular">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal cuadrática -->
    <div class="modal fade" id="modalCuadratica" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog w-25">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cuadrática</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('curso.calcularCuadratica') }}" method="POST"
                        class="d-flex flex-column align-items-center">
                        @csrf
                        <div class="d-flex flex-column w-100 mb-3">
                            <label class="fs-5 mb-1" for="valora">Valor de a</label>
                            <input type="number" name="valora">
                        </div>
                        <div class="d-flex flex-column w-100 mb-3">
                            <label class="fs-5 mb-1" for="valorb">Valor de b</label>
                            <input type="number" name="valorb">
                        </div>
                        <div class="d-flex flex-column w-100 mb-3">
                            <label class="fs-5 mb-1" for="valorc">Valor de c</label>
                            <input type="number" name="valorc">
                        </div>
                        <input type="submit" class="btn btn-dark" value="calcular">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('scriptbootstrap')

</body>

</html>