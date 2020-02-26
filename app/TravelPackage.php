<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class TravelPackage extends Model
{
    //
    use softDeletes;

    protected $fillable=[
        'title','slug','location','about','featured_event',
        'language','foods','departure_date','duration','type','price'
    ];
    protected $hidden=[];
}
