@extends('master')
@section('content')

<main class="container">
    <h1 >Listagem dos supports</h1>

    <table class="table">
        <thead class="">
            <th>Assunto</th>
            <th>Pergunta</th>
            <th>Status</th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($supports as $support)
                <tr>
                    <td> {{ $support->subject}} </td>
                    <td> {{ $support->body}} </td>
                    <td> {{ $support->status}} </td>
                    <td>
                        <a href=" {{route('supports.show', [$support->id])}}"><i class="bi bi-search"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</main>


@endsection