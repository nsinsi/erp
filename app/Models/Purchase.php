<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'purchase';

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

    public function item_purchase(){
      return $this->belongsToMany(item_purchase::class,'item_purchase','item_id','purchase_id');
    }

}
