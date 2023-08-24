<?php

namespace App\Imports;

use App\Models\Customer;
use App\Models\Department;
use App\Models\Document;
use App\Models\Liability;
use App\Models\Municipality;
use App\Models\Organization;
use App\Models\Regime;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class CustomerImport implements
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
        return new Customer([
            'address' => $row['direccion'],
            'available' => $row['disponible'],
            'credit_limit' => $row['limite_credito'],
            'department_id' => $this->departments[$row['departamento']],
            'document_id' => $this->documents[$row['documento']],
            'dv' => $row['dv'],
            'email' => $row['correo'],
            'liability_id' => $this->liabilities[$row['responsabilidad']],
            'municipality_id' => $this->municipalities[$row['municipio']],
            'name' => $row['nombre'],
            'number' => $row['identificacion'],
            'organization_id' => $this->organizations[$row['persona']],
            'phone' => $row['telefono'],
            'regime_id' => $this->regimes[$row['regimen']],
            'used' => $row['usado'],
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
            '*.limite_credito' => 'required',
            '*.usado' => '',
            '*.disponible' => '',
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
            '*.nombre' => 'Custom message for :nombre.',
            '*.dv' => 'Custom message for :dv.',
            '*.identificacion' => 'Custom message for :identificacion.',
            '*.direccion' => 'Custom message for :direccion.',
            '*.telefono' => 'Custom message for :telefono.',
            '*.correo' => 'Custom message for :correo.',
            '*.limite_credito' => 'Custom message for :credito.',
            '*.usado' => 'Custom message for :usado.',
            '*.disponible' => 'Custom message for :saldo.',
            '*.departamento' => 'Custom message for :departamento.',
            '*.municipio' => 'Custom message for :municipio.',
            '*.documento' => 'Custom message for :documento.',
            '*.responsabilidad' => 'Custom message for :responsabilidad.',
            '*.persona' => 'Custom message for :persona.',
            '*.regimen' => 'Custom message for :regimen.',
        ];
    }
}
