<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uid')->comment('用户唯一id');
            $table->string('level_id')->comment('用户等级');
            $table->string('phone', 50)->default('')->comment('手机号码');
            $table->string('email')->default('')->comment('邮箱');
            $table->string('password')->default('');
            $table->string('wx_id')->default('')->comment('微信id');
            $table->string('wx_no')->default('')->comment('微信号');
            $table->string('nickname')->default('')->comment('昵称');
            $table->string('avatar')->default('')->comment('头像');
            $table->string('real_name')->default('')->comment('真实姓名');
            $table->integer('score')->default(0)->comment('用户积分');
            $table->string('unionid')->default('')->comment('微信公众平台唯一id');
            $table->string('official_openid')->default('')->comment('微信公众号openid');
            $table->string('weapp_openid')->default('')->comment('微信小程序openid');
            $table->tinyInteger('pdd_authority_status')->default(0)->comment('pdd备案状态');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
