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

    //relasi dengan tabel galer
    public function galleries(){
        //mendeskripsikan 1 travel ada banyak galeri
        return $this->hasMany(Gallery::class,'travel_packages_id','id');

    }
}
