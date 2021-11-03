<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">WWI2020a</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" href="/DiesUndDas/v3">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/DiesUndDas/v3/book">Bücher</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/DiesUndDas/v3/demo">Demo</a>
        </li>        
      </ul>
      <form class="d-flex" action="/DiesUndDas/v3/search" method="POST">
        <input class="form-control me-2" type="search" name="query" placeholder="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>