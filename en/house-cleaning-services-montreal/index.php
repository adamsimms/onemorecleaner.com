<?php
$meta_page_title = "ONE MORE CLEANER - Montreal's Best House Cleaner";
$meta_keywords = "house, cleaning, services, montreal, residential, deep, spring, company";
$meta_description = "Quality house and residential cleaning services in Montreal.";
$nav_active = "house";

require_once("../header_inc.php")

?>

<!--hero bannner-->
<section class="hero-banner">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="hero-intro">
          <h1>MONTREAL’S<br>
            <span class="hero-nowrap">BEST HOUSE CLEANER.</span></h1>
          <!-- <p>With a focus on environmentally sustainable services, we pride ourselves in offering our clients a squeaky clean peace of mind as Montreal’s best cleaners. We arrive on time to get the job done, professionally taking care of your home, from top to bottom.</p> -->
          <p>We pride ourselves on being environmentally sustainable.</p>
          <div class="hero-actions">
            <a class="btn btn-hero" href="#quote">Get a free quote</a>
          </div>
        </div>
      </div>
      <div class="hero-img">
        <img src="<?php echo $base_url; ?>media/images/illustration.png" alt="Professional cleaner ready for a Montreal cleaning visit" class="img-fluid">
      </div>
    </div>
  </div>
</section>

<!--Quote-->
<section class="quote-section" id="quote">
  <div class="container">
    <img src="<?php echo $base_url; ?>media/images/background-bubbles.png" alt="">
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
        <h2>ROOMS, KITCHENS & MORE</h2>
        <P>Providing a vast array of residential cleaning services, One More Cleaner is a turnkey cleaning solution for your home. Dusty surfaces like window sills, blinds, baseboards and those hard to reach cobwebs, we take care of those. Dirty floors are no more once we are done with them! We vacuum and mop all floors, even in those hard to reach places like under the bed (but we can’t do anything about monsters).</P>
        <P>Offering deep cleaning for your entire home, we take care to wash down the outsides of cupboards, appliances (except for the microwave–we will get in there and make sure it’s ready to go) and vanities in any room you wish. We ensure that your backsplash, countertops, sinks, faucets and taps are spic and span. We take special care of your bathrooms, too, leaving the sink, toilet, bathtub, wall tiles and mirrors looking shiny and new!</P>
        <P>On top of all that we remove garbage while we’re there. There’s a reason why they call us Montreal’s best house cleaning service–it’s like a fresh spring cleaning every time we’re there!</P>
      </div>
      <div class="col-md-4">
        <h5>We also offer detailed services:</h5>
        <ul>
          <li>Carefully cleaning wooden trims and doors.</li>
          <li>Clean cabinets–inside and out.</li>
          <li>Spot cleaning of walls.</li>
          <li>Wall washdowns and ceiling cleaning.</li>
          <li>Clean fridge and stove - inside and out.</li>
          <li>Deep cleaning of bathroom grout.</li>
          <li>Dusting of light fixtures and ceiling fans.</li>
          <li>Changing bed linens.</li>
          <li>Wipe blinds with a damp cloth.</li>
          <li>Wash interior window sills, frames and baseboards.</li>
          <li>Vacuum sofas, chairs, curtains and cushions.</li>
          <li>Wash interior doors and frames.</li>
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
          <p>Give us a call to learn how we can be of help and schedule a visit to your home.</p>
        </li>
        <li class="second-step">
          <img src="<?php echo $base_url; ?>media/images/works-2.png" alt="visit your home" class="img-fluid">
          <p>We visit your home and assess what best suits your needs, and offer a quote.</p>
        </li>
        <li class="third-step">
          <img src="<?php echo $base_url; ?>media/images/works-3.png" alt="cleaning" class="img-fluid">
          <p>We complete your first cleaning to your satisfaction.</p>
        </li>
      </ul>
    </div>

  </div>
</section>


<!--ask about-->
<section class="ask-about-deep-steam">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-lg-4">
          <img src="<?php echo $base_url; ?>media/images/bg-deep-stream.png" alt="Deep steam cleaning equipment and results" class="img-fluid">
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
      <div class="col-md-6 col-lg-4">
        <div class="customer-info">
          <h3>SINCE 2012</h3>
          <p>One More Cleaner was built on a commitment to consistent, high-quality cleaning across the Greater Montreal area.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="customer-info">
          <h3>GREATER MONTREAL</h3>
          <p>Homes and offices across the island trust us for detailed cleans and long-term relationships tailored to their needs.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="customer-info">
          <h3>100% SATISFACTION</h3>
          <p>Guaranteed. Period. We pride ourselves on being dependable, professional, and thorough.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once("../footer_inc.php") ?>
