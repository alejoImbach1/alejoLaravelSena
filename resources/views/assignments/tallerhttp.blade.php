@include('layouts.head', ['titulo' => 'tallerhttp'])

@include('layouts.header', ['titulo' => 'Taller de Http'])

@if (session('mensaje'))
    <script>
        alert("<?php echo session('mensaje'); ?>");
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

{{-- numero primo --}}
@include('assignments.modalformulario', [
    'modalId' => 'modalPrimo',
    'modalTitulo' => 'Verificacion de primo',
    'ruta' => 'curso.verificarPrimo',
    'yield'=>'numero-primo'
])

{{-- números amigos --}}

@include('assignments.modalformulario',[
    'modalId' => 'modalAmigos',
    'modalTitulo' => 'Verificacion de amigos',
    'ruta' => 'curso.verificarAmigos',
    'yield' => 'numeros-amigos'
])

<!-- promedio notas-->

@include('assignments.modalformulario',[
    'modalId' => 'modalPromedio',
    'modalTitulo' => 'Promedio de notas',
    'ruta' => 'curso.calcularPromedio',
    'yield' => 'promedio-notas'
])

<!-- cuadrática -->

@include('assignments.modalformulario',[
    'modalId' => 'modalCuadratica',
    'modalTitulo' => 'Cuadrática',
    'ruta' => 'curso.calcularCuadratica',
    'yield' => 'cuadratica'
])

@include('layouts.foot')