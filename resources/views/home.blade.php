@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <div>
                        <br>
                        <a class="btn btn-primary " href="/Online-Faculty/public/listfaculty" role="button">List faculties </a>
                        <br>
                        @if (count($errors)>0)
                        <br>
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    {{$error}}
                                    <br>
                                @endforeach
                            </div>
                        @endif
                        <br> <br>
                        <a class="btn btn-primary " href="/addfaculty" role="button">add faculty </a> <br><br><br>
                        <a class="btn btn-primary " href="/Online-Faculty/public/listfeedback" role="button">List feedback </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection