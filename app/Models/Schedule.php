<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_of_week',
        'class_id',
        'callingSchedule_id',
        'subject',
        'classroom_id',
        'user_id'
    ];

    protected function casts()
    {
        return [
            'date_of_week' => 'string',
            'class_id' => 'integer',
            'callingSchedule_id' => 'integer',
            'subject' => 'string',
            'classroom_id' => 'integer',
            'user_id' => 'integer'
        ];
    }
    public function schoolClass()
    {
        return $this->hasOne(SchoolClass::class,'id', 'class_id');
    }
    public function callingSchedule()
    {
        return $this->hasOne(CallingSchedule::class, 'id', 'callingSchedule_id');
    }
    public function classroom()
    {
        return $this->hasOne(Classroom::class, 'id', 'classroom_id');
    }
    public function teacher()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
