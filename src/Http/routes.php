<?php
/****************************************
 * 广州蜂群互联网科技有限公司
 * 项目名称: 蜂群社群订货系统
 * 功   能: 这家伙很懒...
 * 版   本: v1.0.0
 * 作   者: HuDaming(40834106@qq.com)
 * 创建日期: 2021/7/24
****************************************/

use Dcat\Admin\OperationLog\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('auth/operation-logs', Controllers\OperationLogController::class . '@index')->name('dcat-admin.operation-log.index');
Route::delete('auth/operation-logs/{id}', Controllers\OperationLogController::class . '@destroy')->name('dcat-admin.operation-log.destroy');
