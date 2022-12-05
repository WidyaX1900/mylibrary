<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to My Library</title>
    <link rel="icon" href="{{ asset('storage/img/logo.png') }}">
    <link rel="stylesheet" href="http://localhost/mylibrary/resources/css/bootstrap.css">
    <link rel="stylesheet" href="http://localhost/mylibrary/resources/css/welcome.css" />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('storage/img/logo.png') }}" alt="My Library" width="50px" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse d-flex flex-row-reverse"
          id="navbarNav"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/login">Log In</a>
            </li>
            <li class="nav-item">
              <button type="button" class="btn btn-primary">Register</button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Hero Section -->
    <header class="vh-100 mt-5">
      <div class="overlay d-flex justify-content-center align-items-center">
        <div class="hero-desc d-flex flex-column justify-content-center">
          <h1>Welcome to My Library</h1>
          <button type="button" class="btn btn-primary m-auto mt-3">
            Explore Library
          </button>
        </div>
      </div>
    </header>
    <!-- End Hero Section -->
    <!-- Our E-library Section -->
    <section class="our-section mt-4">
      <h3>Why My Library</h3>
      <div class="features row mt-3">
        <div class="col-lg-4">
          <figure>
            <img src="{{ asset('storage/img/image1.jpg') }}" alt="features 1" />
          </figure>
          <div class="features-desc">
            <h5>Friendly Display</h5>
            <p>
                Our simple e-library display will make it easier for you to
                do an exploration of the e-library and look for the book you like
                want.
            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <figure>
            <img src="{{ asset('storage/img/image2.png') }}" alt="features 2" />
          </figure>
          <div class="features-desc">
            <h5>Book Manager</h5>
            <p>
                We provide you with automated book manager. You can do this with your digital device.
            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <figure>
            <img src="{{ asset('storage/img/image3.png') }}" alt="features 3" />
          </figure>
          <div class="features-desc">
            <h5>Reading is Learning</h5>
            <p>
                With reading you can explore a whole world and find new insights as much as you want.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- End Our Library Section -->
    <!-- Our Book Section -->
    <section class="our-section mt-5">
        <h3>Book Samples</h3>
        <div class="features row mt-3">
          <div class="col-lg-4">
            <figure>
              <img src="{{ asset('storage/img/dmc-cover2.jpg') }}" alt="dmc cover" />
            </figure>
            <div class="features-desc">
              <h5>Devil May Cry</h5>
              <p>
                Story about son of demon save the world
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <figure>
              <img src="{{ asset('storage/img/onepiece-cover.jpg') }}" alt="one piece cover" />
            </figure>
            <div class="features-desc">
              <h5>One Piece</h5>
              <p>
                Help Monkey D. Luffy to become a king of the pirates.
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <figure>
              <img src="{{ asset('storage/img/naruto-cover.jpg') }}" alt="naruto cover" />
            </figure>
            <div class="features-desc">
              <h5>Naruto</h5>
              <p>
                Naruto's journey to become a ninja and hokage to protect the ninja world.
              </p>
            </div>
          </div>
        </div>
        <div class="all-books row m-auto mt-3">
            <button type="button" class="btn btn-outline-primary" id="button">
              <strong>See all books</strong>
            </button>
        </div>
      </section>
      <!-- End Our Book Section -->
      <!-- Visi dan Misi Section -->
      <section class="vision row mt-5">
          <h3>Vision and Mission</h3>
          <div class="col-lg-4 picture mt-4">
            <img src="{{ asset('storage/img/images4.jpg') }}" alt="student's image">
          </div>
          <div class="col-lg-6 description d-flex align-items-center">
            <p>
                Our vision is to help all libraries in the world have the best system to manage their book and lending data so that they save more time and effort
            </p>
          </div>
      </section>
      <!-- End Visi dan Misi Section -->
      <!-- Footer -->
      <footer class="mt-5 d-flex justify-content-evenly">
          <div class="copyright d-flex align-items-center">
            <p>Copyright &copy; 2022</p>
          </div>
          <div class="created-by d-flex align-items-center">
            <p>Created by <strong>Rangga Widya</strong></p>
          </div>
      </footer>
      <!-- End Footer -->

      <script src="http://localhost/mylibrary/resources/js/register-button.js"></script>
  </body>
</html>
