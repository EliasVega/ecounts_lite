<a href="{{ route('purchase.edit', $id) }}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Editar">
    <i class="far fa-edit"></i>
</a>
<a href="{{ route('purchase.show', $id) }}" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Ver Compra">
    <i class="far fa-eye"></i>
</a>
<a href="{{ route('show_pay_purchase', $id) }}" class="btn btn-ver" data-toggle="tooltip" data-placement="top" title="Agregar Abono" >
    <i class="fas fa-file-invoice-dollar"></i>
</a>
<a href="{{ route('purchasePdf', $id) }}" class="btn btn-red" target="_blank" data-toggle="tooltip" data-placement="top" title="Compra pdf">
    <i class="fas fa-file-pdf"></i>
</a>
<a href="{{ route('purchasePost', $id) }}" class="btn btn-dark" target="_blank" data-toggle="tooltip" data-placement="top" title="pdf Post" >
    <i class="fas fa-receipt"></i>
</a>
@if ($status != 'debit_note')
    <a href="{{ route('show_ndpurchase', $id) }}" class="btn btn-danger"data-toggle="tooltip" data-placement="top" title="Eliminar" >
        <i class="fas fa-receipt"></i>
    </a>
@endif

