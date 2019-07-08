<?php

namespace HrManagement;

use Illuminate\Database\Eloquent\Model;

class position extends Model
{
    protected $fillable = [
        'pos_name','pos_code', 'pos_description','_token', 'user_id', 'department_id'
    ];

    public function creator()
    {
        return $this->belongsTo('HrManagement\user');
    }

    public function department()
    {
        return $this->belongsTo('HrManagement\department');
    }

    public function taks()
    {
        return $this->hasMany('HrManagement\assignment_task');
    }
}
