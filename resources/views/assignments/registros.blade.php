@include('layouts.head', ['titulo' => 'Registros'])
@include('layouts.header', ['titulo' => 'Registros'])
@if (session('mensaje'))
    <script>
        alert("<?php echo session('mensaje') ?>");
    </script>
@endif
<div class="d-flex flex-column w-100 align-items-center pt-5">
    <div>
        <span class="btn btn-dark me-3" data-bs-toggle="modal" data-bs-target="#modalPerro">Registrar perro</span>
        <span class="btn btn-dark me-3" data-bs-toggle="modal" data-bs-target="#modalCasa">Registrar casa</span>
        <span class="btn btn-dark me-3" data-bs-toggle="modal" data-bs-target="#modalPrimo">Verificar primo y registrar</span>
        <span class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalCuadratica">Registrar cuadrática</span>
    </div>
</div>

{{-- Registrar perro --}}

@include('assignments.modalformulario', [
    'modalId' => 'modalPerro',
    'modalTitulo' => 'Registro de perro',
    'ruta' => 'curso.registrarPerro',
    'yield' => 'perro',
])

{{-- Registrar casa --}}

@include('assignments.modalformulario', [
    'modalId' => 'modalCasa',
    'modalTitulo' => 'Registro de casa',
    'ruta' => 'curso.registrarCasa',
    'yield' => 'casa',
])

{{-- Verificar y registrar primo --}}

@include('assignments.modalformulario', [
    'modalId' => 'modalPrimo',
    'modalTitulo' => 'Verificar primo y registrar',
    'ruta' => 'curso.verificarPrimoRegistrar',
    'yield' => 'numero-primo',
])

@include('assignments.modalformulario', [
    'modalId' => 'modalCuadratica',
    'modalTitulo' => 'Calcular raices de cuadrática',
    'ruta' => 'curso.registrarRaicesCuadratica',
    'yield' => 'cuadratica',
])

@include('layouts.foot')