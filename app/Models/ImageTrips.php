<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageTrips extends Model
{
    use HasFactory;
    protected $table = 'tb_imagetrips';
    protected $fillable = [
        'id_trips',
        'filenames'
    ];


    public function setFilenamesAttribute($value)
    {
        $this->attributes['filenames'] = json_encode($value);
    }
}
