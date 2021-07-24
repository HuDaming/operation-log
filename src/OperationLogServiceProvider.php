<?php

/****************************************
 * 广州蜂群互联网科技有限公司
 * 项目名称: 蜂群社群订货系统
 * 功   能: 这家伙很懒...
 * 版   本: v1.0.0
 * 作   者: HuDaming(40834106@qq.com)
 * 创建日期: 2021/7/24
****************************************/

namespace Dcat\Admin\OperationLog;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\OperationLog\Http\Middleware\LogOperation;

class OperationLogServiceProvider extends ServiceProvider
{
    protected $middleware = [
        'middle' => [
            LogOperation::class,
        ],
    ];

    protected $menu = [
        [
            'title' => 'Operation Log',
            'uri'   => 'auth/operation-logs',
            'icon'  => '',
        ],
    ];

	protected $js = [
        'js/index.js',
    ];
	protected $css = [
		'css/index.css',
	];

	public function settingForm()
	{
		return new Setting($this);
	}
}
