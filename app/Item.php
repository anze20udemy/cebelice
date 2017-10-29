<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;


class Item extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;

    protected $fillable = [

        'pakiranje',
        'naziv',
        'barva',
        'aroma',
        'okus',
        'kristalizacija',
        'castocenja',
        'uporaba',
        'posebnosti',
        'cena',
        'photo_id',
        'created_at',
        'updated_at',
        'status'
        
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'naziv',
                'onUpdate'        => true
            ]
        ];
    }

    public function photoPlaceholder(){

        return "\img\honey_sample.jpg";
    }

    public function izdelek($id){

        $item = Item::findOrFail($id);


        return view('izdelek');
    }

    public function photo(){

        return $this->belongsTo('App\Photo');
    }


}
