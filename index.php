<?php require_once("header_inc.php") ?>

 <!--hero bannner-->
 <section class="hero-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="hero-intro">
              <h1>MONTREAL’S
                BEST CLEANER.
                PERIOD.</h1>
                <p>We pride ourselves on being environmentally sustainable.</p>
              </div>
            </div>
            <div class="hero-img">
              <img src="media/images/illustration.png" alt="illustration" class="img-fluid">
            </div>
          </div>
        </div>
      </section>
      
      <!--Quote-->
      <section class="quote-section">
        <div class="container">
          <img src="media/images/background-bubbles.png" alt="background-bubbles">
          <span id="form_container">
            <div class="row">
              <div class="col-12">
                <h2>GET A FREE QUOTE</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-3 form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Valerie Plante">
              </div>
              <div class="col-md-6 col-lg-3 form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="valerie@montreal.ca">
              </div>
              <div class="col-md-6 col-lg-3 form-group arrow-down">
                <label for="service">Service</label>
                <select class="form-control" id="service">
                  <option value="HOUSE CLEANING">HOUSE CLEANING</option>
                  <option value="OFFICE CLEANING">OFFICE CLEANING</option>
                  <option value="STEAM CLEANING">STEAM CLEANING</option>
                </select>
                <i class="icon-down-arrow"></i>
              </div>
              <div class="col-md-6 col-lg-3 last">
                <button type="button" class="btn btn-primary" onclick="sendEmail()">Submit</button>
              </div>
            </div>
          </span>
          <span id="form_success" style="display: none;">
            <div class="row">
              <div class="col-12">
                <h2>Thanks!</h2>
                <div>We'll contact you shortly to discuss next steps.</div>
                <div>Have a great day!</div>
              </div>
            </div>
          </span>
        </div>
      </section>
      
      <!--we do-->
      <section class="we-do">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2>WHAT WE DO</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <P>Providing a vast array of residential cleaning services, One More Cleaner is a turnkey cleaning solution for your home. Dusty surfaces like window sills, blinds, baseboards and those hard to reach cobwebs, we take care of those. Dirty floors are no more once we are done with them! We vacuum and mop all floors, even in those hard to reach places like under the bed (but we can’t don’t anything about monsters).
              </P>
              <P>Offering deep cleaning for your entire home, we take care to wash down the outsides of cupboards, appliances (expect for the microwave - we will get in there and make sure it’s cleaned and ready to go) and vanities in any room you wish while also ensuring that your backsplash, countertops, sinks, faucets and taps are spic and span. We take special care of your bathrooms too, leaving the sink, toilet, bathtub, wall tiles and mirrors looking shiny and new!
              </P>
              <P>On top of all that, we clean laundry and remove garbage while we’re there. There’s a reason why they call us Montreal’s best house cleaning service - it’s like a fresh spring cleaning every time we’re there!
              </P>
            </div>
            <div class="col-md-4">
              <h5>We also offer detailed services:</h5>
              <ul>
                <li>Dusting and carefully cleaning wooden trims and doors
                </li>
                <li>Clean kitchen and bathroom cabinets - inside and out
                </li>
                <li>Spot cleaning of walls
                </li>
                <li>Wall washdowns and ceiling cleaning
                </li>
                <li>Clean fridge and stove - inside and out
                </li>
                <li>Laundry and ironing
                </li>
                <li>Silver polishing
                </li>
                <li>Deep cleaning of bathroom grout
                </li>
                <li>Dusting of light fixtures and ceiling fans
                </li>
                <li>Changing bed linens
                </li>
                <li>Wipe blinds with a damp cloth
                </li>
                <li>Wash interior window sills, frames and baseboards
                </li>
                <li>Interior window cleaning
                </li>
                <li>Vacuum sofas, chairs, curtains and cushions
                </li>
                <li>Wash interior doors and frames</li>
              </ul>
              
            </div>
          </div>
        </div>
      </section>
      
      <!--how it works-->
      <section class="works">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2>HOW IT WORKS</h2>
            </div>
          </div>
          <div class="row">
            <ul class="how-it-works">
              <li class="first-step"><img src="media/images/works-1.png" alt="Give us a call" class="img-fluid">
                <p>Give us a call to learn how we can be of help and schedule a visit to your home.
                </li>
                <li class="second-step">
                  <img src="media/images/works-2.png" alt="visit your home" class="img-fluid">
                <p>We visit your home and assess what best suits your needs and offer a quote.
                </li>
                <li class="third-step">
                  <img src="media/images/works-3.png" alt="cleaning" class="img-fluid">
                <p>We complete your first cleaning to your satisfaction.
                </li>
            </ul>
          </div>
          
        </div>
      </section>
      
      <!--we offer-->
      <section class="offers">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2>We Offer</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-lg-4">
              <div class="offer-info">
                <img src="media/images/illustration (1).png" alt="illustration" class="img-fluid">
                <a class="offer-details">
                  <p>HOUSE CLEANING</p>
                  <i class="icon-right-arrow"></i>
                </a>
              </div>
            </div>
            <div class="col-md-4 col-lg-4">
              <div class="offer-info">
                <img src="media/images/illustration (2).png" alt="illustration" class="img-fluid">
                <a class="offer-details">
                  <p>OFFICE CLEANING</p>
                  <i class="icon-right-arrow"></i>
                </a>
              </div>
            </div>
            <div class="col-md-4 col-lg-4">
              <div class="offer-info">
                <img src="media/images/illustration (3).png" alt="illustration" class="img-fluid">
                <a class="offer-details">
                  <p>STEAM CLEANING</p>
                  <i class="icon-right-arrow"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!--customer-->
      <section class="customer-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="customer-info">
                <h3>SINCE 2012</h3>
                <p>One More Cleaner has been offering exceptional cleaning services in the greater Montreal area.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="customer-info">
                <h3>100+ CUSTOMERS</h3>
                <p>From young professionals, families, and offices we build long term relationships with all of our clients.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="customer-info">
                <h3>100% SATISFACTION</h3>
                <p>Guranteed. Peroid.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

<?php require_once("footer_inc.php") ?>