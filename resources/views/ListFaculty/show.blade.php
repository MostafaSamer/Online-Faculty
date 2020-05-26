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

<<<<<<< Updated upstream

            <a href="/online-Faculty/public/deletefaculty/delete/{{$faculty->id}" class="btn btn-secondary">Delete</a>
=======
            <a href="/Online-Faculty/public/deletefaculty/delete/{{$faculty->id}" class="btn btn-secondary">Delete</a>
            {!!Form::open(['action' => ['addfaculty@destroy', $post->id ], 'method' =>'POST' , 'class'='pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::supmit('delete', ['class' => 'btn btn-secondary'])}}
            {!!Form::close()!!}
>>>>>>> Stashed changes
        @endif

    </div>

@endsection
