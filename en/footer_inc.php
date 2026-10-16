  <!--footer-->
  <footer class="footer">
      <div class="container">
          <div class="row">
              <div class="col-md-4">
                  <div class="user-email">
                      <a href="mailto:jimmy@onemorecleaner.com">jimmy@onemorecleaner.com</a>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="reserved">
                      <p>©<?php echo date("Y"); ?> One More Cleaner.</p>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="footer-lang">
                   <a href="https://www.onemorecleaner.com/fr/">FR</a>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  </div>

  <!-- jQuery and JS bundle w/ Popper.js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>

  <script>
      function showQuoteError(message) {
          var $err = $("#form_error");
          if (!$err.length) {
              $err = $('<div id="form_error" class="quote-error" role="alert"></div>');
              $("#form_container").after($err);
          }
          $err.text(message || "Sorry, we could not send your request. Please try again or email us.").show();
      }

      function sendEmail() {
          var name = $.trim($("#name").val() || "");
          var email = $.trim($("#email").val() || "");
          var service = $.trim($("#service").val() || "");
          var emailOk = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);

          $("#form_error").hide();

          if (!name || !email || !service || !emailOk) {
              showQuoteError("Please enter your name, a valid email, and a service.");
              return;
          }

          jQuery.ajax({
              url: "send_email.php",
              data: { name: name, email: email, service: service },
              type: "POST",
              success: function(data) {
                  if (String(data).trim() === "OK") {
                      $("#form_container").hide();
                      $("#form_error").hide();
                      $("#form_success").show();
                      return;
                  }
                  showQuoteError();
              },
              error: function() {
                  showQuoteError();
              }
          });
      }
  </script>

  </html>
