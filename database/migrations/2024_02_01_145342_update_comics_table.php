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
            $table->string('thumb_img',250);//thumb (img)
            $table->float('price', 8,2);//price
            $table->string('series',40);//series
            $table->date('sale_date');//sale_date
            $table->string('type',40);//type
            $table->string('artist',40);//artists
            $table->string('writer',50);//writers
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comics', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('thumb_img');
            $table->dropColumn('price');
            $table->dropColumn('series');
            $table->dropColumn('sale_date');
            $table->dropColumn('type');
            $table->dropColumn('artist');
            $table->dropColumn('writer');
        });
    }
};
