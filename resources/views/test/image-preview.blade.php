@extends ('master.layout')

@section ('content')
    <div class="modal is-active">
        <div class="modal-background"></div>

        <div class="modal-content has-text-centered">
            <img src="{{ asset("image/{$image->filename}") }}">
        </div>

        <a href="{{ route('test.image') }}" class="modal-close is-large" aria-label="close"></a>
    </div>
@endsection
