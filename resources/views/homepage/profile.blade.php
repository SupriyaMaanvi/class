@extends('homepage.base')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <img src="{{asset('images/'.$student->dp)}}" alt="" class="card-img-top">
                    <div class="card-body">
                        <h2 class="h4">{{$student->name}}</h2>
                    </div>    
                        <table class="table table-borderd">
                            <tr>
                                <th>Contact</th>
                                <td>{{$student->contact}}</td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td>{{$student->gender}}</td>
                            </tr>
                            <tr>
                                <th>dob</th>
                                <td>{{$student->dob}}</td>
                            </tr>
                            <tr>
                                <th>school</th>
                                <td>{{$student->school}}</td>
                            </tr>
                            <tr>
                                <th>education</th>
                                <td>{{$student->education}}</td>
                            </tr>
                            <tr>
                                <th>skills</th>
                                <td>{{$student->skills}}</td>
                            </tr>
                        </table>
                    
                </div>
            </div>
            <div class="col-lg-9">
                <div class="container bg-light text-dark">
                    <h2 class="display-4">Welcome in Student Page</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo expedita nostrum suscipit incidunt id, ea magnam architecto et dicta enim, sit iste. Autem consequatur officia dolorem.</p>
                </div>
            </div>
        </div>
    </div>
@endsection