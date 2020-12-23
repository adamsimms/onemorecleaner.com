<?php
$meta_page_title = "ONE MORE CLEANER - Montreal's Best Office Cleaner";
$meta_keywords = "commercial, office, cleaning, montreal, company, janitorial, services";
$meta_description = "Quality office cleaning services in Montreal.";
$nav_active = "office";

require_once("../header_inc.php")

?>
<!--hero bannner-->
<section class="hero-banner">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="hero-intro">
          <h1>MONTREAL’S
            BEST OFFICE CLEANER.</h1>
          <!-- <p>With a focus on environmentally sustainable services, we pride ourselves in offering our clients a squeaky clean peace of mind as Montreal’s best cleaners. We arrive on time to get the job done, professionally taking care of your home, from top to bottom.</p> -->
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
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="valerie@montreal.ca" onfocus="this.value = ''">
        </div>
        <div class="col-md-6 col-lg-3 form-group arrow-down">
          <label for="service">Service</label>
          <select class="form-control" id="service">
            <option value="OFFICE CLEANING">OFFICE CLEANING</option>
            <option value="HOUSE CLEANING">HOUSE CLEANING</option>
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
          <div>We'll contact you shortly. Have a great day!</div>
        </div>
      </div>
    </span>
  </div>
</section>

<!--we do-->
<section class="we-do">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h2>FROM BOARDROOMS TO BREAKROOMS</h2>
        <P>Offices come in all shapes and sizes but as Montreal’s best office cleaner, we offer your company an all-in-one cleaning solution that is tailored to fit your needs. From dusting and sanitizing work surfaces in meeting rooms and individual workspaces to rug and carpet cleaning, we take extra care so your employees come to work in a safe and clean environment.</P>
        <P>Offering deep cleaning services for your entire office, especially the break room and kitchen. We take care to wash down the outsides of cupboards and appliances (exceptt for the microwave - we will get in there and make sure it’s cleaned and ready fuel your employees) while ensuring that countertops, sinks, faucets and taps are spic and span. We take special care of your employees' bathrooms as well, leaving the sinks, toilets, urinals, wall tiles and mirrors looking shiny and new!</P>
        <P>On top of all that, we empty the recycling and waste bins and remove garbage while we’re there. There’s a reason why they call us Montreal’s best office cleaning service - We do our best work in your office so you can do yours!</P>
      </div>
      <div class="col-md-4">
        <h5>We also offer extensive detailed services:</h5>
        <ul>
          <li>Loading, cleaning and emptying the office dishwasher</li>
          <li>Clean cabinets–inside and out</li>
          <li>Spot cleaning of walls</li>
          <li>Wall washdowns and ceiling cleaning</li>
          <li>Clean fridge and stove - inside and out</li>
          <li>Dusting of light fixtures and ceiling fans</li>
          <li>Wipe blinds with a damp cloth</li>
          <li>Wash interior window sills, frames and baseboards</li>
          <li>Interior window cleaning</li>
          <li>Vacuum sofas, chairs, curtains and cushions</li>
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
        <li class="first-step"><img src="<?php echo $base_url; ?>media/images/works-1.png" alt="Give us a call" class="img-fluid">
          <p>Give us a call to learn how we can help and schedule a visit to your workspace.</p>
        </li>
        <li class="second-step">
          <img src="<?php echo $base_url; ?>media/images/works-2.png" alt="visit your home" class="img-fluid">
          <p>We visit your office and assess what best suits your needs, and offer a quote.</p>
        </li>
        <li class="third-step">
          <img src="<?php echo $base_url; ?>media/images/works-3.png" alt="cleaning" class="img-fluid">
          <p>We complete your first cleaning to your satisfaction.</p>
        </li>
      </ul>
    </div>

  </div>
</section>

<!--we offer-->
<section class="offers">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-lg-4">
        <h2>ADDITONAL SERVICES</h2>
        <p>We pride ourselves in offering our clients a clean peace of mind as Montreal’s best cleaner. We arrive on time to get the job done, professionally taking care of your office cleaning needs. We also offer exceptional services such as steam cleaning as well as house cleaning solutions. </p>
      </div>
      <div class="col-md-4 col-lg-4">
        <div class="offer-info">
          <img src="<?php echo $base_url; ?>media/images/illustration (1).png" alt="illustration" class="img-fluid">
          <a class="offer-details" href="http://www.onemorecleaner.com/demo/house-cleaning-services-montreal/">
            <p>HOUSE CLEANING</p>
            <i class="icon-right-arrow"></i>
          </a>
        </div>
      </div>
      <div class="col-md-4 col-lg-4">
        <div class="offer-info">
          <img src="<?php echo $base_url; ?>media/images/illustration (3).png" alt="illustration" class="img-fluid">
          <a class="offer-details" href="http://www.onemorecleaner.com/demo/deep-steam-cleaning-services-montreal/">
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
          <p>Guaranteed. Period. We pride ourselves on being dependable, professional and thorough., but, above all, we pride ourselves on being environmentally sustainable.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once("../footer_inc.php") ?>