<?php

namespace App\Model;
use App\Model\City;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'district';
    public $timestamps = false;
    protected $fillable = ['name'];

    public function city()
    {
        return $this->belongTo(City::class);
    }
}
