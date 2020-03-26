<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bookName','review','authorId','categoryId',
    ];

    public function category (){
        return $this->belongsTo('App\Model\Category');
    }

    public function author (){
        return $this->belongsTo('App\Model\Author');
    }
}
