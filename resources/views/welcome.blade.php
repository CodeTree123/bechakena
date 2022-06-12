<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Fontawsome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- style CSS -->
  <link rel="stylesheet" href="{{ asset ('assets/css/style.css')}}"> 


  <title>Hello, world!</title>
</head>

<body>
  <div class="container-fluid px-0">
    <header class="py-1 border-bottom fixed-top header-color">
      <div class="row align-items-baseline mx-0">
        <!-- logo -->
        <div class="col-2">
          <a href="/" class="logo"> 
   
            <img src="{{ asset ('assets/img/logov1.png')}}" alt="">
          </a>
        </div>
        <!-- Header Search -->
        <div class="col-7">

          <div class="input-group">
            <select id="resizing_select">
              <option>All</option>
              <option>Longer</option>
              <option>A very very long string...</option>
            </select>
            <select id="width_tmp_select">
              <option id="width_tmp_option"></option>
            </select>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
            <span class="input-group-text">
              <i class="fa-solid fa-magnifying-glass"></i>
            </span>
          </div>
        </div>
        <div class="col-3 d-flex justify-content-center align-items-center">
          <button type="button" class="btn btn-warning me-3">Sign In</button>
          <i class="fa-solid fa-cart-shopping fa-xl"></i>
        </div>

      </div>
    </header>
    <nav class="py-2 px-3 bg-light border-bottom mt-5">
      <div class="d-flex flex-wrap">

        <ul class="nav me-auto">
          <li class="nav-item">
            <!-- <a href="#" class="nav-link link-dark text-decoration-none px-2 active" aria-current="page">
               
              </a> -->
            <a class="nav-link link-dark text-decoration-none px-2  " data-bs-toggle="offcanvas"
              href="#offcanvasExample" aria-controls="offcanvasExample">
              <i class="fa-solid fa-bars"></i>
            </a>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
              aria-labelledby="offcanvasExampleLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                  aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <div>
                  Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images,
                  lists, etc.
                </div>
                <div class="dropdown mt-3">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown">
                    Dropdown button
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </div>
              </div>
            </div>


          </li>
          <li class="nav-item"><a href="#" class="nav-link link-dark text-decoration-none px-2 active"
              aria-current="page">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link link-dark text-decoration-none px-2">Features</a></li>
          <li class="nav-item"><a href="#" class="nav-link link-dark text-decoration-none px-2">Pricing</a></li>
          <li class="nav-item"><a href="#" class="nav-link link-dark text-decoration-none px-2">FAQs</a></li>
          <li class="nav-item"><a href="#" class="nav-link link-dark text-decoration-none px-2">About</a></li>
        </ul>

      </div>
    </nav>

    <section class="overlapping">
      <!-- Main Page Slider Section -->
      <div id="banner-slider" class="carousel slide"  data-bs-ride="carousel"  data-bs-touch="true">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/s5.jpg" class="d-block w-100 slider-img" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/s6.jpg" class="d-block w-100 slider-img" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/s7.jpg" class="d-block w-100 slider-img" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#banner-slider" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#banner-slider" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- Cards start-->
      <div class="row row-cols-1 row-cols-md-4 mx-0 px-3 overlapped-card-section">
        <div class="col ps-0 pe-2 ">
          <div class="card h-100 text-center border-0  shadow-one    ">
            <h5 class="card-title py-3">Gaming accessories</h5>
            
            <img src="assets/c1.webp" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <a href="#" class="link-dark text-decoration-none card-text ">See More...</a>
            </div>


          </div>
        </div> 

        <div class="col ps-2 pe-2">
          <div class="card h-100 border-0 shadow-one    ">
            <img src="assets/c2.jpg" class="card-img-top  " alt="...">
            <h5 class="card-title py-3 text-center">Gadgets</h5>
            <div class="card-body text-center">
              <a href="#" class="link-dark text-decoration-none ">See More...</a>
            </div>

          </div>
        </div> 
        <div class="col ps-2 pe-2">
          <div class="card h-100 border-0  shadow-one    ">
            <h5 class="card-title text-center py-3">Kitchen appliance</h5>
            <img src="assets/c3.webp" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <a href="#" class="link-dark text-decoration-none ">See More...</a>
            </div>

          </div>
        </div>
        <div class="col ps-2 pe-0">
          <div class="card h-100 border-0  shadow-one    ">
            <img src="assets/c4.jpg" class="card-img-top" alt="...">
            <h5 class="card-title text-center py-3">Home appliance</h5>
            <div class="card-body text-center">
              <a href="#" class="link-dark text-decoration-none ">See More...</a>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- Cards end -->

    <!-- Product Slider One -->
    <section class="product-slider-one">
      <h1 class="text-center my-4">Featured Products</h1>
      <div id="productSliderOne" class="carousel slide"  data-bs-ride="carousel"  data-bs-touch="true">
        <div class="carousel-inner">
          <div class="carousel-item active"> 
            <div class="row px-4">
              <div class="col-md-4  ">
                <a href="" class="text-center text-decoration-none link-dark">
                  <img src="assets/p1.jpg" alt="">
                  <h3>Kitchen</h3>
                </a>
              </div>
              <div class="col-md-4  ">
                <a href="" class="text-center text-decoration-none link-dark">
                  <img src="assets/p2.jpg" alt="">
                  <h3>Kitchen</h3>
                </a>
              </div>
              <div class="col-md-4  ">
                <a href="" class="text-center text-decoration-none link-dark">
                  <img src="assets/p3.jpg" alt="">
                  <h3>Kitchen</h3>
                </a>
              </div>
            </div>
          </div>
          <div class="carousel-item"> 
            <div class="row px-4">
              <div class="col-md-4">
                <a href="" class="text-center text-decoration-none link-dark">
                  <img src="assets/p3.jpg" alt="">
                  <h3>Kitchen</h3>
                </a>
              </div>
              <div class="col-md-4">
                <a href="" class="text-center text-decoration-none link-dark">
                  <img src="assets/p2.jpg" alt="">
                  <h3>Kitchen</h3>
                </a>
              </div>
              <div class="col-md-4">
                <a href="" class="text-center text-decoration-none link-dark">
                  <img src="assets/p1.jpg" alt="">
                  <h3>Kitchen</h3>
                </a>
              </div>
            </div>
          </div>
          <div class="carousel-item"> 
            <div class="row px-4">
              <div class="col-md-3">
                <a href="" class="text-center text-decoration-none link-dark">
                  <img src="assets/p2.jpg" alt="">
                  <h3>Kitchen</h3>
                </a>
              </div>
              <div class="col-md-3">
                <a href="" class="text-center text-decoration-none link-dark">
                  <img src="assets/p1.jpg" alt="">
                  <h3>Kitchen</h3>
                </a>
              </div>
              <div class="col-md-3">
                <a href="" class="text-center text-decoration-none link-dark">
                  <img src="assets/p3.jpg" alt="">
                  <h3>Kitchen</h3>
                </a>
              </div>
              <div class="col-md-3">
                <a href="" class="text-center text-decoration-none link-dark">
                  <img src="assets/p7.jpg" alt="">
                  <h3>Kitchen</h3>
                </a>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#productSliderOne" data-bs-slide="prev">
          <span class="slide-control" aria-hidden="true">
            <i class="fa-solid fa-arrow-left"></i>
          </span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#productSliderOne" data-bs-slide="next">
          <span class="slide-control" aria-hidden="true">
            <i class="fa-solid fa-arrow-right"></i>
          </span>
          <span class="visually-hidden">Next</span>
        </button>

      </div>
    </section>
    <!-- Product Slider One End-->

    <!-- Product Slider Two-->
    <section class="product-slider-two">
      <h1 class="text-center my-4">Top Reviewd Products</h1>
      <div id="producSliderTwo" class="carousel slide"  data-bs-ride="carousel"  data-bs-touch="true">
        <div class="carousel-inner">
          <div class="carousel-item active"> 
            <div class="row px-4">
              <div class="col-md-3  ">
                <a href="" class="text-center text-decoration-none link-dark">
                  <img src="assets/p3.webp" alt="">
                  <h3>Kitchen</h3>
                </a>
              </div>
              <div class="col-md-3  ">
                <a href="" class="text-center text-decoration-none link-dark">
                  <img src="assets/p4.jpg" alt="">
                  <h3>Kitchen</h3>
                </a>
              </div>
              <div class="col-md-3  ">
                <a href="" class="text-center text-decoration-none link-dark">
                  <img src="assets/p6.jpg" alt="">
                  <h3>Kitchen</h3>
                </a>
              </div>
              <div class="col-md-3  ">
                <a href="" class="text-center text-decoration-none link-dark">
                  <img src="assets/p5.jpg" alt="">
                  <h3>Kitchen</h3>
                </a>
              </div>
            </div>
          </div>
          <div class="carousel-item"> 
            <div class="row px-4">
              <div class="col-md-4">
                <a href="" class="text-center text-decoration-none link-dark">
                  <img src="assets/p4.jpg" alt="">
                  <h3>Kitchen</h3>
                </a>
              </div>
              <div class="col-md-4">
                <a href="" class="text-center text-decoration-none link-dark">
                  <img src="assets/p3.webp" alt="">
                  <h3>Kitchen</h3>
                </a>
              </div>
              <div class="col-md-4">
                <a href="" class="text-center text-decoration-none link-dark">
                  <img src="assets/p5.jpg" alt="">
                  <h3>Kitchen</h3>
                </a>
              </div>
            </div>
          </div>
          <div class="carousel-item"> 
            <div class="row px-4">
              <div class="col-md-4">
                <a href="" class="text-center text-decoration-none link-dark">
                  <img src="assets/p5.jpg" alt="">
                  <h3>Kitchen</h3>
                </a>
              </div>
              <div class="col-md-4">
                <a href="" class="text-center text-decoration-none link-dark">
                  <img src="assets/p4.jpg" alt="">
                  <h3>Kitchen</h3>
                </a>
              </div>
              <div class="col-md-4">
                <a href="" class="text-center text-decoration-none link-dark">
                  <img src="assets/p3.webp" alt="">
                  <h3>Kitchen</h3>
                </a>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#producSliderTwo" data-bs-slide="prev">
          <span class="slide-control" aria-hidden="true">
            <i class="fa-solid fa-arrow-left"></i>
          </span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#producSliderTwo" data-bs-slide="next">

          <span class="slide-control" aria-hidden="true">
            <i class="fa-solid fa-arrow-right"></i>
          </span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <!-- Product Slider Two ENd-->


    <!-- Footer  -->
    <div class="container-fluid  border-top theme-bg">
      <footer class="pt-5 px-4">
        <div class="row">
          <div class="col-2">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">About</a></li>
            </ul>
          </div>

          <div class="col-2">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">About</a></li>
            </ul>
          </div>

          <div class="col-2">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">About</a></li>
            </ul>
          </div>

          <div class="col-4 offset-1">
            <form>
              <h5>Subscribe to our newsletter</h5>
              <p>Monthly digest of whats new and exciting from us.</p>
              <div class="d-flex w-100 gap-2">
                <label for="newsletter1" class="visually-hidden">Email address</label>
                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                <button class="btn btn-primary" type="button">Subscribe</button>
              </div>
            </form>
            <div>
              <ul class="list-unstyled d-flex ">
                <li class="ms-3">
                  <a class="link-light" href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="ms-3">
                  <a class="link-light" href="#">
                    <i class="fa-brands fa-twitter"></i>
                  </a>
                </li>
                <li class="ms-3">
                  <a class="link-light" href="#">
                    <i class="fa-brands fa-youtube"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-center  border-top">
          <p class="text-center">&copy; 2022 Developed by CODETREE</p>

        </div>
      </footer>
    </div>
    <!-- Footer End -->
  </div>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <!-- Jquery Library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Header Script -->
  <script>
    $(document).ready(function () {
      $('#resizing_select').change(function () {
        $("#width_tmp_option").html($('#resizing_select option:selected').text());
        $(this).width($("#width_tmp_select").width());
      });
    });
  </script>


  <!-- separate carousel controll -->
  <script>
    var myCarousel = document.querySelector('#banner-slider');
    var carousel = new bootstrap.Carousel(myCarousel);

    var myCarousel1 = document.querySelector('#productSliderOne');
    var carousel = new bootstrap.Carousel(myCarousel1);
  </script>
</body>

</html>
