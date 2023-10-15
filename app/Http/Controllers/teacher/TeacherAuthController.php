<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherLoginRequest;
use App\Http\Requests\TeacherRegisterRequest;
use App\Models\Teacher;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TeacherAuthController extends Controller
{
    use HttpResponses;
    public function login(TeacherLoginRequest $request)
    {
        $request->validated();

        if(!Auth::guard('teacher')->attempt($request->only(['email','password'])))
        {
            return $this->error('','Credentials do not match',401);
        }

        $student = Teacher::where('email',$request->email)->first();

        return $this->success([
            'student' => $student,
            'token' => $student->createToken('API token for '.$student->name)->plainTextToken
        ]);

    }

    public function register(TeacherRegisterRequest $request)
    {
        $request->validated($request->all());

        $student = Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password'=>Hash::make($request->password),
        ]);

        return $this->success([
            'student' => $student,
            'token' => $student->createToken('API token for '.$student->name)->plainTextToken
        ]);
    }

    public function logout()
    {
        Auth::user()->currentAccessToken()->delete();

        return $this->success([
            'message'=>'You have Successfully logged out',
        ]);
    }

    public function specializations()
    {
        return 'specializations';
    }
}
