@extends('layouts.app')

@section('content')
<div class="container">
    <main class="py-4">
        <h1>Faclties</h1>
        @if (count($faclties)>0)
            @foreach ($faclties as $faculty)
                <div class="card card-body bg-light">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                          <img src="/storage/cover_image/{{$faculty->cover_image}}" style="width:100%" alt=""> 
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <h3>
                                {{-- {{url('/Online-Faculty/public/listfaculty/show/'.$category->id.'/subcategory')}} --}}
                                <a href="/Online-Faculty/public/listfaculty/show/{{$faculty->id}}" class="nav-link">
                                    {{$faculty->name}}
                                </a>
                            </h3>
                            <small> Area Of Expertise : {{$faculty->areaofexpertise}}</small>
                        </div>
                    </div>
    
                </div>
            @endforeach
            {{$faclties->links()}}
        @else
            <p>no faclties found</p>
        @endif
    </main>
</div>
@endsection
