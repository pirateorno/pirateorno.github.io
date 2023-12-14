<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ya_Sanya__</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
  </head>
<body class="d-flex flex-column h-100">
  <nav class="navbar navbar-expand-lg navbar-dark bg-white py-2" style="--bs-bg-opacity: 0.15 ;">
    <div class="container-xl">
      <img src="../img/avatar.jpg" style="max-width: 50px;">
      <a class="navbar-brand" href="../index.html"> Ya_Sanya__</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link active" aria-current="page" href="../index.html">Главная страница</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Вики</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Мой плейлист
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="https://open.spotify.com/playlist/1uNxkexidV0z6ZtlCKNtDs?si=afe59ac2550f4230">В спотифай называется "A"</a></li>
              <li><a class="dropdown-item" href="https://open.spotify.com/playlist/53vKByRGrYC2iv6tmvOYRq?si=1e6f2fc8860e4c20">Фонк</a></li>
              <li><a class="dropdown-item" href="https://open.spotify.com/playlist/2t6fSfutSmO2CqLiis4eQH?si=37cb8bc6eb8d4221">Реп</a></li>
              <li><a class="dropdown-item" href="https://open.spotify.com/playlist/15deNLTPqKiOBNoyVr3DjK?si=728b23e34e09463e">"Грустна 😭🤡😭😎😭👎🥳😗🗣️😭"</a></li>
              <li><a class="dropdown-item" href="https://open.spotify.com/playlist/1ycHlgeL2Ia8UqFZtCek4H?si=30945c0e54d04f04">Бразильский фонк</a></li>
              <li><a class="dropdown-item" href="https://open.spotify.com/playlist/2UdRf7MJEUOSQ62ov0Vhdy?si=dfe90f24048d4e09">"Джампстайл"</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley">Трек дня (Еще не сделано)</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Интересные проекты
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Мини страница про меня</a></li>
              <li><a class="dropdown-item" href="#">Что-то типу чата</a></li>
              <li><a class="dropdown-item" href="#"></a></li>
              <li><a class="dropdown-item" href="#"></a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="https://github.com/pirateorno/pirateorno.github.io">Исходники этого сайта можете найти здесь</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  

  <main>
  <br><br><br>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $messages = fopen("messages.txt", "a");
      $text = $_POST["text"];
      fwrite($messages, " &#10;User: $text");
      fclose($messages);
      echo "Received POST data: $text";
  } else {
      $content = file_get_contents("messages.txt");
      echo "<h3 id='content' style='white-space: pre-line' class='bg-secondary-subtle'>$content</h3>";
  }
  ?>




  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  </main>


  <footer class="footer mt-auto py-3 bg-body-tertiary">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="../index.html" class="nav-link px-2 text-body-secondary">Главная страница</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Вики</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Песня дня</a></li>
    </ul>
    <p class="text-center text-body-secondary">© 2023 Ya_Sanya__</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  

</body>
</html>