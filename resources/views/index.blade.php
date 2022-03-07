<x-app>
  <div class="position-relative overflow-hidden mb-3 text-center">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" style="height: 550px">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" aria-label="Slide 1" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
      </div>
      
      <div class="carousel-inner" style="height: 550px">
        <div class="carousel-item active" style="height: 550px">
          <img class="d-block w-100" src="../img/banner-prebuilt.jpg" alt="Third slide">
          <div>
            <div class="carousel-caption text-start">
              <h1>Unleash the power</h1>
              <p>Reliable and highly configurable prebuilt PCs, perfect for people new to PC gaming!</p>
              <p><a class="btn btn-lg btn-primary bg-sahara" href="prebuilt">Find yours</a></p>
            </div>
          </div>
        </div>

        <div class="carousel-item" style="height: 550px">
          <img class="d-block w-100" src="../img/banner-games.jpg" alt="Third slide">
          <div>
            <div class="carousel-caption">
              <h1>Browse games</h1>
              <p>Find the best deals for games on Steam, Epic Games, Origin and more!</p>
              <p><a class="btn btn-lg btn-primary bg-sahara" href="about">See games</a></p>
            </div>
          </div>
        </div>
        
        <div class="carousel-item" style="height: 550px">
        <img class="d-block w-100" src="../img/banner-signup.jpg" alt="Third slide">
          <div>
            <div class="carousel-caption text-end">
              <h1>Stay updated</h1>
              <p>Register now to wishlist products, checkout faster, and receive weekly deals right in your inbox!</p>
              <p><a class="btn btn-lg btn-primary bg-sahara" href="register">Sign up</a></p>
            </div>
          </div>
        </div>
      </div>
      
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <div class="row m-5">
    <div class="col-sm">
    <a class= "text-decoration-none text-dark" href="{{ url('/products/games') }}"><img class="m-auto d-flex w-50" src="../img/gaming.png" alt="Image missing because we are cool!"><h3 class="text-center pt-2">Games</h3></a>
    </div>
    <div class="col-sm">
    <a class= "text-decoration-none text-dark" href="{{ url('/products/prebuilds') }}"><img class="m-auto d-flex w-50" src="../img/prebuild.png" alt="Image missing because we are cool!"><h3 class="text-center pt-2">Computers</h3></a>
    </div>
    <div class="col-sm">
    <a class= "text-decoration-none text-dark" href="{{ url('/products/consoles') }}"><img class="m-auto d-flex w-50" src="../img/console.png" alt="Image missing because we are cool!"><h3 class="text-center pt-2">Consoles</h3></a>
    </div>
    <div class="col-sm">
      <a class= "text-decoration-none text-dark" href="{{ url('/products/components') }}"><img class="m-auto d-flex w-50" src="../img/component.png" alt="Image missing because we are cool!"><h3 class="text-center pt-2">Components</h3></a>
    </div>
  </div>

  <div class="row mx-5">
    <x-product/>
    <x-product/>
    <x-product/>
    <x-product/>
    <div class="w-100"></div>
    <x-product/>
    <x-product/>
    <x-product/>
    <x-product/>
    <div class="w-100"></div>
    <x-product/>
    <x-product/>
    <x-product/>
    <x-product/>
  <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</x-app>
