@extends('homepage.Base')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-7 mx-auto">
            <form action="{{route('applyStore')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="">Contact</label>
                    <input type="text" name="contact" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Gender</label>
                    <select name="gender" class="form-control">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">other</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Nationality</label>
                    <input type="text" name="nationality" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Dob</label>
                    <input type="date" name="dob" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">School</label>
                    <input type="text" name="school" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">DP</label>
                    <input type="file" name="dp" class="form-control">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection