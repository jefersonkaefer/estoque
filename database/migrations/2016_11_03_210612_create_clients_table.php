<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 45);
            $table->string('cpf', 11)->nullable();
            $table->date('birthday')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        factory(User::class)->create([
            'name' => 'Jeferson Kaefer',
            'username' => 'kaefer',
            'email' => 'jefersonkaefer@gmail.com',
            'password' => bcrypt('admin')]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
