<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Customer;
use App\User;

class CreateDemoUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // ==== this migration is temperary and only for demo purpose

        $user = User::create([
            'name' => 'customer',
            'password' => bcrypt('customer'),
            'type' => 'customer',
        ]);

        Customer::create([
            'user_id' => $user->id,
            'uid' => randomString(),
            'first_name' => 'علی',
            'last_name' => 'محمدی',
            'mobile' => '09129876543',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demo_user');
    }
}
