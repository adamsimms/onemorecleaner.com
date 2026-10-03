<?php
$meta_page_title = "ONE MORE CLEANER - Le Meilleur Nettoyeur de Bureau à Montréal.";
$meta_keywords = "entretien ménager bureau, agent nettoyage bureau, agence nettoyage bureau, entreprise de nettoyage de bureaux, societe de nettoyage de bureau, procédure nettoyage locaux, nettoyage et désinfection des locaux, nettoyage bureau entreprise";
$meta_description = "Services de nettoyage bureau professionnels et de qualité à Montréal.";
$nav_active = "bureau";

require_once("../header_inc.php")

?>
<!--hero bannner-->
<section class="hero-banner">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="hero-intro">
          <h1>LE <span class="hero-nowrap">MEILLEUR NETTOYEUR</span><br>
            DE BUREAUX A MONTREAL</h1>
          <p>Nous sommes fiers d'être respectueux de l’environnement</p>
          <div class="hero-actions">
            <a class="btn btn-hero" href="#quote">Obtenir une soumission</a>
          </div>
        </div>
      </div>
      <div class="hero-img">
        <img src="<?php echo $base_url; ?>media/images/illustration.png" alt="Professionnel du nettoyage prêt pour une visite à Montréal" class="img-fluid">
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
          <h2>Obtenez une soumission</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3 form-group">
          <label for="name">Nom</label>
          <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Valerie Plante">
        </div>
        <div class="col-md-6 col-lg-3 form-group">
          <label for="email">Courriel</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="valerie@montreal.ca">
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

<!--we do-->
<section class="we-do">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h2>DES SALLES DE CONFÉRENCES AUX SALLES DE REPOS</h2>
        <p>Les bureaux sont de toutes formes et tailles, mais en tant que meilleur nettoyeur de bureaux à Montréal, nous offrons à votre entreprise une solution de nettoyage adaptée à vos besoins. Du dépoussiérage et de la désinfection des surfaces de travail dans les salles de réunion et les espaces de travail individuels au nettoyage de tapis et de moquettes, nous prenons des précautions supplémentaires pour que vos employés viennent travailler dans un environnement propre.</p>
        <p>Offrant des services de nettoyage en profondeur pour l'ensemble de votre bureau, en particulier la salle de repos et la cuisine. Nous prenons soin de laver l'extérieur des armoires et l'extérieur des appareils électroménagers (à l'exception du micro-ondes) tout en veillant à ce que les comptoirs, les éviers, les robinets soient impeccables. Nous prenons également soin des salles de bains de vos employés, laissant les lavabos, les toilettes, les urinoirs, les carreaux muraux et les miroirs plus que propres !</p>
        <p>En plus de tout cela, nous vidons les bacs de recyclage et de déchets et enlevons les déchets pendant que nous y sommes. Il y a une raison pour laquelle ils nous appellent le meilleur service de nettoyage de bureau à Montréal - Nous faisons de notre mieux dans votre bureau pour que vous puissiez faire le vôtre !</p>
      </div>
      <div class="col-md-4">
        <h5>Nous offrons également des services détaillés :</h5>
        <ul>
          <li>Chargement et nettoyage du lave-vaisselle de bureau. Nous vidons le lave-vaisselle après que le cycle soit terminé.</li>
          <li>Nettoyez les armoires, à l'intérieur comme à l'extérieur.</li>
          <li>Nettoyage localisé des murs.</li>
          <li>Lavage des murs et nettoyage des plafonds.</li>
          <li>Nettoyez le réfrigérateur et la cuisinière</li>
          <li>Dépoussiérage des luminaires et des ventilateurs de plafond.</li>
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
          <img src="<?php echo $base_url; ?>media/images/bg-deep-stream.png" alt="Équipement et résultats de nettoyage à la vapeur en profondeur" class="img-fluid">
      </div>
      <div class="col-md-8 col-lg-8">
          <h3>Renseignez-vous sur notre</h3>
          <h2>SERVICE DE NETTOYAGE À LA VAPEUR EN PROFONDEUR</h2>
          <p>Nettoyer, désinfecter, assainir et désodoriser toute surface. Le nettoyage à la vapeur excelle dans les tâches difficiles comme le nettoyage des sols, du coulis et des carreaux. Pour une surface particulièrement sale, un jet de détergent écologique dans la vapeur déloge la graisse, la saleté et les taches.</p>
          <p>La vapeur surchauffée tue jusqu'à 99,9 % des bactéries, germes et virus. Désinfectez rapidement les sols, les tapis, les comptoirs, les équipements de cuisine, les salles de bain et plus encore.</p>
          <p>Notre service de nettoyage à la vapeur est la solution optimale pour un environnement sans germes avec de meilleurs résultats en moins de temps.</p>
          <div class="steam-actions">
            <a class="btn btn-primary" href="#quote" onclick="var s=document.getElementById('service'); if(s){s.value='STEAM CLEANING';}">Demander le nettoyage à la vapeur</a>
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
          <h3>DEPUIS 2012</h3>
          <p>One More Cleaner a été créé pour offrir un service de nettoyage constant et de haute qualité dans la région du Grand Montréal.</p>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="customer-info">
          <h3>GRAND MONTRÉAL</h3>
          <p>Des maisons et des bureaux partout sur l'île nous font confiance pour un ménage minutieux et des relations durables adaptées à leurs besoins.</p>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="customer-info">
          <h3>100% SATISFACTION</h3>
          <p>Garanti. Nous sommes fiers d'être fiables, professionnels et minutieux.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once("../footer_inc.php") ?>
