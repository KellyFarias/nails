<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    const 
    BUSINESS="businesses",
    PRODUCT="products",
    PAYMENT="payments",
    ADDRESS="addresses",
    APPOINTMENT="appointments",
    IMAGE="images",
    FAVOURITE="favourites",
    STATUS="status",
    EMPLOYEE="employees";
    public function up(): void
    {
        $this->createBusinessTable();
        $this->createEmployeeTable();
        $this->createProductTable();
        $this->createAddressTable();
        $this->createImageTable();
        $this->createFavouriteTable();
        $this->createPaymentTable();
        $this->createStatusTable();
        $this->createAppointmentTable();
        
    }
    public function down(): void
    {
        $tables=[
            self::APPOINTEMENT,
            self::STATUS,
            self::PAYMENT,
            self::FAVOURITE,
            self::IMAGE,
            self::ADDRESS,
            self::PRODUCT,
            self::EMPLOYEE,
            self::BUSINESS
        ];
        foreach($tables as $table){
            Schema::dropIfExists($table);
        }
       
    }

    public function createBusinessTable(){
        Schema::create(self::BUSINESS, function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slogan');
            $table->string('url_logo');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }
    public function createEmployeeTable(){
        Schema::create(self::EMPLOYEE, function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('business_id')->constrained(self::BUSINESS);
            $table->timestamps();
        });
    }
    public function createProductTable(){
        Schema::create(self::PRODUCT, function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->double('price',8,2);
            $table->foreignId('business_id')->constrained(self::BUSINESS);
            $table->timestamps();
        });
    }

    public function createPaymentTable(){
        Schema::create(self::PAYMENT, function (Blueprint $table) {
            $table->id();
            $table->string('amount');
            $table->morphs('paymentable');
            $table->foreignId('business_id')->constrained(self::BUSINESS);
            $table->timestamps();
        });
    }

    public function createStatusTable(){
        Schema::create(self::STATUS, function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
    }

    public function createImageTable(){
        Schema::create(self::IMAGE, function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->morphs('imageable');
        });
    }

    public function createFavouriteTable(){
        Schema::create(self::FAVOURITE, function (Blueprint $table) {
            $table->id();
            $table->morphs('favouritable');
            $table->foreignId('image_id')->constrained(self::IMAGE);
        });
    }
    public function createAddressTable(){
        Schema::create(self::ADDRESS, function (Blueprint $table) {
            $table->id();
            $table->string('street');
            $table->string('int_num');
            $table->string('out_num');
            $table->string('suburb');
            $table->string('town');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->double('latitude');
            $table->double('longitude');
            $table->morphs('addressable');
        });
    }

    public function createAppointmentTable(){
        Schema::create(self::APPOINTMENT ,function (Blueprint $table) {
            $table->id();
            $table->dateTime('date_time');
            $table->dateTime('price')->nullable();
            $table->foreignId('business_id')->constrained(self::BUSINESS);
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('employee_id')->constrained(self::EMPLOYEE);
            $table->foreignId('status_id')->constrained(self::STATUS);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    
};
