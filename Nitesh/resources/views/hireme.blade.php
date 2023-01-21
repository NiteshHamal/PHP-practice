<!DOCTYPE html>
<html>

<head>
  @include('header')
  <title>Hire me - TRN</title>
</head>

<body>
  @include('navbar')
  <main class="page hire-me-page">
    <section class="portfolio-block hire-me">
      <div class="container">
        <div class="heading">
          <h2>Hire Me</h2>
        </div>
        <form>
          <div class="mb-3"><label class="form-label" for="subject">Subject</label><select class="form-select"
              id="subject">
              <optgroup label="This is a group">
                <option value="12" selected="">This is item 1</option>
                <option value="13">This is item 2</option>
                <option value="14">This is item 3</option>
              </optgroup>
            </select></div>
          <div class="mb-3"><label class="form-label" for="email">Email</label><input class="form-control" type="email"
              id="email"></div>
          <div class="mb-3"><label class="form-label" for="message">Message</label><textarea class="form-control"
              id="message"></textarea></div>
          <div class="mb-3">
            <div class="row">
              <div class="col-md-6"><label class="form-label" for="hire-date">Date</label><input class="form-control"
                  id="hire-date" type="date"></div>
              <div class="col-md-6 button"><button class="btn btn-primary d-block w-100" type="submit">Hire Me</button>
              </div>
            </div>
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