<!DOCTYPE html>
<html>

<head>
  @include('header')
  <title>Home - TRN</title>
</head>

<body>
  @include('navbar')
  <main class="page lanidng-page">
    <section class="portfolio-block block-intro">
      <div class="container">
        <div class="avatar" style="background-image:url(&quot;assets/img/avatars/IMG_0144.JPG&quot;);"></div>
        <div class="about-me">
          <p data-aos="fade">Hello! I am <strong>Nitesh Hamal</strong>. I am a second-year student at Patan College for
            Professional Studies majoring in Computer Science and Software Engineering. I've previously acquired
            knowledge in programming languages like Python and Java, and I have experience building websites with the
            Laravel framework. In the field of computer science and software engineering, I am constantly expanding my
            knowledge and abilities.</p><a class="btn btn-outline-primary" role="button" data-bs-toggle="modal"
            data-bs-target="#myModal1">Contact Me</a>
        </div>
        <div class="modal" id="myModal1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Contact Form</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="mb-3"><label class="form-label" for="name">Your Name</label><input
                      class="form-control item" type="text" id="name"></div>
                  <div class="mb-3"><label class="form-label" for="subject">Subject</label><input
                      class="form-control item" type="text" id="subject"></div>
                  <div class="mb-3"><label class="form-label" for="email">Email</label><input class="form-control item"
                      type="email" id="email"></div>
                  <div class="mb-3"><label class="form-label" for="message">Message</label><textarea
                      class="form-control item" id="message"></textarea></div>
                  <div class="mb-3"><button class="btn btn-primary btn-lg d-block w-100" type="submit">Submit
                      Form</button></div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="portfolio-block photography">
      <div class="container">
        <div class="row g-0">
          <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image"
                src="assets/img/nature/image5.jpg"></a></div>
          <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image"
                src="assets/img/nature/image2.jpg"></a></div>
          <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image"
                src="assets/img/tech/image4.jpg"></a></div>
        </div>
      </div>
    </section>
    <section class="portfolio-block call-to-action border-bottom">
      <div class="container">
        <div class="d-flex justify-content-center align-items-center content">
          <h3>Like what you see?</h3><button class="btn btn-outline-primary btn-lg" type="button" data-bs-toggle="modal"
            data-bs-target="#myModal2">Hire Me</button>
          <div class="modal" id="myModal2">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Hire Me</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="mb-3"><label class="form-label" for="subject">Subject</label><select class="form-select"
                        id="subject">
                        <optgroup label="This is a group">
                          <option value="12" selected="">This is item 1</option>
                          <option value="13">This is item 2</option>
                          <option value="14">This is item 3</option>
                        </optgroup>
                      </select></div>
                    <div class="mb-3"><label class="form-label" for="email">Email</label><input class="form-control"
                        type="email" id="email"></div>
                    <div class="mb-3"><label class="form-label" for="message">Message</label><textarea
                        class="form-control" id="message"></textarea></div>
                    <div class="mb-3">
                      <div class="row">
                        <div class="col-md-6"><label class="form-label" for="hire-date">Date</label><input
                            class="form-control" id="hire-date" type="date"></div>
                        <div class="col-md-6 button"><button class="btn btn-primary d-block w-100" type="submit">Hire
                            Me</button></div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                    Close
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="portfolio-block skills">
      <div class="container">
        <div class="heading">
          <h2>Special Skills</h2>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card special-skill-item border-0">
              <div class="card-header bg-transparent border-0"><i class="icon ion-ios-star-outline"></i></div>
              <div class="card-body">
                <h3 class="card-title">Web Design</h3>
                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac
                  facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card special-skill-item border-0">
              <div class="card-header bg-transparent border-0"><i class="icon ion-ios-lightbulb-outline"></i></div>
              <div class="card-body">
                <h3 class="card-title">Interface Design</h3>
                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac
                  facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card special-skill-item border-0">
              <div class="card-header bg-transparent border-0"><i class="icon ion-ios-gear-outline"></i></div>
              <div class="card-body">
                <h3 class="card-title">Photography and Print</h3>
                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac
                  facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <section class="portfolio-block website gradient">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-12 col-lg-5 offset-lg-1 text">
          <h3>Website Project</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget velit ultricies, feugiat est sed, efr
            nunc, vivamus vel accumsan dui. Quisque ac dolor cursus, volutpat nisl vel, porttitor eros.</p>
        </div>
        <div class="col-md-12 col-lg-5">
          <div class="portfolio-laptop-mockup">
            <div class="screen">
              <div class="screen-content" style="background-image:url(&quot;assets/img/tech/image6.png&quot;);"></div>
            </div>
            <div class="keyboard"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('footer')
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/bs-init.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
  <script src="assets/js/theme.js"></script>
</body>

</html>