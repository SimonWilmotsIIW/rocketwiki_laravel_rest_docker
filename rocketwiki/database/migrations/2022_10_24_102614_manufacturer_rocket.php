<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ManufacturerRocket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rockets', function (Blueprint $table) {
            $table->text('manufacturer_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('rockets', 'manufacturer_id')) {
            Schema::table('rockets', function (Blueprint $table) {
                $table->dropColumn('manufacturer_id');
            });
        }
    }
}
