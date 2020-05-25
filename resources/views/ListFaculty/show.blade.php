@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="/Online-Faculty/public/listfaculty" class="btn btn-secondary">
            Back
        </a>
        <h1 class="nav-link">
            {{$faculty->name}}
        </h1>
        <img src="/storage/cover_image/{{$faculty->cover_image}}"  alt=""><br><br>
        <p>Area Of Expertise: {{$faculty->areaofexpertise}}</p>
        <hr>
        <h3>Department</h3>
        @foreach (explode(',' ,$faculty->department) as $department)
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <p>{{$department}}</p>
                </div>
            </div>
        @endforeach
        <hr>
        <h3>Courses</h3>
        @foreach (explode(',' ,$faculty->courses) as $courses)
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <p>{{$courses}}</p>
                </div>
            </div>
        @endforeach
        <hr>
        <p>Professional Interest: {{$faculty->professionalInterest}}</p>
        <br>
        @if (!Auth::guest()  )
            <a href="/Online-Faculty/public/listfaculty/edit/{{$faculty->id}}" class="btn btn-secondary">Edit</a>
        @endif
<<<<<<< HEAD
        
=======
        <a href="/Online-Faculty/public/listfaculty/pdf/{{$faculty->id}}" style="float: right" class="btn btn-info">Download</a>
        <br><br>
>>>>>>> download_pdf
    </div>
    
@endsection