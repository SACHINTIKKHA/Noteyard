@extends('admin.layout')
@section('main')
<section class="register-section">
    <div class="register-card">

        <h2 class="text-center mb-4">📝 Student Update</h2>

        <form action="{{'student/'.$fetch->id}}" method="post">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="First Name" name="first" value="{{$fetch->first}}">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Last Name" name="last" value="{{$fetch->last}}">
            </div>
             <div class="mb-3">
                <input type="text" class="form-control" placeholder="Father Name" name="father" value="{{$fetch->father}}">
            </div>
             <div class="mb-3">
                <input type="text" class="form-control" placeholder="Mother Name" name="mother" value="{{$fetch->mother}}">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Contact Number" name="contact" value="{{$fetch->contact}}">
            </div>
            <div class="row">
                <div class=" mb-3">
                    <input type="date" class="form-control" name="dob" value="{{$fetch->dob}}">
                </div>

            <div class="mb-3">
                <input type="email" class="form-control" placeholder="Email Address" name="email"value="{{$fetch->email}}">
            </div>


            <button class="btn btn-gradient w-100">Update</button>

        </form>


    </div>
</section>

@endsection