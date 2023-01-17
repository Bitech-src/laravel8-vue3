<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('login_role', function (Blueprint $table) {
            $table->integer('login_id');
            $table->integer('role_id');
            $table->string('code',128);
            $table->string('type',24);
            $table->string('kbn',24);
            $table->string('name',128);
            $table->string('title',128);
            $table->integer('org_id');
            $table->string('lang',128)->default('jp');
            $table->string('desc',1024);
            $table->string('remark',1024);
            $table->string('sort',24);
            $table->integer('lef');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('deleted_at')->nullable();

            $table->primary(['login_id','role_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('login_role');
    }
}
