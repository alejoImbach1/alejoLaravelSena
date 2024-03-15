@include('layouts.head', ['titulo' => 'alejoweb'])
{{-- body --}}
@include('layouts.header', ['titulo' => 'Bienvenido al desarrollo web de Alejo'])
<div class="p-5 d-flex justify-content-center w-100">
    <a class="btn btn-dark me-3" href="{{ route('curso.indexTallerHttp') }}">Taller http</a>
    <a class="btn btn-dark" href="{{ route('curso.indexRegistros') }}">Registros</a>
</div>
    
@include('layouts.foot')
