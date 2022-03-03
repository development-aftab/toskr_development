<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invitation extends Model
{
    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'invitations';

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
    protected $fillable = ['company_id', 'department_id', 'role_id', 'url', 'status','email'];

   public function getCompanyDetail(){
        return $this->belongsTo(User::class,'company_id');
    }
   public function getDepartmentDetail(){
        return $this->belongsTo(Department::class,'department_id');
    }
  
    
}
