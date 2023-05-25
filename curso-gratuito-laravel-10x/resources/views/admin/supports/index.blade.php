@extends('master')
@section('content')
    
<h1>Listagem dos supports</h1>

<table>
    <thead>
        <th>Assunto</th>
        <th>Descrição</th>
        <th>Status</th>
    </thead>
    <tbody>
        @foreach ($supports as $support)
            <tr>
                <td> {{ $support->subject}} </td>
                <td> {{ $support->body}} </td>
                <td> {{ $support->status}} </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection