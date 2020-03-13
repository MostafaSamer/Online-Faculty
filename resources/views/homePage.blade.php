
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @include('feedback/feedback')
            </div>
        </div>
    </div>
</div>


<link rel="stylesheet" href="{{ asset('feedback-style.css') }}">     <link rel="stylesheet" href="{{ asset('bootstrap.css') }}">     <link rel="stylesheet" href="{{ asset('normalize.css') }}">     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
