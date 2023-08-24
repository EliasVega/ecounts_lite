<a href="{{ route('ndpurchase.show', $id) }}">
    <button class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Ver Nota" ><i class="far fa-eye"></i></button>
</a>
<a href="{{ route('ndpurchasePdf', $id) }}" class="btn btn-red" target="_blank" data-toggle="tooltip" data-placement="top" title="Compra pdf">
    <i class="fas fa-file-pdf"></i>
</a>
<a href="{{ route('ndpurchasePost', $id) }}" class="btn btn-dark" target="_blank" data-toggle="tooltip" data-placement="top" title="pdf Post" >
    <i class="fas fa-receipt"></i>
</a>
