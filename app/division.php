<?php

namespace HrManagement;

use Illuminate\Database\Eloquent\Model;

class division extends Model
{
    protected $fillable = [
        'div_name','div_code', 'div_description','_token', 'user_id', 'department_id'
    ];

    public function creator()
    {
        return $this->belongsTo('HrManagement\user');
    }
    

    public function employee()
    {
        return $this->hasMany('HrManagement\user');
    }

    public function task()
    {
        return $this->hasMany('HrManagement\assignment_task');
    }

    public function department()
    {
        return $this->belongsTo('HrManagement\department');
    }
}
