<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageCourse extends Model
{
    use HasFactory;
    protected $table = 'tb_imagecourse';

    protected $fillable = [
        'id_course',
        'filenames'
    ];


    public function setFilenamesAttribute($value)
    {
        $this->attributes['filenames'] = json_encode($value);
    }
}
