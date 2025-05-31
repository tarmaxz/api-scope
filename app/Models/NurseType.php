<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NurseType extends Model
{
    use SoftDeletes;

    protected $table = 'nurses_types';

    protected $fillable = [
        'name',
    ];

    public function nurses()
    {
        return $this->hasMany(Nurse::class, 'nurse_type_id');
    }
}