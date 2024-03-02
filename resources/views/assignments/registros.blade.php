<!doctype html>
<html lang="en">

@include('layouts.head', ['titulo' => 'Registros'])

<body>
    @include('layouts.header', ['titulo' => 'Registros'])
    <div class="w-100 d-flex pt-5 justify-content-center">
        @if (session('mensaje'))
            <script>
                alert("<?php echo session('mensaje')[0]; ?>");
            </script>
        @endif
        <div>
            <span class="btn btn-dark me-3" data-bs-toggle="modal" data-bs-target="#modalPerro">Registrar perro</span>
            <span class="btn btn-dark me-3" data-bs-toggle="modal" data-bs-target="#modalCasa">Registrar casa</span>
            <span class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalPrimo">Verificar primo y registrar</span>

        </div>
        {{-- Modal dog --}}
        <div class="modal fade" id="modalPerro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog w-25">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar perro</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('curso.registrarPerro') }}" method="POST"
                            class="d-flex flex-column align-items-center">
                            @csrf
                            <div class="d-flex flex-column w-100 mb-3">
                                <label class="fs-5 mb-1" for="name">Nombre</label>
                                <input type="text" name="name">
                            </div>
                            <div class="d-flex flex-column w-100 mb-3">
                                <label class="fs-5 mb-1" for="breed">Raza</label>
                                <input type="text" name="breed">
                            </div>
                            <div class="d-flex flex-column w-100 mb-3">
                                <label class="fs-5 mb-1" for="weight">Peso (Kg)</label>
                                <input type="number" min="0" name="weight">
                            </div>
                            <input type="submit" class="btn btn-dark" value="Registrar">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- Modal house --}}
        <div class="modal fade" id="modalCasa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog w-25">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar casa</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('curso.registrarCasa')}}" method="POST"
                            class="d-flex flex-column align-items-center">
                            @csrf
                            <div class="d-flex flex-column w-100 mb-3">
                                <label class="fs-5 mb-1" for="price">Precio</label>
                                <input type="text" name="price">
                            </div>
                            <div class="d-flex flex-column w-100 mb-3">
                                <label class="fs-5 mb-1" for="area">Área (metros cuadrados)</label>
                                <input type="text" name="area">
                            </div>
                            <div class="d-flex flex-column w-100 mb-3">
                                <label class="fs-5 mb-1" for="stories">Cantidad de pisos</label>
                                <input type="number" min="1" max="99" name="stories">
                            </div>
                            <div class="d-flex flex-column w-100 mb-3">
                                <label class="fs-5 mb-1" for="color">Color</label>
                                <input type="text" name="color">
                            </div>
                            <input type="submit" class="btn btn-dark" value="Registrar">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- Modal primo --}}
        <div class="modal fade" id="modalPrimo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog w-25">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Verificar primo y registrar</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('curso.verificarPrimoYRegistrar') }}" method="POST"
                            class="d-flex flex-column align-items-center">
                            @csrf
                            <div class="d-flex flex-column w-100 mb-3">
                                <label class="fs-5 mb-1" for="number">Número</label>
                                <input type="number" min="2" name="number">
                            </div>
                            <input type="submit" class="btn btn-dark" value="Registrar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('scriptbootstrap')
</body>

</html>
