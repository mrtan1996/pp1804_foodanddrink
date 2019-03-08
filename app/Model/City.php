<?php

namespace App\Model;
use App\Model\District;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'city';
    public $timestamps = false;
    protected $fillable = ['name'];

    public function district()
    {
        return $this->hasMany(District::class);
    }
}
