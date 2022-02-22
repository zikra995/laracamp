<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaymentStatusAndMidtransUrlAndMidtransBookingCodeInCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('checkouts', function (Blueprint $table) {
            $table->string('paytment_status', 100)->default('waiting')->aftar('camp_id');
            $table->string('midtans_url')->nullable()->aftar('paytment_status');
            $table->string('midtans_booking_code')->nullable()->aftar('midtans_url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('checkouts', function (Blueprint $table) {
           $table->dropColumn(['payment_status', 'midtans_url','midtans_booking_code']);
        });
    }
}
