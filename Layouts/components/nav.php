<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <div class="container-fluid">
        <!-- Standard Navbar with searchbox -->
    <a class="navbar-brand" href="#">CarSearch</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link" href="/Webprojekt">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Webprojekt/car">Autos</a>
        </li>
      </ul>
      <form class="d-flex" action="/Webprojekt/search" method="POST">
        <input class="form-control me-2" type="search" name="query" placeholder="Search">
        <button class="btn btn-warning" type="submit">Search</button>

      </form>
    </div>
  </div>
</nav>