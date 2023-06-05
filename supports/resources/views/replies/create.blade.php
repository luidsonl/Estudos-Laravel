@extends('master')
@section('content')

<div class="container d-flex justify-content-center align-items-center">
    <div class="card w-75 h-75">
        <div class="card-body">
            <h1 class="text-center mb-4">Criar resposta</h1>
            <form action="{{ route('reply.store') }}" method="POST">
                @csrf
                <input type="hidden" name="support_id" id="" value="">
                <div class="mb-3">
                    <textarea class="form-control" id="body" name="body" cols="30" rows="5" placeholder="Pergunta"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Responder</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{$error}}
        @endforeach
    @endif
</div>

@endsection