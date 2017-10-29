<?php

namespace App;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Sluggable;

    use Sluggable;
    use SluggableScopeHelpers;
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate'        => true
            ]
        ];
    }

    protected $fillable = [

        'category_id',
        'photo_id',
        'title',
        'body'

    ];

    public function user(){

        return $this->belongsTo('App\User');
    }

    public function category(){

        return $this->belongsTo('App\Category');
    }

    public function photo(){

        return $this->belongsTo('App\Photo');
    }
    public function comments() {

        return $this->hasMany('App\Comment');
    }
    public function photoPlaceholder(){

        return "http://lorempixel.com/400/200/sports";
    }
//    public function getFromDateAttribute($value) {
//        return Carbon::parse($value)->format('d/m/Y');
//    }

}
