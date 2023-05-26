@extends('master')
@section('content')

<div class="container d-flex justify-content-center align-items-center">
    <div class="card">
        <div class="card-body">
            <h1 class="text-center mb-4">Editar pergunta</h1>
            <form action="{{ route('supports.update', $support->id)}}" method="POST">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label for="subject">Assunto:</label>
                    <input type="text" class="form-control" id="subject" name="subject" value="{{$support->subject}}" placeholder = "Assunto">
                </div>
                <div class="mb-3">
                    <label for="body">Pergunta:</label>
                    <textarea class="form-control" id="body" name="body" cols="30" rows="5" placeholder="Pergunta">{{$support->body}}</textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection