<!DOCTYPE html>

<html>

<head>
  <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"
    defer></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" />

  <title>ODS - One day stand</title>
</head>

<body>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid w-100 justify-content-space-between m-10">
      <div class="small">
        <img class="logo" src="img/calendar-day-solid-full.svg" alt="logo">
        <a href="index.html" class="navbar-brand pt-1">
          One Day Stand
        </a>
      </div>
      <div class="perfil">
        <div class="small d-flex align-items-center ">
          <h3>{nome}</h3>
          <img class="logo" src="img/circle-user-solid-full.svg" alt="logo">
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="#dc143c" class="bi bi-list"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
          </svg>
        </button>
        <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarNav">
          <ul class="navbar-nav">

            <li class="nav-item d-none d-md-block d-lg-block hide">
              <a class="btn btn-primary w-100" type="button" href="#">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./pages/perfil.html">Perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Configuraçoes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sair</a>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </nav>
  <!--Main-->
  <main class="wrapper d-flex w-100  min-vh-100 m-auto justify-content-center flex-direction-column background-banner">
    <div class="container">

      <!--Criar post-->
      <div class="col m-2 d-flex card card-body rounded-2 p-1">
        <div class="d-flex justify-content-flex-start m-2 align-items-center row post-perfil ">
          <img class="perfil col small" src="img/circle-user-solid-full.svg" alt="foto de perfil">
          <h3 class="col">{nome}</h3>
        </div>
        <form action="index.php" method="post" class="p-1 m-2">
          <textarea type="text" name="post_content" class="w-100 rounded-2" placeholder="Escreva o que está pensando"></textarea>
          <button class="btn btn-primary" type="submit">Criar post</button>
        </form>
      </div>

      <!--Posts-->

      <?php
      $post_content = $_POST['post_content'];
  
      $posts = [];
  array_push($posts, $post_content);
     
     foreach ($posts as $post) {
      echo "
      <div class='Posting m-2 rounded-2 card card-body '>
        <div class='perfil perfil-post d-flex col'>

          <img class='perfil col medium' src='img/circle-user-solid-full.svg' alt='foto de perfil'>
          <h3 class='col'>{nome}</h3>


        </div>
        <p>$post</p>
        <div class='row'>
          <img src='' alt='imagem 1' class='post-img'>
        </div>
      </div>
      ";;
     }

      ?>

    </div>
  </main>
  <aside>
    <div class="recomendacao">
      <img class="perfil" src="" alt="foto de perfil">
      <h4>{nome}</h4>
    </div>
  </aside>
  <div class="chat">
    <div class="contatos">

    </div>
  </div>
  <div class="chat">
    <div class="contacts">

    </div>
    <div class="conversations">
      <div class="your-baloon"></div>
      <div class="their-ballon"></div>
    </div>
  </div>
  <footer class="footer bg-body-tertiary">

  </footer>


</body>

</html>