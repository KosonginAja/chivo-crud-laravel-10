<style>
  .navbar-nav .nav-link {
    transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
    border: 1px solid rgba(0, 0, 0, 0) border-radius: 5px;
  }

  .navbar-nav .nav-link:hover {
    background-color: #bdbdbd;
    color: #fff;
    border-color: rgba(0, 0, 0, 0.5);
    border-radius: 5px;
  }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="/">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('posts.index') }}">Data Post</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
