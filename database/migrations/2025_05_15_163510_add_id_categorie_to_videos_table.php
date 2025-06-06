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
    Schema::table('videos', function (Blueprint $table) {
        $table->unsignedBigInteger('id_categorie')->nullable()->after('id_video');
        $table->foreign('id_categorie')->references('id_categorie')->on('categories')->onDelete('set null');
    });
}

public function down()
{
    Schema::table('videos', function (Blueprint $table) {
        $table->dropForeign(['id_categorie']);
        $table->dropColumn('id_categorie');
    });
}

};
