@extends('master')
@section('content')
<div class="container">
    <h3>Detalhes da dúvida</h3>

    <div class="container border rounded p-3">
        <p> Autor: {{$support->user->name}} </p>
        <div class="mb-3 d-flex justify-content-between ">
            <h1 class="me-4"> {{$support->subject}} </h1>
            <div>
                <span class="h5"> <?php echo $statusIcon[$support->status]; ?></span>
                
                @if(Auth::user()->id == $support->user_id)
                
                <span>
                    <a href="{{route('supports.edit', [$support->id])}}" title="Editar"><i class="bi bi-pencil"></i></a>

                    <form method="POST" action="{{route('supports.destroy', $support->id)}}" class="d-inline" id="delete-confirm">
                        @csrf
                        @method('DELETE')
                        <button type="submit" title="Deletar" style="all:unset; cursor: pointer;">
                            <i class="bi bi-trash text-danger"></i>
                        </button>
                    </form>
                </span>
                @endif

                
                
            </div>
            
        </div>

        
        <div class="border rounded p-2">
            <p> {{$support->body}} </p>
        </div>
        
        <a href="{{route('reply.create',[$support->id])}}" class="btn btn-primary my-3 ms-auto">Responder</a>

        <div class="border-top my-3">
            <h2 class="my-3">Respostas</h2>
            @foreach($replies as $reply)
                <div class="border rounded p-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-2">
                                <div class="fw-bold">
                                    {{Str::limit($reply->user->name, 30)}}
                                </div>
                                
                            </div>
                            <div class="col-9">
                                {{$reply->body}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-flex justify-content-end">
                                @if(Auth::user()->id == $reply->user_id)
                
                                <span>
                                    <a href="" title="Editar"><i class="bi bi-pencil"></i></a>

                                    <form method="POST" action="" class="d-inline" id="delete-confirm">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" title="Deletar" style="all:unset; cursor: pointer;">
                                            <i class="bi bi-trash text-danger"></i>
                                        </button>
                                    </form>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
       
    </div>

</div>

@endsection