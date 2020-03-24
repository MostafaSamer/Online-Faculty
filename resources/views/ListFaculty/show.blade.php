@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="/Online-Faculty/public/listfaculty" class="btn btn-secondary">
            Back
        </a>
        <h1 class="nav-link">
            {{$faculty->name}}
        </h1>
        {{-- <img src="/storage/cover_image/{{$post->cover_image}}"  alt=""><br><br> --}}
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
    </div>
    {{-- @if (!Auth::guest()  )
        @if (auth()->user()->id==$post->user->id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
            {!! Form::open(['action'=>['postcontroller@destroy',$post->id],'method'=>'POST','class'=>'float-right']) !!}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', ['class'=>'btn btn-danger']) }}
            {!! Form::close() !!}
        @endif    
    @endif --}}
@endsection