<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//use App\Models\User;

class District extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
