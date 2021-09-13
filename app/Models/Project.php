<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
      protected $table = 'projects';
  protected $fillable = [

      'name',

      'donor_id',

      'code',

      'project_brief',

  ];
  /**
   * Attributes that should not be mass-assignable.
   *
   * @var array
   */
  protected $guarded = ['id'];

    public function budgetlines()
    {
        return $this->hasMany(Budgetline::class);
    }
    public function donor()
    {
        return $this->hasMany(Donor::class);
    }

}
