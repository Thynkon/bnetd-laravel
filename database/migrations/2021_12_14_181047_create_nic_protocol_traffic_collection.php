<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNicProtocolTrafficCollection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nic_protocol_traffic', function (Blueprint $table) {
            $table->id();
            $table->integer('ip');
            $table->integer('pkt_len');
            $table->timestamp('ts');
            $table->integer('port');
            $table->string('iface');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nic_protocol_traffic');
    }
}
