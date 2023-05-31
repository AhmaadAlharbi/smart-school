<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Classroom extends Model
{

    use HasTranslations;

    public $translatable = ['Name_Class'];
    public $timestamps = true;
    protected $table = 'Classrooms';
    protected $fillable = ['Name_Class', 'Grade_id'];

    public function Grades()
    {
        return $this->belongsTo('App\Models\Grade', 'Grade_id');
    }
}
