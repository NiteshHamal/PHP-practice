<!DOCTYPE html>
<html>

<head>
  @include('header')
  <title>Contact - TRN</title>
</head>

<body>
  @include('navbar')
  <main class="page contact-page">
    <section class="portfolio-block contact">
      <div class="container">
        <div class="heading">
          <h2>Contact me</h2>
        </div>
        <form>
          <div class="mb-3"><label class="form-label" for="name">Your Name</label><input class="form-control item"
              type="text" id="name"></div>
          <div class="mb-3"><label class="form-label" for="subject">Subject</label><input class="form-control item"
              type="text" id="subject"></div>
          <div class="mb-3"><label class="form-label" for="email">Email</label><input class="form-control item"
              type="email" id="email"></div>
          <div class="mb-3"><label class="form-label" for="message">Message</label><textarea class="form-control item"
              id="message"></textarea></div>
          <div class="mb-3"><button class="btn btn-primary btn-lg d-block w-100" type="submit">Submit Form</button>
          </div>
        </form>
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