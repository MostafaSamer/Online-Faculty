<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>feedback</title>

    <link rel="stylesheet" href="{{ asset('feedback-style.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('normalize.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  </head>
  <body>
    <!-- Feedback -->

        <section class="feedback text-center">
        <div class="overlay">
            <div class="container">
                <h1 class="upper">send<span class="main-color">feedback</span></h1>
                <p class="main">We appreciate the time that you spend sending us feedback.<br /> Your feedback goes directly to YouTube and we use it to troubleshoot bugs </p>
                <form>
                    <input type="email" name="mail" placeholder="youe email">
                      <input type="text" name="supject" placeholder="supject">
                      <textarea placeholder="message"></textarea>
                      <div class="end">
                          <input type="submit" name="submit-feedback" value="send feadback">
                          <span class="form-icons">
                              <i class="fab fa-facebook-f fa-1x"></i>
                              <i class="fab fa-twitter fa-1x"></i>
                              <i class="fab fa-google-plus-g fa-1x"></i>
                              <i class="fab fa-behance fa-1x"></i>
                          </span>
                      </div>
                  </form>
              </div>
          </div>
        </section>

    <!-- end feedback -->
  </body>
</html>
