<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Post extends Model
{   protected $id = ['id'];

    protected $fillable=[
        'title',
        'description',
        'user_id',
       
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }

   use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'Title'
            ]
        ];
    }
}
