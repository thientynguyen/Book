<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'categoryName','description',
    ];

    public function book (){
        return $this->belongsTo('App\Model\Category');
    }

    public function author (){
        return $this->belongsTo('App\Model\Author');
    }
}
