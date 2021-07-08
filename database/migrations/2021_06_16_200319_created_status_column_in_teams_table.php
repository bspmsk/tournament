<?php

/**
 * Laravel Schematics
 *
 * WARNING: removing @tag value will disable automated removal
 *
 * @package Laravel-schematics
 * @author  Maarten Tolhuijs <mtolhuys@protonmail.com>
 * @url     https://github.com/mtolhuys/laravel-schematics
 * @tag     laravel-schematics-teams-model
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatedStatusColumnInTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('teams', static function (Blueprint $table) {
            $table->tinyInteger('status')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teams', static function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
