<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;
    protected $fillable = [
        'wallet_id',
        'resource_id',
        'taxpayer',
        'box_no',
        'order_no',
        'status',
        'signature',
        'user_id',
    ];

    /**
     * Get the phone associated with the user.
     */
   

    public function receipts()
    {
        return $this->hasMany(Receipt::class);
    }
}
