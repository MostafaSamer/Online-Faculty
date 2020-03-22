@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  <a class="btn btn-primary " href="/listfaculty" role="button">List faculties </a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <div>
                      @include('AddFaculty/addfaculty')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
