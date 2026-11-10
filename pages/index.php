<?php
$title = "page d'acceuil";
require_once 'header.php';

?>
<div class="col-lg-12">
    <div class="fond_img">
        <div class="explore">
            <div class="p1">
                <p>Explorez, Comparez</p>
            </div>
            <div class="p1 top">
                <p>Et choisissez</p>
            </div>
            <p class="yours">votre guide pour comprendre et comparez les programmes <br>
                electoraux afin de voter en toute confiance.
            </p>
        </div>
    </div>
</div>
<div class="compte">
    <div class="fond_blanc">
        <div class="representant">
            <span class="back_black">
                <h5>découvrez vos futurs réprésentants</h5>
            </span>
            <h4>apprenez-en plus sur leurs parcours, leurs engagements et leurs vision pour l'avenir.</h4>
        </div>
        <div class="candidats">
            <div class="contenu_slide">
                <a href="candidats.php" class="candidat">
                    <img src="../Images/persoday.jpg" alt="omalio">
                    <div class="texte-overlay">
                        <p class="fred">Fred Omalio</p>
                        <p>34 Ans - Partie Omalio</p>
                    </div>
                </a>
                <a href="candidats.php" class="candidat">
                    <img src="../Images/smilingbusinessman.jpg" alt="omalio">
                    <div class="texte-overlay">
                        <p class="fred">Carl Johnson</p>
                        <p>45 Ans - Président du Partie Libéral</p>
                    </div>
                </a>
                <a href="candidats.php" class="candidat">
                    <img src="../Images/portraittablet.jpg" alt="omalio">
                    <div class="texte-overlay">
                        <p class="fred">Samira Zeboue</p>
                        <p>37 Ans - Député d'Azikpo</p>
                    </div>
                </a>
                <a href="candidats.php" class="candidat">
                    <img src="../Images/portrait-businessman-using-laptop-working-website-browser-application.jpg"
                        alt="omalio">
                    <div class="texte-overlay">
                        <p class="fred">Issa Konan Kouadio</p>
                        <p>40 Ans - Maire de Dôhi</p>
                    </div>
                </a>
                <a href="candidats.php" class="candidat">
                    <img src="../Images/black-smiling.jpg" alt="omalio">
                    <div class="texte-overlay">
                        <p class="fred">Rachelle Winona</p>
                        <p>29 Ans - Présidente du Parti Passif</p>
                    </div>
                </a>
                <a href="candidats.php" class="candidat">
                    <img src="../Images/mediumposing.jpg" alt="omalio">
                    <div class="texte-overlay">
                        <p class="fred">Nico Bellic</p>
                        <p>30 Ans - Procureur de Lonarioo</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="comparons">
        <div class="representant">
            <span class="back_black">
                <h5>Comparez les programmes électorales</h5>
            </span>
        </div>
        <div class="row col-lg-12 electoral">
            <div class="row col-lg-7 parti">
                <div class="col-lg-6 partiA">
                    <div class="head">
                        <div class="prez">
                            <img src="../Images/smiling-elegant-businessman.jpg" alt="boss">
                        </div>
                        <div class="namer">
                            <p class="fred">Carl Johnson</p>
                            <p>45 Ans - Président du Partie Libéral</p>
                        </div>
                    </div>
                    <div class="corps">
                        <p>
                            <i class="fa-solid fa-circle"></i>combattre l'élevage et l'abattage dont
                            les abus sont la conséquence de l'économie capitaliste.
                        </p>
                        <p>
                            <i class="fa-solid fa-circle"></i>Interdiction de la chasse à courre.
                        </p>
                        <p>
                            <i class="fa-solid fa-circle"></i>Généraliser l'étiquetage sur l'origine et la
                            quantité des produits alimentaires.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 partiA">
                    <div class="head">
                        <div class="prez">
                            <img src="../Images/black-businesswoman-smiling.jpg" alt="fashion">
                        </div>
                        <div class="namer">
                            <p class="fred">Rachelle Winona</p>
                            <p>29 Ans - Présidente du Parti Passif</p>
                        </div>
                    </div>
                    <div class="corps1">
                        <p>
                            <i class="fa-solid fa-circle"></i>développer des circuits courts: aides aux filières
                            autogérées et coopératives.
                        </p>
                        <p>
                            <i class="fa-solid fa-circle"></i>Interdiction des intrants chimiques.
                        </p>
                        <p>
                            <i class="fa-solid fa-circle"></i>en finir avec l'élevage industriel maltraitant
                            pour les animaux et les salariés.
                        </p>
                        <p>
                            <i class="fa-solid fa-circle"></i>moratoire sur les dettes des agricultrices.
                        </p>
                        <p>
                            <i class="fa-solid fa-circle"></i>fonds publics d'acquisition de foncier pour
                            l'installation en coopérative de jeunes agricultrices.
                        </p>
                        <p>
                            <i class="fa-solid fa-circle"></i>taxer les importations ne respectant pas les normes.
                        </p>
                        <p>
                            <i class="fa-solid fa-circle"></i>accroître les surfaces agricoles biologiques.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="simplet">
                    <h1>Comparez de façon simple et éfficace</h1>
                    <p>
                        La comparaison des programmes électoraux vous permet de mieux comprendre les
                        propositions des différents partis et candiats. Grâce à cet outil vous pouvez
                        explorez les principales thématiques telles que l'économie, l'environnement, la santé et
                        bien d'autre, pour voir comment chaque programme répond à vos préoccupations.
                        En confrontant les idées et les solutions proposées, vous pourrez faire un choix plus
                        éclairé et aligné vos valeurs et priorités.
                    </p>
                    <a href="comparer.php" class="btn btn-dark px-4">comparez</a>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
require_once 'footer.php';
?>