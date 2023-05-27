@extends('master')
@section('content')
<div class="container">
    <h3>Detalhes da dúvida</h3>

    <div class="container border rounded p-3">
        <div class="mb-3 d-flex justify-content-between ">
            <h1> {{$support->subject}} </h1>
            <div>
                <span class="h5"> {{$support->status}} </span>

                <a href="{{route('supports.edit', [$support->id])}}" title="Editar"><i class="bi bi-pencil"></i></a>

                <form method="POST" action="{{route('supports.destroy', $support->id)}}" class="d-inline" id="delete-confirm">
                    @csrf
                    @method('DELETE')
                    <button type="submit" title="Deletar" style="all:unset; cursor: pointer;">
                        <i class="bi bi-trash text-danger"></i>
                    </button>
                </form>
            </div>
            
        </div>
        
        <div class="border rounded p-2">
            <p> {{$support->body}} </p>
        </div>
        
    </div>
</div>

@endsection