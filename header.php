<!-- header.php -->
<?php
    include_once('variables.php');
    include_once('functions.php');
?>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">Site de Recettes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>

        <?php if(isset($_SESSION['LOGGED_USER'])) :?>
        <li class="nav-item">
          <a   class="nav-link" href="logout.php">Se deconnecter</a>
        </li>
        <?php else : ?>
          <li class="nav-item">
          <a   class="nav-link" href="login.php">Se connecter</a>
        </li>
      </ul>
      <?php endif; ?>
    </div>
  </div>
</nav>