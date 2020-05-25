@extends('layouts.app')

@section('content')
<div class="container">
    <main class="py-4">
        <h1>Feedbacks</h1>
        @if (count($faclties)>0)
            @foreach ($faclties as $faculty)
                <div class="card card-body bg-light">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <h3>
                                Subject: {{$faculty->f_subject}}
                            </h3>
                            <p>
                            
                            Message: {{$faculty->f_message}} <br>
                                by {{$faculty->f_email}} <br>
                                {{$faculty->created_at}}
                                </p>
                        </div>
                    </div>
    
                </div>
            @endforeach
            {{$faclties->links()}}
        @else
            <p>no Feedback found</p>
        @endif
    </main>
</div>
@endsection
