<?php
$title = "gagnant";
require_once("header.php");
?>
<div class="contenus">
    <div class="result">
        <div class="elect">
            <h3>Résultats des élections 2023 - 2024</h3>
        </div>
        <div class="tours">
            <a href="resultat.php">1er Tour</a>
            <a href="gagnant.php" class="active">2ème Tour</a>
        </div>
        <!-- <div class="progress">
            <div class="flexions">
                <div class="progress-container">
                    <div class="progress-bar">
                        <span class="progress-text">SITE EN COURS DE DEVELOPPEMENT</span>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <div class="col_blue">
        <div class="row-lg-12 final">
            <div class=" col-lg-2 finalist_1">
                <div class="contenu_img">
                    <img src="../Images/inessman.jpg" alt="boss">


                </div>
                <div class="stair">
                    <p>Gagnant</p>
                </div>
            </div>
            <div class=" col-lg-8 items_progress">

                <div class="progressions">
                    <div class="cand">
                        <div class="cand_ga">
                            <h5>Carl <span class="bold">Djohnson</span></h5>
                            <p>partie libéral</p>
                        </div>
                        <div class="cand_ga">
                            <h5>Samira <span class="bold">Zeboue</span></h5>
                            <p>Député d'Azikpo</p>
                        </div>

                    </div>
                    <div class="percentages" id="percentages">0%</div>

                    <div class="move-bare">
                        <div class="move" id="move"></div>
                        <div class="dividers"></div>
                    </div>
                    <div class="elu">
                        <div class="per_voice">
                            <p class="bolded">62.63%</p>
                            <p>part des voix</p>
                        </div>
                        <div class="per_voice ">
                            <p class="bolded">2.121.797</p>
                            <p>Nombre de voix</p>
                        </div>
                        <div class="per_voice ">
                            <p class="bolded" >72.12%</p>
                            <p>Taux de participation</p>
                        </div>
                        <div class="per_voice ">
                            <p class="bolded">1.632.118</p>
                            <p>Nombre de voix</p>
                        </div>
                        <div class="per_voice ">
                            <p class="bolded">21.57%</p>
                            <p>Par des voix</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="finalist_2 col-lg-2">
                <div class="contenu_img">
                    <img src="../Images/blet.jpg" alt="belle">
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once("footer.php");
?>