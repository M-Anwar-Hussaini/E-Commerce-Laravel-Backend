<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Coupon extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'discount',
        'valid_until'
    ];

    /**
     * convert coupon name to uppercase
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = Str::upper($value);
    }

    /**
     * checks if coupon is valid
     */
    public function checkIfValid()
    {
        return $this->valid_until > Carbon::now();
    }

}
