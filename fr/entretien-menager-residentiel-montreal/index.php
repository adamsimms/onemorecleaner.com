<?php
$meta_page_title = "ONE MORE CLEANER - Le Meilleur Nettoyeur de Maison à Montréal.";
$meta_keywords = "nettoyage maison montreal, ménage résidentiel, service entretien ménager, service ménage a domicile, ménage de printemps, nettoyage maison montreal, compagnie de nettoyage residentiel montreal, ménage et repassage à domicile, grand ménage montréal";
$meta_description = "Services de nettoyage de maison professionnels et de qualité à Montréal.";
$nav_active = "domicile";

require_once("../header_inc.php")

?>

<!--hero bannner-->
<section class="hero-banner">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="hero-intro">
          <h1>LE MEILLEUR NETTOYEUR DE MAISON A MONTREAL.</h1>
          <!-- <p>With a focus on environmentally sustainable services, we pride ourselves in offering our clients a squeaky clean peace of mind as Montreal’s best cleaners. We arrive on time to get the job done, professionally taking care of your home, from top to bottom.</p> -->
          <p>Nous sommes fiers d'être respectueux de l’environnement.</p>
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
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Reply to email" onfocus="this.value = ''">
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
          <h2>Thanks!</h2>
          <div>Nous vous contacterons sous peu pour discuter des prochaines étapes.</div>
          <div>Bonne journée!</div>
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
        <h2>CHAMBRES, CUISINES ET PLUS</h2>
        <p>Offrant une vaste gamme de services de nettoyage résidentiel, One More Cleaner est une solution de nettoyage clé en main pour votre maison. Les surfaces poussiéreuses comme les appuis de fenêtre, les stores, les plinthes et les toiles d'araignée difficiles à atteindre, nous nous en occupons. Les planchers sales ne sont plus une fois que nous en avons fini avec eux ! Nous aspirons et nettoyons tous les planchers, même dans les endroits difficiles d'accès comme sous le lit.</p>
        <p>Offrant un nettoyage en profondeur pour toute votre maison, nous prenons soin de laver l'extérieur des placards, l'extérieur des appareils électroménagers (à l'exception du micro-ondes) et des vanités dans n'importe quelle pièce que vous souhaitez. Nous veillons à ce que votre dosseret, les comptoirs, les éviers, les robinets soient impeccables. Nous prenons également un soin particulier à vos salles de bain, laissant le lavabo, les toilettes, la baignoire, les carreaux muraux et les miroirs plus que propres !</p>
        <p>En plus de tout cela, nous nettoyons le linge et enlevons les ordures pendant que nous y sommes. Il y a une raison pour laquelle ils nous appellent le meilleur service de nettoyage de maison à Montréal – c'est comme un nouveau nettoyage de printemps à chaque fois que nous y sommes !</p>
      </div>
      <div class="col-md-4">
        <h5>Nous offrons également des services détaillés :</h5>
        <ul>
          <li>Nettoyer soigneusement les boiseries et les portes.</li>
          <li>Nettoyez les armoires, à l'intérieur comme à l'extérieur.</li>
          <li>Nettoyage localisé des murs.</li>
          <li>Lavage des murs et nettoyage des plafonds.</li>
          <li>Nettoyez le réfrigérateur et la cuisinière.</li>
          <li>Nettoyage en profondeur du coulis de salle de bain.</li>
          <li>Dépoussiérage des luminaires et des ventilateurs de plafond.</li>
          <li>Changement des draps.</li>
          <li>Essuyez les stores avec un chiffon humide.</li>
          <li>Laver les appuis de fenêtre intérieurs, les cadres et les plinthes.</li>
          <li>Passez l'aspirateur sur les canapés, les chaises, les rideaux et les coussins.</li>
          <li>Laver les portes et les cadres intérieurs.</li>
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
        <h2>COMMENT ÇA FONCTIONNE</h2>
      </div>
    </div>
    <div class="row">
      <ul class="how-it-works">
        <li class="first-step"><img src="<?php echo $base_url; ?>media/images/works-1.png" alt="Appelez-nous" class="img-fluid">
          <p>Appelez-nous pour savoir comment nous pouvons vous aider et planifier une visite à votre domicile.</p>
        </li>
        <li class="second-step">
          <img src="<?php echo $base_url; ?>media/images/works-2.png" alt="Visiter votre maison" class="img-fluid">
          <p>Nous visitons votre domicile, évaluons ce qui correspond le mieux à vos besoins et vous proposons une soumission.</p>
        </li>
        <li class="third-step">
          <img src="<?php echo $base_url; ?>media/images/works-3.png" alt="Nettoyage" class="img-fluid">
          <p>Nous effectuons votre premier nettoyage à votre satisfaction.</p>
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

<?php require_once("../footer_inc.php") ?>
