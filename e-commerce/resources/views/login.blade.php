@extends('master')
@section("content")

<div class="container mt-5">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8 border py-3">

            <h1>Login</h1>
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Digite seu email" required>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" placeholder="Digite sua senha" required>
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
            </form>

        </div>
    </div>
</div>


    
@endsection