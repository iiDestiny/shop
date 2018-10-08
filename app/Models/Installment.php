<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Installment
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $no
 * @property int $user_id
 * @property int $order_id
 * @property float $total_amount
 * @property int $count
 * @property float $fee_rate
 * @property float $fine_rate
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\InstallmentItem[] $items
 * @property-read \App\Models\Order $order
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Installment whereCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Installment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Installment whereFeeRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Installment whereFineRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Installment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Installment whereNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Installment whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Installment whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Installment whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Installment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Installment whereUserId($value)
 */
class Installment extends Model
{
    const STATUS_PENDING = 'pending';
    const STATUS_REPAYING = 'repaying';
    const STATUS_FINISHED = 'finished';

    public static $statusMap = [
        self::STATUS_PENDING  => '未执行',
        self::STATUS_REPAYING => '还款中',
        self::STATUS_FINISHED => '已完成',
    ];

    protected $fillable = ['no', 'total_amount', 'count', 'fee_rate', 'fine_rate', 'status'];

    protected static function boot()
    {
        parent::boot();
        // 监听模型创建事件，在写入数据库之前触发
        static::creating(function ($model) {
            // 如果模型的 no 字段为空
            if (!$model->no) {
                // 调用 findAvailableNo 生成分期流水号
                $model->no = static::findAvailableNo();
                // 如果生成失败，则终止创建订单
                if (!$model->no) {
                    return false;
                }
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function items()
    {
        return $this->hasMany(InstallmentItem::class);
    }

    public static function findAvailableNo()
    {
        // 分期流水号前缀
        $prefix = date('YmdHis');
        for ($i = 0; $i < 10; $i++) {
            // 随机生成 6 位的数字
            $no = $prefix . str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);
            // 判断是否已经存在
            if (!static::query()->where('no', $no)->exists()) {
                return $no;
            }
        }
        \Log::warning(sprintf('find installment no failed'));

        return false;
    }
}
