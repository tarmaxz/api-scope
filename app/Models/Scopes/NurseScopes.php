<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use App\Enums\NurseTypeEnum;

trait NurseScopes
{
    public function scopeVisibleByUser(Builder $query, $user)
    {
        if ($user->nurse_type_id === NurseTypeEnum::ENFERMEIRA) {
            return $query->whereHas('type', function ($q) {
                $q->where('nurse_type_id', 1);
            });
        }

        if ($user->nurse_type_id === NurseTypeEnum::SUPERVISAO) {
            return $query->whereHas('type', function ($q) {
                $q->whereIn('nurse_type_id', [NurseTypeEnum::ENFERMEIRA,NurseTypeEnum::AUXILIAR]);
            });
        }

        return $query;
    }
}
