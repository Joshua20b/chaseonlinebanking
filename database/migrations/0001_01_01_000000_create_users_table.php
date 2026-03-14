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
            $table->string('unique_id')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('email_code')->nullable();
            $table->string('registration_token');
            $table->date('dob');
            $table->string('gender');
            $table->string('marital_status')->nullable();
            $table->string('dial_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('professional_status')->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('nationality')->nullable();
            $table->string('currency')->nullable();
            $table->string('savings_currency')->nullable(); // Savings Account Currency 
            $table->string('checking_currency')->nullable(); // Checking Account Currency 
            $table->string('account_type');
            // $table->string('password');
            $table->string('password_text')->nullable();
            $table->boolean('should_login_require_code')->default(false);
            $table->string('login_code')->nullable();
            $table->boolean('should_transfer_fail')->default(false);
            $table->string('transfer_pin')->nullable();
            $table->string('transfer_pin_text')->nullable();
            $table->boolean('transfer_pin_reset_by_admin')->default(false);
            $table->string('account_number');
            $table->boolean('is_account_verified')->default(false);
            $table->boolean('account_state')->default(true);
            $table->text('account_state_reason')->nullable();
            $table->decimal('balance', 15, 2)->default(0.00);
            $table->decimal('savings_balance', 15, 2)->default(0.00); // Savings Account Balance  
            $table->decimal('checking_balance', 15, 2)->default(0.00); // Checking Account Balance  
            $table->string('image')->nullable();
            $table->string('id_front')->nullable();
            $table->string('id_back')->nullable();
            $table->boolean('is_ID_verified')->default(0);
            $table->dateTime('last_login_time')->nullable();
            $table->text('last_login_device')->nullable();
            $table->string('password');
            $table->enum('role', ['admin', 'user', 'master'])->default('user');
            $table->enum('status', ['active', 'inactive', 'suspended', 'blocked'])->default('active');
            $table->enum('id_status', ['declined', 'approved', 'pending', 'unverified'])->default('unverified');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
