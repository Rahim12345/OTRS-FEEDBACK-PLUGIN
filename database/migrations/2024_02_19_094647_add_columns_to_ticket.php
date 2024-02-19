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
        Schema::table('ticket', function (Blueprint $table) {
            $table->string('s1')->default(0);
            $table->string('s2')->default(0);
            $table->string('s3')->default(0);
            $table->string('s4')->default(0);
            $table->string('s5')->default(0);
            $table->string('s6')->default(0);
            $table->string('s7')->default(0);
            $table->text('suggest')->nullable();
            $table->string('ticket_token')->nullable();
            $table->boolean('mail_send')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ticket', function (Blueprint $table) {
            //
        });
    }
};
