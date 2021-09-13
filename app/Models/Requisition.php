<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisition extends Model
{
    use HasFactory;

    protected $fillable = [

        'purpose',

        'payable_to',

        'amount',

        'user_id',

    ];

    protected $casts = [
        'budgetline_id' => 'integer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function progresses()
    {
        return $this->hasMany(Progress::class);
    }
    public function budgetline()
    {
        return $this->belongsTo(Budgetline::class);
    }

    public function payableto()
    {
        return $this->belongsTo(Payableto::class);
    }
}
