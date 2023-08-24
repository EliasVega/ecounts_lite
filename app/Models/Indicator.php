<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Indicator extends Model
{

    protected $fillable = [
        'name',
        'nit',
        'dv',
        'resolution',
        'date_from',
        'date_to',
        'prefix',
        'from',
        'to',
        'softwareI_id',
        'pin',
        'technical_key',
        'document_version',
        'form_version',
        'country_code',
        'country',
        'currency',
        'economic_activity',
        'postal_code',
        'mercantil_registration'
    ];

    public function company(){
        return $this->belongsTo(Company::class);
    }
}
