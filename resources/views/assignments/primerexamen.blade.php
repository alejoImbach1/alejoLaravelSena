@include('layouts.head', ['titulo' => 'primerexamen'])
@include('layouts.header', ['titulo' => 'Registros para examen'])
@if (session('mensaje'))
    <script>
        alert("<?php echo session('mensaje') ?>");
    </script>
@endif
<div class="d-flex flex-column w-100 align-items-center pt-5">
    <div>
        <span class="btn btn-dark me-3" data-bs-toggle="modal" data-bs-target="#modalSoldado">Soldado</span>
        <span class="btn btn-dark me-3" data-bs-toggle="modal" data-bs-target="#modalCuartel">Cuartel</span>
        <span class="btn btn-dark me-3" data-bs-toggle="modal" data-bs-target="#modalCuerpo">Cuerpo</span>
        <span class="btn btn-dark me-3" data-bs-toggle="modal" data-bs-target="#modalCompañia">Compañía</span>
        <span class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalServicio">Servicio</span>
    </div>
</div>

{{-- Registrar soldado --}}

@include('assignments.modalformulario', [
    'modalId' => 'modalSoldado',
    'modalTitulo' => 'Registro de soldado',
    'ruta' => 'primerexamen.registrarSoldado',
    'yield' => 'soldado',
])

{{-- Registrar Cuartel --}}

@include('assignments.modalformulario', [
    'modalId' => 'modalCuartel',
    'modalTitulo' => 'Registro de cuartel',
    'ruta' => 'primerexamen.registrarCuartel',
    'yield' => 'cuartel',
])

{{-- Registrar Cuerpo --}}

@include('assignments.modalformulario', [
    'modalId' => 'modalCuerpo',
    'modalTitulo' => 'Registro de cuerpo',
    'ruta' => 'primerexamen.registrarCuerpo',
    'yield' => 'cuerpo',
])

{{-- Registrar compañía --}}

@include('assignments.modalformulario', [
    'modalId' => 'modalCompañia',
    'modalTitulo' => 'Registro de compañía',
    'ruta' => 'primerexamen.registrarCompañia',
    'yield' => 'compañia',
])

{{-- Registrar servicio --}}

@include('assignments.modalformulario', [
    'modalId' => 'modalServicio',
    'modalTitulo' => 'Registro de servicio',
    'ruta' => 'primerexamen.registrarServicio',
    'yield' => 'servicio',
])

@include('layouts.foot')