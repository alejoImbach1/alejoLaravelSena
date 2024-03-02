<!doctype html>
<html lang="en">
  @include('layouts.head',['titulo' => "alejoweb"])
  <body>
    @include('layouts.header',['titulo'=>"Bienvenido al desarrollo web de Alejo"])
    <div class="p-5 d-flex justify-content-center w-100">
      <a class="btn btn-dark" href="{{route('curso.indexTallerHttp')}}">Taller http</a>
      {{-- <a href="{{route()}}"></a> --}}
    </div>
    @include('scriptbootstrap')
  </body>
</html>