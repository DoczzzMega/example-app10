@if(session()->has('alert'))

    <div class="alert alert-{{ session()->pull('message_type') }} alert-dismissible fade show m-0 rounded-0 text-center" role="alert">
        <strong>{{ session()->pull('alert') }}!</strong> Вы можете закрыть это сообщение.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@endif
