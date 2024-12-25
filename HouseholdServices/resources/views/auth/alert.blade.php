@foreach (session('flash_notification', collect())->toArray() as $message)
    <div class="alert alert-{{ $message['level'] }}
        {{ $message['important'] ? 'alert-dismissible' : '' }}
        bg-{{ $message['level'] }} text-white border-0 fade show"
        role="alert"
    >
        @if ($message['important'])
            <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="alert"
                aria-label="Close">
            </button>
        @endif
        {!! $message['message'] !!}
    </div>
@endforeach

{{ session()->forget('flash_notification') }}
