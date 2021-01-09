@extends('admin.adminBase')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="list-group">
                    <a href="{{route('admindashboard')}}" class="list-group-item list-group-item-action bg-success text-white">Dashboard</a>
                    <a href="{{route('students')}}" class="list-group-item list-group-item-action">Student</a>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <input type="submit" class="list-group-item list-group-item-action" value="logout">
                    </form>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card bg-danger text-white">
                            <div class="card-body">
                                <h2>Total Students</h2>
                                <h6>{{$students}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection