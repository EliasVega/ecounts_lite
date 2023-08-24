<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicators', function (Blueprint $table) {
            $table->id();

            $table->string('name', 4);//nombre Dian
            $table->string('nit', 12); //$AuthorizationProviderID
            $table->string('dv'); //Digito de verificacion
            $table->string('resolution', 20);//$InvoiceAuthorization
            $table->date('date_from');//$StartDate
            $table->date('date_to');//$EndDate
            $table->string('prefix', 9);//$Prefix
            $table->integer('from');//$From
            $table->integer('to');//$To
            $table->string('software_id', 255);//$ProviderID
            $table->string('pin', 9);//$pin
            $table->string('technical_key');//clave tecnica dian
            $table->string('document_version');//$UBLVersionID
            $table->string('form_version');//$ProfileID
            $table->string('country_code');//$IdentificationCode
            $table->string('country');//Nombre del pais
            $table->string('currency');//$DocumentCurrencyCode
            $table->string('economic_activity');//$IndustryClasificionCode
            $table->string('postal_code');//Codigo postal
            $table->string('mercantil_registration', 12); //Codigo Matricula mercantil Camara de comercio

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indicators');
    }
};
