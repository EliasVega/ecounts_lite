@if (Auth::user()->role_id != 5 )
    @if (Auth::user()->transfer == 1)
        <a href="{{ route('show_transfer', $id) }}"
        class="btn btn-ver" data-toggle="tooltip" data-placement="top" title="Traslados"><i class="fas fa-dumpster"></i>
        </a>
    @endif
@endif





