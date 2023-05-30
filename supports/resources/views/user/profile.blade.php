@extends('master')
@section('content')
<main class="container d-flex justify-content-center align-items-center d-column">
    <div class="card w-50 h-50">
        <div class="card-body">
            <form action="{{ route('user.logout') }}" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>    
        </div>
    </div>

@endsection
</main>