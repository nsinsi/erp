<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

      /**
       * The database table used by the model.
       *
       * @var string
       */
      protected $table = 'item';

      /**
       * The database primary key value.
       *
       * @var string
       */
      protected $primaryKey = 'id';

      /**
       * Attributes that should not be mass-assignable.
       *
       * @var array
       */
      protected $guarded = ['id'];

      public $timestamps = false;

      public function itemable()
     {
         return $this->morphTo();
     }
}
