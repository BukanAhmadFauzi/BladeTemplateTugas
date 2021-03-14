@extends('layouts.app')
@section('title', 'Halaman Home')
@section('content')
<body data-spy="scroll" data-target="#navbar">
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
        <a class="navbar-brand" href="#">Galeri Saya</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
            <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#news">News</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Gallery
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#galeri">Animal</a>
                <a class="dropdown-item" href="#galeri">Nature</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact Us</a>
            </li>
            </ul>
        </div>
    </nav>
    
    <section id="home">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/01.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/02.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/03.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section id="news" class="parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h1>News Foto</h1>
                </div>
                <div class="row gallery-feed">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="img/01.jpg">
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="img/02.jpg">
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="img/animal.jpg">
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="img/nature (17).jpg">
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="img/04.jpg">
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="img/nature (10).jpg">
                    </div>
                </div>
            </div>
        </div>    
    </section>

    <section id="galeri" class="parallax2">
        <div class="container">
            <!-- Button trigger modal -->
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h1>Gallery</h1>
                </div>
                <div class="row gallery-feed1">
                    <div class="col-md-4">
                        <a href="" data-toggle="modal" data-target="#exampleModal">
                            <img class="img-responsive" src="img/nature (1).jpg">
                            <div class="overlay">
                                <span>Nature</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="" data-toggle="modal" data-target="#exampleModal"><img class="img-responsive" src="img/animal (3).jpg"></a>
                    </div>
                    <div class="col-md-4">
                        <a href="" data-toggle="modal" data-target="#exampleModal"><img class="img-responsive" src="img/city (5).jpg"></a>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" style="height: 650px;" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" style="width: 100%;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Nature</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <div class="modal-body">
                    <div class="row">
               
                <div class="row gallery-feed">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="img/01.jpg">
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="img/02.jpg">
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="img/animal.jpg">
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="img/nature (17).jpg">
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="img/04.jpg">
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="img/nature (10).jpg">
                    </div>
                </div>
            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
  <script>
    console.log('hello');
  </script>
@endsection