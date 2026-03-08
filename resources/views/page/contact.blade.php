  <section id="contact" class="contact-section">
      <div class="container">

          <div class="section-title">
              <h2>Let's Make It <span class="title-gradient">Sweet</span></h2>
              <div class="title-underline"></div>
              <p class="section-subtitle">Book our ice cream truck for your next event</p>
          </div>

          <div class="row justify-content-center">
              <div class="col-lg-7 col-md-9">

                  <div class="contact-card">

                      <form id="contactForm" method="POST" action="{{ route('contact.store') }}">
                          @csrf

                          <!-- Full Name -->
                          <div class="form-field">
                              <label for="fc_name">
                                  <span class="label-icon"><i class="fas fa-user"></i></span>
                                  Full Name
                              </label>
                              <input type="text" id="fc_name" name="name" placeholder="e.g. Sarah Johnson"
                                   >
                              <div class="error-text" id="error_name"></div>
                          </div>

                          <!-- Email -->
                          <div class="form-field">
                              <label for="fc_email">
                                  <span class="label-icon"><i class="fas fa-envelope"></i></span>
                                  Email Address
                              </label>
                              <input type="email" id="fc_email" name="email" placeholder="you@example.com"
                                   >
                              <div class="error-text" id="error_email"></div>
                          </div>

                          <!-- Phone -->
                          <div class="form-field">
                              <label for="fc_phone">
                                  <span class="label-icon"><i class="fas fa-phone"></i></span>
                                  Phone Number
                              </label>
                              <input type="tel" id="fc_phone" name="phone" placeholder="+1 (555) 000-0000"
                                   >
                              <div class="error-text" id="error_phone"></div>
                          </div>

                          <!-- Message -->
                          <div class="form-field">
                              <label for="fc_message">
                                  <span class="label-icon"><i class="fas fa-comment-dots"></i></span>
                                  Your Message
                              </label>
                              <textarea id="fc_message" name="message" placeholder="Tell us your event date, location, and any special requests…"
                                   ></textarea>

                              <span class="char-hint" id="charHint">0 / 500</span>
                              <div class="error-text" id="error_message"></div>
                          </div>
                          <input type="text" name="company" style="display:none">
                          <button type="submit" class="btn-submit-new" id="submitBtn">
                              <span id="btnText">Send Message</span>
                              <span class="spinner" id="btnSpinner"></span>
                          </button>

                      </form>

                      <!-- Success state -->
                      <div class="success-msg" id="successMsg">
                          <div class="success-icon"><i class="fas fa-check"></i></div>
                          <h3>Message Sent!</h3>
                          <p>We'll be in touch within 24 hours. 🍦</p>

                          <button type="button" class="btn-submit-new" id="resetFormBtn">
                              Send Another Message
                          </button>
                      </div>

                  </div>

              </div>
          </div>

      </div>
  </section>
