@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Faculty</div>

                <div class="card-body">
                  
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        
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
                        <form class="" action="/faculty/update/{{$faculty->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mx-sm-3 mb-2">
                                <input value="{{$faculty->name}}" style="box-shadow: 1px 1px 4px #ccc; margin-top: 14px" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" id="name" name="name" placeholder="Name" required>
                                <input value="{{$faculty->department}}" style="box-shadow: 1px 1px 4px #ccc; margin-top: 14px" class="form-control" type="text" id="department" name="department" placeholder="department" required>
                                <input value="{{$faculty->courses}}" style="box-shadow: 1px 1px 4px #ccc; margin-top: 14px" class="form-control" type="text" id="courses" name="courses" placeholder="courses" required>
                                <input value="{{$faculty->areaofexpertise}}" style="box-shadow: 1px 1px 4px #ccc; margin-top: 14px" class="form-control" type="text" id="area of expertise" name="areaofexpertise" placeholder="area of expertise" required>
                                <input value="{{$faculty->professionalInterest}}" style="box-shadow: 1px 1px 4px #ccc; margin-top: 14px" class="form-control" type="text" id="professional interest" name="professionalInterest" placeholder="professional interest" required>
                                <input value="{{$faculty->cover_image}}" style="box-shadow: 1px 1px 4px #ccc; margin-top: 14px" class="form-control" type="file" name="cover_image" id="cover_image">
                                <input class="btn btn-primary mb-2" style="margin-top: 14px" type="submit" name="submit-faculty" value="send faculty">
                            </div>
                          </form>
                          
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
