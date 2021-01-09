<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
 
    public function profile(){
        if(User::Where([['id',Auth::id()],['isTeacher',TRUE]])->exists()){
           return redirect()->route('admindashboard');
        }
        if(Student::Where('user_id',Auth::id())->doesntExist()){
            return redirect()->route('apply');
        }
        $data['student'] = Student::Where('user_id',Auth::id())->firstOrFail();
        return view('homepage.profile',$data);
    }

    public function apply(Request $req){
        if(Student::Where('user_id',Auth::id())->exists()){
            return redirect()->route('profile');
        }
        return view('homepage.apply');
    }

    public function applyStore(Request $req){
        if(Student::Where('user_id',Auth::id())->exists()){
            return redirect()->route('profile');
        }
        $req->validate([
            'contact'=>'required',
            'gender'=>'required',
            'nationality'=>'required',
            'dob'=>'required',
            'school'=>'required',
            'dp'=>'required',
        ]);

        $filename = time(). "." .$req->dp->extension();
        $req->dp->move(public_path('images'),$filename);

        student::create([
            'user_id'=>Auth::id(),
            'contact'=>$req->contact,
            'gender'=>$req->gender,
            'nationality'=>$req->nationality,
            'dob'=>$req->dob,
            'school'=>$req->school,
            'dp'=>$filename,
        ]);
        return redirect()->back();
    }

}
