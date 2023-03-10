<!DOCTYPE html>
<html>

<head>
  @include('header')
  <title>Project Page - TRN</title>
</head>

<body>
  @include('navbar')
  <main class="page project-page">
    <section class="portfolio-block project">
      <div class="container">
        <div class="heading">
          <h2>project name</h2>
        </div>
        <div class="image" style="background-image:url(&quot;assets/img/tech/image4.jpg&quot;);"></div>
        <div class="row">
          <div class="col-12 col-md-6 offset-md-1 info">
            <h3>Description</h3>
            <p>Nam a ultrices mauris. Nam efficitur, lorem a vehicula interdum, ligula velit euismod lorem, vitae
              vehicula ligula tortor eu leo. Maecenas porttitor massa ut vestibulum euismod. Aliquam eget mi aliquam.
            </p>
            <p>Lorem ipsum dapibus dolor non, malesuada mauris. Aliquam eleifend mauris non odio mattis auctor. Aenean
              sit amet elementum tellus, a facilisis ligula. Pellentesque ac vehicula mauris.</p>
          </div>
          <div class="col-12 col-md-3 offset-md-1 meta">
            <div class="tags"><span class="meta-heading">Tags</span><a href="#">Resource</a><a href="#">Project</a><span
                class="meta-heading">Date</span><span>25-04-2017</span></div>
          </div>
        </div>
        <div class="more-projects">
          <h3 class="text-center">More Projects</h3>
          <div class="row gallery">
            <div class="col-md-4 col-lg-3">
              <div class="item"><a href="#"><img class="img-fluid scale-on-hover"
                    src="assets/img/nature/image2.jpg"></a></div>
            </div>
            <div class="col-md-4 col-lg-3">
              <div class="item"><a href="#"><img class="img-fluid scale-on-hover"
                    src="assets/img/nature/image3.jpg"></a></div>
            </div>
            <div class="col-md-4 col-lg-3">
              <div class="item"><a href="#"><img class="img-fluid scale-on-hover" src="assets/img/tech/image4.jpg"></a>
              </div>
            </div>
            <div class="col-md-4 col-lg-3">
              <div class="item"><a href="#"><img class="img-fluid scale-on-hover"
                    src="assets/img/nature/image5.jpg"></a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  @include('footer')
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/bs-init.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
  <script src="assets/js/theme.js"></script>
</body>

</html>