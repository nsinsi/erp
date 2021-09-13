<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payableto extends Model
{
    use HasFactory;
    protected $table = 'payabletos';
protected $fillable = [

    'full_name',

    'account_number',

    'bank_details',

];
}
