@extends('assignments.registros');

@section('numero')
    <h1>juuum</h1>
    {{-- <div class="modal fade" id="modalPrimo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog w-25">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Verificar Primo</h1>
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
    </div> --}}
@endsection
