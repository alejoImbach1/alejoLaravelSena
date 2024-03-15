<div class="modal" tabindex="-1" id={{$modalId}}>
    <div class="modal-dialog w-25">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $modalTitulo }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action={{route($ruta)}} method="POST" class="m-0">
                    @csrf
                    @yield($yield)
                </form>
            </div>
        </div>
    </div>
</div>
