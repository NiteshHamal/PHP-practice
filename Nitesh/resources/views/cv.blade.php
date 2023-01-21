<!DOCTYPE html>
<html>

<head>
  @include('header')
  <title>CV - TRN</title>
</head>

<body>
  @include('navbar')
  <main class="page cv-page">
    <section class="portfolio-block block-intro border-bottom">
      <div class="container">
        <div class="avatar" style="background-image:url(&quot;assets/img/avatars/IMG_0144.JPG&quot;);"></div>
        <div class="about-me">
          <p data-aos="fade">Hello! I am <strong>Nitesh Hamal</strong>. I am a second-year student at Patan College for
            Professional Studies majoring in Computer Science and Software Engineering. I've previously acquired
            knowledge in programming languages like Python and Java, and I have experience building websites with the
            Laravel framework. In the field of computer science and software engineering, I am constantly expanding my
            knowledge and abilities.</p><a class="btn btn-outline-primary" role="button" href="#">Hire me</a>
        </div>
      </div>
    </section>
    <section class="portfolio-block cv">
      <div class="container">
        <div class="work-experience group">
          <div class="heading">
            <h2 class="text-center">Work Experience</h2>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-6">
                <h3>Web Developer</h3>
                <h4 class="organization">Amazing Co.</h4>
              </div>
              <div class="col-md-6"><span class="period">10/2013 - 04/2015</span></div>
            </div>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget velit ultricies,
              feugiat est sed, efficitur nunc, vivamus vel accumsan dui.</p>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-6">
                <h3>Front End Developer</h3>
                <h4 class="organization">Innovative Org.</h4>
              </div>
              <div class="col-md-6"><span class="period">05/2015 - 12/2017</span></div>
            </div>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget velit ultricies,
              feugiat est sed, efficitur nunc, vivamus vel accumsan dui.</p>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-6">
                <h3>Web Developer</h3>
                <h4 class="organization">Special Inc.</h4>
              </div>
              <div class="col-md-6"><span class="period">12/2017 - Present</span></div>
            </div>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget velit ultricies,
              feugiat est sed, efficitur nunc, vivamus vel accumsan dui.</p>
          </div>
        </div>
        <div class="education group">
          <div class="heading">
            <h2 class="text-center">Education</h2>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-6">
                <h3>High School</h3>
                <h4 class="organization">Albert Einstein School</h4>
              </div>
              <div class="col-6"><span class="period">09/2005 - 05/2010</span></div>
            </div>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget velit ultricies,
              feugiat est sed, efficitur nunc, vivamus vel accumsan dui.</p>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-6">
                <h3>Applied Physics</h3>
                <h4 class="organization">Stephen Hawking College</h4>
              </div>
              <div class="col-md-6"><span class="period">09/2010 - 06/2015</span></div>
            </div>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget velit ultricies,
              feugiat est sed, efficitur nunc, vivamus vel accumsan dui.</p>
          </div>
        </div>
        <div class="group">
          <div class="row">
            <div class="col-md-6">
              <div class="skills portfolio-info-card">
                <h2>Skills</h2>
                <h3>HTML</h3>
                <div class="progress">
                  <div class="progress-bar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                    style="width: 100%;"><span class="visually-hidden">100%</span></div>
                </div>
                <h3>PHP</h3>
                <div class="progress">
                  <div class="progress-bar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                    style="width: 90%;"><span class="visually-hidden">90%</span></div>
                </div>
                <h3>JavaScript</h3>
                <div class="progress">
                  <div class="progress-bar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                    style="width: 80%;"><span class="visually-hidden">80%</span></div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="contact-info portfolio-info-card">
                <h2>Contact Info</h2>
                <div class="row">
                  <div class="col-1"><i class="icon ion-android-calendar icon"></i></div>
                  <div class="col-9"><span>04/20/2003</span></div>
                </div>
                <div class="row">
                  <div class="col-1"><i class="icon ion-person icon"></i></div>
                  <div class="col-9"><span>Nitesh Hamal</span></div>
                </div>
                <div class="row">
                  <div class="col-1"><i class="icon ion-ios-telephone icon"></i></div>
                  <div class="col-9"><span>+977 9813371345</span></div>
                </div>
                <div class="row">
                  <div class="col-1"><i class="icon ion-at icon"></i></div>
                  <div class="col-9"><span>nitesh0hamal@email.com</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="hobbies group">
          <div class="heading">
            <h2 class="text-center">Hobbies</h2>
          </div>
          <p class="text-center text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras risus ligula,
            iaculis ut metus sit amet, luctus pharetra mauris. Aliquam purus felis, pretium vel pretium vitae, dapibus
            sodales ante. Suspendisse potenti. Duis nunc eros.</p>
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