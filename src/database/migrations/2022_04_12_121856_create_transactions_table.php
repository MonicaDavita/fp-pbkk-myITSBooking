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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->timestamp('book_date');
            $table->integer('duration');
            $table->integer('participants');
            $table->binary('document');
            $table->text('description');
            $table->timestamps();

            $table->foreignId('admin_id')->constrained('admins');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('facility_id')->constrained('facilities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
