Skip to content
Search or jump to…
Pull requests
Issues
Marketplace
Explore
 
@ilhamlutfiii 
mbemvieira
/
parking-api
Public
Code
Issues
Pull requests
Actions
Projects
Wiki
Security
Insights
parking-api/database/migrations/2014_10_12_000000_create_users_table.php /

Mateus Vieira Now using Laravel
Latest commit 4338282 on Jun 8, 2017
 History
 0 contributors
35 lines (32 sloc)  746 Bytes

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
