<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/new-home.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-3 profile" style="overflow-y: auto; height: 100vh;">
                <div>
                    <img src="{{ asset('images/2X2.png') }}" alt="" class="img-fluid mt-5 avatar">
                    <p class="mt-2 fs-3 pt-2 font-weight-bold">Jan Rhenan P. Viente</p>
                    <p class="mt-2 fs-5 p-1 profession-name">Web Developer</p>
                    <hr class="custom-hr">
                </div>

                <div class="d-flex flex-column flex-md-row justify-content-start align-items-center m-5">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <p><i class='bx bx-envelope icon'></i></p>
                        </div>
                        <div class="text-left mt-3 mt-md-0 ml-md-2 details d-none d-xl-block"> <span>EMAIL</span>
                            <p class="text-nowrap">vientejanrhenan16@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-start align-items-center m-5">
                    <div>
                        <p><i class='bx bx-phone icon'></i></p>
                    </div>
                    <div class="text-left mt-3 mt-md-0 ml-md-2 details d-none d-xl-block">
                        <span>PHONE</span>
                        <p>+63 993 578 7648</p>
                    </div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-start align-items-center m-5">
                    <div>
                        <p><i class='bx bx-home-alt icon'></i></p>
                    </div>
                    <div class="text-left mt-3 mt-md-0 ml-md-2 details d-none d-xl-block">
                        <span>ADDRESS</span>
                        <p>Purok 4, West Balabag, <br>Valencia, Negros Oriental</p>
                    </div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-start align-items-center m-5">
                    <div>
                        <p><i class='bx bxs-calendar icon'></i></p>
                    </div>
                    <div class="text-left mt-3 mt-md-0 ml-md-2 details d-none d-xl-block">
                        <span>BIRTHDAY</span>
                        <p>January 16, 2001</p>
                    </div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-center align-items-center m-5">
                    <div class="pe-3">
                        <a href="https://www.facebook.com/janrhenan.viente" target="_blank"><i class='bx bxl-facebook icon'></i></a>
                    </div>
                    <div class="pe-3">
                        <a href="https://github.com/Phaeton16" target="_blank"><i class='bx bxl-github icon'></i></a>
                    </div>
                    <div class="pe-3">
                        <i class='bx bxl-discord-alt icon'></i>
                    </div>
                </div>
            </div>
            <div class="col content" style="overflow-y: auto; height: 100vh;">
                @include('nav')
                <div class="content-details">
                    @yield('content')

                </div>
            </div>

        </div>
    </div>
    </div>
</body>

<script>
    let slideIndex = 0;
const slides = document.querySelectorAll('.carousel-item');
const totalSlides = slides.length;

function showSlide(index) {
  if (index < 0) {
    slideIndex = totalSlides - 1;
  } else if (index >= totalSlides) {
    slideIndex = 0;
  }

  slides.forEach(slide => {
    slide.style.display = 'none';
  });

  slides[slideIndex].style.display = 'block';
}

function prevSlide() {
  slideIndex--;
  showSlide(slideIndex);
}

function nextSlide() {
  slideIndex++;
  showSlide(slideIndex);
}

// Auto play functionality (optional)
function autoPlay() {
  setInterval(() => {
    nextSlide();
  }, 3000); // Adjust interval as needed
}

// Uncomment the line below to enable autoplay
autoPlay();

</script>


</html>
