<?php
include("_config.php")

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV -Fluchon Sébastien</title>
    <link rel="stylesheet" href="<?=CSS?>bootstrap.min.css">
    <link rel="stylesheet" href="<?=FONTAWESOME?>all.css">
    <link rel="stylesheet" href="<?=CSS?>styles.css">
    <link rel="stylesheet" href="<?=CSS?>styleCV.css">

</head>
<body>
    <?php include('include/nav.php') ?>

    <main>
        <div id="block_btn">
            <button  id="download-pdf" onclick="window.print()">Impression</button>
        </div>
        <div id="cv">
            <aside>
                <div id="entete" class="block_aside">
                    <p>stage immersions <br> developpeur web</p>
                    <h1>Sebastien Fluchon</h1>
                </div>
                <div id="info" class="block_aside">
                    <p>
                        <i class="fa-solid fa-envelope"></i> basse39100@gmail.com <br>
                        <i class="fa-solid fa-house"></i> 3 rue des Tilleuls <br>
                        <i class="fa-regular fa-calendar-days"></i> Né le 26/08/1976 <br>
                        <i class="fa-solid fa-address-card"></i>Permis B <br>
                        <i class="fa-solid fa-car"></i>Véhicule personnel <br>
                        <i class="fa-solid fa-location-dot"></i>Champdivers <br>
                        <span>Chalon</span>  <br>
                        <span>Besançon</span> <br>
                        <span>Dijon </span> <br>
                        <span>Dole </span> <br>
                        <i class="fa-solid fa-phone"></i> 06 42 33 64 22 <br>
                        <i class="fa-solid fa-users"></i> Célibataire
                    </p>
                </div>
                <div id="interet" class="block_aside">
                    <h2>Centres d'intérêt</h2>
                    <p><strong>Sport</strong> <br>
                        Corde à sauter, rameur <br>
                        <strong>Informatique</strong>
                    </p>
                </div>

                <div id="atout" class="block_aside">
                    <h2>Atouts</h2>
                    <p>
                        Réactif <br>
                        Capacité d'adaptation <br>
                        Ponctuel  <br>
                        Persévérant <br>
                        Rigoureux
                    </p>
                </div>
                <div id="informatique" class="block_aside">
                    <h2>Informatique</h2>
                    <p>
                        word <br>
                        excel <br>
                    </p>
                </div>

            </aside>
            <section>
                <div id="description" class="block_section">
                    <p>Dans le cadre de mon projet de réinsertion professionnelle
                        et afin de valider ma formation Développeur web, je suis à la recherche d'un stage
                        d'une semaine au sein d'une entreprise. Motivé(e) et désireux(se) d'apprendre, je souhaite
                        mettre mes compétences au service de votre équipe.</p>
                </div>
                <div id="competences" class="block_section">
                    <h2>Compétences</h2>
                    <p>
                        Communiquer avec des bases de données <br>
                        Faire des sites internet en utilisant les languages HTML et css <br>
                        Rendre les sites dynamique en utilisant les languages php et javascript
                    </p>

                </div>
                <div id="experience" class="block_section">
                    <h2>Expériences Professionnelles</h2>
                    <div id="experience1">
                        <p>
                            Milee Dole <br>
                            <strong>Distributeur de prospectus, journaux et courrier</strong> <br>
                            De mai 2015 à août 2024
                        </p>
                        <ul>
                            <li>Tri et organisation du courrier pour une distribution efficace</li>
                            <li>Respect des délais de livraison pour assurer la satisfaction des clients</li>
                            <li>Utilisation d'une application mobile pour suivre les itinéraires de distribution</li>
                        </ul>
                    </div>
                    
                    <div id="experience2">
                        <p>
                            Centre hospitalier de Dole <br>
                            <strong>Surveillance et entretien des parkings</strong> <br>
                            De janvier 2002 à janvier 2003
                            <ul>
                            <li>Surveillance des parkings pour assurer la sécurité des véhicules et des usagers</li>
                            <li>Entretien régulier des équipements et des espaces pour garantir un bon fonctionnement</li>
                            <li>Gestion des flux de véhicules pour optimiser l'occupation des places disponibles</li>
                        </ul>
                        </p>
                    </div>
                    
                    
                </div>
                <div id="langues" class="block_section">
                    <h2>Langues</h2>
                    <p>Anglais</p>
                </div>
                <div id="diplomes" class="block_section">
                    <h2>Diplomes et formations</h2>
                    <div id="formation">
                        <p>
                            Greta Lons le saunier <br>
                            De janvier 2000 à juin 2000 <br>
                            <strong>Formation en maintenance des bâtiments</strong>
                        </p>

                    </div>
                    <div id="diplome">
                        <p>
                            Lycée pasteur Dole <br>
                            De septembre 1995 à juin 1997 <br>
                            <strong>BEP électrotechnique</strong>
                        </p>

                    </div>

                </div>
            </section>

        </div>

    </main>
    <?php include('include/footer.php') ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>