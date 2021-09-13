<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    use HasFactory;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'project';

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

    public function donor(){
      return $this->belongsTo(Donor::class,'donor_id');
    }
}
