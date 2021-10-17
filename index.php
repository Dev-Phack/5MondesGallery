<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="icon" href="img/logop.png"> -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="styles.css">
    <title>5-MONDES-GALLERY</title>
</head>

<body>
    <?php require_once 'navbar.php'; ?>

    <h2 class="text-center head-title">5 MONDES GALLERY</h2>
    <h2 class="mt-3 text-center head-subtitle">Révélateur de Talents émergents</h2>

    <div class="under-slide mt-5">
        <!-- <img src="img/under-slide.png" alt="" class="img-fluid"> -->
        <!-- <div class="slide-me">

        </div> -->

        <div id="carouselExampleControls" class="carousel slide" style="height: 300px;" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <h2 class="nom-expo text-center mt-5">Nom de l'exposition en cours ou de la dernière expo effectuée</h2>
                    <h3 class="date-expo text-center">Date de l'exposition</h3>
                    <h3 class="artiste text-center">Artiste(s) exposants</h3>
                    <div class="text-center mt-5">
                        <a href="" class="btn-decouv text-center">Découvrir l'exposition</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <h2 class="nom-expo text-center mt-5">Nom de l'exposition en cours ou de la dernière expo effectuée</h2>
                    <h3 class="date-expo text-center">Date de l'exposition</h3>
                    <h3 class="artiste text-center">Artiste(s) exposants</h3>
                    <div class="text-center mt-5">
                        <a href="" class="btn-decouv text-center">Découvrir l'exposition</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <h2 class="nom-expo text-center mt-5">Nom de l'exposition en cours ou de la dernière expo effectuée</h2>
                    <h3 class="date-expo text-center">Date de l'exposition</h3>
                    <h3 class="artiste text-center">Artiste(s) exposants</h3>
                    <div class="text-center mt-5">
                        <a href="" class="btn-decouv text-center">Découvrir l'exposition</a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev btn-slide-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next btn-slide-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>

    <section class="actualites">
        <h2 class="actu text-center mt-11">L'actualité de nos artistes</h2>

        <div class="container">
            <div class="row mt-11">
                <div class="col-5">
                    <img src="img/actu.png" class="img-fluid" alt="">
                </div>
                <div class="col-7 my-auto">
                    <h3 class="actu-title ms-5">Titre de l'actualité</h3>
                    <p class="mt-3 actu-text ms-5">
                        Scelerisque, felis eget Auctor dictum tempus molestie auctor consectetuer sit nisl, tempor, ultrices velit nascetur ullamcorper torquent adipiscing felis interdum. Vel nibh. Eget maecenas gravida urna nascetur sit. Taciti at suspendisse rutrum.
                        aDonec quis tortor tempus, lacinia sem nec, accumsan diam. Ut condimentum eget risus at ultrices. Integer molestie augue eros, ac dignissim velit placerat ut. Sed vel leo ac eros tinci
                    </p>
                    <a href="" class="d-inline-block mt-4 btn-savoirplus ms-5">En savoir plus</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-11">
                <div class="col-7 my-auto">
                    <h3 class="actu-title ">Titre de l'actualité</h3>
                    <p class="mt-3 actu-text">
                        Scelerisque, felis eget Auctor dictum tempus molestie auctor consectetuer sit nisl, tempor, ultrices velit nascetur ullamcorper torquent adipiscing felis interdum. Vel nibh. Eget maecenas gravida urna nascetur sit. Taciti at suspendisse rutrum.
                        aDonec quis tortor tempus, lacinia sem nec, accumsan diam. Ut condimentum eget risus at ultrices. Integer molestie augue eros, ac dignissim velit placerat ut. Sed vel leo ac eros tinci
                    </p>
                    <a href="" class="d-inline-block mt-4 btn-savoirplus">En savoir plus</a>
                </div>
                <div class="col-5">
                    <img src="img/actu.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-11">
                <div class="col-5">
                    <img src="img/actu.png" class="img-fluid" alt="">
                </div>
                <div class="col-7 my-auto">
                    <h3 class="actu-title ms-5">Titre de l'actualité</h3>
                    <p class="mt-3 actu-text ms-5">
                        Scelerisque, felis eget Auctor dictum tempus molestie auctor consectetuer sit nisl, tempor, ultrices velit nascetur ullamcorper torquent adipiscing felis interdum. Vel nibh. Eget maecenas gravida urna nascetur sit. Taciti at suspendisse rutrum.
                        aDonec quis tortor tempus, lacinia sem nec, accumsan diam. Ut condimentum eget risus at ultrices. Integer molestie augue eros, ac dignissim velit placerat ut. Sed vel leo ac eros tinci
                    </p>
                    <a href="" class="d-inline-block mt-4 btn-savoirplus ms-5">En savoir plus</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-11">
                <div class="col-7 my-auto">
                    <h3 class="actu-title ">Titre de l'actualité</h3>
                    <p class="mt-3 actu-text">
                        Scelerisque, felis eget Auctor dictum tempus molestie auctor consectetuer sit nisl, tempor, ultrices velit nascetur ullamcorper torquent adipiscing felis interdum. Vel nibh. Eget maecenas gravida urna nascetur sit. Taciti at suspendisse rutrum.
                        aDonec quis tortor tempus, lacinia sem nec, accumsan diam. Ut condimentum eget risus at ultrices. Integer molestie augue eros, ac dignissim velit placerat ut. Sed vel leo ac eros tinci
                    </p>
                    <a href="" class="d-inline-block mt-4 btn-savoirplus">En savoir plus</a>
                </div>
                <div class="col-5">
                    <img src="img/actu.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

        <div class="text-center mt-9">
            <a href="" class="btn-voirplus text-center">Voir plus</a>
        </div>

    </section>

    <div class="container-fluid">
        <div class="row mt-9" style="height: 700px;">
            <div class="col-6 photo-galerie">
                <div class="ombre">Photo de la galerie</div>
            </div>
            <div class="col-6 photo-galerie-right">
                <div class="container" style="max-width: 600px;">
                    <h2 class="pgr-title mt-11">La galerie 5mondes</h2>
                    <p class="mt-5 actu-text" style="color: #fff;">Scelerisque, felis eget Auctor dictum tempus molestie auctor consectetuer sit nisl, tempor, ultrices velit nascetur ullamcorper torquent adipiscing felis interdum. Vel nibh. Eget maecenas gravida urna nascetur sit. Taciti at suspendisse rutrum.
                        aDonec quis tortor tempus, lacinia sem nec, accumsan diam. Ut condimentum eget risus at ultrices. Integer molestie augue eros, ac dignissim velit placerat ut. Sed vel leo ac eros tinci
                    </p>
                    <div class="mt-7 infos">
                        <div class="contact">
                            <h3 class="info-title mb-3">Contact</h3>
                            <div>Floréal Duran</div>
                            <div>Directeur artistique</div>
                            <div>+33 621151515151</div>
                            <div style="color: #E30613;">Email</div>
                        </div>
                        <div class="adresse">
                            <h3 class="info-title mb-3">Adresse</h3>
                            <div>Bamako,Mali</div>
                            <div>QT Nassiki</div>
                            <div>Rue N°322333</div>
                        </div>
                        <div class="horaires">
                            <h3 class="info-title mb-3">Horaires</h3>
                            <div>Mardi - Vendredi</div>
                            <div>10h00-18h30</div>
                            <div>Fermé en weekend</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="container mt-9">
        <div class="row">
            <div class="col-6">
                <h3 class="labo5-title">Le <span class="labo5-write">Labo 5</span> - Laboratoire d'art</h3>
                <p class="mt-5 labo5-text">
                    Le «LABO 5» est le laboratoire d’art et de recherche de 5 MONDES GALLERY. Il regroupe les artistes de la galerie qui expérimentent d’autres formes d’expression à travers les nouvelles technologie, le numérique, la vidéo ou l’utilisation de matériaux inhabituels, etc. Il est placé sous la direction de Frigg Toss.
                    <br>
                    Les artistes actuels du LABO 5 sont :
                    <br>
                    Frigg Toss
                    <br>
                    Joycenath Tshamala
                    <br>
                    Harding
                </p>

                <div class="mt-7 labo5-savoirplus">En savoir plus sur :</div>

                <div class="mt-3">
                    <a href="" class="labo5-fb">
                        <img src="img/Groupe 35.png" alt="" style="height: 32px;" class="img-fluid">
                    </a>
                    <a href="" class="labo5-insta">
                        <img src="img/Groupe 38.png" alt="" style="height: 32px;" class="img-fluid">
                    </a>
                </div>

            </div>
            <div class="col-6 labo5">
                <img src="img/labo5.png" alt="" class="ms-9 img-fluid">
            </div>
        </div>
    </div>







    <?php require_once 'footer.php'; ?>
</body>

</html>