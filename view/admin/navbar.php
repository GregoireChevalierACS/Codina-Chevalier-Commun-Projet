<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="admin.php">Espace administration</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse d-flex justify-content-around" id="navbarNavDropdown">
    <ul class="navbar-nav">
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?= $_SESSION['user'] ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="admin.php?action=profil">Profil</a>
          <a class="dropdown-item " href="admin.php?action=logout">Se déconnecter</a>
        </div>
      </li>
    </ul>
    <a class="navbar-brand" href="index.php">Le site </a>
  </div>
</nav>