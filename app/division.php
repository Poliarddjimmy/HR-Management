<?php

namespace HrManagement;

use Illuminate\Database\Eloquent\Model;

class division extends Model
{
    protected $fillable = [
        'div_name','div_code', 'div_description','_token', 'user_id', 'department_id', 'qty_employee'
    ];

    public function user()
    {
        return $this->belongsTo('HrManagement\user');
    }
    

    public function employee()
    {
        return $this->hasMany('HrManagement\user');
    }

    public function task()
    {
        return $this->hasManyThrough('HrManagement\assignment_task', 'HrManagement\position');
    }

    public function department()
    {
        return $this->belongsTo('HrManagement\department');
    }
}
