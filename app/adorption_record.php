<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adorption_record extends Model
{
    protected $fillable = [
        'Bldg_Ministry_Official_Name',
        'Bldg_City',
        'Bldg_Postal_Code',
        'Bldg_Latitude',
        'Bldg_Longitude'
    ];
        
}
