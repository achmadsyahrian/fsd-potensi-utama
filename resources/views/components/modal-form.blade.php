@props([
    'id' => 'modal-id',
    'title' => 'Modal Title',
    'actionUrl' => '#',
    'method' => 'post', 
    'submitText' => 'Simpan',
    'size' => 'modal-lg',
    'position' => 'centered',
    'methodForm' => 'post'
])

<div class="modal modal-blur fade" id="{{ $id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <form action="{{ $actionUrl }}" method="{{$methodForm}}" class="d-inline">
         @if ($methodForm != 'get')
            @csrf
         @endif
         @method($method)

        <div class="modal-dialog {{$size}} modal-dialog-{{$position}}" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $title }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{ $slot }}
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">Batal</a>
                    <button class="btn btn-primary ms-auto" type="submit">
                        {{ $submitText }}
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
