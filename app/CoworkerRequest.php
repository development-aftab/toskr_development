<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CoworkerRequest extends Model
{
    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'coworker_requests';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['taski_id', 'manager_id', 'user_id', 'status','task_manager'];
    public function gettaskManagerDetail(){
        return $this->belongsTo(User::class,'task_manager');
    }
    public function gettaskDetail(){
        return $this->belongsTo(Task::class,'taski_id');
    }
    
}
