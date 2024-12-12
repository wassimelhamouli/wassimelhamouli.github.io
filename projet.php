<?php
require_once('mail.php');
require_once('common.php');

if (isset($_POST["email"])) {
    send_mail(
        $subject = "Portfolio Message",
        $body = replace_vars(file_get_contents('mail/request.html'), [
            "name" => $_POST["name"],
            "text" => $_POST["txt"],
            "tel" => $_POST["tel"],
            "email" => $_POST["email"]
        ])
    );
} else {
    $_SESSION["ERROR"] = "un problème est survenus veuillez réessayer ultérieurement";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Portfolio BTS SIO SLAM | El hamouli Wassim</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets//img/we.jpg               " />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="css/photo-move.css" />

</head>

<body id="page-top">
    <!-- Navigation-->
    <?php
    require_once("header.php");
    ?>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-heading text-uppercase">PROJETS</div>



        </div>
    </header>

    <!-- PROJETS-->
    <section class="page-section" id="veille">
        <div class="container">

            <div class="container">
                <section class="page-section" id="portfolio">
                    <div class="container">
                        <div class="text-left">
                            <h2 class="section-heading text-uppercase">Projet 2eme année</h2>
                        </div>
                        <div class="projet1">
                            <div class=" text-center">
                                <!-- Portfolio item 1-->
                                <div class="portfolio-item">
                                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                        </div>
                                        <img class="img-fluid" src="assets/img/jeuDeRole.png" alt="..." />
                                    </a>
                                    <div class="portfolio-caption">
                                        <div class="portfolio-caption-heading">Gestion Seminaire</div>
                                        <div class="portfolio-caption-subheading text-muted">utilisation d'une base de données</div>
                                    </div>
                                </div>
                            </div>
                            <div class=" text-center">
                                <!-- Portfolio item 1-->
                                <div class="portfolio-item">
                                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                        </div>
                                        <img class="img3" src="assets/img/jeuDeRole.png" alt="..." />
                                    </a>
                                    <div class="portfolio-caption">
                                        <div class="portfolio-caption-heading">congressiste</div>
                                        <div class="portfolio-caption-subheading text-muted">en cours...</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="text-left">
                            <h2 class="section-heading text-uppercase">Projet 1ere Année</h2>
                        </div>
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/jeuDeRole.png" alt="jeux-de-role" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Jeux De Rôle</div>
                                <div class="portfolio-caption-subheading text-muted">le but de ce projet est d'en apprendre plus sur le c# et sur l'orienter objet avec la création de classe, la création de classe abstract ainsi que l'héritage. </div>
                            </div>
                        </div>


                    </div>
            </div>
    </section>
    </div>

    </div>
    </section>

    <!-- Footer-->
    <?php
    require_once("footer.php");
    ?>
    <!-- Portfolio Modals-->

    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project gestion seminaire</h2>
                                <p class="item-intro text-muted">El hamouli Wassim </p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/jeuDeRole.png" alt="..." />
                                <!<p>Le Centre de Conférence de Poitiers accueille divers événements, et sa proximité avec le Futuroscope offre un cadre de détente pour les participants. Un séminaire sur les enjeux urbains est prévu pour le 12 octobre 2222, réservé aux représentants des municipalités de plusieurs départements. Cette journée comprendra plusieurs conférences, dont certaines se dérouleront simultanément. Les informations seront stockées dans des fichiers JSON, ce qui élimine la nécessité d'une base de données. Le site Web, développé en PHP, exploitera des formulaires et permettra l'accès aux données via des fonctions, dont les spécifications seront présentées en HTML.
                                
                                    


                                </p>
                                <ul class="list-inline">
                                    <li>

                                        <strong>Client:</strong>
                                        classe
                                    </li>
                                    
                                        
                                    </li>
                                </ul>
                                <a href="assets/lien/doc_Hardware_Unit.pdf" download="NassimBarkallah_ProjetRole.pdf">
                                    <button class="btn btn-primary btn-xl text-uppercase" type="button">
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                        Documentation
                                    </button>
                                </a>
                                <br> <br>
                                <a href="assets/lien/BARKALLAH_Nassim Hardware_Unit E5.pdf" download="BARKALLAH-Nassim-Hardware-Unit-Realisation-professionel-E5-1.pdf">
                                    <button class="btn btn-primary btn-xl text-uppercase" type="button">
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                        Téléchargez la FICHE ANNEXE 7-1-A
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 2 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Jeux De Rôle</h2>
                                <img class="img-fluid d-block mx-auto" src="assets/img/jeuDeRole.png" alt="..." />
                                <p>Le but de ce projet est d'en apprendre plus sur le c# et sur l'orienter objet avec la création de classe, la création de classe abstract ainsi que l'héritage. </p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Categorie:</strong>
                                        Apprentisage personnel
                                    </li>
                                </ul>
                                <a href="assets/lien/El_hamouli_Wassim_Créer un jeu de rôle.pdf2">
                                    <button class="btn btn-primary btn-xl text-uppercase" type="button">
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                        Documentation
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 3 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">gestion des congressistes</h2>
                                <p class="item-intro text-muted">El hamouli Wassim/axel fort/kilian</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/salleDeMarché.png" alt="..." />
                                <p>Création de formulaire pour organisme payeurs</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        organisme
                                    </li>
                                    <li>
                                        <strong>Categorie:</strong>
                                        gestion
                                    </li>
                                </ul>
                                <!--<a href="assets/lien/" download="-Air-Tany-">
                                    <button class="btn btn-primary btn-xl text-uppercase" type="button">
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                        Téléchargez la FICHE ANNEXE 7-1-A
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 4 modal popup-->
    <!--<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <!--<h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/4.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet,
                                    consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos
                                    deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores
                                    repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Lines
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Branding
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 5 modal popup-->
    <!--<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                               <!-- <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet,
                                    consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos
                                    deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores
                                    repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Southwest
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Website Design
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 6 modal popup-->
    <!--<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                               <!-- <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet,
                                    consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos
                                    deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores
                                    repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Window
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Photography
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script type="text/javascript" src="js/title.js"></script>
    <script type="text/javascript" src="mail/contact_me.js"></script>
    <script type="text/javascript" src="mail/jqBootstrapValidation.js"></script>
</body>
<script type="text/javascript" src="js/photo-move.js"></script>

</html>