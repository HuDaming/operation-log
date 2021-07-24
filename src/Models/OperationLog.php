<?php

/****************************************
 * 广州蜂群互联网科技有限公司
 * 项目名称: 蜂群社群订货系统
 * 功   能: 这家伙很懒...
 * 版   本: v1.0.0
 * 作   者: HuDaming(40834106@qq.com)
 * 创建日期: 2021/7/24
****************************************/

namespace Dcat\Admin\OperationLog\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;

class OperationLog extends Model
{
    use HasDateTimeFormatter;

    protected $table = 'admin_operation_log';

    protected $fillable = ['user_id', 'path', 'method', 'ip', 'input'];

    public static $methodColors = [
        'GET' => 'primary',
        'POST' => 'success',
        'PUT' => 'blue',
        'DELETE' => 'danger',
    ];

    public static $methods = [
        'GET', 'POST', 'PUT', 'DELETE', 'OPTIONS', 'PATCH',
        'LINK', 'UNLINK', 'COPY', 'HEAD', 'PURGE',
    ];

    public function __construct(array $attributes = [])
    {
        $this->connection = config('database.connection') ?: config('database.default');

        parent::__construct($attributes);
    }

    /**
     * Log belongs to users.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(config('admin.database.users_model'));
    }
}
