<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_metode extends Model
{
    use HasFactory;
    protected $table = 'payment_metode';
    protected $guarded = [];

    public function order(){
        return $this->hasMany(Orders::class, 'id_payment_metode', 'id');
    }
}
