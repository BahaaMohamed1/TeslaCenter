<?php

namespace App\Http\Controllers\general;

use App\Http\Controllers\Controller;
use App\Http\Resources\GradesResource;
use App\Models\Grade;
use App\Models\Specialization;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class GradesController extends Controller
{
    use HttpResponses;

    public function index()
    {
        return response()->json(Grade::all());
    }

    public function gradesFromSpecialization(Specialization $specialization)
    {
        return $this->success(GradesResource::collection($specialization->grades));
    }
}
