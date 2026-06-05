<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserMasterTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        // Creating user_master table
        Schema::create('user_master', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('first_name', 20);
            $table->string('last_name', 20);
            $table->string('email', 30);
            $table->string('password', 30);
            $table->string('phone_number', 20)->nullable();
            $table->string('user_type', 20)->default('Customer');
            $table->boolean('isActive')->default(1);
            $table->timestamps();
        });

        // Creating bookings table
        Schema::create('bookings', function (Blueprint $table) {
            $table->id('booking_id');
            $table->bigInteger('service_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->date('booking_date');
            $table->string('booking_time',20);
            $table->string('payment_mode',20);
            $table->boolean('Status')->default(0); // 0 -> pending , 1->Accepted
            $table->boolean('Updated')->default(0); // 0 -> pending , 1->Accepted
            $table->foreign('user_id')->references('user_id')->on('user_master');
            $table->foreign('service_id')->references('service_id')->on('services');
            $table->timestamps();
        });

        Schema::create('bookingAcceptance', function (Blueprint $table) {
            $table->id('Aceptance_id');
            $table->bigInteger('booking_id')->unsigned()->unique();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('service_id')->unsigned();
            $table->bigInteger('provider_id')->unsigned();
            $table->boolean('Status')->default(1);
            $table->boolean('Updated')->default(0);
            $table->foreign('booking_id')->references('booking_id')->on('bookings');
            $table->foreign('user_id')->references('user_id')->on('user_master');
            $table->foreign('service_id')->references('service_id')->on('services');
            $table->foreign('provider_id')->references('provider_id')->on('service_providers');
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->id('category_id');
            $table->string('category_name', 100)->default('Provider');
            $table->boolean('isActive')->default(1);
            $table->timestamps();
        });

        // Creating service_providers table
        Schema::create('service_providers', function (Blueprint $table) {
            $table->id('provider_id');
            $table->bigInteger('category_id')->unsigned();
            $table->string('availability', 20)->default('10:00 AM to 10:00 PM');
            $table->string('certi_info', 20)->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->boolean('isActive')->default(1);
            $table->foreign('user_id')->references('user_id')->on('user_master');
            $table->foreign('category_id')->references('category_id')->on('categories');
            $table->timestamps();
        });
        

        // Creating services table
        Schema::create('services', function (Blueprint $table) {
            $table->id('service_id');
            $table->bigInteger('category_id')->unsigned()->default(0);
            $table->string('service_type',50);
            $table->string('description',100);
            $table->decimal('price');
            $table->bigInteger('provider_id')->unsigned();
            $table->boolean('isActive')->default(1);
            $table->foreign('provider_id')->references('provider_id')->on('service_providers');
            $table->foreign('category_id')->references('category_id')->on('categories');
            $table->timestamps();
        });

        // Creating payments table
        Schema::create('payments', function (Blueprint $table) {
            $table->id('payment_id');
            $table->bigInteger('booking_id')->unsigned();
            $table->decimal('amount');
            $table->date('payment_date');
            $table->string('payment_method',20);
            $table->foreign('booking_id')->references('booking_id')->on('bookings');
            $table->timestamps();
        });

        // Creating reviews table
        Schema::create('reviews', function (Blueprint $table) {
            $table->id('review_id');
            $table->bigInteger('booking_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('provider_id')->unsigned();
            $table->decimal('rating');
            $table->string('review_text',200);
            $table->foreign('booking_id')->references('booking_id')->on('bookings');
            $table->foreign('user_id')->references('user_id')->on('user_master');
            $table->foreign('provider_id')->references('provider_id')->on('service_providers');
            $table->timestamps();
        });

        // Creating admins table
        Schema::create('admins', function (Blueprint $table) {
            $table->id('admin_id');
            $table->string('first_name',20);
            $table->string('last_name',20);
            $table->string('email',40)->unique();
            $table->string('password',40);
            $table->string('phone_number',20)->nullable();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('admins');
        Schema::dropIfExists('reviews');
        Schema::dropIfExists('payments');
        Schema::dropIfExists('services');
        Schema::dropIfExists('service_providers');
        Schema::dropIfExists('bookings');
        Schema::dropIfExists('user_master');
        Schema::dropIfExists('categories');
    }
}
