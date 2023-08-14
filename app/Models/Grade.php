<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Grade extends Model
{
    use HasFactory;
    use HasTranslations;

    /**
     * @var array|mixed
     */

    protected $fillable = ['Name', 'Notes'];

    public $translatable = ['Name'];



    public function Sections()
    {
        return $this->hasMany(Section::class);
    }
    // علاقة  المراحل مع المعلمين
    public function teachers()
    {
        return $this->belongsToMany('App\Models\Teacher', 'grade_teacher');
    }
    public function subjects()
    {
        return $this->belongsToMany('App\Models\Subject', 'grade_subject');
    }
}
