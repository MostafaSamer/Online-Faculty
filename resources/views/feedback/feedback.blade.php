
    <!-- Feedback -->
        <section class="feedback text-center">
        <div class="overlay">
            <div class="container">
                <h1 class="upper">send<span class="main-color">feedback</span></h1>
                <p class="main">We appreciate the time that you spend sending us feedback.<br /> Your feedback goes directly to YouTube and we use it to troubleshoot bugs </p>
                <form class="" action="/feedback/add" method="post">
                  @csrf
                        <input id="email" type="email" class="text-white form-control @error('email') is-invalid @enderror" name="email" placeholder="your email"  value="" required autocomplete="email" autofocus>
                        
                        <input type="text" id="subject" name="subject" placeholder="subject" class="text-white form-control @error('subject') is-invalid @enderror" required autofocus>
                        
                        <br><br>
                      <textarea placeholder="message" id="message" name="message" class="text-white form-control @error('message') is-invalid @enderror" required autofocus></textarea>
                      
                      <div class="end">
                          <input type="submit" name="submit-feedback" value="send feadback">
                      </div>
                  </form>
              </div>
          </div>
        </section>
