@extends('layouts.app')
@section('content')

    <div class="container">

               @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                        @endif
    
       <div class="card">
           <div class="card-header"> verify your account</div>
                <div class="card-body">
                    <form action="{{route('verification.send')}}" method="post">@csrf
                        <button class="btn btn-danger" type="submit"> verify</button>
                    </form>
                </div>
           
       </div>
    </div>


@endsection