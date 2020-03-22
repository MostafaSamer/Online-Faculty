@extends('layouts.app')

@section('content')
    <h1>posts</h1>
    @if (count($faclties)>0)
        @foreach ($faclties as $faculty)
            <div class="card card-body bg-light">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                      {{-- <img src="/storage/cover_image/{{$faculty->cover_image}}" style="width:100%" alt="">  --}}
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3>
                            <a href="#" class="nav-link">
                                {{$faculty->name}}
                            </a>
                        </h3>
                        <small> area of expertise : {{$faculty->areaofexpertise}}</small>
                    </div>
                </div>

            </div>
        @endforeach
        {{$faclties->links()}}
    @else
        <p>no faclties found</p>
    @endif

@endsection
