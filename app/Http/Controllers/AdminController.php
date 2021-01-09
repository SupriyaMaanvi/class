<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use Auth;
class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function admindashboard(Request $req){
        if(User::Where([['id',Auth::id()],['isTeacher',FALSE]])->exists()){
            return redirect()->route('profile');
         }
        $data['students'] = Student::all()->count();
        return view('admin.admindashboard',$data);
    }

    public function students(Request $req){
        $data['students'] = Student::all();
        return view('admin.students',$data);
    }
}
