<?php

/****************************************
 * 广州蜂群互联网科技有限公司
 * 项目名称: 蜂群社群订货系统
 * 功   能: 这家伙很懒...
 * 版   本: v1.0.0
 * 作   者: HuDaming(40834106@qq.com)
 * 创建日期: 2021/7/24
****************************************/

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperationLogTable extends Migration
{
    public function getConnection()
    {
        return config('database.connection') ?: config('database.default');
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('admin_operation_log')) {
            Schema::create('admin_operation_log', function (Blueprint $table) {
                $table->id();
                $table->bigInteger('user_id');
                $table->string('path');
                $table->string('method', 10);
                $table->string('ip');
                $table->text('input');
                $table->index('user_id');
                $table->timestamps();
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
        Schema::dropIfExists('admin_operation_log');
    }
}
