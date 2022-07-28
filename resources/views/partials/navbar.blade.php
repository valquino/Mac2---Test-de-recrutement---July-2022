<header class="p-3 bg-dark text-white sticky-top">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{ route('home.index') }}" class="nav-link px-2 text-secondary">Accueil</a></li>
        <li><a href="{{ route('contact.show') }}" class="nav-link px-2 text-secondary">Contact</a></li>
        @auth
          <li><a href="{{ route('messages.messagesList') }}" class="nav-link px-2 text-secondary">Messagerie</a></li>
        @endauth
      </ul>

      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
        <input type="search" class="form-control form-control-dark" placeholder="Recherche..." aria-label="Recherche">
      </form>

      @auth
        {{auth()->user()->name}}
        <div class="text-end">
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Déconnexion</a>
        </div>
      @endauth

      @guest
        <div class="text-end">
          <a href="{{ route('login.perform') }}" class="btn btn-outline-light align-items-center me-2">Connexion <i class="bi bi-person-badge fw-bold"></i></a>
          <a href="{{ route('register.perform') }}" class="btn btn-warning align-items-center">S'enregistrer <i class="bi bi-box-arrow-in-right fw-bold"></i></a>
        </div>
      @endguest
    </div>
  </div>
</header>