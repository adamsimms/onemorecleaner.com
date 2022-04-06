<?php
$meta_page_title = "ONE MORE CLEANER - Le Meilleur Nettoyeur à Montréal";
$meta_keywords = "ménage montréal, service de ménage, service de nettoyage, service d'entretien ménager, compagnie de nettoyage montreal, compagnie de ménage montréal";
$meta_description = "Services de nettoyage professionnels et de qualité à Montréal.";
$nav_active = "";

require_once("header_inc.php")

?>

<!--hero bannner-->
<section class="hero-banner">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="hero-intro">
          <h1>LE MEILLEUR NETTOYEUR A MONTREAL</h1>
          <p>Nous sommes fiers d'être respectueux de l’environnement</p>
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
          <h2>Obtenez une soumission</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3 form-group">
          <label for="name">Nom</label>
          <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Valerie Plante" onfocus="this.value = ''">
        </div>
        <div class="col-md-6 col-lg-3 form-group">
          <label for="email">Courriel</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="valerie@montreal.ca" onfocus="this.value = ''">
        </div>
        <div class="col-md-6 col-lg-3 form-group arrow-down">
          <label for="service">Service</label>
          <select class="form-control" id="service">
            <option value="HOUSE CLEANING">Nettoyage à domicile</option>
            <option value="OFFICE CLEANING">Nettoyage au bureau</option>
            <option value="STEAM CLEANING">Nettoyage à la vapeur</option>
          </select>
          <i class="icon-down-arrow"></i>
        </div>
        <div class="col-md-6 col-lg-3 last">
          <button type="button" class="btn btn-primary" onclick="sendEmail()">Soumettre</button>
        </div>
      </div>
    </span>
    <span id="form_success" style="display: none;">
      <div class="row">
        <div class="col-12">
          <h2>Merci!</h2>
          <div>Nous vous contacterons sous peu pour discuter des prochaines étapes.</div>
          <div>Bonne journée!</div>
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
        <h2>Nous offrons</h2>
        <p>Nous sommes fiers d’offrir à nos clients une tranquillité d’esprit impeccable en tant que le meilleur nettoyeur à Montréal. Nous arrivons à l'heure pour faire notre travail, en prenant soin de votre maison de haut en bas avec professionnalisme. Nous proposons des solutions exceptionnelles de nettoyage à la vapeur en profondeur pour votre maison et aussi votre bureau, pour répondre à tous vos besoins de nettoyage..</p>
      </div>
      <div class="col-md-4 col-lg-4">
        <div class="offer-info">
          <img src="<?php echo $base_url; ?>media/images/illustration (1).png" alt="illustration" class="img-fluid">
          <a class="offer-details" href="http://www.onemorecleaner.com/demo/house-cleaning-services-montreal/">
            <p>Nettoyage à domicile</p>
            <i class="icon-right-arrow"></i>
          </a>
        </div>
      </div>
      <div class="col-md-4 col-lg-4">
        <div class="offer-info">
          <img src="<?php echo $base_url; ?>media/images/illustration (2).png" alt="illustration" class="img-fluid">
          <a class="offer-details" href="http://www.onemorecleaner.com/demo/office-cleaning-montreal/">
            <p>Nettoyage au bureau</p>
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
          <img src="<?php echo $base_url; ?>/media/images/bg-deep-stream.png" alt="Deep steam cleaning services" class="img-fluid">
      </div>
      <div class="col-md-8 col-lg-8">
          <h3>Renseignez-vous sur notre</h3>
          <h2>SERVICE DE NETTOYAGE À LA VAPEUR EN PROFONDEUR</h2>
          <p>Nettoyer, désinfecter, assainir et désodoriser toute surface. Le nettoyage par flux excelle dans toutes les tâches de nettoyage difficiles telles que le nettoyage des sols, du coulis et des carreaux. Pour une surface particulièrement sale, un jet de détergent écologique dans la vapeur déloge la graisse, la saleté et les tâches.</p>
          <p>La vapeur surchauffée tue jusqu'à 99,9 % des bactéries, germes et virus. Désinfectez rapidement les sols, les tapis, les comptoirs, les trancheuses, les équipements de cuisine, les salles de bain et plus encore.</p>
          <p>Notre service de nettoyage à la vapeur est la solution optimale pour un environnement sans germes avec de meilleurs résultats de nettoyage en moins de temps !</p>

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
          <h3>DEPUIS 2012</h3>
          <p>One More Cleaner a été créé sur l’engagement et le dévouement à fournir le service de nettoyage de la meilleure qualité, le plus constant et le plus efficace dans la région du Grand Montréal.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="customer-info">
          <h3>100+ CLIENTS</h3>
          <p>De jeunes professionnels, familles et bureaux, nous construisons des relations à long terme avec tous nos clients. Nous sommes fiers de nous spécialiser dans le nettoyage détaillé adapté à vos besoins.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="customer-info">
          <h3>100% SATISFACTION</h3>
          <p>Garanti. Nous sommes fiers d'être fiables, professionnels et minutieux.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once("footer_inc.php") ?>
