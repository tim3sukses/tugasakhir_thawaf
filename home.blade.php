<html>
  <head>
    <title>Thawaf</title>
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/home.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/bootstrap.min.css') }}">
  </head>

  <body>
    <div class="konten">
      <div class="navigasi">
        <img src="{{ asset ('img/logo.png') }}" alt="error" class="logo">
         <ul>
              <li class="home"><a href="home"> <img class="gambar1" src="{{ asset ('img/home.png') }}"></a></li>
              <li class="profil"><a href="profile"> <img class="gambar2" src="{{ asset ('img/user.png') }}"></a></li>
        </ul>
      </div>
      <div class="poster">
        <img class="thawaf1" src="{{ asset('img/thawaf1.jpg') }}">
        <img class="thawaf2" src="{{ asset('img/thawaf2.jpg') }}">
        <img class="thawaf3" src="{{ asset('img/thawaf3.jpg') }}">
      </div>
      <div class="panduan">
        <h1 class="teks">Panduan</h1>
        <div class="border"></div>
        <div class="haji">
          <a href="ibadah"><img class="ibadah" src="{{ asset('img/ibadah.jpg') }}"></a>
          <br>
          <a class="ket1" href="ibadah">Panduan Ibadah Haji</a>
        </div>
        <div class="umroh">
          <a href="umroh"><img class="ibadah2" src="{{ asset('img/umroh.jpg') }}"></a>
          <br>
          <a class="ket2" href="umroh">Panduan Umroh</a>          
        </div>
        <div class="tips">
          <a href="tips.blade.php"><img class="ibadah3" src="{{ asset('img/tips.jpg') }}"></a>
          <br>
          <a class="ket3" href="tips.blade.php">Tips & Artikel</a>
        </div>
      </div>
    </div>
  </body>
</html>