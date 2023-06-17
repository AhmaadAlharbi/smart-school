<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class My_Parent extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['Name_Father', 'Job_Father', 'Name_Mother', 'Job_Mother'];
    protected $table = 'my__parents';
    protected $guarded = [];
    public function country()
    {
        return $this->belongsTo(Nationalitie::class, 'Nationality_Father_id');
    }
    public function MotherCountry()
    {
        return $this->belongsTo(Nationalitie::class, 'Nationality_Mother_id');
    }
    public function blood()
    {
        return $this->belongsTo(Type_Blood::class, 'Blood_Type_Father_id');
    }
    public function MotherBlood()
    {
        return $this->belongsTo(Type_Blood::class, 'Blood_Type_Mother_id');
    }
    public function FatherReligion()
    {
        return $this->belongsTo(Religion::class, 'Religion_Father_id');
    }
    public function MotherReligion()
    {
        return $this->belongsTo(Religion::class, 'Religion_Mother_id');
    }
}
