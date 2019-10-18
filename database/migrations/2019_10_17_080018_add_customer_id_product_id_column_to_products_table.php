<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCustomerIdProductIdColumnToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasColumn('product_customers', 'product_id', 'customer_id')){
            Schema::table('product_customers', function (Blueprint $table) {
                $table->bigInteger('product_id')->after('id');
                $table->bigInteger('customer_id')->after('id');
            });
        }    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(Schema::hasColumn('product_customers', 'product_id', 'customer_id')) {
            Schema::table('product_customers', function (Blueprint $table) {
                $table->dropColumn('product_id');
                $table->dropColumn('customer_id');
            });
        }
    }
}
