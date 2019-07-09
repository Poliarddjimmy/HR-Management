<?php

namespace HrManagement;

use Illuminate\Database\Eloquent\Model;

class position extends Model
{
    protected $fillable = [
        'pos_name','pos_code', 'pos_description','_token', 'user_id', 'division_id'
    ];

    public function user()
    {
        return $this->belongsTo('HrManagement\user');
    }

    public function department()
    {
        return $this->hasOneThrough('HrManagement\department', 'HrManagement\division');
    }

    public function taks()
    {
        return $this->hasMany('HrManagement\assignment_task');
    }

    public function division()
    {
        return $this->belongsTo('HrManagement\division');
    }
}
