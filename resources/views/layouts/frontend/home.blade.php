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

    <div class="page-content page-home">
        <section class="confrence-carousel">
            <div class="container">
                <div class="row">
                  <div class="col-lg-12" data-aos="zoom-in">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="images/greathope.jpg" class="d-block w-100 h-60" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="images/slide2.jpg" class="d-block w-100 h-60" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="images/slide3.jpg" class="d-block w-100 h-60" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="images/slide4.jpg" class="d-block w-100 h-60" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="images/slide5.jpg" class="d-block w-100 h-60" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="images/slide6.jpg" class="d-block w-100 h-60" alt="...">
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                </div>
            </div>
        </section>
    
        <section class="confrence" id="confrence">
            <div class="container">
              <div class="row">
                <div class="col-12" data-aos="zoom-in">
                  <div class="headConfrence">
                    <h1>Tentang Acara</h1>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6" data-aos="zoom-in" data-aos-delay="200">
                  <div class="gambarConfrence">
                    <img src="images/Logo HUT 70 YSKI.png" alt="">
                  </div>
                </div>
                <div class="col-md-6 align-self-center" data-aos="zoom-in" data-aos-delay="300">
                  <div class="content">
                    <div class="isiConfrence">
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic illo eos, ea quaerat expedita asperiores fuga qui repudiandae officia architecto fugit a voluptas? Adipisci omnis iste veritatis quasi possimus repellendus!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas ex temporibus blanditiis aliquid laudantium nam voluptatum similique. Sint doloremque aspernatur commodi quaerat! Dolore sapiente vero dolores odit laboriosam impedit exercitationem?
                      </p>
                    </div>
                    <div class="btnSelengkapnya">
                      <a href="fullAcara.html" class="btn btnLengkap">
                        Selengkapnya
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>

        <section class="detailConfrence" id="program">
          <div class="container">
            <div class="row">
              <div class="col-12" data-aos="fade-down">
                <div class="headDetailsConfrence">
                  <h1>Detail Acara</h1>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-4 col-lg-4" data-aos="fade-down" data-aos-delay="100">
                <a href="detail.html" class="component-program d-blcok">
                  <div class="program-thumbnail">
                    <div class="program-image" style="background-image: url('images/greathope.jpg')"></div>
                  </div>
                  <div class="program-text">
                    Great Insight
                  </div>
                  <div class="program-time">
                    Maret-Agustus 2021
                  </div>
                </a>
              </div>
              <div class="col-12 col-md-4 col-lg-4" data-aos="fade-down" data-aos-delay="200">
                <a href="#" class="component-program d-block">
                  <div class="program-thumbnail">
                    <div class="program-image" style="background-image: url('images/greathope.jpg')"></div>
                  </div>
                  <div class="program-text">
                    Great Insight
                  </div>
                  <div class="program-time">
                    Maret-Agustus 2021
                  </div>
                </a>
              </div>
              <div class="col-12 col-md-4 col-lg-4" data-aos="fade-down" data-aos-delay="300">
                <a href="" class="component-program d-block">
                  <div class="program-thumbnail">
                    <div class="program-image" style="background-image: url('images/greathope.jpg')"></div>
                  </div>
                  <div class="program-text">
                    Great Insight
                  </div>
                  <div class="program-time">
                    Maret-Agustus 2021
                  </div>
                </a>
              </div>
              <div class="col-12 col-md-4 col-lg-4" data-aos="fade-down" data-aos-delay="400">
                <a href="" class="component-program d-block">
                  <div class="program-thumbnail">
                    <div class="program-image" style="background-image: url('images/greathope.jpg')"></div>
                  </div>
                  <div class="program-text">
                    Great Insight
                  </div>
                  <div class="program-time">
                    Maret-Agustus 2021
                  </div>
                </a>
              </div>
              <div class="col-12 col-md-4 col-lg-4" data-aos="fade-down" data-aos-delay="400">
                <a href="" class="component-program d-block">
                  <div class="program-thumbnail">
                    <div class="program-image" style="background-image: url('images/greathope.jpg')"></div>
                  </div>
                  <div class="program-text">
                    Great Insight
                  </div>
                  <div class="program-time">
                    Maret-Agustus 2021
                  </div>
                </a>
              </div>
              <div class="col-12 col-md-4 col-lg-4" data-aos="fade-down" data-aos-delay="400">
                <a href="" class="component-program d-block">
                  <div class="program-thumbnail">
                    <div class="program-image" style="background-image: url('images/greathope.jpg')"></div>
                  </div>
                  <div class="program-text">
                    Great Insight
                  </div>
                  <div class="program-time">
                    Maret-Agustus 2021
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>

        <section class="photosConfrence" id="galeri">
          <div class="container">
            <div class="row">
              <div class="col-12" data-aos="fade-down">
                <div class="headPhotosConfrence">
                  <h1>Galeri Kegiatan</h1>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  </ol>
                  <div class="carousel-inner">
                    @foreach ($albums as $al)
                      @if ($al->isactive == '1')
                        <div class="carousel-item active">
                          <div class="row">
                            <div class="col-md-4 itemPertama mb-2">
                              <a href="{{route('albumFoto', $al->id)}}">
                                <div class="card">
                                  <img src="{{Storage::url($al->galeri->first()->photo)}}" class="card-img-top" alt="...">
                                  <div class="card-body">
                                    <p class="card-text">
                                      {{$al->judul}}
                                    </p>
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                        </div>
                      @else
                        <div class="carousel-item">
                          <div class="row">
                            <div class="col-md-4 itemPertama">
                              <a href="{{route('albumFoto', $al->id)}}">
                                <div class="card">
                                  <img src="{{Storage::url($al->galeri->first()->photo)}}" class="card-img-top" alt="...">
                                  <div class="card-body">
                                    <p class="card-text">
                                      {{$al->judul}}
                                    </p>
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                        </div> 
                      @endif
                    @endforeach
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              <!-- <div class="col-12 col-md-6 col-lg-4" data-aos="fade-down" data-aos-delay="100">
                <a href="galeri.html" class="component-foto mb-2">
                  <div class="foto-thumbnail">
                    <div class="foto-image" style="background-image: url('images/photos1.jpg')"></div>
                  </div>
                </a>
              </div>
              <div class="col-12 col-md-6 col-lg-4" data-aos="fade-down" data-aos-delay="200">
                <a href="#" class="component-foto">
                  <div class="foto-thumbnail">
                    <div class="foto-image" style="background-image: url('images/photos2.jpg')"></div>
                  </div>
                </a>
              </div>
              <div class="col-12 col-md-6 col-lg-4" data-aos="fade-down" data-aos-delay="300">
                <a href="#" class="component-foto">
                  <div class="foto-thumbnail">
                    <div class="foto-image" style="background-image: url('images/photos3.jpg')"></div>
                  </div>
                </a>
              </div> -->
            </div>
          </div>
        </section>

        <section class="hubungiKita" id="kontak">
          <div class="container">
            <div class="row">
              <div class="col-12" data-aos="fade-down">
                <div class="headHubungiConfrence">
                  <h1>Hubungi Kami</h1>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7920.3732059862405!2d110.42820320089564!3d-6.987287837521682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708ca37cf6b41b%3A0x21f5bc3e2cc8644e!2sYski!5e0!3m2!1sid!2sid!4v1618986055303!5m2!1sid!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
            <div class="row icon">
              <div class="col-12 col-md-4 col-lg-4">
                <div class="map text-center contentIcon">
                  <i class="fas fa-map-marked-alt fa-2x"></i>
                  <p>
                    Jl. Hawa IV No. 8 <br>
                    Semarang, Jawa Tengah
                  </p>
                </div>
              </div>
              <div class="col-12 col-md-4 col-lg-4">
                <div class="map text-center contentIcon">
                  <i class="fas fa-envelope fa-2x"></i>
                  <p>
                    yski_semarang@yski.or.id
                  </p>
                </div>
              </div>
              <div class="col-12 col-md-4 col-lg-4">
                <div class="map text-center contentIcon">
                  <i class="fas fa-phone-alt fa-2x"></i>
                  <p>
                    024-8441948
                  </p>
                </div>
              </div>
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
</body>
</html>