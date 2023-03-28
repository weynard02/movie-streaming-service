<nav class="navbar navbar-expand-lg" style="background-color: darkblue;" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Disney- Coldmoon</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Watchlist</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Genre
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Marvel</a></li>
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Comedy</a></li>
          </ul>
        </li>
        @if(session('user') && session('user')->plan_id == 3)
        <li class="nav-item">
          <a class="nav-link" href="/admin">Admin</a>
        </li>
        @endif
        <li class="nav-item">
          <a class="btn btn-primary" href="/logout">Logout</a>
        </li>
      </ul>
      @if (true)
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search" value="{{ request('search') }}">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      @endif

      
    </div>
  </div>
</nav>