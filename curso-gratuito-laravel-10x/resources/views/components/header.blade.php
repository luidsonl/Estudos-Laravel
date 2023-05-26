<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
    <div class="container">
      <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-sm-auto">
          <li class="nav-item">
            <a class="nav-link @if(request()->path() === 'supports') active @endif " href="/supports">Ver perguntas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(request()->path() === 'supports/create') active @endif" href="/supports/create" id="">Fazer pergunta</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-sm-auto">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#" id="login">Logar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" id="signup">Cadastrar</a>
              </li>
        </ul>
      </div>
    </div>
</nav>