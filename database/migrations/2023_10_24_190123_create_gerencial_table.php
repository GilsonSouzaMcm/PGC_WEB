<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::table('apdata_gerencial', function (Blueprint $table) {
            $table->id();
            $table->string('Observacao')->nullable(); // Campo Novo
            $table->timestamps();
        });
    }

 

    public function down()
    {
        Schema::table('apdata_gerencial', function (Blueprint $table) {
            $table->dropColumn('Observacao');
        });
    }
};
