<?php

namespace App\Http\Controllers\general;

use App\Http\Controllers\Controller;
use App\Http\Resources\TeacherResource;
use App\Models\Teacher;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    use HttpResponses;

    public function index()
    {
        return $this->success(TeacherResource::collection(Teacher::where('role','teacher')->get()));
    }

    public function show(Teacher $teacher)
    {
        return $this->success(new TeacherResource($teacher));
    }
}
