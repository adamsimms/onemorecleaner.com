    <!--footer-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="user-email">
                        <a href="#">info@onemorecleaner.com</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="reserved">
                        <p>© 2020 One More Cleaner. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="facebook">
                        <a href="#"><img src="media/images/facebook.png" alt="facebook"> LIKE US ON FACEBOOK</a>
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
                    success: function(data) {
                        console.log(data);
                        $("#form_container").hide();
                        $("#form_success").show();
                        //alert('You message has been sent successfully.')
                        //$("#mail-status").html(data);
                    },
                    error: function() {}
                });
            }
        }
    </script>

    </html>