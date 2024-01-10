<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFotoToMenus extends Migration
{
public function up()
{
Schema::table('menus', function (Blueprint $table) {
$table->string('foto')->nullable(); // Add this line for the new photo column
});
}

public function down()
{
Schema::table('menus', function (Blueprint $table) {
$table->dropColumn('foto');
});
}
}