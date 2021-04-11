<?php
$meta_page_title = "ONE MORE CLEANER - Montreal's Best Cleaner";
$meta_keywords = "cleaning services montreal, cleaning services montreal, cleaning services montreal, cleaning services montreal prices, deep cleaning services montreal, best cleaning services montreal, professional cleaners montreal, cleaning services downtown montreal";
$meta_description = "Professional and quality cleaning services in Montreal.";
$nav_active = "";

require_once("header_inc.php")

?>

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
        <img src="<?php echo $base_url; ?>media/images/illustration.png" alt="illustration" class="img-fluid">
      </div>
    </div>
  </div>
</section>

<!--Quote-->
<section class="quote-section">
  <div class="container">
    <img src="<?php echo $base_url; ?>media/images/background-bubbles.png" alt="background-bubbles">
    <span id="form_container">
      <div class="row">
        <div class="col-12">
          <h2>GET A FREE QUOTE</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3 form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Valerie Plante" onfocus="this.value = ''">
        </div>
        <div class="col-md-6 col-lg-3 form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Reply to email" onfocus="this.value = ''">
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
          <img src="<?php echo $base_url; ?>media/images/illustration (1).png" alt="illustration" class="img-fluid">
          <a class="offer-details" href="house-cleaning-services-montreal">
            <p>HOUSE CLEANING</p>
            <i class="icon-right-arrow"></i>
          </a>
        </div>
      </div>
      <div class="col-md-4 col-lg-4">
        <div class="offer-info">
          <img src="<?php echo $base_url; ?>media/images/illustration (2).png" alt="illustration" class="img-fluid">
          <a class="offer-details" href="office-cleaning-montreal">
            <p>OFFICE CLEANING</p>
            <i class="icon-right-arrow"></i>
          </a>
        </div>
      </div>
      <div class="col-md-4 col-lg-4">
        <div class="offer-info">
          <img src="<?php echo $base_url; ?>media/images/illustration (3).png" alt="illustration" class="img-fluid">
          <a class="offer-details" href="deep-steam-cleaning-services-montreal">
            <p>STEAM CLEANING</p>
            <i class="icon-right-arrow"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Ask about-->
<section class="ask-about-deep-steam">
  <div class="row">
    <div class="container">
      <div class="pos-relative">
        <div class="deep-steam-content-container">
          <img src="media/images/bg-deep-stream.png" alt="Deep steam cleaning services" />
          <div class="deep-steam-content">
            <h3>Ask about our</h3>
            <h2>Deep Stream Cleaning Service</h2>
            <p>Clean, disinfect, sanitize, and deodorise any surface. Stream cleaning excels at any heavy-duty cleaning tasks such as floor, grout and tile cleaning. For a particularly grimy surface, a burst of ecologic detergent into the steam dislodges grease, dirt and stains.</p>
            <p>Superheated steam kills up 99.9% of bacteria, germs and viruses. Quickly disinfect floors, carpets, countertops, slicers, kitchen equipment, bathrooms and more.</p>
            <p>Our steam cleaning service is the optimal solution for a germ-free environment with better cleaning results in less time!</p>
          </div>
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
          <p>One More Cleaner was created on the commitment and dedication to providing the best quality, most consistent and efficient cleaning service in the Greater Montreal area.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="customer-info">
          <h3>100+ CUSTOMERS</h3>
          <p>From young professionals, families, and offices, we build long term relationships with all of our clients. We are proud to specialize in detailed cleaning tailored to your needs.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="customer-info">
          <h3>100% SATISFACTION</h3>
          <p>Guaranteed. Period. We pride ourselves on being dependable, professional and thorough.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once("footer_inc.php") ?>