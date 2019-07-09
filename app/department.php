<?php

namespace HrManagement;

use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    protected $fillable = [
        'dept_name','dept_code', 'dept_description','_token', 'employee_number',
    ];

    public function user() 
    {
        return $this->belongsTo('HrManagement\user');
    }

    public function employee()
    {
        return $this->hasManyThrough('HrManagement\user', 'HrManagement\division');
    }

    public function position()
    {
        return $this->hasManyThrough('HrManagement\position', 'HrManagement\division');
    }

    public function division()
    {
        return $this->hasMany('HrManagement\division');
    }
}
