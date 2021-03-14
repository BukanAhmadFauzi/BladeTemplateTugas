<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<!-- font viga -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

<!-- font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">


{{-- mystyle --}}
<style>
/* Navbar */
.navbar-nav {
    padding-right: 20px;
}

.nav-item {
    padding-right: 25px;
}

.bg-light {
    background-color: rgba(0, 0, 0, 0) !important;
}

.bg-nontrans {
    background-color: rgba(255, 255, 255, 1) !important;
}

@media screen and (max-width: 575px) {
    .bg-light {
        background-color: rgba(255, 255, 255, 1) !important;
    }

    #home {
        margin-top: 55px;
    }
}

/* CAROUSEL */
#myCarousel {
    height: 100vh;
}

.carousel-item img {
    height: 100vh;
}

/* section */
section {
    padding-top: 50px;
    padding-bottom: 50px;
}

#home {
    padding-top: 0px;
    padding-bottom: 0px;
}

#about,
#gallery,
#contact {
    height: 700px;
}

/* Scroll effect */
html {
    scroll-behavior: smooth;
}

/* .buttom */
.btn-primary-custom {
    background-color: red;
}

/* CAROUSEL */
#myCarousel {
    height: 100vh;
}

.carousel-item img {
    height: 100vh;
}

/* section */
section {
    padding-top: 50px;
    padding-bottom: 50px;
}

#home {
    padding-top: 0px;
    padding-bottom: 0px;
}

/* Scroll effect */
html {
    scroll-behavior: smooth;
}

/* .buttom */
.btn-primary-custom {
    background-color: red;
}

h1 {
    background: white;
    border: solid 1mm black;
    border-radius: 20px;
}

/* PARALLAX */
.parallax {
    background-image: url('img/repeat.jpg');
    background-position: center;
    background-repeat: repeat;
}

.parallax2 {
    background-image: url('img/nature (36).jpg');
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.parallax2.overlay span {
    position: absolute;
    width: 100%;
    height: 100%;
}

.parallax3 {
    background-image: url('img/04.jpg');
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.parallax4 {
    background-image: url('img/04.jpg');
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* gallery */
.gallery-feed img {
    margin-bottom: 30px;
    width: 100%;
}

.gallery-feed1 img {
    filter: gray;
    -webkit-filter: grayscale(1);
    margin-bottom: 30px;
    width: 100%;
}

.gallery-feed1 img:hover {
    filter: none;
    -webkit-filter: grayscale(0);
}
</style>