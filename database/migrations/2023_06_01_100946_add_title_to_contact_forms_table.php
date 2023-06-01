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
    public function up() //列の追加
    {
        Schema::table('contact_forms', function (Blueprint $table) {
            $table->string('title',50)->after('name'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //列の削除（ロールバック）
    {
        Schema::table('contact_forms', function (Blueprint $table) {
            $table->dropColumn('title'); 
        });
    }
};
