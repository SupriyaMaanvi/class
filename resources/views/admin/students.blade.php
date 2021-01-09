@extends('admin.adminBase')
@section('content')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-lg-3">
                <div class="list-group">
                    <a href="{{route('dashboard')}}" class="list-group-item list-group-item-action bg-success text-white">Dashboard</a>
                    <a href="{{route('students')}}" class="list-group-item list-group-item-action">Student</a>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <input type="submit" class="list-group-item list-group-item-action" value="logout">
                    </form>
                </div>
            </div>
            <div class="col-lg-9">
                @foreach ($students as $item)
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-2">
                                    <td>
                                        <img src="{{asset('images/'.$item->dp)}}" alt="" width="70px">
                                    </td>
                                </div>
                                <div class="col-lg-10">
                                    <table class="table">
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Contact</th>
                                            <th>Email</th>
                                            <th>Dob</th>
                                            <th>Gender</th>
                                            <th>Nationality</th>
                                            <th>Education</th>
                                            <th>Skills</th>
                                        </tr>
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->contact}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->dob}}</td>
                                            <td>{{$item->gender}}</td>
                                            <td>{{$item->nationality}}</td>
                                            <td>{{$item->education}}</td>
                                            <td>{{$item->skills}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection