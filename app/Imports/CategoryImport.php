<?php

namespace App\Imports;

use App\Models\Category;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class CategoryImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {
        return new Category([
            'name' => $row['nombre'],
            'description' => $row['descripcion'],
            'iva' => $row['iva'],
            'utility' => $row['utilidad'],
            'status' => $row['estado'],
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

             // Above is alias for as it always validates in batches

             '*.nombre' => 'required|string|unique:categories,name|max:45',
             '*.descripcion' => 'required|string|max:255',
             '*.iva' => 'required|numeric|between:0,99.99|regex:/^(([0-9]*)(\.([0-9]{0,2}+))?)$/',
             '*.utilidad' => 'required|numeric|between:0,99.99|regex:/^(([0-9]*)(\.([0-9]{0,2}+))?)$/'
        ];
    }

    public function customValidationMessages()
    {
        return [
            'nombre.in' => 'Custom message for :Nombre.',
            'iva.in' => 'Custom message for :Iva.',
            'utilidad.in' => 'Custom message for :Utilidad.'
        ];
    }
}
