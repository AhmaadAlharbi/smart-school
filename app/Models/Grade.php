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

    public function Sections(){
        return $this->hasMany(Section::class);
    }
}
