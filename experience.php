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
    <link rel="icon" type="image/x-icon" href="assets//img/we.jpg" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/experience.css" rel="stylesheet" />


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
            <div class="masthead-heading text-uppercase">EXPÉRIENCES</div>


        </div>
    </header>
    <!-- About-->
    <section class="page-section" id="veille">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Expériences professionnelle</h2>
                <h3 class="section-subheading text-muted">Vous pouvez retrouver l'ensemble de mes expériences durant mes études</h3>
            </div>
            <ul class="timeline">
                <!--<li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." />
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2009-2011</h4>
                                <h4 class="subheading">Our Humble Beginnings</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt
                                    ut
                                    voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae
                                    sit vero
                                    unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." />
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>March 2011</h4>
                                <h4 class="subheading">An Agency is Born</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt
                                    ut
                                    voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae
                                    sit vero
                                    unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                            </div>
                        </div>
                    </li>-->
                <li class="timeline-inverted">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#experience1">
                        <div class="NinjaK timeline-image">
                        </div>
                    </a>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Depuis Janvier 2024</h4>
                            
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted"></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="NinjaK timeline-image">
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Juillet 2024 - Aout 2024</h4>
                            <h4 class="subheading">Stage de 1ere Année</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Il s'agit d'un stage de premiere annee de bts sio. j'ai pour mission d'entraîner des adulte comme des enfants a ce nouveau sport qui est le Ninja.
                                Ce sport prend de l'ampleur grâce aux réseaux sociaux, mais aussi grâce à <a href="https://twitter.com/ninjawarriortf1" target="_blank"><u><i>NINJA WARRIOR</i> </u></a>.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#experience1">
                        <div class="Leila timeline-image">
                        </div>
                    </a>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>janvier 2024 - fevrier 2024</h4>
                            <h4 class="subheading">Stage de 2eme Année</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">bientot</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="ajuste">
                        <div class="timeline-image">
                            <h4>
                                Fin
                                <br />
                                De Mes
                                <br />
                                Expériences !
                            </h4>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>


    <!-- Footer-->
    <?php
    require_once("footer.php");
    ?>
    <!-- Portfolio Modals-->
    <!-- Portfolio stage 1 popup-->
    <div class="portfolio-modal modal fade" id="experience1" tabindex="1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">ASSOCIATION LEILA</h2>
                                <p class="item-intro text-muted">L’Association gestionnaire L.E.I.L.A. (Les Enfants Inadaptés et Leurs Amis).</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/logos/leila.png" alt="..." />
                                <p>durant mon stage j'avais pour but de réaliser un site présentent l'association ainsi que ses 4 structures et leur permettre de rendre l'adhésion possible en ligne ainsi que la possibilité de faire un don.
                                    <br><br>
                                    Le mois de mai: <br><br>
                                    - réalisation de cahier des charges
                                    <br>
                                    - participation à 3 réunions pour la mise en place des different pages du site internet
                                    <br>
                                    - et l'apprentissage du Framework Symfony ainsi que Bootstrap
                                    <br><br>
                                    Le mois de juin + mi-juillet: <br><br>
                                    - Mise en place de la partie authentification
                                    - tableau administrateur
                                    - l'envoie de formulaire d'adhésion


                                </p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        ASSOCIATION LEILA
                                    </li>
                                    <li>
                                        <strong>Tuteur:</strong>
                                        M.Ouazri Boubakere
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                <h2 class="text-uppercase">Project Hardware Unit</h2>
                                <p class="item-intro text-muted">Nassim Barkallah / Victor Jouin / Thomas Pereira de Barros</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.png" alt="..." />
                                <p>Pour le compte de notre client (Hardware Unit nous avons du metre en place un site vitrine, lui permettent de presenter
                                    sa ou ses différentes marchandises au grand public.
                                    <br><br>
                                    les contraintes : <br><br>
                                    - L’objectif de ce CMS est de déployer rapidement des sites de ventes de produit particuliers
                                    <br>- Les usagers doivent s’identifier par un couple login/mot de passe pour bénéficier des fonctionnalités d’achat
                                    et de
                                    vente. Un utilisateur non connecté ne peut que parcourir la liste des articles disponible
                                    <br>- Les articles proposés à la vente sont stockés dans une base de données. Les usagers authentifiés peuvent
                                    ajouter de
                                    nouveaux articles à cette base de donné.
                                    <br>- A chaque article correspond une fiche contenant les informations détaillées de celui-ci.
                                    <br>- Lorsqu’un article est ajouté à la base de donné, il est possible de le mettre vente. Mais cette mise en vente
                                    doit
                                    être validée par un administrateur
                                    <br>- Un usager acheteur doit voir la liste des vendeurs pour un article et les prix demandés par chacun
                                    <br>- Une fonction de recherche doit permette aux usagers de localiser un article par son nom ou par des tags
                                    associés.
                                    <br>- Un système de back-office doit permettre aux sociétés clientes la gestion des comptes utilisateurs, des
                                    articles
                                    présents en base de données et de catégories d’articles.
                                    <br>- Un système de panier doit permettre aux usagers d’acheter plusieurs articles simultanément
                                    <br>- Un système de contact doit permettre l’envoi de mails de la part des usagers aux administrateurs du site.


                                </p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Hardware Unit
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        e-commerce
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Fermer
                                </button>
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
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2.jpg" alt="..." />
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
                                        Explore
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Graphic Design
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
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3.jpg" alt="..." />
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
                                        Finish
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Identity
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
    <!-- Portfolio item 4 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
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
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
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
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
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