<?php

namespace App\Imports;

use App\Models\Category;
use App\Models\Product;
use App\Models\Unit_measure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class ProductImport implements
    ToModel,
    WithHeadingRow,
    WithBatchInserts,
    WithChunkReading,
    WithValidation
{
    private $categories;
    private $unidades;

    public function __construct()
    {
        $this->categories = Category::pluck('id', 'name');
        $this->unidades = Unit_measure::pluck('id', 'name');
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'code' => $row['codigo'],
            'name' => $row['nombre'],
            'price' => $row['precio'],
            'sale_price' => $row['precio_venta'],
            'stock' => $row['stock'],
            'status' => $row['estado'],
            'image' => $row['imagen'],
            'category_id' => $this->categories[$row['categoria']],
            'unit_measure_id' => $this->unidades[$row['unidad_medida']],
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
            '*.codigo' => 'required|string|unique:products,code|max:20',
            '*.nombre' => 'required|string|max:100',
            '*.precio' => 'required|numeric|regex:/^(([0-9]*)(\.([0-9]{0,2}+))?)$/',
            '*.precio_venta' => 'required|numeric|regex:/^(([0-9]*)(\.([0-9]{0,2}+))?)$/',
            '*.stock' => 'required|numeric|regex:/^(([0-9]*)(\.([0-9]{0,2}+))?)$/',
            '*.estado' => 'in:activo,inactivo',
            '*.imagen' => '',
            '*.categoria' => 'required',
            '*.unidad_medida' => 'required',
        ];
    }

    public function customValidationMessages()
    {
        return [
            'codigo.in' => 'Custom message for :Codigo.',
            'nombre.in' => 'Custom message for :Nombre.',
            'precio.in' => 'Custom message for :Precio.',
            'precio_venta.in' => 'Custom message for :Precio_venta.',
            'stock.in' => 'Custom message for :Stock.',
            'estado.in' => 'Custom message for :Estado.',
            'categoria.in' => 'Custom message for :Categoria.',
            'unidad_medida.in' => 'Custom message for :U_medida.',
        ];
    }
}
