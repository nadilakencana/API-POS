<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Logs extends Model
{
    use HasFactory;
    protected $table = 'product_logs';
    protected $guarded = [];

    public function product(){
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }
    public function order_items(){
        return $this->belongsTo(Orders_Items::class, 'id_order_item', 'id');
    }

    public function order(){
        return $this->belongsTo(Orders::class, 'id_order', 'id');
    }
}
