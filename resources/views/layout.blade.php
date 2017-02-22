<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Eagle+Lake" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
  <link rel="shortcut icon" href="{{ URL::asset('css/immagini/favicon.ico') }}"/>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="{{ URL::asset('js/script.js') }}"></script>
  <title>SSC</title>
</head>

  <body>
    <div class="enter">
      <div class="welcome">
        <div class="block">
          <img src="{{ URL::asset('css/immagini/Icona2.png') }}"/>
          <h1>Società Storica Chivassese</h1>
        </div>
      </div>
    </div>


    <div class="site">

      <div class="navbar">
        <div class="presentnav">
          <img src="{{ URL::asset('css/immagini/Icona2.png') }}"/>
          <h3>SSC</h3>
        </div>
        <div class="menunav">
          <ul class="menunavul">
            <li><a href="">Home</a></li>
            <li><a href="">Chi Siamo</a></li>
            <li><a href="">Archivio</a></li>
            <li><a href="">Contatti</a></li>
          </ul>
        </div>
      </div>


      @yield('content')


      <footer>
        <h3>Societ&agrave; Storica Chivassese</h3>
      </footer>
    </div>
  </body>

</html>
