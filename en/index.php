<?php
$meta_page_title = "ONE MORE CLEANER - Montreal's Best Cleaner";
$meta_keywords = "cleaning services montreal, house cleaning montreal, office cleaning montreal, steam cleaning montreal, professional cleaners montreal";
$meta_description = "House, office, and deep steam cleaning across Greater Montreal. On time, thorough, and environmentally conscious since 2012.";
$nav_active = "";

require_once("header_inc.php")

?>

<!--hero bannner-->
<section class="hero-banner">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="hero-intro">
          <h1>MONTREAL’S<br>
            <span class="hero-nowrap">BEST CLEANER.</span><br>
            PERIOD.</h1>
          <p>We pride ourselves on being environmentally sustainable.</p>
          <div class="hero-actions">
            <a class="btn btn-hero" href="#quote">Get a free quote</a>
          </div>
        </div>
      </div>
      <div class="hero-img">
        <img src="<?php echo $media_url; ?>images/hero-cleaner.png" alt="Professional cleaner ready for a Montreal house cleaning visit" class="img-fluid">
      </div>
    </div>
  </div>
</section>

<!--Quote-->
<section class="quote-section" id="quote">
  <div class="container">
    <img src="<?php echo $media_url; ?>images/background-bubbles.png" alt="" aria-hidden="true">
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
            <option value="HOUSE CLEANING">House cleaning</option>
            <option value="OFFICE CLEANING">Office cleaning</option>
            <option value="STEAM CLEANING">Steam cleaning</option>
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
      <div class="col-md-4 col-lg-4">
        <h2>WE OFFER</h2>
        <p>We pride ourselves in offering our clients a squeaky clean peace of mind as Montreal’s best cleaner. We arrive on time to get the job done, professionally taking care of your home, from top to bottom. We offer exceptional house, office, and deep steam cleaning solutions to meet all your cleaning needs.</p>
      </div>
      <div class="col-md-4 col-lg-4">
        <div class="offer-info">
          <img src="<?php echo $media_url; ?>images/house-cleaning.png" alt="House cleaning service in Montreal" class="img-fluid">
          <a class="offer-details" href="<?php echo $base_url; ?>house-cleaning-services-montreal/">
            <span>House cleaning</span>
            <i class="icon-right-arrow"></i>
          </a>
        </div>
      </div>
      <div class="col-md-4 col-lg-4">
        <div class="offer-info">
          <img src="<?php echo $media_url; ?>images/office-cleaning.png" alt="Office cleaning service in Montreal" class="img-fluid">
          <a class="offer-details" href="<?php echo $base_url; ?>office-cleaning-montreal/">
            <span>Office cleaning</span>
            <i class="icon-right-arrow"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!--ask about-->
<section class="ask-about-deep-steam">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-lg-4">
          <img src="<?php echo $media_url; ?>images/bg-deep-steam.png" alt="Deep steam cleaning equipment and results" class="img-fluid">
      </div>
      <div class="col-md-8 col-lg-8">
          <h3>Ask about our</h3>
          <h2>Deep Steam Cleaning Service</h2>
          <p>Clean, disinfect, sanitize, and deodorise any surface. Steam cleaning excels at heavy-duty jobs such as floor, grout, and tile cleaning. For a particularly grimy surface, a burst of ecologic detergent into the steam dislodges grease, dirt, and stains.</p>
          <p>Superheated steam kills up to 99.9% of bacteria, germs, and viruses. Quickly disinfect floors, carpets, countertops, kitchen equipment, bathrooms, and more.</p>
          <p>Our steam cleaning service is the optimal solution for a germ-free environment with better cleaning results in less time.</p>
          <div class="steam-actions">
            <a class="btn btn-primary" href="#quote" onclick="var s=document.getElementById('service'); if(s){s.value='STEAM CLEANING';}">Ask about steam cleaning</a>
          </div>
      </div>
    </div>
  </div>
</section>

<!--customer-->
<section class="customer-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-4">
        <div class="customer-info">
          <h3>SINCE 2012</h3>
          <p>One More Cleaner was built on a commitment to consistent, high-quality cleaning across the Greater Montreal area.</p>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="customer-info">
          <h3>GREATER MONTREAL</h3>
          <p>Homes and offices across the island trust us for detailed cleans and long-term relationships tailored to their needs.</p>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="customer-info">
          <h3>100% SATISFACTION</h3>
          <p>Guaranteed. Period. We pride ourselves on being dependable, professional, and thorough.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once("footer_inc.php") ?>
