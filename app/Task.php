<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
class Task extends Model
{
    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tasks';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

  protected $appends = [
        'assignedCount','messageCount','attachmentCount','messageviewedCount'
    ];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['project_name', 'category', 'image', 'start_date', 'end_date', 'assign_to', 'priority', 'description','company_id','manager_id','status','bar_link'];

    public function getCategoryDetail(){
        return $this->belongsTo(TaskCategory::class,'category');
    }
    public function getTaskAssigned($task_id=2){
        return $this->hasMany(TaskAssigned::class,'task_id');//->where('task_id',$task_id);
    } 
    public function getMessage(){
        return $this->hasMany(Message::class,'task_id');//->where('task_id',$task_id);
    }
    public function getMessageViewed(){
        return $this->hasMany(MessageViewed::class,'task_id')->where('send_to','!=',Auth::id())->where('receiver',Auth::id())->where('viewed','0');
    }
    public function getAttachment(){
        return $this->hasMany(Attachment::class,'task_id');//->where('task_id',$task_id);
    }
    public function getAssignedCountAttribute(){
        return $this->getTaskAssigned()->count();
    }
    public function getmessageCountAttribute(){
        return $this->getMessage()->count();
    }
    public function getattachmentCountAttribute(){
        return $this->getAttachment()->count();
    }
    public function getmessageviewedCountAttribute(){
        return $this->getMessageViewed()->count();
    }
}
