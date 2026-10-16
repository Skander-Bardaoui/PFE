<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->string('position')->nullable()->change();
            $table->integer('seniority')->nullable()->change();
            $table->string('status')->nullable()->change();
            $table->string('bank_account')->nullable()->change();
            $table->string('cin')->nullable()->change();
            $table->string('mobile')->nullable()->change();
            $table->string('work_mobile')->nullable()->change();
            $table->string('cnss_number')->nullable()->change();
            $table->text('employee_note')->nullable()->change();
            $table->integer('leave_rights')->nullable()->change();
            $table->integer('token_leave_days')->nullable()->change();
            $table->integer('token_sick_leave_days')->nullable()->change();
            $table->time('start_time')->nullable()->change();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
