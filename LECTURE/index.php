<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Home</title>
    <link rel = "icon" href ="img/logo.jpg" type = "image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="css/homestyle.css" rel="stylesheet">
  </head>
  <body>
  <?php include 'navbar.php'; ?>

  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="carousel-background"><img src="images/homepage1.jpg" alt="" style="width: 100%; height: 100vh"></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Selamat datang di <span>Restoran IF330!</span></h2>
                <a href="category.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Mulai Belanja</a>
              </div>
            </div>
          </div>
          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="carousel-background"><img src="images/homepage2.jpg" alt="" style="width: 100%; height: 100vh"></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown mb-0">Misi Kami</h2>
                <p class="animate__animated animate__fadeInUp">Memberikan kualitas pelayanan #1 di dunia</p>
                <a href="category.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Mulai Belanja</a>
              </div>
            </div>
          </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-thin-double-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-thin-double-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section>
  <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>Our Team</h2>
        </div>

        <div class="row" style="padding-left: 150px; padding-right:150px;">

          <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
            <div class="member">
              <img src="./images/bj.png" class="img-fluid" alt="" style="height: 198px;width: 198px;">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Bryan Jonathan</h4>
                </div>
                <div class="social">
                  <a href="https://github.com/BryanJ0904" target="_blank"><i class="fab fa-github"></i></a>
                  <a href="https://www.linkedin.com/in/bryan-jonathan-b1193524b/" target="_blank"><i class="icofont-linkedin" target="_blank"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
            <div class="member">
              <img src="./images/mark.jpg" class="img-fluid" alt="" style="height: 198px;width: 198px;">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Mark Vincent E. B.</h4>
                </div>
                <div class="social">
                  <a href="https://github.com/Mark-Vincent23" target="_blank"><i class="fab fa-github"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
            <div class="member">
              <img src="./images/met.jpg" class="img-fluid" alt="" style="height: 198px;width: 198px;">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Matthew Nikolaus</h4>
                </div>
                <div class="social">
                  <a href="https://github.com/Matetew" target="_blank"><i class="fab fa-github"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
            <div class="member">
              <img src="./images/rahmat.jpg" class="img-fluid" alt="" style="height: 198px;width: 198px;">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Rahmat Kurniawan</h4>
                </div>
                <div class="social">
                  <a href="https://github.com/rxx-zip" target="_blank"><i class="fab fa-github"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  </main>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>         
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
