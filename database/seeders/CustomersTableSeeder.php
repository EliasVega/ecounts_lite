<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('customers')->delete();

        DB::table('customers')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'ELECTRICOS SANTANDER',
                'number' => '123456788',
                'dv' => '4',
                'address' => 'CARRERA 17 # 45-86',
                'phone' => '6374583',
                'email' => 'elesander@gmail.com',
                'credit_limit' => '5000000.00',
                'used' => '0.00',
                'available' => '5000000.00',
                'department_id' => 21,
                'municipality_id' => 846,
                'document_id' => 6,
                'liability_id' => 1,
                'organization_id' => 1,
                'regime_id' => 1,
                'created_at' => '2023-01-12 21:07:43',
                'updated_at' => '2023-01-12 21:07:43',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'FERRETERIA SANTANDER',
                'number' => '123456787',
                'dv' => '4',
                'address' => 'CARRERA 17 # 42-86',
                'phone' => '6374585',
                'email' => 'ferresander@gmail.com',
                'credit_limit' => '3000000.00',
                'used' => '0.00',
                'available' => '3000000.00',
                'department_id' => 21,
                'municipality_id' => 846,
                'document_id' => 6,
                'liability_id' => 1,
                'organization_id' => 1,
                'regime_id' => 1,
                'created_at' => '2023-01-12 21:07:43',
                'updated_at' => '2023-01-12 21:07:43',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'COLEGIO LA SALLE',
                'number' => '523456786',
                'dv' => '4',
                'address' => 'CARRERA 28 # 42-55',
                'phone' => '6374485',
                'email' => 'colsalle@gmail.com',
                'credit_limit' => '4000000.00',
                'used' => '0.00',
                'available' => '4000000.00',
                'department_id' => 21,
                'municipality_id' => 846,
                'document_id' => 6,
                'liability_id' => 1,
                'organization_id' => 1,
                'regime_id' => 1,
                'created_at' => '2023-01-12 21:07:43',
                'updated_at' => '2023-01-12 21:07:43',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'AMERICANA DE COMPUTADORES',
                'number' => '723456785',
                'dv' => '4',
                'address' => 'CARRERA 35 # 52-103',
                'phone' => '6864485',
                'email' => 'americomp@gmail.com',
                'credit_limit' => '8000000.00',
                'used' => '0.00',
                'available' => '8000000.00',
                'department_id' => 21,
                'municipality_id' => 846,
                'document_id' => 6,
                'liability_id' => 1,
                'organization_id' => 1,
                'regime_id' => 1,
                'created_at' => '2023-01-12 21:07:43',
                'updated_at' => '2023-01-12 21:07:43',
            ),
        ));


    }
}
