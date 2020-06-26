<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function faculty()
    {
        return $this->belongsTo('App\Faculty', 'faculty_id', 'id');
    }

    public function studyprogram()
    {
        return $this->belongsTo('App\Studyprogram', 'studyprogram_id', 'id');
    }
}
