@extends('master')
@section('content')
<div class="container">
    <h3>Detalhes da dúvida</h3>

    <div class="container border rounded p-3">
        <div class="mb-3 d-flex justify-content-between ">
            <h1> {{$support->subject}} </h1>
            <p class="h4"> {{$support->status}} </p>
        </div>
        
        <div class="border rounded p-2">
            <p> {{$support->body}} </p>
        </div>
        
    </div>
</div>

@endsection