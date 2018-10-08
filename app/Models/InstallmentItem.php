<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Moontoast\Math\BigNumber;

/**
 * App\Models\InstallmentItem
 *
 * @mixin \Eloquent
 * @property int $id
 * @property int $installment_id
 * @property int $sequence
 * @property float $base
 * @property float $fee
 * @property float|null $fine
 * @property \Illuminate\Support\Carbon $due_date
 * @property \Illuminate\Support\Carbon|null $paid_at
 * @property string|null $payment_method
 * @property string|null $payment_no
 * @property string $refund_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $is_overdue
 * @property-read mixed $total
 * @property-read \App\Models\Installment $installment
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InstallmentItem whereBase($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InstallmentItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InstallmentItem whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InstallmentItem whereFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InstallmentItem whereFine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InstallmentItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InstallmentItem whereInstallmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InstallmentItem wherePaidAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InstallmentItem wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InstallmentItem wherePaymentNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InstallmentItem whereRefundStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InstallmentItem whereSequence($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\InstallmentItem whereUpdatedAt($value)
 */
class InstallmentItem extends Model
{
    const REFUND_STATUS_PENDING = 'pending';
    const REFUND_STATUS_PROCESSING = 'processing';
    const REFUND_STATUS_SUCCESS = 'success';
    const REFUND_STATUS_FAILED = 'failed';

    public static $refundStatusMap = [
        self::REFUND_STATUS_PENDING    => '未退款',
        self::REFUND_STATUS_PROCESSING => '退款中',
        self::REFUND_STATUS_SUCCESS    => '退款成功',
        self::REFUND_STATUS_FAILED     => '退款失败',
    ];

    protected $fillable = [
        'sequence',
        'base',
        'fee',
        'fine',
        'due_date',
        'paid_at',
        'payment_method',
        'payment_no',
        'refund_status',
    ];
    protected $dates = ['due_date', 'paid_at'];

    public function installment()
    {
        return $this->belongsTo(Installment::class);
    }

    // 创建一个访问器，返回当前还款计划需还款的总金额
    public function getTotalAttribute()
    {
        // 小数点计算需要用 bcmath 扩展提供的函数
        $total = big_number($this->base)->add($this->fee);
        if (!is_null($this->fine)) {
            $total->add($this->fine);
        }

        return $total->getValue();
    }

    // 创建一个访问器，返回当前还款计划是否已经逾期
    public function getIsOverdueAttribute()
    {
        return Carbon::now()->gt($this->due_date);
    }
}
