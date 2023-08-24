<?php

namespace App\Imports;

use App\Models\Branch;
use App\Models\Branch_product;
use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class Branch_productImport implements
    ToModel,
    WithHeadingRow,
    WithBatchInserts,
    WithChunkReading,
    WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    //private $branches;
    //private $products;

    public function __construct()
    {
        //$this->branches = Branch::pluck('id', 'name');
        //$this->products = Product::pluck('id', 'name');
    }

    public function model(array $row)
    {
        return new Branch_product([

            'stock' => $row['stock'],
            'order_product' => $row['orden_producto'],
            'branch_id' => $row['sucursal'],
            'product_id' => $row['producto'],
        ]);
    }

    public function batchSize(): int
    {
        return 1000;
    }

    public function chunkSize(): int
    {
        return 1000;
    }

    public function rules(): array
    {
        return [
            '*.stock' => 'required',
            '*.orden_producto' => 'required',
            '*.sucursal' => 'required',
            '*.producto' => 'required',
        ];
    }

    public function customValidationMessages()
    {
        return [
            'stock.in' => 'Custom message for :Stock.',
            'orden_producto.in' => 'Custom message for :Orden_producto.',
            'sucursal.in' => 'Custom message for :Sucursal.',
            'producto.in' => 'Custom message for :Producto.',
        ];
    }
}
