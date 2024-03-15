@extends($extends)
@section('numero-primo')
    <div class="d-flex flex-column w-100 mb-3">
        <label class="fs-5 mb-1" for="">Número a verificar</label>
        <input type="number" name="numero">
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Verificar</button>
    </div>
@endsection

@section('numeros-amigos')
    <div class="d-flex flex-column w-100 mb-3">
        <label class="fs-5 mb-1" for="">Primer número</label>
        <input type="number" name="numero1">
    </div>
    <div class="d-flex flex-column w-100 mb-3">
        <label class="fs-5 mb-1" for="">Segundo número</label>
        <input type="number" name="numero2">
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Verificar</button>
    </div>
@endsection

@section('promedio-notas')
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
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Calcular</button>
    </div>
@endsection

@section('cuadratica')
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
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Calcular raices</button>
    </div>
@endsection

@section('perro')
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
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
@endsection

@section('casa')
    <div class="d-flex flex-column w-100 mb-3">
        <label class="fs-5 mb-1" for="price">Precio</label>
        <input type="number" name="price" min="0">
    </div>
    <div class="d-flex flex-column w-100 mb-3">
        <label class="fs-5 mb-1" for="area">Área (metros cuadrados)</label>
        <input type="number" name="area" min="0">
    </div>
    <div class="d-flex flex-column w-100 mb-3">
        <label class="fs-5 mb-1" for="stories">Cantidad de pisos</label>
        <input type="number" min="1" max="99" name="stories">
    </div>
    <div class="d-flex flex-column w-100 mb-3">
        <label class="fs-5 mb-1" for="color">Color</label>
        <input type="text" name="color">
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
@endsection

