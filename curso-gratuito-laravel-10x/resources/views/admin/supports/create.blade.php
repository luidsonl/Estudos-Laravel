@extends('master')
@section('content')
<h1> Nova Pergunta</h1>

<form action="{{route('supports.store')}}" method="POST">
    @csrf()
    <input type="text" name="subject" placeholder="Assunto">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição"></textarea>
    <input type="submit" value="Enviar">
</form>
@endsection