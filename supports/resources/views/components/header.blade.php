<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">

  @auth
  <!-- Conteúdo acessível apenas para usuários autenticados -->
  Olá, {{ Auth::user()->name }}!
  @else
    <!-- Conteúdo acessível para usuários não autenticados -->
    Por favor, faça login para acessar esta página.
  @endauth


    <div class="container">
      <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">

      @auth


        <ul class="navbar-nav me-sm-auto">
          <li class="nav-item">
            <a class="nav-link @if(request()->path() === 'supports') active @endif " href="/supports">Ver perguntas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(request()->path() === 'supports/create') active @endif" href="/supports/create" id="">Fazer pergunta</a>
          </li>

        </ul>
        <ul class="navbar-nav ms-sm-auto">
          <li>
            <a class="nav-link @if(request()->path() === 'profile') active @endif" href="/profile" >{{Auth::user()->name}}</a>
          </li>
        </ul>

        @else
        
        <ul class="navbar-nav ms-sm-auto">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/" id="login">Logar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/signup" id="signup">Cadastrar</a>
              </li>
        </ul>

        @endauth
      </div>
    </div>
</nav>
