<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Scopes\NurseScopes;

class Nurse extends Model
{
    use SoftDeletes, NurseScopes;

    protected $fillable = [
        'name',
        'nurse_type_id',
    ];

    public function type()
    {
        return $this->belongsTo(NurseType::class,'nurse_type_id')->select('id','name');
    }
}