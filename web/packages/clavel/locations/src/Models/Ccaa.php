<?php

namespace Clavel\Locations\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\CcaaFactory;
use Carbon\Carbon;

class Ccaa extends Model
{
    use HasFactory;

    use \Astrotomic\Translatable\Translatable;

    use SoftDeletes;
    public $translatedAttributes = [
        'name',
        'locale'

    ];
    public $useTranslationFallback = true;

    protected $table = "ccaas";

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'active',
        'country_id',
    ];



    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }



    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return new CcaaFactory();
    }


    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
}
