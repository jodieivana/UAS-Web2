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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('usertype')->default(0);
            $table->string('subscription_status')->default("Not Subscribed");
            $table->string('account_status')->default("active");
            $table->timestamp();
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
