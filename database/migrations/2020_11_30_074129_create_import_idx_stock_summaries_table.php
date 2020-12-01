<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportIdxStockSummariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('import_idx_stock_summaries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('date_scrap');
            $table->bigInteger('idx_id_stock_summary')->nullable();
            $table->dateTime('idx_date')->nullable();
            $table->string('idx_stock_code')->nullable();
            $table->string('idx_stock_name',1000)->nullable();
            $table->text('idx_remarks')->nullable();
            $table->decimal('idx_previous',20,2)->nullable();
            $table->decimal('idx_open_price',20,2)->nullable();
            $table->decimal('idx_first_trade',20,2)->nullable();
            $table->decimal('idx_high',20,2)->nullable();
            $table->decimal('idx_low',20,2)->nullable();
            $table->decimal('idx_close',20,2)->nullable();
            $table->decimal('idx_change',20,2)->nullable();
            $table->decimal('idx_volume',20,2)->nullable();
            $table->decimal('idx_value',20,2)->nullable();
            $table->decimal('idx_frequency',20,2)->nullable();
            $table->decimal('idx_index_individual',20,2)->nullable();
            $table->decimal('idx_offer',20,2)->nullable();
            $table->decimal('idx_offer_volume',20,2)->nullable();
            $table->decimal('idx_bid',20,2)->nullable();
            $table->decimal('idx_bid_volume',20,2)->nullable();
            $table->decimal('idx_listed_shares',20,2)->nullable();
            $table->decimal('idx_tradeble_shares',20,2)->nullable();
            $table->decimal('idx_weight_for_index',20,2)->nullable();
            $table->decimal('idx_foreign_sell',20,2)->nullable();
            $table->decimal('idx_foreign_buy',20,2)->nullable();
            $table->string('idx_delisting_date')->nullable();
            $table->decimal('idx_non_regular_volume',20,2)->nullable();
            $table->decimal('idx_non_regular_value',20,2)->nullable();
            $table->decimal('idx_non_regular_frequency',20,2)->nullable();
            $table->decimal('idx_persen')->nullable();
            $table->decimal('idx_percentage')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('import_idx_stock_summaries');
    }
}
