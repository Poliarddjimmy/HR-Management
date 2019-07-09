<?php

namespace HrManagement;

use Illuminate\Database\Eloquent\Model;

class assignment_task extends Model
{
    protected $fillable = [
        'task_name','task_code', 'task_description','_token', 'user_id', 'division_id', 'department_id',
    ];

    public function creator()
    {
        return $this->belongsTo('HrManagement\user');
    }

    public function department()
    {
        return $this->belongsTo('HrManagement\department');
    }

    public function division()
    {
        return $this->hasOneThrough('HrManagement\division', 'HrManagement\position');
    }
}
