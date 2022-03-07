<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DistrictTranslation extends Model
{
    protected $table = 'district_translations';

    /**
     * Get all of the comments for the City
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    /**
     * Get the user that owns the CityTranslation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function district(){
        return $this->belongsTo(District::class);
    }


}
