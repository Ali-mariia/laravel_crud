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
        Schema::create('student_form', function (Blueprint $table) {
            $table->id();
            $table->string('studentfirstname', 30);
            $table->string('studentlastname', 30);
            $table->string('Guradianfirstname',30); 
            $table->string('Guradianlastname',30); 
            $table->string('address',30);
            $table->string('religion',30);
            $table->string('nationality',30);
            $table->string ('DOB',30);
            $table->string('Email',30)->nullable();
            $table->string('phone',30);
            $table->enum( 'Gender',['M','F','O']);
          
            $table->timestamps();
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
