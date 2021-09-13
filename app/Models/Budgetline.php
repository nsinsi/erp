<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budgetline extends Model
{
    use HasFactory;

    public function Requisitions()
    {
        return $this->hasMany(Requisition::class);
    }
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
