<?php

namespace App\Http\Controllers;

use App\Repositories\NurseRepository;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Exceptions\BusinessException;

class NurseController extends Controller {

    protected NurseRepository $nurseRepository;

    public function __construct(
        NurseRepository $nurseRepository,
    ) {
        $this->nurseRepository = $nurseRepository;
    }

    public function index()
    {
        try {
            $response = $this->nurseRepository->all(request()->all());
            
            return response()->json($response);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return $this->responseError("Erro, não foi possível realizar a ação");
        }
    }
}