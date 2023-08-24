<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndicatorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('indicators')->delete();

        DB::table('indicators')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'DIAN',
                'nit' => '800197268',
                'dv' => '4',
                'resolution' => '18760000001',
                'date_from' => '2019-01-19',
                'date_to' => '2030-01-19',
                'prefix' => 'FE',
                'from' => 10000,
                'to' => 20000,
                'software_id' => '56f2ae4e-9812-4fad-9255-08fcfcd5ccb0',
                'pin' => '12345',
                'technical_key' => '693ff6f2a553c3646a063436fd4dd9ded0311471',
                'document_version' => 'UBL 2.1',
                'form_version' => 'DIAN 2.1',
                'country_code' => 'CO',
                'country' => 'Colombia',
                'currency' => 'COP',
                'economic_activity' => '1234;1235',
                'postal_code' => '68001',
                'mercantil_registration' => '147852369',
                'created_at' => '2023-01-12 21:07:40',
                'updated_at' => '2023-01-12 21:07:40',
            ),
        ));


    }
}
