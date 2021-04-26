<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('frontend/framework/bootstrap/css/bootstrap.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('frontend/framework/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{url('frontend/style/style.css')}}">
    <style>
      body {
        background-image: url('frontend/images/HUT\ 70\ -\ Page\ 90.jpg');
      }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="images/Logo HUT 70 YSKI.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#confrence">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#program">Program</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#galeri">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#kontak">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- <nav 
    class="navbar navbar-expand-lg navbar-light bg-light" data-aos="fade-down">
    <div class="container">
      <a href="/index.html" class="navbar-brand">
        <img src="/images/Logo HUT 70 YSKI.png" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a href="/index.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="/categories.html" class="nav-link">Categories</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Rewards</a>
          </li>
          <li class="nav-item">
            <a href="/register.html" class="nav-link">Sign Up</a>
          </li>
          <li class="nav-item">
            <a href="/login.html" class="btn btn-success nav-link px-4 text-white">Sign In</a>
          </li>
        </ul>
      </div>
    </div>
    </nav> -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
              <img src="/images/Logo HUT 70 YSKI.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#confrence">Tentang</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#program">Program</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#galeri">Galeri</a>
                </li>
            </ul>
            </div>
        </div>
    </nav> -->

    <div class="page-content page-galeri">
        <!-- Breadcrumbs -->
        <section class="acara-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-down">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item active" aria-current="page">Home</li>
                            </ol>
                        </nav>
                          
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </nav>
                          
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Galeri</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <!-- Title -->
        <section class="acaraTitle">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-down" data-aos-delay="100">
                        <h1>{{$album->judul}}</h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- Foto -->
        <section class="isiGaleri">
          <div class="container">
            <div class="row">
              @foreach ($items as $item)
                <div class="col-6 col-md-4 col-lg-3" data-aos="fade-down" data-aos-delay="100">
                    <div class="component-program d-blcok">
                    <div class="program-thumbnail">
                        <div class="program-image" style="background-image: url('{{Storage::url($item->photo)}}')"></div>
                    </div>
                    </div>
                </div>
              @endforeach
            </div>
          </div>
        </section>
    </div>

    <footer style="background-color: #1177d1;">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <p class="pt-5 pb-3" style="color: #fff;">
              &copy; 2021 Yayasan Sekolah Kristen Indonesia
            </p>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="{{url('frontend/framework/jquery/jquery-3.4.1.min.js')}}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="script/navbar-scroll.js"></script>
</body>
</html>