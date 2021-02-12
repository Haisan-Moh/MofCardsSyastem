<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;
    protected $fillable = [
        'receipt_no',
        'wallet_id',
        'cash',
        'section_no',
        'chap_no',
        'item_no',
        'type_no',
        'note'
    ];

    public function wallet()
    {
        return $this->belongsTo(Wallet::class);
    }
}
