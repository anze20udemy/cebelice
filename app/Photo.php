<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['file'];

    protected $uploads = '/images/';

    public function getFileAttribute($photo) { // FILE je zato, ker je v Database v Photo tabeli ime datoteke kot FILE

        return $this->uploads . $photo;
    }

}
