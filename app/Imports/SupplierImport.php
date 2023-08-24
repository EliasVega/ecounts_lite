<?php

namespace App\Imports;

use App\Models\Department;
use App\Models\Document;
use App\Models\Liability;
use App\Models\Municipality;
use App\Models\Organization;
use App\Models\Regime;
use App\Models\Supplier;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class SupplierImport implements
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

    private $departments;
    private $municipalities;
    private $documents;
    private $liabilities;
    private $organizations;
    private $regimes;

    public function __construct()
    {
        $this->departments = Department::pluck('id', 'name');
        $this->municipalities = Municipality::pluck('id', 'name');
        $this->documents = Document::pluck('id', 'name');
        $this->liabilities = Liability::pluck('id', 'name');
        $this->organizations = Organization::pluck('id', 'name');
        $this->regimes = Regime::pluck('id', 'name');
    }
    public function model(array $row)
    {
        return new Supplier([
            'name' => $row['nombre'],
            'number' => $row['identificacion'],
            'dv' => $row['dv'],
            'address' => $row['direccion'],
            'phone' => $row['telefono'],
            'email' => $row['correo'],
            'contact' => $row['contacto'],
            'phone_contact' => $row['tel_contacto'],

            'department_id' => $this->departments[$row['departamento']],
            'municipality_id' => $this->municipalities[$row['municipio']],
            'document_id' => $this->documents[$row['documento']],
            'liability_id' => $this->liabilities[$row['responsabilidad']],
            'organization_id' => $this->organizations[$row['persona']],
            'regime_id' => $this->regimes[$row['regimen']],
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
            '*.nombre' => 'required|max:45',
            '*.dv' => 'required',
            '*.identificacion' => 'required|max:20',
            '*.direccion' => 'max:45',
            '*.telefono' => 'max:20',
            '*.correo' => 'required|string|unique:customers,name|max:45',
            '*.contacto' => 'required',
            '*.tel_contacto' => '',
            '*.departamento' => 'required',
            '*.municipio' => 'required',
            '*.documento' => 'required',
            '*.responsabilidad' => 'required',
            '*.persona' => 'required',
            '*.regimen' => 'required',
        ];
    }

    public function customValidationMessages()
    {
        return [
            '*.nombre' => 'Custom message for :Nombre.',
            '*.dv' => 'Custom message for :dv.',
            '*.identificacion' => 'Custom message for :Identificacion.',
            '*.direccion' => 'Custom message for :Direccion.',
            '*.telefono' => 'Custom message for :Telefono.',
            '*.correo' => 'Custom message for :Correo.',
            '*.contacto' => 'Custom message for :Credito.',
            '*.tel_contact' => 'Custom message for :Usado.',
            '*.departamento' => 'Custom message for :Departamento.',
            '*.municipio' => 'Custom message for :Municipio.',
            '*.documento' => 'Custom message for :Documento.',
            '*.responsabilidad' => 'Custom message for :Responsabilidad.',
            '*.persona' => 'Custom message for :Persona.',
            '*.regimen' => 'Custom message for :Regimen.',
        ];
    }
}
