  <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors_bank_details', function (Blueprint $table) {
            $table->id();
            $table->integer('vendor_id');
            $table->integer('account_holder_name');
            $table->integer('bank_name');
            $table->integer('account_number');
            $table->integer('bank_swift_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendors_bank_details');
    }
};
