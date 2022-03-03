<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'messages';

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
  protected $fillable = ['from_user_id', 'to_user_id', 'content', 'status','viewed_by_receiver','group_mes','task_id'];

    public function getFromUser()
    {
        return $this->belongsTo(User::class,'from_user_id');
    }
    public function getToUser()
    {
        return $this->belongsTo(User::class,'to_user_id');
    }

    
}
