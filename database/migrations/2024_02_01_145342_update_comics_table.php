<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('comics', function (Blueprint $table) {
            $table->string('title',60);//titolo
            $table->text('description');//descrizione
            $table->string('thumb_img',400);//thumb (img)
            $table->float('price', 8,2);//price
            $table->string('series',100);//series
            $table->date('sale_date');//sale_date
            $table->string('type',40);//type
            $table->string('artists',300);//artists
            $table->string('writers',300);//writers
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comics', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('description');
            $table->dropColumn('thumb_img');
            $table->dropColumn('price');
            $table->dropColumn('series');
            $table->dropColumn('sale_date');
            $table->dropColumn('type');
            $table->dropColumn('artists');
            $table->dropColumn('writers');
        });
    }
};
