<?php
$title = "Initiative Citoyenne | Comprendre pour choisir";
require_once 'header.php';
?>

<main class="home-page">
    <section class="home-hero">
        <div class="home-hero__inner">
            <p class="home-eyebrow"><span></span> La démocratie commence par l'information</p>
            <h1>Votre vote mérite<br><em>des choix éclairés.</em></h1>
            <p class="home-hero__text">
                Découvrez les candidats, comprenez leurs idées et comparez leurs programmes.
                Prenez le temps de choisir ce qui compte vraiment pour vous.
            </p>
            <div class="home-hero__actions">
                <a href="candidats.php" class="home-button home-button--primary">
                    Découvrir les candidats <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                </a>
                <a href="comparer.php" class="home-button home-button--light">
                    Comparer les programmes
                </a>
            </div>
            <div class="home-hero__note">
                <div class="home-hero__avatars" aria-hidden="true">
                    <img src="../Images/persoday.jpg" alt="">
                    <img src="../Images/black-businesswoman-smiling.jpg" alt="">
                    <img src="../Images/smilingbusinessman.jpg" alt="">
                </div>
                <p><strong>Une décision vous appartient.</strong><br>Les informations, elles, doivent être accessibles à tous.</p>
            </div>
        </div>
        <a class="home-scroll" href="#candidats">
            <span>Explorer la plateforme</span><i class="fa-solid fa-arrow-down" aria-hidden="true"></i>
        </a>
    </section>

    <section class="home-intro" aria-label="Notre mission">
        <div class="home-intro__item">
            <span class="home-intro__icon"><i class="fa-regular fa-compass" aria-hidden="true"></i></span>
            <div>
                <h2>Comprendre</h2>
                <p>Des repères clairs pour mieux saisir les enjeux.</p>
            </div>
        </div>
        <div class="home-intro__item">
            <span class="home-intro__icon"><i class="fa-solid fa-scale-balanced" aria-hidden="true"></i></span>
            <div>
                <h2>Comparer</h2>
                <p>Les propositions réunies pour voir les différences.</p>
            </div>
        </div>
        <div class="home-intro__item">
            <span class="home-intro__icon"><i class="fa-regular fa-lightbulb" aria-hidden="true"></i></span>
            <div>
                <h2>Choisir</h2>
                <p>Un vote réfléchi, en accord avec vos priorités.</p>
            </div>
        </div>
    </section>

    <section class="home-candidates" id="candidats">
        <div class="home-section-heading">
            <div>
                <p class="home-kicker">Les personnes derrière les idées</p>
                <h2>Découvrez vos représentants</h2>
                <p class="home-section-copy">Leurs parcours, leurs engagements et leur vision pour l’avenir.</p>
            </div>
            <a href="candidats.php" class="home-text-link">Tous les candidats <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
        </div>
        <div class="home-candidate-list">
            <a href="candidats.php" class="home-candidate-card">
                <img src="../Images/persoday.jpg" alt="Portrait de Fred Omalio">
                <span class="home-candidate-card__label">Candidat</span>
                <div class="home-candidate-card__caption">
                    <h3>Fred Omalio</h3>
                    <p>Parti Omalio · 34 ans</p>
                </div>
                <span class="home-candidate-card__arrow"><i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></span>
            </a>
            <a href="candidats.php" class="home-candidate-card">
                <img src="../Images/smilingbusinessman.jpg" alt="Portrait de Carl Johnson">
                <span class="home-candidate-card__label">Candidat</span>
                <div class="home-candidate-card__caption">
                    <h3>Carl Johnson</h3>
                    <p>Parti libéral · 45 ans</p>
                </div>
                <span class="home-candidate-card__arrow"><i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></span>
            </a>
            <a href="candidats.php" class="home-candidate-card">
                <img src="../Images/portraittablet.jpg" alt="Portrait de Samira Zeboue">
                <span class="home-candidate-card__label">Candidate</span>
                <div class="home-candidate-card__caption">
                    <h3>Samira Zeboue</h3>
                    <p>Députée d’Azikpo · 37 ans</p>
                </div>
                <span class="home-candidate-card__arrow"><i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></span>
            </a>
            <a href="candidats.php" class="home-candidate-card">
                <img src="../Images/black-businesswoman-smiling.jpg" alt="Portrait de Rachelle Winona">
                <span class="home-candidate-card__label">Candidate</span>
                <div class="home-candidate-card__caption">
                    <h3>Rachelle Winona</h3>
                    <p>Parti Passif · 29 ans</p>
                </div>
                <span class="home-candidate-card__arrow"><i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></span>
            </a>
        </div>
    </section>

    <section class="home-compare">
        <div class="home-compare__copy">
            <p class="home-kicker">Vos priorités, leur vision</p>
            <h2>Les idées méritent<br>mieux qu’un slogan.</h2>
            <p>Économie, environnement, santé… Parcourez les propositions des candidats côte à côte et voyez concrètement ce qui les distingue.</p>
            <a href="comparer.php" class="home-button home-button--primary">
                Comparer les programmes <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
            </a>
            <div class="home-compare__topics">
                <span><i class="fa-solid fa-leaf" aria-hidden="true"></i> Environnement</span>
                <span><i class="fa-solid fa-heart-pulse" aria-hidden="true"></i> Santé</span>
                <span><i class="fa-solid fa-chart-line" aria-hidden="true"></i> Économie</span>
            </div>
        </div>
        <div class="home-compare__visual" aria-label="Exemple de comparaison de propositions">
            <div class="home-compare__topline"><span>EN UN COUP D’ŒIL</span><i class="fa-solid fa-sliders" aria-hidden="true"></i></div>
            <div class="home-compare__people">
                <div><img src="../Images/smilingbusinessman.jpg" alt=""><span>Carl Johnson</span></div>
                <span class="home-compare__versus">VS</span>
                <div><img src="../Images/black-businesswoman-smiling.jpg" alt=""><span>Rachelle Winona</span></div>
            </div>
            <div class="home-compare__topic"><i class="fa-solid fa-seedling" aria-hidden="true"></i><span>Transition agricole</span></div>
            <div class="home-compare__proposal home-compare__proposal--blue">
                <span class="home-compare__dot"></span>
                <p>Accompagner les filières et faire évoluer les pratiques.</p>
            </div>
            <div class="home-compare__proposal home-compare__proposal--green">
                <span class="home-compare__dot"></span>
                <p>Développer les circuits courts et l’agriculture biologique.</p>
            </div>
            <p class="home-compare__footnote"><i class="fa-regular fa-circle-check" aria-hidden="true"></i> Les propositions côte à côte, sans détour.</p>
        </div>
    </section>

    <section class="home-final-cta">
        <div>
            <p class="home-kicker">Votre voix compte</p>
            <h2>Informez-vous. Faites votre choix.</h2>
            <p>Faites de votre curiosité le premier pas vers un vote qui vous ressemble.</p>
        </div>
        <a href="resultat.php" class="home-button home-button--dark">Voir les résultats <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
    </section>
</main>

<?php require_once 'footer.php'; ?>