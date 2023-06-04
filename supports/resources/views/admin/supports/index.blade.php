@extends('master')
@section('content')

<main class="container">
    <h1 >Listagem dos supports</h1>

    <table class="table mt-5">
        <thead class="">
            <th>Assunto</th>
            <th>Pergunta</th>
            <th>Autor</th>
            <th><i class="bi bi-chat-dots" title="Discussão"></i></th>
        </thead>
        <tbody>
            @foreach ($supports as $support)
                <tr>
                    <td class="col-3">
                        <a href="{{route('supports.show', [$support->id])}}" class="text-decoration-none text-dark">
                            {{ Str::limit($support->subject, 50)}}
                        </a>  
                    </td>
                    <td class="col-6"> {{Str::limit($support->body, 200)}} </td>
                    <td class="col-2"> {{Str::limit($support->user->name, 30)}} </td>
                    <td class="col-1">
                        <div class="container d-flex ">
                            <div class="mx-1">
                                <a href=" {{route('supports.show', [$support->id])}}" title="Exibir"><i class="bi bi-eye"></i></a>
                            </div>
                            <div class="mx-1">
                                <?php echo $statusIcon[$support->status]; ?>
                            </div>
                        
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</main>


@endsection