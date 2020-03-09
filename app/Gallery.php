<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class Gallery extends Model
{
    //
    use softDeletes;

    protected $fillable=[
        'travel_packages_id','image',
    ];
    protected $hidden=[];

    //relasi gallery dan travel packags
    // public function travel_package(){
    //     return $this->belongsTo(TravelPackage::class,'id','id');
    // }
    public function travel_package(){
        return $this->belongsTo(TravelPackage::class,'travel_packages_id','id');
    }
}
