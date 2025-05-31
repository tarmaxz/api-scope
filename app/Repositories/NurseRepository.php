<?php

namespace App\Repositories;

use App\Models\Nurse;

class NurseRepository extends AbstractRepository {

    protected $model = Nurse::class;

    public function all($params)
    {
        $user = auth()->user();

        $query = $this->model::with(['type'])->visibleByUser($user)->orderBy('id', 'DESC');

        $paginateData = $this->paginate($query, $params);

        return $paginateData;
    }
}