<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const TYPE_NORMAL = 'normal';
    const TYPE_CROWDFUNDING = 'crowdfunding';
    public static $typeMap = [
        self::TYPE_NORMAL       => '普通商品',
        self::TYPE_CROWDFUNDING => '众筹商品',
    ];

    protected $fillable = [
        'title', 'description', 'image', 'on_sale',
        'rating', 'sold_count', 'review_count', 'price',
        'type',
    ];
    protected $casts = [
        'on_sale' => 'boolean', // on_sale 是一个布尔类型的字段
    ];

    // 与商品SKU关联
    public function skus()
    {
        return $this->hasMany(ProductSku::class);
    }

    // 所属分类
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * 众筹情况
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function crowdfunding()
    {
        return $this->hasOne(CrowdfundingProduct::class);
    }
}
