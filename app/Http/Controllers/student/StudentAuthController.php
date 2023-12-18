<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentLoginRequest;
use App\Http\Requests\StudentRegisterRequest;
use App\Models\Student;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentAuthController extends Controller
{
    use HttpResponses;
    public function login(StudentLoginRequest $request)
    {
        if(!Auth::guard('student')->attempt($request->only(['email','password'])))
        {
            return $this->error('','Credentials do not match',401);
        }

        $student = Student::where('email',$request->email)->first();

        return $this->success([
            'student' => $student,
            'token' => $student->createToken('API token for '.$student->name)->plainTextToken
        ]);

    }

    public function register(StudentRegisterRequest $request)
    {
        $student = Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'grade_id' => $request->grade_id,
            'wallet'=>0,
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

}
