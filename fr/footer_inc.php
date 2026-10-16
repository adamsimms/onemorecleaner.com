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
                  <div class="facebook">
                  <a href="https://www.onemorecleaner.com/en/"><!-- <i></i> --> EN</a>
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

$('<img src="<?php echo $base_url; ?>media/images/vaccum.svg"/>');
$('<img src="<?php echo $base_url; ?>media/images/vaccum-hover.svg"/>');

      function sendEmail() {

          var data = {
              name: $("#name").val(),
              email: $("#email").val(),
              service: $("#service").val()
          };

          if (data.name == "" || data.email == "" || data.service == "") {
              return;
          }
          var valid = true;
          //valid = validateContact();
          if (valid) {
              jQuery.ajax({
                  url: "send_email.php",
                  data: data,
                  type: "POST",
                  success: function() {
                      $("#form_container").hide();
                      $("#form_success").show();
                  },
                  error: function() {}
              });
          }
      }
  </script>

  </html>
