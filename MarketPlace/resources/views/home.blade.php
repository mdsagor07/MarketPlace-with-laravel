@extends('layouts.app')
@section('content')

<div class=" container">
<div class="row">
    <div class="card">
        <div class="card-header"> Home</div>
        <div class="card-body">
            Hello, {{auth()->user()->name}}
        </div>
        
    </div>
</div>

</div>

@endsection